<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$series2011 = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series2011->name('2011')
           ->data([
                ['category' => 'Asia', 'value' => 30.8, 'color' => '#9de219'],
                ['category' => 'Europe', 'value' => 21.1, 'color' => '#90cc38'],
                ['category' => 'Latin America', 'value' => 16.3, 'color' => '#068c35'],
                ['category' => 'Africa', 'value' => 17.6, 'color' => '#006634'],
                ['category' => 'Middle East', 'value' => 9.2, 'color' => '#004d38'],
                ['category' => 'North America', 'value' => 4.6, 'color' => '#033939']
           ]);

$series2012 = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series2012->name('2012')
           ->data([
                ['category' => 'Asia', 'value' => 53.8, 'color' => '#9de219'],
                ['category' => 'Europe', 'value' => 16.1, 'color' => '#90cc38'],
                ['category' => 'Latin America', 'value' => 11.3, 'color' => '#068c35'],
                ['category' => 'Africa', 'value' => 9.6, 'color' => '#006634'],
                ['category' => 'Middle East', 'value' => 5.2, 'color' => '#004d38'],
                ['category' => 'North America', 'value' => 3.6, 'color' => '#033939']
            ])
            ->labels([
                'visible' => true,
                'background' => 'transparent',
                'position' => 'outsideEnd',
                'template' => '#= category #: \n #= value#%'
            ]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');

$chart->title(['position' => 'bottom', 'text' => 'Share of Internet Population Growth'])
      ->addSeriesItem($series2011, $series2012)
      ->legend(['visible' => false])
      ->tooltip(['visible' => true, 'template' => '#= category # (#= series.name #): #= value #%'])
      ->seriesDefaults(['type' => 'donut', 'startAngle' => 150])
      ->chartArea(['background' => 'transparent']);

echo $chart->render();
?>
</div>

<style type="text/css">
    #chart {
        background: center no-repeat url('../content/shared/styles/world-map.png');
    }
</style>

<?php require_once '../include/footer.php'; ?>
