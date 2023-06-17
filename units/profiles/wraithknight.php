<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$dCannon = new Weapon(
    "Heavy Wraithcannon",
    2,
    2,
    20,
    4,
    5
);

$missile = new Weapon(
    "Missile Launcher",
    3,
    1,
    10,
    2,
    2.5
);

$unit = new Unit(
    "Wraithknight w/ Heavy Wraithcannon and 2 Missile Launchers",
    [
        new Model(3, 5, 1, [$dCannon,$dCannon,$missile,$missile], []),
    ],
    370
);