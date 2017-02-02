<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $result = chart_stock_prices();

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';

$power = new \Kendo\Dataviz\UI\ChartSeriesItem();
$power->name('Power')
      ->xField('rpm')
      ->yField('power')
      ->tooltip(['format' => '{1} bhp @ {0:N0} rpm']);

$torque = new \Kendo\Dataviz\UI\ChartSeriesItem();
$torque->name('Torque')
       ->xField('rpm')
       ->yField('torque')
       ->tooltip(['format' => '{1} lb-ft @ {0:N0} rpm']);

$dataSource = new \Kendo\Data\DataSource();

$dataSource ->data([
                ['rpm' => 1000, 'torque' => 50,  'power' => 10],
                ['rpm' => 1500, 'torque' => 65,  'power' => 19],
                ['rpm' => 2000, 'torque' => 80,  'power' => 30],
                ['rpm' => 2500, 'torque' => 92,  'power' => 44],
                ['rpm' => 3000, 'torque' => 104, 'power' => 59],
                ['rpm' => 3500, 'torque' => 114, 'power' => 76],
                ['rpm' => 4000, 'torque' => 120, 'power' => 91],
                ['rpm' => 4500, 'torque' => 125, 'power' => 107],
                ['rpm' => 5000, 'torque' => 130, 'power' => 124],
                ['rpm' => 5500, 'torque' => 133, 'power' => 139],
                ['rpm' => 6000, 'torque' => 130, 'power' => 149],
                ['rpm' => 6500, 'torque' => 122, 'power' => 151],
                ['rpm' => 7000, 'torque' => 110, 'power' => 147]
            ]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');

$chart->title(['text' => 'Dyno run results'])
      ->dataSource($dataSource)
      ->legend(['visible' => false])
      ->addSeriesItem($power, $torque)
      ->tooltip(['visible' => true])
      ->addXAxisItem([
          'title' => 'Engine rpm',
          'axisCrossingValue' => [0, 10000],
          'labels' => [
              'format' => 'N0'
          ]
      ])
      ->addYAxisItem([
          'title' => ['text' => 'Power (bhp)']
      ], [
          'title' => ['text' => 'Torque (lb-ft)']
      ])
      ->seriesDefaults(['type' => 'scatterLine', 'scatterLine' => ['width' => 2]]);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
