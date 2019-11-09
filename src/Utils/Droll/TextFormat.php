<?php

namespace Utils\Droll;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class TextFormat extends PluginBase {

	const DARK_BLUE = "§1";
	const DARK_GREEN = "§2";
	const DARK_AQUA = "§3";
	const DARK_RED = "§4";
	const DARK_PURPLE = "§5";
	const GOLD = "§6";
	const GRAY = "§7";
	const DARK_GRAY = "§8";
	const BLUE = "§9";
	const GREEN = "§a";
	const AQUA = "§b";
	const RED = "§c";
	const LIGHT_PURPLE = "§d";
	const YELLOW = "§e";
	const WHITE = "§f";

 public onEnable(){
  $this->getLogger->info('Colors TextFormat');
 }
}
