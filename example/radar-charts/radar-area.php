<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$andrew = new \Kendo\Dataviz\UI\ChartSeriesItem();
$andrew->name('Andrew Dodsworth')
       ->data([10, 3, 3, 10, 2, 10]);

$margaret = new \Kendo\Dataviz\UI\ChartSeriesItem();
$margaret->name('Margaret Peacock')
       ->data([9, 7, 7, 9, 6, 7]);

$nancy = new \Kendo\Dataviz\UI\ChartSeriesItem();
$nancy->name('Nancy Callahan')
       ->data([4, 10, 10, 5, 5, 4]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories([
                "Experience", "Communication", "Friendliness",
                "Subject knowledge", "Presentation", "Education"])
             ->majorGridLines(['visible' => false]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->labels(['format' => '{0}%'])
          ->line(['visible' => false]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Employment candidate review'])
      ->legend(['position' => 'bottom'])
      ->seriesDefaults(['type' => 'radarArea'])
      ->addSeriesItem($andrew, $margaret, $nancy)
      ->addCategoryAxisItem($categoryAxis)
      ->addValueAxisItem($valueAxis);
?>
 <div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
