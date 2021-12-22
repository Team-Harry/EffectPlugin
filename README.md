# EffectPlugin
[PocketMine-MP 4 Plugin] 서버에 추가되지 않는 이펙트들을 구현해주는 플러그인

## How To Use - 사용법
### In Server - 서버 안에서
````
느린 낙하 : /effect [player] slow_falling
불길한 조짐 : /effect [player] bad_omen
마을의 영웅 : /effect [player] village_hero
````

### In Plugin - 플러그인 소스 안에서
```php
//느린 낙하
$player->getEffects()->add(new \pocketmine\entity\effect\EffectInstance(\Harry\EffectPlugin\Effect\NewEffects::SLOW_FALLING())

//불길한 조짐
$player->getEffects()->add(new \pocketmine\entity\effect\EffectInstance(\Harry\EffectPlugin\Effect\NewEffects::BAD_OMEN())

//마을의 영웅
$player->getEffects()->add(new \pocketmine\entity\effect\EffectInstance(\Harry\EffectPlugin\Effect\NewEffects::VILLAGE_HERO())
```