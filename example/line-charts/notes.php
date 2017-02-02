<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';
require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$wins = new \Kendo\Dataviz\UI\ChartSeriesItem();
$wins->field('win')
     ->noteTextField('extremum')
     ->notes(['position' => 'bottom', 'label' => ['position' => 'outside']])
     ->name('Wins');

$losses = new \Kendo\Dataviz\UI\ChartSeriesItem();
$losses->field('loss')
       ->name('Losses');

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->line(['visible' => false]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->field('year')
             ->majorGridLines(['visible' => false]);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->template('#= category # - #= value #%');

$dataSource = new \Kendo\Data\DataSource();
$dataSource->data(chart_grand_slam());

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Roger Federer Grand Slam tournament performance'])
      ->dataSource($dataSource)
      ->legend(['position' => 'bottom'])
      ->addSeriesItem($wins, $losses)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->seriesDefaults([
          'type' => 'line'
      ])
      ->tooltip($tooltip);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
