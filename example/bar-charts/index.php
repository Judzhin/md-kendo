<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$total = new \Kendo\Dataviz\UI\ChartSeriesItem();
$total->name('Total Visits')
      ->data([56000, 63000, 74000, 91000, 117000, 138000]);

$unique = new \Kendo\Dataviz\UI\ChartSeriesItem();
$unique->name('Unique visitors')
       ->data([52000, 34000, 23000, 48000, 67000, 83000]);

$valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();
$valueAxis->max(140000)
          ->line(['visible' => false])
          ->minorGridLines(['visible' => true]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'])
             ->majorGridLines(['visible' => false]);

$tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
$tooltip->visible(true)
        ->template('#= series.name #: #= value #');

$chart = new \Kendo\Dataviz\UI\Chart('chart');
$chart->addSeriesItem($total, $unique)
      ->addValueAxisItem($valueAxis)
      ->addCategoryAxisItem($categoryAxis)
      ->legend(['visible' => false])
      ->seriesDefaults(['type' => 'bar'])
      ->title(['text' => 'Site Visitors Stats \n /thousands/'])
      ->chartArea(['background' => 'transparent'])
      ->tooltip($tooltip);
?>
<div class="demo-section k-content wide">

<?php
echo $chart->render();
?>

</div>
<?php require_once '../include/footer.php'; ?>
