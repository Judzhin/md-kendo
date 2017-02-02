<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $result = chart_wind_data();

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';

$frequency = new \Kendo\Dataviz\UI\ChartSeriesItem();
$frequency->type('radarColumn')
          ->stack(true)
          ->field('frequency');

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->field('dirText');

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->visible(false);

$transport = new \Kendo\Data\DataSourceTransport();
$transport->read(['url' => 'grouped-data.php', 'type' => 'POST', 'dataType' => 'json']);

$dataSource = new \Kendo\Data\DataSource();
$dataSource->transport($transport)
           ->addGroupItem(['field' => 'category'])
           ->addSortItem(['field' => 'dir', 'dir' => 'asc']);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Wind Rose'])
      ->legend([
        'position' => 'right',
        'labels' => ['template' => '#= (series.data[0] || {}).categoryText # m/s']])
      ->dataSource($dataSource)
      ->seriesColors([
        '#1b79e4', '#3b6ad3', '#5d5ac2',
        '#8348ae', '#a23a9d', '#c42a8c', '#e51a7a'])
      ->addSeriesItem($frequency)
      ->addCategoryAxisItem($categoryAxis)
      ->addValueAxisItem($valueAxis)
      ->tooltip([
          'template' => '#= category # (#= dataItem.categoryText # m/s) #= value #%',
          'visible' => true]);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
