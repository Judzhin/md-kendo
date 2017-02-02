<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';
require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('donut')
       ->data([
            ['category' => 'Football', 'value' => 35],
            ['category' => 'Basketball', 'value' => 25],
            ['category' => 'Volleyball', 'value' => 20],
            ['category' => 'Rugby', 'value' => 10],
            ['category' => 'Tennis', 'value' => 10]
       ]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');

$chart->title(['text' => 'What is you favourite sport?'])
      ->addSeriesItem($series)
      ->legend(['position' => 'top'])
      ->tooltip(['visible' => true, 'template' => "#= category # - #= kendo.format('{0:P}', percentage) #"])
      ->seriesDefaults([
          'labels' => [
              'template' => "#= category # - #= kendo.format('{0:P}', percentage)#",
              'position' => 'outsideEnd',
              'visible' => true,
              'background' => 'transparent'
          ]
      ]);

echo $chart->render();
?>
</div>
<div class="box wide">
        <div class="box-col">
            <h4>Labels Configuration</h4>
            <ul class="options">
                <li>
                    <input id="labels" checked="checked" type="checkbox" autocomplete="off" />
                    <label for="labels">Show labels</label>
                </li>
                <li>
                    <input id="alignCircle" name="alignType" type="radio"
                           value="circle" checked="checked" autocomplete="off" />
                    <label for="alignCircle">Aligned in circle</label>
                </li>
                <li>
                    <input id="alignColumn" name="alignType" type="radio"
                           value="column" autocomplete="off" />
                    <label for="alignColumn">Aligned in columns</label>
                </li>
            </ul>
        </div>
    </div>
<script>
$(document).ready(function() {
    $(".box").bind("change", refresh);
});

function refresh() {
    var chart = $("#chart").data("kendoChart"),
        pieSeries = chart.options.series[0],
        labels = $("#labels").prop("checked"),
        alignInputs = $("input[name='alignType']"),
        alignLabels = alignInputs.filter(":checked").val();

    chart.options.transitions = false;
    pieSeries.labels.visible = labels;
    pieSeries.labels.align = alignLabels;

    alignInputs.attr("disabled", !labels);

    chart.refresh();
}
</script>
<?php require_once '../include/footer.php'; ?>
