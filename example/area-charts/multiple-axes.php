<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';

$battery = new \Kendo\Dataviz\UI\ChartSeriesItem();
$battery->type('column')
        ->data([20, 40, 45, 30, 50])
        ->stack(true)
        ->name('on battery')
        ->color('#003c72');

$gas = new \Kendo\Dataviz\UI\ChartSeriesItem();
$gas->type('column')
    ->data([20, 30, 35, 35, 40])
    ->stack(true)
    ->name('on gas')
    ->color('#0399d4');

$mpg = new \Kendo\Dataviz\UI\ChartSeriesItem();
$mpg->type('area')
    ->data([30, 38, 40, 32, 42])
    ->name('mpg')
    ->color('#642381')
    ->axis('mpg');

$l100km = new \Kendo\Dataviz\UI\ChartSeriesItem();
$l100km->type('area')
       ->data([7.8, 6.2, 5.9, 7.4, 5.6])
       ->name('l/100 km')
       ->color('#e5388a')
       ->axis('l100km');

$milesAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$milesAxis->title(['text' => 'miles'])
          ->min(0)
          ->max(100);

$kmAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$kmAxis->name('km')
       ->title(['text' => 'km'])
       ->min(0)
       ->max(161)
       ->majorUnit(32);

$mpgAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$mpgAxis->name('mpg')
       ->title(['text' => 'miles per gallo'])
       ->color('#642381');

$l100kmAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$l100kmAxis->name('l100km')
           ->title(['text' => 'liters per 100km'])
           ->color('#e5388a');

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories(['Mon', 'Tue', 'Wed', 'Thu', 'Fri'])
             ->axisCrossingValue([0, 0, 10, 10]);
?>
<div class="demo-section k-content wide">
<?php
$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Hybrid car mileage report'])
      ->legend(['position' => 'top'])
      ->addSeriesItem($battery, $gas, $mpg, $l100km)
      ->addValueAxisItem($milesAxis, $kmAxis, $mpgAxis, $l100kmAxis)
      ->addCategoryAxisItem($categoryAxis);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
