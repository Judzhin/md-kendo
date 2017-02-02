<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$ft3 = new \Kendo\Dataviz\UI\ChartSeriesItem();
$ft3->name('at 3 ft')
    ->data([
           [150, 3], [150, 3.1], [152, 3.2],
           [152, 3.1], [151, 3.2], [153, 3.3],
           [149, 3]
       ]);

$ft7 = new \Kendo\Dataviz\UI\ChartSeriesItem();
$ft7->name('at 7 ft')
    ->data([
           [270, 5], [250, 7], [259, 4],
           [270, 7], [265, 5], [250, 7],
           [263, 8], [261, 5]
       ]);

$yAxis = new \Kendo\Dataviz\UI\ChartYAxisItem();
$yAxis->max(10);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Buck spread'])
      ->addSeriesItem($ft3, $ft7)
      ->seriesDefaults(['type' => 'polarScatter'])
      ->legend(['position' => 'bottom'])
      ->addYAxisItem($yAxis);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
