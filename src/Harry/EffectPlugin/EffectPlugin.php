<?php
declare(strict_types = 1);

namespace Harry\EffectPlugin;

use Harry\EffectPlugin\Effect\NewEffects;

use pocketmine\data\bedrock\EffectIdMap;
use pocketmine\data\bedrock\EffectIds;

use pocketmine\entity\effect\StringToEffectParser;

use pocketmine\plugin\PluginBase;

class EffectPlugin extends PluginBase
{
    /** @var self $instance */
    protected static self $instance;
    
    protected function onLoad(): void
    {
        self::$instance = $this;
    }
    public static function getInstance(): self
    {
        return self::$instance;
    }
    protected function onEnable(): void
    {
        EffectIdMap::getInstance()->register(EffectIds::SLOW_FALLING,NewEffects::SLOW_FALLING());
        EffectIdMap::getInstance()->register(EffectIds::BAD_OMEN,NewEffects::BAD_OMEN());
        EffectIdMap::getInstance()->register(EffectIds::VILLAGE_HERO,NewEffects::VILLAGE_HERO());
        StringToEffectParser::getInstance()->register('slow_falling',fn() => NewEffects::SLOW_FALLING());
        StringToEffectParser::getInstance()->register('bad_omen',fn() => NewEffects::BAD_OMEN());
        StringToEffectParser::getInstance()->register('village_hero',fn() => NewEffects::VILLAGE_HERO());
    }
}