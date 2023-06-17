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

$flamer = new Weapon(
    "Flamer",
    2,
    2.5,
    4,
    0,
    1
);

$unit = new Unit(
    "Wraithlord w/ Bright lances",
    [
        new Model(3, 5, 1, [$lance, $lance, $flamer], []),
    ],
    95
);