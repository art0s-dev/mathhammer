<?php

declare(strict_types=1);

namespace Art0s\Mathhammer\Unit;

final class UnitCruncher
{
    private Unit $profileUnit;
    private Model $targetModel;
    private bool $shooting = true;

    private static array $probability = [
        6 => 1 / 6,
        5 => 2 / 6,
        4 => 3 / 6,
        3 => 4 / 6,
        2 => 5 / 6
    ];

    private static array $saves = [
        6 => 5 / 6,
        5 => 4 / 6,
        4 => 3 / 6,
        3 => 2 / 6,
        2 => 1 / 6,
    ];

    public function setProfileUnit(Unit $profileUnit): void
    {
        $this->profileUnit = $profileUnit;
    }

    public function setTargetModel(Model $targetUnit): void
    {
        $this->targetModel = $targetUnit;
    }

    public function calculatePointsPerWound(): float
    {
        $unit = $this->profileUnit->models;
        $target = $this->targetModel;
        $points = $this->profileUnit->points;
        $wounds = 0;

        foreach($unit as $key => $model){
            foreach($model->rangedWeapons as $weapon){
                $attacks = $weapon->attacks;
                $probToHit = self::$probability[$weapon->toHit];
                $probToWound = self::comparison($weapon->strength, $target->toughness);
                $probToSave = self::makeSave($weapon->armourPenetration, $target->save);
                $damage = $weapon->damage;

                $wounds = $wounds + ($attacks * $probToHit * $probToWound * $probToSave * $damage);
            }
        }

        return $points / $wounds;
    }

    private static function comparison(int $attacker, int$defender): float
    {
        return match(true){
            $attacker > $defender * 2 => 5 / 6,
            $attacker > $defender => 4 / 6,
            $attacker == $defender => 3 / 6,
            $defender > $attacker => 2 / 6,
            default => 1 / 6,
        };
    }

    private static function makeSave(int $armorPenetration, int $save): float
    {
        $save += $armorPenetration;

        if($save >= 7){
            return 1;
        }

        return self::$saves[$save];
    }



}