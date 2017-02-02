<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';

$series08c = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series08c->name('0.8C')
          ->data([
            [10, 10], [15, 20], [20, 25], [32, 40], [43, 50], [55, 60], [60, 70], [70, 80], [90, 100]
          ]);

$series16c = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series16c->name('1.6C')
          ->data([
            [10, 40], [17, 50], [18, 70], [35, 90], [47, 95], [60, 100]
          ]);

$series31c = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series31c->name('1.6C')
          ->data([
              [10, 70], [13, 90], [25, 100]
          ]);

$xAxis = new \Kendo\Dataviz\UI\ChartXAxisItem();
$xAxis->max(90)
      ->labels(['format' => '{0}m'])
      ->title(['text' => 'Time']);

$yAxis = new \Kendo\Dataviz\UI\ChartYAxisItem();
$yAxis->max(100)
      ->labels(['format' => '{0}%'])
      ->title(['text' => 'Charge']);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Charge current vs. charge time'])
      ->legend(['visible' => true])
      ->seriesDefaults(['type' => 'scatterLine'])
      ->addXAxisItem($xAxis)
      ->addYAxisItem($yAxis)
      ->addSeriesItem($series08c, $series16c, $series31c)
      ->tooltip(['visible' => true, 'format' => '{1}% in {0} minutes']);
?>
 <div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
