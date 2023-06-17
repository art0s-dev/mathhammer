<?php

declare(strict_types=1);

namespace Art0s\Mathhammer\Reader;

use Symfony\Component\Yaml\Yaml;

final class SheetReader
{
    private string $pathToProfiles = "profiles/";
    private string $pathToTargets = "targets/";
    private array $unitList = [];
    private array $targets = [];

    public function __construct(private readonly string $path)
    {
        $this->pathToProfiles = $path . $this->pathToProfiles;
        $this->pathToTargets = $path . $this->pathToTargets;
    }

    public function getUnits(): array { return $this->unitList; }
    public function getTargets(): array { return $this->targets; }
    public function readUnitProfiles(): void { $this->unitList = $this->read($this->pathToProfiles); }
    public function readTargets(): void{ $this->targets = $this->read($this->pathToTargets); }

    private function read(string $path): array
    {
        $unitList = [];
        $files = scandir($path);
        assert($files);

        $files = array_filter($files, fn($file) => !in_array($file, [".", ".."]));
        foreach($files as $file){
            include $path . $file;
            assert(isset($unit));
            $unitList[] = $unit;
        }

        assert(!empty($unitList));
        return $unitList;
    }
}