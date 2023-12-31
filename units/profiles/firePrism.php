<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$prismCannon = new Weapon(
    "Prism Cannon",
    3,
    2,
    18,
    4,
    6
);

$shurikenCannon = new Weapon(
    "Shuriken Cannon",
    3,
    3,
    6,
    1,
    2
);

$unit = new Unit(
    "Fire Prism",
    [
        new Model(3, 5, 1, [$prismCannon, $shurikenCannon], []),
    ],
    125
);