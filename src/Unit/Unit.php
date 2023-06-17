<?php

declare(strict_types=1);

namespace Art0s\Mathhammer\Unit;

final readonly class Unit
{
    public function __construct(
        public array $models,
        public int $points
    ){}
}