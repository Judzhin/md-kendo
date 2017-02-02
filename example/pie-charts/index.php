<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('pie')
       ->startAngle(150)
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

$chart->title(['position' => 'bottom', 'text' => 'Share of Internet Population Growth, 2007 - 2012'])
      ->addSeriesItem($series)
      ->chartArea(['background' => 'transparent'])
      ->legend(['visible' => false])
      ->tooltip(['visible' => true, 'template' => '#= category # (#= series.name #): #= value #%']);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<style type="text/css">
    #chart {
        background: center no-repeat url('../content/shared/styles/world-map.png');
    }
</style>    
<?php require_once '../include/footer.php'; ?>
