﻿<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$errorBars = new \Kendo\Dataviz\UI\ChartSeriesItemErrorBars();
$errorBars -> value('stddev');

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->data([7.943, 7.848, 9.284, 9.263, 9.801, 3.890, 8.238, 9.552])
       ->errorBars($errorBars);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$valueAxis->labels(['format' => '{0}%'])
          ->line(['visible' => false])
          ->axisCrossingValue(0);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories([2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010])
             ->line(['visible' => false]);


$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->format('{0}%')
        ->template('#= value # (σ = #= kendo.toString(high - low, "N2") #)');
?>
<div class="demo-section k-content wide">
<?php
$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'GDP growth and standard deviation'])
      ->legend(['visible' => false])
      ->addSeriesItem($series )
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->tooltip($tooltip)
      ->seriesDefaults(['type' => 'area']);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
