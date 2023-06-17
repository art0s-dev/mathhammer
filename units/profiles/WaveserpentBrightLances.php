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

$shurikenCannon = new Weapon(
    "Shuriken Cannon",
    3,
    3,
    6,
    1,
    2
);

$unit = new Unit(
    "Wave Serpent w/Bright Lance",
    [
        new Model(3, 5, 1, [$lance, $lance, $shurikenCannon], []),
    ],
    120
);