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
                    <th data-target-key="<?php echo $target->name; ?>" scope="col">
                        <?php echo $target->name; ?>
                    </th>
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
                        <td data-target="<?php echo $target->name; ?>">
                            <?php echo $unitCruncer->calculatePointsPerWound(); ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <script>

        </script>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        const units = $("tr")
        units.each(function (){
            const results = $(this).find("td")

            const values = []
            results.each(function(){
                values.push(Number($(this).text()))
            })

            const min = Math.min.apply(null, values);
            const max = Math.max.apply(null, values);

            console.log(min, max)

            results.each(function(){
                const value = Number($(this).text())
                if (value === min) {
                    $(this).css('background-color', 'green');
                } else if (value === max) {
                    $(this).css('background-color', 'red');
                } else {
                    $(this).css('background-color', 'yellow');
                }
            })
        })

        const targets = $("th[data-target-key]")
        targets.each(function (){
            const targetKey = $(this).data('target-key')
            const targetCells = $(`td[data-target="${targetKey}"]`)
            const values = []
            targetCells.each(function(){
                values.push(Number($(this).text()))
            })

            const min = Math.min.apply(null, values);
            const max = Math.max.apply(null, values);

            targetCells.each(function(){
                const value = Number($(this).text())
                if (value === min) {
                    $(this).css('background-color', 'green');
                } else if (value === max) {
                    $(this).css('background-color', 'red');
                }
            })
        })
    </script>
</body>
</html>

