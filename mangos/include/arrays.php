<?php
    //ITEM QUALITY
    $item_quality = array(
        "Grey Poor"         => 0,       "White Common"      => 1,
        "Green Uncommon"    => 2,       "Blue Rare"         => 3,
        "Purple Epic"       => 4,       "Orange Legendary"  => 5,
        "Red Artifact"      => 6
    );
    
    //INVENTORY TYPE
    $inventory_type = array(
        "Non Equip"             => 0,       "head"              => 1,
        "Neck"                  => 2,       "Shoulder"          => 3,
        "Shirt"                 => 4,       "Chest"             => 5,
        "Waist(belt)"           => 6,       "Legs(pants)"       => 7,
        "Feet(boots)"           => 8,       "Wrist(bracers)"    => 9,
        "Hands(gloves)"         =>10,       "Finger(righs)"     =>11,
        "Trinket"               =>12,       "One Hand"          =>13,
        "Off Hand(inc shield)"  =>14,       "Ranged(bows)"      =>15,
        "Cloak(back)"           =>16,       "Two Hand"          =>17,
        "Bag(inc quivers)"      =>18,       "Tabard"            =>19,
        "Robe"                  =>20,       "Main Hand"         =>21,
        "Off Hand"              =>22,       "Holdable(tome)"    =>23,
        "Ammunition"            =>24,       "Thrown"            =>25,
        "Ranged Right"          =>26,       "Quiver"            =>27,
        "Relic"                 =>28
    );
    
   
    
    $item_flags = array(
        "SPECIALUSE"        =>8388608,      "THROWABLE"             =>4194304,
        "UNK_0x200000"      =>2097152,      "UNK_0x100000"          =>1048576,
        "UNIQU_EQUIPPED"    =>524288,       "PROSTPECTABLE_OR_POWDER"=>262144,
        "UNK_0x20000"       =>131072,       "DURATION"              =>65536,
        "PVP_ITEM"          =>32768,        "READABLE_ITEM"         =>16384,
        "CHARTER"           =>8192,         "UNK_0x1000"            =>4096,
        "MULTI_LOOT"        =>2048,         "PRODUCER"              =>1024,
        "WRAPPING_PAPER"    =>512,          "WAND"                  =>256,
        "UNK_0x80"          =>128,          "SPELLTRIGGER"          =>64,
        "TOTEM"             =>32,           "DEPRECIATED_ITEM"      =>16,
        "UNK_0x08"          =>8,            "OPENABLE"              =>4,
        "CONJURED"          =>2,            "BONDED"                =>1,
        "NONE"              =>0
        
    );// MAX FOR -1 16,777,215
    
    $races = array(
        "SKELETON"                                  => 16384,
        "BROKEN"                                    => 8192,
        "NAGA"                                      => 4096,
        "FEL ORC"                                   => 2048,
        "DRAENEI"                                   => 1024,
        "BLOODELF"                                  => 512,
        "GOBLIN"                                    => 256,
        "TROLL"                                     => 128,
        "GNOME"                                     => 64,
        "TAUREN"                                    => 32,
        "UNDEAD"                                    => 16,
        "NIGHTELF"                                  => 8,
        "DWARF"                                     => 4,
        "ORC"                                       => 2,
        "HUMAN"                                     => 1
    );//MAX FOR -1 = 142
    
    $classes = array(
        "DRUID"                                     => 1024,
        "UNK2"                                      => 512,
        "WARLOCK"                                   => 256,
        "MAGE"                                      => 128,
        "SHAMAN"                                    => 64,
        "DEATH KNIGHT"                              => 32,
        "PRIEST"                                    => 16,   
        "ROGUE"                                     => 8,
        "HUNTER"                                    => 4,
        "PALADIN"                                   => 2,
        "WARRIOR"                                   => 1
    );// MAX FOR -1 = 2047
    
    $sheath = array(
        "SHEILD"                                    => 7,
        "HIPWEAPONRIGHT"                            => 6,
        "HIPWEAPONLEFT"                             => 5,
        "LARGEWEAPONRIGHT"                          => 4,
        "LARGEWEAPONLEFT"                           => 3,
        "OFFHAND"                                   => 2,
        "MAINHAND"                                  => 1,
        "NONE"                                      => 0
    );
    
    $bagfamily = array(
        "QuestItems"                                => 16384,
        "Tokens"                                    => 8192,
        "Vanity Pets"                               => 4096,
        "Soulbond Equipment"                        => 2048,
        "Mining Supplies"                           => 1024,
        "Gems"                                      => 512,
        "Keys"                                      => 256,
        "Engineering Supplies"                      => 128,
        "Enchanting Supplies"                       => 64,
        "Herbs"                                     => 32,
        "unused"                                    => 16,
        "Leatherworking Supplies"                   => 8,
        "Soul Shards"                               => 4,
        "Bullets"                                   => 2,
        "Arrows"                                    => 1,
        "None"                                      => 0
    );
    
    $pagematerial = array(
        "Illidan"                                   => 7,
        "Valentine"                                 => 6,
        "Bronze"                                    => 5,
        "Silver"                                    => 4,
        "Marble"                                    => 3,
        "Stone"                                     => 2,
        "Parchment"                                 => 1,
        "N/A"                                       => 0
    );
    
    $quest_flags = array(
        "AUTO_ACCEPT"                               =>524288,
        "OBJ_TEXT"                                  =>262144,
        "SPECIAL_ITEM"                              =>131072,
        "AUTOCOMPLETE"                              =>65536,
        "WEEKLY"                                    =>32768,
        "UNAVAILABLE"                               =>16384,
        "REPEATABLE"                                =>8192,
        "DAILY"                                     =>4096,
        "TBC_RACES"                                 =>2048,
        "AUTO_REWARDED"                             =>1024,
        "HIDDEN_REWARDS"                            =>512,
        "DELIVER_MORE"                              =>256,
        "TBC"                                       =>128,
        "RAID"                                      =>64,
        "EPIC"                                      =>32, 
        "//NONE2"                                   =>16,
        "SHARABLE"                                  =>8,
        "EXPLORATION"                               =>4,
        "PARTY_ACCEPT"                              =>2,
        "STAY_ALIVE"                                =>1          

    );
    
    $object_type = array(
        "null"                                      =>36,
        "trapdoor"                                  =>35,
        "Guildbank"                                 =>34,
        "Destructable Bldg"                         =>33,
        "Barber Chair"                              =>32,
        "Dungeon Difficulty"                        =>31,
        "Aura Generator"                            =>30,
        "Capture Point"                             =>29,
        "Lottery Kiosk"                             =>28,
        "Custom Teleporter"                         =>27,
        "Flagdrop"                                  =>26,
        "Fishing Hole"                              =>25,
        "Flagstand"                                 =>24,
        "Meetingstone"                              =>23,
        "Spellcaster"                               =>22,
        "Guardpost"                                 =>21,
        "Auctionhouse"                              =>20,
        "Mailbox"                                   =>19,
        "Summoning Ritual"                          =>18,
        "Fishingnode"                               =>17,
        "Dual Arbiter"                              =>16,
        "Mo Transport"                              =>15,
        "Map Object"                                =>14,
        "Camera"                                    =>13,
        "Areadamage"                                =>12,
        "Transporter"                               =>11,
        "Goober"                                    =>10,
        "Text"                                      =>9,
        "Spell Focus"                               =>8,
        "Chair"                                     =>7,
        "Trap"                                      =>6,
        "Generic"                                   =>5,
        "Binder"                                    =>4,
        "Chest"                                     =>3,
        "Quest Giver"                               =>2,
        "Button"                                    =>1,
        "Door"                                      =>0
        
    );
    
?>