<?php

declare(strict_types=1);

namespace Rover17\BasicContactInfo;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\event\Listener;


class Main extends PluginBase{
    

    public function onDisable(){
        $this->getLogger()->info("Plugin disabled");
    }
    
            public function onEnable(){
        $this->getLogger()->info("Plugin Enabled");
        $this->config = $this->getConfig()->getAll();
            }

    public function onCommand(CommandSender $sender, Command $cmd,$label, array $args) : bool {
        switch($cmd->getName()) {
            case "discord":
                if($sender instanceof Player){
                        $sender->sendMessage($this->config["discord"]);
                } else {
                    $sender->sendMessage("§4Please run this command in game");
                }
        }
            case "info":
                if($sender instanceof Player){
                        $sender->sendMessage("§3==== §r§4Informations §r§3=====");
                        $sender->sendMessage($this->config["Ligne1"]);
                        $sender->sendMessage($this->config["Ligne2"]);
                        $sender->sendMessage($this->config["Ligne3"]);
                } else {
                    $sender->sendMessage("§4Please run this command in game");
                }
        }
        return true;
        
    }


    }

