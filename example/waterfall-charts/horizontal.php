<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';
require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$requestData = [
    ['caption' => 'DNS Lookup', 'elapsed' => 20],
    ['caption' => 'Connecting', 'elapsed' => 122],
    ['caption' => 'Sending', 'elapsed' => 30],
    ['caption' => 'Waiting', 'elapsed' => 421],
    ['caption' => 'Receiving', 'elapsed' => 357],
    ['caption' => 'Total', 'summary' => 'total']
];

$dataSource = new \Kendo\Data\DataSource();
$dataSource->data($requestData);

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('horizontalWaterfall')
       ->field('elapsed')
       ->categoryField('caption')
       ->summaryField('summary')
       ->color(new \Kendo\JavaScriptFunction('pointColor'));

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->labels(['format' => '{0} ms']);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Request latency breakdown'])
      ->dataSource($dataSource)
      ->legend(['visible' => false])
      ->addSeriesItem($series)
      ->axisDefaults(['majorGridLines' => ['visible' => false]])
      ->addValueAxisItem($valueAxis);

echo $chart->render();
?>
</div>
<?php
require_once '../include/footer.php';
?>
<script>
    var palette = [
        "#95c3cd", "#abc75b", "#c6816f", "#968cb2", "#c0c0c0", "#2ba6ff"
    ];

    function pointColor(point) {
        return palette[point.index % palette.length];
    }
</script>
