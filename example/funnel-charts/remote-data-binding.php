<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $result = chart_spain_electricity_production();

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
    $series = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $series->field('wind')
           ->categoryField('year')
           ->segmentSpacing(2);

    $transport = new \Kendo\Data\DataSourceTransport();
    $transport->read(['url' => 'remote-data-binding.php', 'type' => 'POST', 'dataType' => 'json']);

    $dataSource = new \Kendo\Data\DataSource();

    $dataSource->transport($transport)
               ->addSortItem(['field' => 'year', 'dir' => 'desc']);

    $chart = new \Kendo\Dataviz\UI\Chart("chart");

    $chart->title(['text' => "Spain windpower electricity production (GWh)"])
          ->dataSource($dataSource)
          ->addSeriesItem($series)
          ->legend(['visible' => false])
          ->tooltip([
              'visible' => true,
              'format' => 'N0',
              'template' => "#= dataItem.year # - #= value# GWh"])
          ->seriesDefaults([
              'type' => 'funnel',
              'dynamicSlope' => true,
              'dynamicHeight' => false,
              'labels' => [
                'visible' => true,
                'template' => '#= dataItem.year#',
              ]
          ]);

    echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
