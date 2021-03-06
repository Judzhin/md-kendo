<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $result = chart_japan_medals();

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('bubble')
       ->minSize(0)
       ->maxSize(70)
       ->xField('year')
       ->yField('standing')
       ->sizeField('number')
       ->colorField('medalColor')
       ->opacity(0.9);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->template('#= value.x #: #= value.size # Medals');

$transport = new \Kendo\Data\DataSourceTransport();
$transport->read(['url' => 'grouped-data.php', 'type' => 'POST', 'dataType' => 'json']);

$dataSource = new \Kendo\Data\DataSource();
$dataSource->transport($transport)
           ->addGroupItem(['field' => 'country']);

$xAxis = new \Kendo\Dataviz\UI\ChartXAxisItem();
$xAxis->labels(['skip' => 1, 'margin' => ['top' => -25]])
      ->majorUnit(4)
      ->min(1980)
      ->max(2015)
      ->majorGridLines(['visible' => false])
      ->line(['visible' => false]);

$yAxis = new \Kendo\Dataviz\UI\ChartXAxisItem();
$yAxis->labels([
            'step' => 1,
            'skip' => 1,
            'template' => '#= value # place',
            'margin' => ['right' => -30],
            'padding' => ['left' => 20]
        ])
      ->majorUnit(1)
      ->min(0)
      ->max(3.7)
      ->majorGridLines(['visible' => false])
      ->line(['visible' => false]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->dataSource($dataSource)
      ->title(['text', 'Olypmic Medals Won by Japan'])
      ->legend(['visible' => false])
      ->addSeriesItem($series)
      ->addXAxisItem($xAxis)
      ->addYAxisItem($yAxis)
      ->tooltip($tooltip);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
