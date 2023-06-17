<?php

declare(strict_types=1);

namespace Art0s\Mathhammer\Unit;

final readonly class Model
{
    public function __construct(
        public int $toughness,
        public int $save,
        public int $wounds,
        public array $rangedWeapons = [],
        public array $meleeWeapons = [],
    )
    {
    }
}