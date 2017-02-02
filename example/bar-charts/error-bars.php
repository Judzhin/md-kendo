<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$errorBars = new \Kendo\Dataviz\UI\ChartSeriesItemErrorBars();
$errorBars -> value('stderr');

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->data([4.743, 7.295, 7.175, 6.376, 8.153, 8.535, 5.247, -7.832, 4.3, 4.3])
       ->errorBars($errorBars);

$labelsPadding = new \Kendo\Dataviz\UI\ChartCategoryAxisItemLabelsPadding();
$labelsPadding->top(175);

$categoryAxisLabels = new \Kendo\Dataviz\UI\ChartCategoryAxisItemLabels();
$categoryAxisLabels->padding($labelsPadding);

$cateogrySeriesAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$cateogrySeriesAxis->line(['visible' => false])
                   ->categories([2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011])
                   ->labels($categoryAxisLabels);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->labels(['format' => '{0}%'])
          ->line(['visible' => false])
          ->axisCrossingValue(0);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->format('{0}%');

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Gross domestic product growth and standard error'])
      ->legend(['visible' => false])
      ->addSeriesItem($series)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($cateogrySeriesAxis)
      ->tooltip($tooltip)
      ->seriesDefaults(['type' => 'column']);
?>
 <div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
