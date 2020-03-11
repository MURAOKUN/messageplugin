<?php

namespace Murao;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;


class Murao extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("§aTenの製作者偽りや二次配布は禁止です。");
        $this->getLogger()->info("§bBy muraokun");
    }
    public function onCommand(CommandSender $sender, Command $command,string $label, array $args):bool{
       $player = $sender->getPlayer();
       $name = $player->getName();
        switch($label){
        case "kon":
        $this->getServer()->broadcastMessage("[" . $name . "]こんにちは");
        break;
        case "otu":
        $this->getServer()->broadcastMessage("[" . $name . "]落ちます！お疲れ！！");
        break;
        case "hs":
        $this->getServer()->broadcastMessage("[" . $name . "]放置をします！");
        break;
        case "ht":
        $this->getServer()->broadcastMessage("[" . $name . "]放置から復帰しました！");
        break;
        case "lovelettel":
        $this->getServer()->broadcastMessage("[" . $name . "]副主様大好き！鯖主なんか置いといて結婚してください！");
        break;
      }
      return true;
    }
  }
