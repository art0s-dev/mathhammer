<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$prismCannon = new Weapon(
    "Doomweaver",
    3,
    5.5,
    7,
    0,
    2
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
    "Night Spinner",
    [
        new Model(3, 5, 1, [$prismCannon, $shurikenCannon], []),
    ],
    140
);