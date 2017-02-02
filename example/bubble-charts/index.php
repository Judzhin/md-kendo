<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('bubble')
       ->data([
          ['x' => -2500, 'y' => 50000, 'size' => 500000, 'category' => 'Microsoft'],
          ['x' => 500, 'y' => 110000, 'size' => 7600000, 'category' => 'Starbucks'],
          ['x' => 7000, 'y' => 19000, 'size' => 700000, 'category' => 'Google'],
          ['x' => 1400, 'y' => 150000, 'size' => 700000, 'category' => 'Publix Super Markets'],
          ['x' => 2400, 'y' => 30000, 'size' => 300000, 'category' => 'PricewaterhouseCoopers'],
          ['x' => 2450, 'y' => 34000, 'size' => 90000, 'category' => 'Cisco'],
          ['x' => 2700, 'y' => 34000, 'size' => 400000, 'category' => 'Accenture'],
          ['x' => 2900, 'y' => 40000, 'size' => 450000, 'category' => 'Deloitte'],
          ['x' => 3000, 'y' => 55000, 'size' => 900000, 'category' => 'Whole Foods Market']
       ]);

$xAxis = new \Kendo\Dataviz\UI\ChartXAxisItem();
$xAxis->labels(['format' => '{0:N0}', 'skip' => 1])
      ->axisCrossingValue(-5000)
      ->majorUnit(2000)
      ->addPlotBand(['from' => -5000, 'to' => 0, 'color' => '#00f', 'opacity' => 0.05]);

$yAxis = new \Kendo\Dataviz\UI\ChartYAxisItem();
$yAxis->labels(['format' => '{0:N0}'])
      ->line(['width' => 0]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->title(['text' => 'Job Growth for 2011'])
      ->legend(['visible' => false])
      ->addXAxisItem($xAxis)
      ->addYAxisItem($yAxis)
      ->tooltip(['visible' => true, 'format' => '{3}: {2:N0} applications', 'opacity' => 1])
      ->addSeriesItem($series);
?>
<div class="demo-section k-content wide">
    <?= $chart->render() ?>
    <ul class="k-content">
        <li>Circle size shows number of job applicants</li>
        <li>Vertical position shows number of employees</li>
        <li>Horizontal position shows job growth</li>
    </ul>
</div>

<style>
.demo-section {
    position: relative;
}

.demo-section ul {
    font-size: 11px;
    margin: 63px 30px 0 0;
    padding: 30px;
    position: absolute;
    right: 0;
    top: 0;
    text-transform: uppercase;
    width: 146px;
    height: 94px;
}
</style>
<?php require_once '../include/footer.php'; ?>