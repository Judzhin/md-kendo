<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('donut')
       ->field('percentage')
       ->categoryField('source')
       ->explodeField('explode');

$dataSource = new \Kendo\Data\DataSource();

$dataSource->data([
    ['source' => 'Hydro', 'percentage' => 22, 'explode' => true],
    ['source' => 'Solar', 'percentage' => 2],
    ['source' => 'Nuclear', 'percentage' => 49],
    ['source' => 'Wind', 'percentage' => 27]
]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');

$chart->title(['text' => 'Break-up of Spain Electricity Production for 2008'])
      ->dataSource($dataSource)
      ->addSeriesItem($series)
      ->legend(['position' => 'bottom'])
      ->seriesColors(['#42a7ff', '#666666', '#999999', '#cccccc'])
      ->tooltip(['visible' => true, 'template' => '${ category } - ${ value }%']);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
