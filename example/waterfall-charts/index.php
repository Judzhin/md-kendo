<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';
?>

<div class="demo-section k-content wide">
 
<?php
$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('waterfall')
       ->data([180, -60, -20, 10, 30])
       ->labels(['visible' => true]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories(['In stock', 'Damaged', 'Reserved', 'In transit', 'Refurbished']);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->addSeriesItem($series)
      ->title(['text' => 'Inventory'])
      ->legend(['visible' => false])
      ->addCategoryAxisItem($categoryAxis)
      ->axisDefaults(['majorGridLines' => ['visible' => false]]);

echo $chart->render();
?>
</div>
<?php
require_once '../include/footer.php';
?>
