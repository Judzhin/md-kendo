<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$signal = new \Kendo\Dataviz\UI\ChartSeriesItem();
$signal->type('area')
       ->data([20, 1, 18, 3, 15, 5, 10, 6, 9, 6, 10, 5, 13, 3, 16, 1, 19, 1, 20, 2, 18, 5, 12, 7, 10, 8])
       ->line(['style' => 'step']);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->title(['text' => 'time'])
             ->majorGridLines(['visible' => false])
             ->majorTicks(['visible' => false]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->max(22)
          ->title(['text' => 'voltage'])
          ->majorGridLines(['visible' => false])
          ->visible(false);
?>
<div class="demo-section k-content wide">
<?php
$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'A digital signal'])
      ->legend(['visible' => false])
      ->addSeriesItem($signal)
      ->addCategoryAxisItem($categoryAxis)
      ->addValueAxisItem($valueAxis);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
