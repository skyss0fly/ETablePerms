<?php

namespace skyss0fly\ETablePerms;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\EnchantingTable;
use pocketmine\plugin\PluginBAW;
class Main extends PluginBase {

public EnchantingTable $table; 
    
public function oninterract(PlayerInteractEvent $event) {
$block = $event->getBlock();
  if ($block === $table) {
$player = $event->getPlayer();
    if ($player->hasPermission("ETablePerms.Use")){

# null
    }
      else {
$event->cancel();
      $player->sendMessage("Error: you lack permission to use this!");
      }

    else {

    #null
  }
}


}
