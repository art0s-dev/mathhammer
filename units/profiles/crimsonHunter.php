<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$lance = new Weapon(
    "Bright Lance",
    3,
    1,
    12,
    3,
    4.5
);

$laser = new Weapon(
    "Pulse Laser",
    3,
    3,
    9,
    2,
    2.5
);

$unit = new Unit(
    "Crimson Hunter w/ Bright Lances",
    [
        new Model(3, 5, 1, [$lance, $lance, $laser], []),
    ],
    160
);