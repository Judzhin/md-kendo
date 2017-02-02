<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$weather = new \Kendo\Dataviz\UI\ChartSeriesItem();
$weather
  ->data([
     [5, 11], [5, 13], [7, 15], [10, 19], [13, 23], [17, 28],
     [20, 30], [20, 30], [17, 26], [13, 22], [9, 16], [6, 13]
    ])
  ->labels([
    'visible' => true,
    'from' => [
      'template' => "#=value.from# °C"
    ],
    'to' => [
      'template' => "#=value.to# °C"
    ]
  ]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories(["January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"]);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->template("Avg Min Temp : #= value.from # °C <br> Avg Max Temp : #= value.to # °C");

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->addSeriesItem($weather)
      ->addCategoryAxisItem($categoryAxis)
      ->seriesDefaults(['type' => 'rangeColumn'])
      ->title(['text' => 'Average Weather Conditions'])
      ->tooltip($tooltip);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
