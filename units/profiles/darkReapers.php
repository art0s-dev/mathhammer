<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$weapon = new Weapon(
    "Aeldari Missile Launcher",
    3,
    1,
    10,
    2,
    2.5
);

$unit = new Unit(
    "Dark Reapers",
    [
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),

    ],
    75
);