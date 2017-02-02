<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';
require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->field('value')
       ->colorField('userColor');

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

$valueAxis->max(28)
          ->majorGridLines(['visible' => false])
          ->visible(false);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();

$categoryAxis->field('day')
             ->majorGridLines(['visible' => false])
             ->line(['visible' => false]);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->format('{0}%')
        ->template('#= category # - #= value #%');

$dataSource = new \Kendo\Data\DataSource();

$dataSource->data(chart_blog_comments());

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['align' => 'left', 'text' => 'Comments per day'])
      ->dataSource($dataSource)
      ->legend(['visible' => false])
      ->addSeriesItem($series)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->seriesDefaults([
          'type' => 'column',
          'labels' => [
              'visible' => true,
              'background' => 'transparent'
          ]
      ])
      ->tooltip($tooltip);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
