<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

require_once '../include/header.php';

$total = new \Kendo\Dataviz\UI\ChartSeriesItem();
$total->name('Total Visits')
      ->data([56000, 63000, 74000, 91000, 117000, 138000])
      ->markers(['type' => 'square']);

$unique = new \Kendo\Dataviz\UI\ChartSeriesItem();
$unique->name('Unique visitors')
       ->data([52000, 34000, 23000, 48000, 67000, 83000]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->line(['visible' => false]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'])
             ->majorGridLines(['visible' => false]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Site Visitors Stats /thousands/'])
    ->legend(['position' => 'bottom'])
    ->addValueAxisItem($valueAxis)
    ->addCategoryAxisItem($categoryAxis)
    ->seriesDefaults(['type' => 'column', 'stack' => true])
    ->addSeriesItem($total, $unique)
    ->tooltip(['visible' => true, 'format' => '{0}']);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<div class="box wide">
    <div class="box-col">
        <h4>API Functions</h4>
        <ul class="options">
            <li>
                <input id="typeColumn" name="seriesType"
                            type="radio" value="column" checked="checked" autocomplete="off" />
                <label for="typeColumn">Columns</label>
            </li>
            <li>
                <input id="typeBar" name="seriesType"
                            type="radio" value="bar" autocomplete="off" />
                <label for="typeBar">Bars</label>
            </li>
            <li>
                <input id="typeLine" name="seriesType"
                            type="radio" value="line" autocomplete="off" />
                <label for="typeLine">Lines</label>
            </li>
            <li>
                <input id="stack" type="checkbox" autocomplete="off" checked="checked" />
                <label for="stack">Stacked</label>
            </li>
        </ul>
        <p>
            <strong>refresh()</strong> will be called on each configuration change
        </p>
    </div>
</div>
<script>
    $(".options").bind("change", refresh);

    function refresh() {
        var chart = $("#chart").data("kendoChart"),
            series = chart.options.series,
            type = $("input[name=seriesType]:checked").val(),
            stack = $("#stack").prop("checked");

        for (var i = 0, length = series.length; i < length; i++) {
            series[i].stack = stack;
            series[i].type = type;
        };

        chart.refresh();
    }
</script>
<?php require_once '../include/footer.php'; ?>
