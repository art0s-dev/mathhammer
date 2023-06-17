<?php


use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;


$missile = new Weapon(
    "Missile Launcher",
    3,
    1,
    10,
    2,
    2.5
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
    "Wave Serpent w/Missile Launcher",
    [
        new Model(3, 5, 1, [$missile, $missile, $shurikenCannon], []),
    ],
    120
);