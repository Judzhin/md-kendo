<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$polar = new \Kendo\Dataviz\UI\ChartSeriesItem();
$polar->type('polarArea')
      ->data([
          [10, 10], [30, 20], [50, 30],
          [70, 20], [90, 10], [90, 0],
          [230, 10], [235, 20], [240, 30],
          [245, 20], [250, 10]
      ]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Polar area'])
      ->legend(['position' => 'bottom'])
      ->addSeriesItem($polar);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
