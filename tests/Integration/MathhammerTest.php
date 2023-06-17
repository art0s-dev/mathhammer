<?php

declare(strict_types=1);

use Art0s\Mathhammer\Reader\SheetReader;
use Art0s\Mathhammer\Unit\UnitCruncher;

it('Can crunch all units with all targets in the folder', function () {
    $path = dirname(__FILE__, 2) . "/unitReaderTest/integration/";

    $reader = new SheetReader($path);
    {
        $reader->readUnitProfiles();
        $reader->readTargets();
    }

    $units = $reader->getUnits();
    $targets = $reader->getTargets();

    $cruncher = new UnitCruncher();
    {
        $cruncher->setProfileUnit($units[0]);
    }

    $results = [];
    foreach($targets as $target){
        $cruncher->setTargetModel($target);
        $results[] = $cruncher->calculatePointsPerWound();
    }

    expect($results)->toBeArray()
        ->and($results)->toHaveCount(4);
});
