<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('bubble')
       ->xField('growth')
       ->yField('jobs')
       ->sizeField('applications')
       ->categoryField('company');

$dataSource = new \Kendo\Data\DataSource();
$dataSource->data([
      ['growth' => -2500, 'jobs' => 50000, 'applications' => 500000, 'company' => 'Microsoft'],
      ['growth' => 500, 'jobs' => 110000, 'applications' => 7600000, 'company' => 'Starbucks'],
      ['growth' => 7000, 'jobs' => 19000, 'applications' => 700000, 'company' => 'Google'],
      ['growth' => 1400, 'jobs' => 150000, 'applications' => 700000, 'company' => 'Publix Super Markets'],
      ['growth' => 2400, 'jobs' => 30000, 'applications' => 300000, 'company' => 'PricewaterhouseCoopers'],
      ['growth' => 2450, 'jobs' => 34000, 'applications' => 90000, 'company' => 'Cisco'],
      ['growth' => 2700, 'jobs' => 34000, 'applications' => 400000, 'company' => 'Accenture'],
      ['growth' => 2900, 'jobs' => 40000, 'applications' => 450000, 'company' => 'Deloitte'],
      ['growth' => 3000, 'jobs' => 55000, 'applications' => 900000, 'company' => 'Whole Foods Market']
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
      ->dataSource($dataSource)
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
