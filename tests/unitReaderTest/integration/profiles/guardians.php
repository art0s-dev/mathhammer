<?php

declare(strict_types=1);

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;

$weapon = new Weapon(
    "Shuriken Pistol",
    3,
    1,
    4,
    1,
    1
);

$unit = new Unit(
    "Guardians",
    [
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
        new Model(3, 5, 1, [$weapon], []),
    ],
    115
);