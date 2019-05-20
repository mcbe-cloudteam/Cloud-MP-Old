<?php

/*
    _____ _                 _        __  __ _____
  / ____| |               | |      |  \/  |  __ \
 | |    | | ___  _   _  __| |______| \  / | |__) |
 | |    | |/ _ \| | | |/ _` |______| |\/| |  ___/
 | |____| | (_) | |_| | (_| |      | |  | | |
  \_____|_|\___/ \__,_|\__,_|      |_|  |_|_|

     Make of Things.
 */

declare(strict_types=1);

namespace pocketmine\entity;

use pocketmine\inventory\TradeInventory;
use pocketmine\inventory\TradeRecipe;
use pocketmine\entity\Ageable;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\Player;
use function array_rand;
use function count;
use function mt_rand;

class Villager extends Creature implements NPC, Ageable{

	public const NETWORK_ID = self::VILLAGER_V2;

	public $width = 0.95;
	public $height = 0.85;

	public function getName() : string{
		return "Villager";
	}
	
	public function initEntity() : void{
		$this->setMaxHealth(20);
		parent::initEntity();
	}

	public function getXpDropAmount() : int{
		return 5;
	}
	
	public function isBaby() : bool{
		return $this->getGenericFlag(self::DATA_FLAG_BABY);
	}
}
