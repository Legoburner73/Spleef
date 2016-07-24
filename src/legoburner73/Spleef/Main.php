<?php

namespace legoburner73\Spleef;

/*
*¦--------------------------------------------¦
*¦-####------########--########--############-¦
*¦-####------########--########--############-¦
*¦-####------####------####------####----####-¦
*¦-####------########--####------####----####-¦
*¦-####------########--####-##---####----####-¦
*¦-####------####------####-##---####----####-¦
*¦-########--########--########--############-¦
*¦-########--########--########--############-¦
*¦--------------------------------------------¦
*/

use pocketmine\plugin\PluginBase as Base;
use pocketmine\event\Listener;
use pocketmine\event\block\SignChangeEvent as SignChange;
use pocketmine\event\player\PlayerInteractEvent as PlayerInteract;
use pocketmine\event\block\BlockEvent;
use pocketmine\event\block\BlockPlaceEvent as BlockPlace;
use pocketmine\event\block\BlockBreakEvent as BlockBreak;

//TODO Add link to other files in api folder

class Main extends Base implements Listener
{
  public $temp;
  public $arena1 = [ ];
  public $arena2 = [ ];
  public $arena3 = [ ];
  public $arena4 = [ ];
  
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onSignChange(SignChangeEvent $event) {
		$player = $event->getPlayer ();
		$block = $event->getBlock ();
		$line1 = $event->getLine ( 0 );
		$line2 = $event->getLine ( 1 );
		$line3 = $event->getLine ( 2 );
		$line4 = $event->getLine ( 3 );
		
		if ($line1 != null && $line1 === "spleef") {
			if ($line2 != null && $line2 === "arena1") {
			  $levelname = "";
			  $level = $this->getLevel($levelname);
			  $player->teleport($level);
				$event->setLine( 2, "Arena Players");
				$event->setLine( 3, count ($this->getPlugin ()->arenaPlayers));
				return;
			}
			if ($line2 != null && $line2 === "arena2") {
			  $levelname = "";
			$level = $this->getLevel($levelname);
			$player->teleport($level);
			}
		if ($line2 != null && $line2 === "arena3") {
		  $levelname = "";
			$level = $this->getLevel($levelname);
		}
		if ($line2 != null && $line2 === "arena4") {
		  $levelname = "";
		  $level = $this->getLevel($levelname);
		  $player->teleport($level);
		}
  }
	}
}
