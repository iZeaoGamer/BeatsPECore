<?php

namespace BeatsCore\potions;

use BeatsCore\Core;

use pocketmine\entity\Effect;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;
use pocketmine\entity\EffectInstance;

class Potions implements Listener{

    public function onConsume(PlayerItemConsumeEvent $event) : void{
        $player = $event->getPlayer();
        if($event->getItem()->getId() === 373){
            $damage = $event->getItem()->getDamage();
            $nv = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION), 180 * 20, 1, false);
            $nv2 = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION), 480 * 20, 1, false);
            $invis = new EffectInstance(Effect::getEffect(Effect::INVISIBILITY), 180 * 20, 1, false);
            $invis2 = new EffectInstance(Effect::getEffect(Effect::INVISIBILITY), 480 * 20, 1, false);
            $jump = new EffectInstance(Effect::getEffect(Effect::JUMP), 180 * 20, 1, false);
            $jump2 = new EffectInstance(Effect::getEffect(Effect::JUMP), 480 * 20, 1, false);
            $jump3 = new EffectInstance(Effect::getEffect(Effect::JUMP), 80 * 20, 2, false);
            $fire = new EffectInstance(Effect::getEffect(Effect::FIRE_RESISTANCE), 180 * 20, 1, false);
            $fire2 = new EffectInstance(Effect::getEffect(Effect::FIRE_RESISTANCE), 480 * 20, 1, false);
            $speed = new EffectInstance(Effect::getEffect(Effect::SPEED), 180 * 20, 0, false);
            $speed2 = new EffectInstance(Effect::getEffect(Effect::SPEED), 480 * 20, 1, false);
            $speed3 = new EffectInstance(Effect::getEffect(Effect::SPEED), 90 * 20, 2, false);
$slow = new EffectInstance(Effect::getEffect(Effect::SLOWNESS), 90 * 20, 1, false);
$slow2 = new EffectInstance(Effect::getEffect(Effect::SLOWNESS), 240 * 20, 1, false);
            $water = new EffectInstance(Effect::getEffect(Effect::WATER_BREATHING), 180 * 20, 1, false);
            $water2 = new EffectInstance(Effect::getEffect(Effect::WATER_BREATHING), 480 * 20, 1, false);
            $health = new EffectInstance(Effect::getEffect(Effect::INSTANT_HEALTH), 1, 0, false);
            $health2 = new EffectInstance(Effect::getEffect(Effect::INSTANT_HEALTH), 1, 2, false);
            $instant  = new EffectInstance(Effect::getEffect(Effect::INSTANT_DAMAGE), 1, 1, false);
            $instant2 = new EffectInstance(Effect::getEffect(Effect::INSTANT_DAMAGE), 1, 2, false);
            $poison = new EffectInstance(Effect::getEffect(Effect::POISON), 45 * 20, 1, false);
            $poison2 = new EffectInstance(Effect::getEffect(Effect::POISON), 120 * 20, 1, false);
            $poison3 = new EffectInstance(Effect::getEffect(Effect::POISON), 22 * 20, 2, false);
            $regen = new EffectInstance(Effect::getEffect(Effect::REGENERATION), 45 * 20, 1, false);
            $regen2 = new EffectInstance(Effect::getEffect(Effect::REGENERATION), 120 * 20, 1, false);
            $regen3 = new EffectInstance(Effect::getEffect(Effect::REGENERATION), 22 * 20, 2, false);
            $strength = new EffectInstance(Effect::getEffect(Effect::STRENGTH), 180 * 20, 1, false);
            $strength2 = new EffectInstance(Effect::getEffect(Effect::STRENGTH), 480 * 20, 1, false);
            $strength3 = new EffectInstance(Effect::getEffect(Effect::STREMGTH), 90 * 20, 2, false);
            $weak = new EffectInstance(Effect::getEffect(Effect::WEAKNESS), 90 * 20, 1, false);
            $weak2 = new EffectInstance(Effect::getEffect(Effect::WEAKNESS), 240 * 20, 1, false);
            $weak3 = new EffectInstance(Effect::getEffect(Effect::WEAKNESS), 40 * 20, 2, false);
            switch($damage){
                case 5:
                    $player->addEffect($nv);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 5, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 6:
                    $player->addEffect($nv2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 6, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 7:
                    $player->addEffect($invis);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 7, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 8:
                    $player->addEffect($invis2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 8, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 9:
                    $player->addEffect($jump);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 9, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 10:
                    $player->addEffect($jump2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 10, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 11:
                    $player->addEffect($jump3);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 11, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 12:
                    $player->addEffect($fire);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 12, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 13:
                    $player->addEffect($fire2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 13, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 14:
                    $player->addEffect($speed);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 14, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 15:
                    $player->addEffect($speed2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 15, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 16:
                    $player->addEffect($speed3);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 16, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 17:
                    $player->addEffect($slow);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 17, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 18:
                    $player->addEffect($slow2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 18, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 19:
                    $player->addEffect($water);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 19, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 20:
                    $player->addEffect($water2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 20, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 21:
                    $player->addEffect($health);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 21, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 22:
                    $player->addEffect($health2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 22, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 23:
                    $player->addEffect($instant);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 23, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 24:
                    $player->addEffect($instant2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 24, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 25:
                    $player->addEffect($poison);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 25, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 26:
                    $player->addEffect($poison2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 26, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 27:
                    $player->addEffect($poison3);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 27, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 28:
                    $player->addEffect($regen);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 28, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 29:
                    $player->addEffect($regen2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 29, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 30:
                    $player->addEffect($regen3);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 30, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 31:
                    $player->addEffect($strength);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 31, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 32:
                    $player->addEffect($strength2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 32, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 33:
                    $player->addEffect($strength3);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 33, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 34:
                    $player->addEffect($weak);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 34, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 35:
                    $player->addEffect($weak2);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 35, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;
                case 36:
                    $player->addEffect($weak3);
                    $player->getInventory()->removeItem(Item::get(Item::POTION, 36, 1));
                    $player->getInventory()->addItem(Item::get(Item::GLASS_BOTTLE, 0, 1));
                    break;

            }
        }
    }
}
