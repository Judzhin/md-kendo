<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$nutrients = new \Kendo\Dataviz\UI\ChartSeriesItem();
$nutrients->name('Nutrients')
          ->type('radarColumn')
          ->data([
              5, 1, 1, 5, 0, 1,
              1, 2, 1, 2, 1, 0,
              0, 2, 1, 0, 3, 1,
              1, 1, 0, 0, 0]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories([
                    "Df", "Pr", "A", "C", "D", "E",
                    "Th", "Ri", "Ni", "B", "F", "B",
                    "Se", "Mn", "Cu", "Zn", "K", "P",
                    "Fe", "Ca", "Na", "Ch", "Sf"]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->visible(false);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Nutrient balance: Apples, raw'])
      ->legend(['visible' => false])
      ->addSeriesItem($nutrients)
      ->addCategoryAxisItem($categoryAxis)
      ->addValueAxisItem($valueAxis);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
