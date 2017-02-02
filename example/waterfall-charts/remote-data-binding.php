<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $result = [
        ['name' => 'List', 'value' => 100],
        ['name' => 'List\nDiscount', 'value' => -5],
        ['name' => 'Invoice', 'summary' => 'total'],
        ['name' => 'Invoice\nDiscount', 'value' => -6],
        ['name' => 'Rebates', 'value' => -3],
        ['name' => 'Errors', 'value' => -1.1],
        ['name' => 'Pocket\nPrice', 'summary' => 'total'],
        ['name' => 'Cost', 'value' => -57.1],
        ['name' => 'Handling', 'value' => -0.5],
        ['name' => 'Pocket\nMargin', 'summary' => 'total']
    ];

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';
?>

<div class="demo-section k-content wide">
<?php
$transport = new \Kendo\Data\DataSourceTransport();
$transport->read(['url' => 'remote-data-binding.php', 'type' => 'POST', 'dataType' => 'json']);

$dataSource = new \Kendo\Data\DataSource();
$dataSource->transport($transport);

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('waterfall')
       ->field('value')
       ->categoryField('name')
       ->summaryField('summary')
       ->color(new \Kendo\JavaScriptFunction('pointColor'))
       ->labels(['visible' => true, 'format' => 'C', 'position' => 'outsideEnd']);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->labels(['format' => 'C']);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => '"Pocket price" waterfall'])
      ->dataSource($dataSource)
      ->legend(['visible' => false])
      ->addSeriesItem($series)
      ->addValueAxisItem($valueAxis);

echo $chart->render();
?>
</div>
<?php
require_once '../include/footer.php';
?>
<script>
    function pointColor(point) {
        var summary = point.dataItem.summary;
        if (summary) {
            return summary == "total" ? "#555" : "gray";
        }

        if (point.value > 0) {
            return "green";
        } else {
            return "red";
        }
    }
</script>
