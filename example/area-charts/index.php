<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$india = new \Kendo\Dataviz\UI\ChartSeriesItem();
$india->name('India')
      ->data([3.907, 7.943, 7.848, 9.284, 9.263, 9.801, 3.890, 8.238, 9.552, 6.855]);

$world = new \Kendo\Dataviz\UI\ChartSeriesItem();
$world->name('World')
      ->data([1.988, 2.733, 3.994, 3.464, 4.001, 3.939, 1.333, -2.245, 4.339, 2.727]);

$haiti = new \Kendo\Dataviz\UI\ChartSeriesItem();
$haiti->name('Haiti')
      ->data([-0.253, 0.362, -3.519, 1.799, 2.252, 3.343, 0.843, 2.877, -5.416, 5.590]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$valueAxis->labels(['format' => '{0}%'])
          ->line(['visible' => false])
          ->axisCrossingValue(-10);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories([2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011])
             ->majorGridLines(['visible' => false]);


$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->format('{0}%')
        ->template('#= series.name #: #= value #');
?>
<div class="demo-section k-content wide">
<?php
$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Gross domestic product growth \n /GDP annual %/'])
      ->chartArea(['background' => 'transparent'])
      ->legend(['position' => 'bottom'])
      ->addSeriesItem($india, $world, $haiti)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->tooltip($tooltip)
      ->seriesDefaults(['type' => 'area', 'area' => ['line' => ['style' => 'smooth']]]);

echo $chart->render();
?>
</div>
<style type="text/css">
    #chart {
        background: center no-repeat url('../content/shared/styles/world-map.png');
    }
</style>    
<?php require_once '../include/footer.php'; ?>
