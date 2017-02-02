<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';

$chrome = new \Kendo\Dataviz\UI\ChartSeriesItem();
$chrome->name('Chrome')
       ->data([0, 0, 0, 0, 3.6, 9.8, 22.4, 34.6]);

$firefox = new \Kendo\Dataviz\UI\ChartSeriesItem();
$firefox->name('Firefox')
        ->data([0, 23.6, 29.9, 36.3, 44.4, 46.4, 43.5, 37.7]);

$ie = new \Kendo\Dataviz\UI\ChartSeriesItem();
$ie->name('Internet Explorer')
   ->data([76.2, 68.9, 60.6, 56.0, 46.0, 37.2, 27.5, 20.2]);

$mozilla = new \Kendo\Dataviz\UI\ChartSeriesItem();
$mozilla->name('Mozilla')
        ->data([16.5, 2.8, 2.5, 1.2, 0, 0, 0, 0]);

$opera = new \Kendo\Dataviz\UI\ChartSeriesItem();
$opera->name('Opera')
      ->data([1.6, 1.5, 1.5, 1.6, 2.4, 2.3, 2.2, 2.5]);

$safari = new \Kendo\Dataviz\UI\ChartSeriesItem();
$safari->name('Safari')
       ->data([0, 0, 0, 1.8, 2.7, 3.6, 3.8, 4.2]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$valueAxis->labels(['format' => '{0}%'])
          ->line(['visible' => false]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories([2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011])
             ->majorGridLines(['visible' => false]);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->format('{0}%')
        ->template('#= series.name #: #= value #');
?>
<div class="demo-section k-content wide">
<?php
$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Browser Usage Trends'])
      ->legend(['position' => 'bottom'])
      ->addSeriesItem($chrome, $firefox, $ie, $mozilla, $opera, $safari)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->tooltip($tooltip)
      ->seriesDefaults([
          'type' => 'area',
          'stack' => ['type' => '100%']
      ]);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
