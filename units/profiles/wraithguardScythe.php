<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$dCannon = new Weapon(
    "Scythe",
    2,
    2.5,
    10,
    4,
    1
);

$unit = new Unit(
    "Wraithguard w/D Sythe",
    [
        new Model(3, 5, 1, [$dCannon], []),
    ],
    150
);