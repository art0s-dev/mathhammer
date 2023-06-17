<?php

declare(strict_types=1);

namespace Art0s\Mathhammer\Unit;

final readonly class Weapon
{
    public function __construct(
        public string $name,
        public int $toHit,
        public int|float $attacks,
        public int $strength,
        public int $armourPenetration,
        public int $damage,
    )
    {
    }
}
