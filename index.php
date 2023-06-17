<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Art0s\Mathhammer\Reader\SheetReader;
use Art0s\Mathhammer\Unit\UnitCruncher;

$unitCruncer = new UnitCruncher();
$pathToUnits = dirname(__FILE__) . '/units/';
$reader = new SheetReader($pathToUnits);
{
    $reader->readTargets();
    $reader->readUnitProfiles();
}

/*foreach($reader->getUnits() as $unit) {
    $unitCruncer->setProfileUnit($unit);

    foreach($reader->getTargets() as $target) {
        $unitCruncer->setTargetModel($target);
        $unitCruncer->calculatePointsPerWound();
    }
}*/

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1>Mathhammer</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

