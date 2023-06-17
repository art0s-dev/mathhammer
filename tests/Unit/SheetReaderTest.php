<?php

declare(strict_types=1);

use Art0s\Mathhammer\Reader\SheetReader;

it("throws an exception when no profiles folder is given")
    ->expect(fn() => read(dirname(__FILE__, 2) . "/unitReaderTest/emptyFixtures/"))
    ->throws(TypeError::class);

it("throws an exception when incorrect are given")
    ->expect(fn() => read(dirname(__FILE__, 2) . "/unitReaderTest/fixturesWithGitkeep/"))
    ->throws(TypeError::class);

it("can read a correctly formatted folder", function(){
    $path = dirname(__FILE__, 2) . "/unitReaderTest/fixtures/";
    $reader = new SheetReader($path);
    {
        $reader->readUnitProfiles();
    }

    expect($reader->getUnits())->toBeArray()
    ->and($reader->getUnits())->toHaveCount(1);
});

it("can read a target and a profile", function(){
    $path = dirname(__FILE__, 2) . "/unitReaderTest/fixtureWithTargetAndOneProfile/";
    $reader = new SheetReader($path);
    {
        $reader->readUnitProfiles();
        $reader->readTargets();
    }

    expect($reader->getUnits())->toBeArray()
        ->and($reader->getUnits())->toHaveCount(1)
        ->and($reader->getUnits())->toBeArray()
        ->and($reader->getTargets())->toHaveCount(1);
});

function read($path){
    $reader = new SheetReader($path);
    {
        $reader->readUnitProfiles();
    }
}