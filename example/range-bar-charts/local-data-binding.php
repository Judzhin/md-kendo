<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';
require_once '../include/header.php';
?>
<div class="demo-section k-content wide">
<?php
$seriesA = new \Kendo\Dataviz\UI\ChartSeriesItem();
$seriesA->name('Task A')
        ->fromField('fromA')
        ->toField('toA');

$seriesB = new \Kendo\Dataviz\UI\ChartSeriesItem();
$seriesB->name('Task B')
        ->fromField('fromB')
        ->toField('toB');

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->max(100);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();

$categoryAxis->field('day')
             ->majorGridLines(['visible' => false]);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->template('#= value.from # - #= value.to #');

$dataSource = new \Kendo\Data\DataSource();

$dataSource->data(task_completeness());

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Task Completeness'])
      ->dataSource($dataSource)
      ->legend(['visible' => true, 'position' => 'top'])
      ->addSeriesItem($seriesA, $seriesB)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->seriesDefaults(['type' => 'rangeBar'])
      ->tooltip($tooltip);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>