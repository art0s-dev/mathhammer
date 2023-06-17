<?php

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;


$dcannon = new Weapon(
    "Shuriken Cannon",
    3,
    4.5,
    6,
    0,
    1
);

$unit = new Unit(
    "Support Weapon w/ shadwow weaver",
    [
        new Model(3, 5, 1, [$dcannon], []),
    ],
    85
);