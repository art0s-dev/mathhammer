<?php

declare(strict_types=1);

use Art0s\Mathhammer\Unit\Model;
use Art0s\Mathhammer\Unit\Unit;
use Art0s\Mathhammer\Unit\Weapon;
use Art0s\Mathhammer\Unit\UnitCruncher;


it('Can crunch a unit', function () {

   $eldarGuardians= new Unit("guardians", createGuardians(), 115);

   $guardEquivalent = new Unit(
         "Guard Equivalent",
         [new Model(3, 5, 1)],
         0
   );

    $unitCruncher = new UnitCruncher();
    {
        $unitCruncher->setProfileUnit($eldarGuardians);
        $unitCruncher->setTargetModel($guardEquivalent);
    }

    expect($unitCruncher->calculatePointsPerWound())->toBe(31.050000000000008);
});

function createGuardians(){
    $list = [];
    $i = 0;

    $weapon = new Weapon(
        "Shuriken Pistol",
        3,
        1,
        4,
        1,
        1
    );

    while($i < 10){
        $list[] = new Model(3, 5, 1, [$weapon], []);
        $i++;
    }

    return $list;
}
