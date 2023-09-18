<?php

namespace skyss0fly\ETablePerms;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\EnchantingTable;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase {
    /*
@param PlayerInteractEvent $event
@priority HIGHEST
@ignoreCancelled true*/
    
public function onInterract(PlayerInteractEvent $event) {
$block = $event->getBlock();
  if ($block instanceof Enchantingtable) {
$player = $event->getPlayer();
      $this->ignoreCancelled
    if ($player->hasPermission("ETablePerms.Use")){

# null
    }
      else {
$event->cancel();
      $player->sendMessage("Error: you lack permission to use this!");
      }
  }
    else {

    #null
  }
}


}
