<?php

declare(strict_types=1);

namespace BeatsCore;

use BeatsCore\commands\HUDCommand;
use BeatsCore\Core;
use BeatsCore\Stacker\StackFactory;
use BeatsCore\tasks\{
    ChatCooldownTask, TitleTask
};
use BeatsCore\tasks\HUDTask;
use pocketmine\utils\TextFormat;
use pocketmine\entity\Living;
use pocketmine\event\Listener;
use pocketmine\event\entity\{
    EntityDamageByEntityEvent, EntityDamageEvent, EntityMotionEvent, EntitySpawnEvent
};
use pocketmine\event\player\{
	PlayerChatEvent, PlayerDeathEvent, PlayerInteractEvent, PlayerItemHeldEvent, PlayerJoinEvent, PlayerQuitEvent, PlayerRespawnEvent
};
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\item\Item;
use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;
use pocketmine\network\mcpe\protocol\ServerSettingsRequestPacket;
use pocketmine\network\mcpe\protocol\ServerSettingsResponsePacket;
use pocketmine\Player;
use pocketmine\Server;

class EventListener implements Listener{

    /** @var Core */
    private $plugin;

    public function __construct(Core $plugin){
        $this->plugin = $plugin;
    }

    public function onChat(PlayerChatEvent $event) : void{
        $player = $event->getPlayer();
        if(!$player->isOp()){
			if(isset($this->plugin->chat[strtolower($player->getName())])){
				if((time() - $this->plugin->chat[strtolower($player->getName())]) < 5){
					$event->setCancelled();
					$player->sendMessage("§l§dBeats§bChat §8»§r §cPlease wait before chatting again!");
				} else {
					$this->plugin->chat[strtolower($player->getName())] = time();
				}
			}else{
				$this->plugin->chat[strtolower($player->getName())] = time();
			}
		}
    }

    public function onInteract(PlayerInteractEvent $event) : void{
        $player = $event->getPlayer();
        $item = $event->getItem();
        switch($item->getId()){
            case Item::BOOK:
                if($item->getDamage() == 1){
                    $form = $this->plugin->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function (Player $player, array $data){});

                    $form->setTitle("§l§dBeats§bPE §aChangelog§r");
                    $form->addLabel(file_get_contents($this->plugin->getDataFolder() . "changelog.txt"));
                    $form->sendToPlayer($player);
                    $player->getInventory()->removeItem($item);
                }
                break;
			case Item::ENCHANTED_BOOK:
				if($item->getDamage() == 101){
					$item = Item::get(Item::SKULL, mt_rand(3, 10), 1);
					$item->setCustomName(Core::MASK_DAMAGE_TO_NAME[$item->getDamage()]);
					$item->setLore(Core::MASK_DAMAGE_TO_LORE[$item->getDamage()]);
					$ic = clone $event->getItem();
					$ic->setCount(1);
                    $player->getInventory()->removeItem($ic);
					$player->getInventory()->addItem($item);
					$player->addTitle(TextFormat::GREEN . TextFormat::BOLD . "Obtained", TextFormat::YELLOW . Core::MASK_DAMAGE_TO_NAME[$item->getDamage()]);
				}
	}

    public function onRespawn(PlayerRespawnEvent $event) : void{
        $player = $event->getPlayer();
        self::reloadNameTag($event->getPlayer());
        $title = "§l§cYOU DIED!";
        $subtitle = "§aRespawning...";
        $player->addTitle($title, $subtitle);
    }

    public static function reloadNameTag(Player $player){
		$fp = Server::getInstance()->getPluginManager()->getPlugin("FactionsPro");
		$rank = $fname = "";
		if($fp->isInFaction($player->getName())){
			switch(true){
				case $fp->isLeader($player->getName()):
					$rank = "**";
					break;
				case $fp->isOfficer($player->getName()):
					$rank = "*";
					break;
			}
		}
		$fname = $fp->getPlayerFaction($player->getName());
		$tag = "§a" . $rank . $fname . " §8§7" . $player->getName() . "§r\n§l" . $player->getHealth() . " §cHP";
		$player->setNameTag($tag);
	}

	public function onHeld(PlayerItemHeldEvent $ev){
    	$item = $ev->getItem();
    	$player = $ev->getPlayer();
    	if($item->getId() == Item::SKULL){
    		if(isset(Core::MASK_DAMAGE_TO_NAME[$item->getDamage()])){
				$player->sendPopup(Core::MASK_DAMAGE_TO_NAME[$item->getDamage()]);
			}
		}elseif($item->getId() == Item::ENCHANTED_BOOK && $item->getDamage() == 101){
			$player->sendPopup(TextFormat::RESET . TextFormat::YELLOW . "Mask Charm");
	}
}
    }
