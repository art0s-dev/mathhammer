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

$unit = new Unit(
    "Autarch Wayleaper /w Fusion Gun",
    [
        new Model(3, 5, 1, [$weapon], []),
    ],
    80
);