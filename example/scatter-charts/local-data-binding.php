<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/chart_data.php';

require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->xField('price')
       ->yField('performance');

$dataSource = new \Kendo\Data\DataSource();

$dataSource->data(chart_price_performance());

$chart = new \Kendo\Dataviz\UI\Chart('chart');

$chart->title(['text' => 'Price-Performance Ratio'])
      ->dataSource($dataSource)
      ->addSeriesItem($series)
      ->tooltip(['visible' => true, 'template' => "#= '<b>$' + value.x + ' / ' + dataItem.family + ' ' + dataItem.model + ': ' + value.y + '%</b>' #"])
      ->addXAxisItem([
          'max' => 1000,
          'labels' => ['format' => '${0}'],
          'title' => ['text' => 'Price']
      ])
      ->addYAxisItem([
          'min' => 80,
          'labels' => ['format' => '{0}%'],
          'title' => ['text' => 'Performance Ratio']
      ])
      ->legend(['visible' => false])
      ->seriesDefaults(['type' => 'scatter']);
?>
<div class="demo-section k-content wide">
<?php
echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
