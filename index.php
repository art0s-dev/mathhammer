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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mathhammer Sheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="mt-5">
    <main class="container">
        <h1>Mathhammer Aeldari</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">&nbsp;</th>
                <?php foreach($reader->getTargets() as $target): ?>
                    <th scope="col"><?php echo $target->name; ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>

            <?php foreach($reader->getUnits() as $unit): ?>
                <?php $unitCruncer->setProfileUnit($unit); ?>
                <tr>
                    <th scope="row">
                        <span><?php echo $unit->name; ?></span>
                        <span class="badge bg-secondary"><?php echo $unit->points; ?></span>
                    </th>
                    <?php foreach($reader->getTargets() as $target): ?>
                        <?php $unitCruncer->setTargetModel($target); ?>
                        <td><?php echo $unitCruncer->calculatePointsPerWound(); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <script>
            //write a function that searches every unit and make the td of
            //the lowest value green
            //the highest value red
            //the rest yellow

            function highlightValues() {
                var table = document.querySelector('.table');
                var rows = table.getElementsByTagName('tr');

                for (var i = 1; i < rows.length; i++) {
                    var cells = rows[i].getElementsByTagName('td');
                    var values = [];

                    for (var j = 0; j < cells.length; j++) {
                        var value = parseFloat(cells[j].textContent);

                        if (!isNaN(value)) {
                            values.push(value);
                        }
                    }

                    var min = Math.min.apply(null, values);
                    var max = Math.max.apply(null, values);

                    for (var k = 0; k < cells.length; k++) {
                        var cellValue = parseFloat(cells[k].textContent);

                        if (!isNaN(cellValue)) {
                            if (cellValue === min) {
                                cells[k].style.backgroundColor = 'green';
                            } else if (cellValue === max) {
                                cells[k].style.backgroundColor = 'red';
                            } else {
                                cells[k].style.backgroundColor = 'yellow';
                            }
                        }
                    }
                }
            }

            window.onload = highlightValues;
        </script>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

