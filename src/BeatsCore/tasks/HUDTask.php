<?php

declare(strict_types=1);

namespace BeatsCore\tasks;

use BeatsCore\Core;
use onebone\economyapi\EconomyAPI;
use pocketmine\scheduler\Task;
use BeatsCore\EventListener;

class HUDTask extends Task{

    /** @var Core */
    private $plugin;

    public function __construct(Core $plugin){
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick) : void{
        foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
			if(isset($this->plugin->hud[$player->getName()])){
				$faction = $this->plugin->getServer()->getPluginManager()->getPlugin("FactionsPro")->getPlayerFaction($player->getName());
				$money = EconomyAPI::getInstance()->myMoney($player);
				$factionsPro = $this->plugin->getServer()->getPluginManager()->getPlugin("FactionsPro");
				$isInFaction = $factionsPro->isInFaction();
				$x = round($player->getX());
				$y = round($player->getY());
				$z = round($player->getZ());
				$tps = $player->getServer()->getTicksPerSecond();
				$load = $player->getServer()->getTickUsage();
				$msg = "§6§lZector§bPE §cClassic §dOP Factions§r\n§b§lIGN: §c" . $player->getName() . "\n§b§lFaction: §c§l" . $isInFaction ? $faction : "No Faction" . "\n§b§lMoney: §c" . $money . " \n§b§lTPS: §c" . $tps . "\n§b§lLoad: §c" . $load . "\n§b§lCoordinates: §c" . $x . "§6/" . $y . "§6/" . $z;
				$player->sendPopup($msg);
				$event = new EventListener($this->plugin);
				$event->reloadNameTag($player);
			}
		}
    }
}
