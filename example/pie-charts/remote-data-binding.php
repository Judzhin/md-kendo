<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $result = chart_screen_resolution();

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
        <h3>1024x768 screen resolution trends</h3>
<?php
for ($year = 2000; $year <= 2009; $year++) {
    $series = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $series->field('share')
           ->categoryField('resolution')
           ->padding(0);

    $transport = new \Kendo\Data\DataSourceTransport();
    $transport->read(['url' => 'remote-data-binding.php', 'type' => 'POST', 'dataType' => 'json']);

    $dataSource = new \Kendo\Data\DataSource();

    $dataSource->transport($transport)
               ->addSortItem(['field' => 'year', 'dir' => 'asc'])
               ->addFilterItem(['field' => 'year', 'operator' => 'eq', 'value' => $year]);

    $chart = new \Kendo\Dataviz\UI\Chart("chart$year");

    $chart->title(['text' => "$year"])
          ->dataSource($dataSource)
          ->addSeriesItem($series)
          ->attr('class', 'small-chart')
          ->legend(['position' => 'top'])
          ->tooltip([
              'visible' => true,
              'format' => 'N0',
              'template' => "#= category # - #= kendo.format('{0:P}', percentage)#"])
          ->seriesDefaults(['type' => 'pie']);

    echo $chart->render();
}
?>
</div>
<style>
    .k-chart.small-chart {
        display: inline-block;
        width: 120px;
        height: 120px;
    }
</style>
<?php require_once '../include/footer.php'; ?>
