<?php


use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;


$missile = new Weapon(
    "D Scythe",
    4,
    2.5,
    12,
    4,
    2
);

$unit = new Unit(
    "Hemlock Wraith fighter",
    [
        new Model(3, 5, 1, [$missile,$missile], []),
    ],
    155
);