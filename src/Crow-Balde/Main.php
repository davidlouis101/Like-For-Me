<?php

namespace Crow-Balde\Like-For-Me\Main;

use pocketmine\plugin\PluginBase;
use Crow-Balde\For-Me\command\Broadcast;

class Main extends PluginBase{

	public function onEnable() {
		$this->getLogger()->info("§a[Broadcast]§4 Plugin Ist Fertig Geladen");
        $this->getServer()->getCommandMap()->register("Broadcast", new Broadcast($this));
	}
}
