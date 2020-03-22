<?php

namespace ;

use pocketmine\plugin\PluginBase;
use Crow\SimpleGM\command\Broadcast;

class Main extends PluginBase{

	public function onEnable() {
		$this->getLogger()->info("§a[Broadcast]§4 Plugin Ist Fertig Geladen");
        $this->getServer()->getCommandMap()->register("Broadcast", new Broadcast($this));
	}
}
