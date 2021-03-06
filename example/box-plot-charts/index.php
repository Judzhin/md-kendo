<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';
?>

<div class="demo-section k-content wide">
 
<?php
$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('boxPlot')
       ->data([
            ['lower' => 26.2, 'q1' => 38.3 , 'median' => 51.0, 'q3' => 61.45, 'upper' => 68.9, 'mean' => 49.0, 'outliers' => [18.3, 20, 70, 72, 5]],
            ['lower' => 26.4, 'q1' => 38.125, 'median' => 46.8 , 'q3' => 60.425, 'upper' => 66.8, 'mean' => 47.3, 'outliers' => [18, 69, 71.3, 71.5]],
            ['lower' => 31.6, 'q1' => 41.725, 'median' => 52.35, 'q3' => 62.175, 'upper' => 70.8, 'mean' => 52.3, 'outliers' => [14, 16.4, 74]],
            ['lower' => 34.4, 'q1' => 39.375, 'median' => 49.9 , 'q3' => 61.425, 'upper' => 69.2, 'mean' => 50.3, 'outliers' => [16, 18, 72, 72.5]],
            ['lower' => 29.9, 'q1' => 38.35, 'median' => 50.4, 'q3' => 60.875, 'upper' => 69.7, 'mean' => 49.9, 'outliers' => [19, 20, 76, 78]],
            ['lower' => 22.3, 'q1' => 36.875, 'median' => 48.9 , 'q3' => 62.65 , 'upper' => 70.3, 'mean' => 49.0, 'outliers' => [16.5, 17, 74, 75, 78]],
            ['lower' => 32.3, 'q1' => 39.5, 'median' => 54.1, 'q3' => 61.175, 'upper' => 67.3, 'mean' => 50.8, 'outliers' => [13, 14, 15, 74.3, 75.2, 76]],
            ['lower' => 28.5, 'q1' => 36.075, 'median' => 50.5 , 'q3' => 64.2, 'upper' => 70.4, 'mean' => 49.6, 'outliers' => [18, 22, 73.4, 75]],
            ['lower' => 33.6, 'q1' => 40.65, 'median' => 49.55, 'q3' => 62.8, 'upper' => 69.2, 'mean' => 51.1, 'outliers' => [17, 73]],
            ['lower' => 33.6, 'q1' => 38.6, 'median' => 47.9, 'q3' => 60.825, 'upper' => 67.0, 'mean' => 49.7, 'outliers' => [12, 13.5, 16, 73, 74.6, 77]],
            ['lower' => 31.9, 'q1' => 36.425, 'median' => 49.3, 'q3' => 61.825, 'upper' => 69.7, 'mean' => 49.4, 'outliers' => [17, 76]],
            ['lower' => 34.0, 'q1' => 41.225, 'median' => 51.15, 'q3' => 62.4, 'upper' => 68.8, 'mean' => 51.6, 'outliers' => [14.6, 17.3, 72.3, 74]]
        ]);

$categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
$categoryAxis->categories(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"])
             ->majorGridLines(['visible' => false]);

$chart = new \Kendo\Dataviz\UI\Chart('chart');

$chart->title(['text' => 'Monthly Mean Temperatures (&deg;F)'])
      ->legend(['visible' => false])
      ->addSeriesItem($series)
      ->addCategoryAxisItem($categoryAxis);

echo $chart->render();
?>
</div>
<?php require_once '../include/footer.php'; ?>
