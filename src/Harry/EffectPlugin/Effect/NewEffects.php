<?php
declare(strict_types=1);

namespace Harry\EffectPlugin\Effect;

use pocketmine\color\Color;

use pocketmine\entity\effect\Effect;

use pocketmine\lang\KnownTranslationFactory;
use pocketmine\lang\Translatable;

use pocketmine\utils\RegistryTrait;

/**
 * @method static SlowFallingEffect SLOW_FALLING()
 * @method static VillageHeroEffect BAD_OMEN()
 * @method static VillageHeroEffect VILLAGE_HERO()
 */
final class NewEffects
{
    use RegistryTrait;
    
    private static function setup(): void
    {
        self::register('slow_falling',new SlowFallingEffect(KnownTranslationFactory::potion_slowFalling(),new Color(0xce,0xff,0xff)));
        self::register('village_hero',new VillageHeroEffect(new Translatable('potion.villageHero',[]),new Color(0xce,0xff,0xff)));
        self::register('bad_omen',new BadOmenEffect(new Translatable('potion.badOmen',[]),new Color(0xce,0xff,0xff)));
    }
    protected static function register(string $name,Effect $member): void
    {
        self::_registryRegister($name,$member);
    }
}
