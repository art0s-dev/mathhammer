<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;


$dCannon = new Weapon(
    "D cannonr",
    3,
    1,
    14,
    4,
    2.5
);


$unit = new Unit(
    "Wraithguard w/D Cannon",
    [
        new Model(3, 5, 1, [$dCannon], []),
    ],
    150
);