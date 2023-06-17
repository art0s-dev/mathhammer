<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$weapon = new Weapon(
    "Dragon Fusion Gun",
    2,
    1,
    9,
    4,
    2.5
);

$missile = new Weapon(
    "Twin Shuriken Catapult",
    2,
    2,
    10,
    1,
    1
);

$unit = new Unit(
    "Autarch Skyrunner w/ Dragon Fusion gun",
    [
        new Model(3, 5, 1, [$missile, $weapon], []),
    ],
    80
);