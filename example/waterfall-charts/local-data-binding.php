<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';
require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$cashFlowData = [
    ['period' => 'Beginning\nBalance', 'amount' => 50000],
    ['period' => 'Jan', 'amount' => 17000],
    ['period' => 'Feb', 'amount' => 14000],
    ['period' => 'Mar', 'amount' => -12000],
    ['period' => 'Q1', 'summary' => 'runningTotal'],
    ['period' => 'Apr', 'amount' => -22000],
    ['period' => 'May', 'amount' => -18000],
    ['period' => 'Jun', 'amount' => 10000],
    ['period' => 'Q2', 'summary' => 'runningTotal'],
    ['period' => 'Ending\nBalance', 'summary' => 'total']
];

$dataSource = new \Kendo\Data\DataSource();
$dataSource->data($cashFlowData);

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('waterfall')
       ->field('amount')
       ->categoryField('period')
       ->summaryField('summary')
       ->color(new \Kendo\JavaScriptFunction('pointColor'))
       ->labels(['visible' => true, 'format' => 'C0', 'position' => 'insideEnd']);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->labels(['format' => 'C0']);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Cash flow'])
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
