<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$series = new \Kendo\Dataviz\UI\ChartSeriesItem();
$series->type('funnel')
       ->field('visitors')
       ->dynamicHeight(false)
       ->dynamicSlope(true)
       ->labels([
          'color' => 'black',
          'visible' => true,
          'background' => 'transparent',
          'align' => 'left',
          'template' => '#= dataItem.description #: #=value#',
       ])
       ->categoryField('description');

$dataSourceBefore = new \Kendo\Data\DataSource();

$dataSourceBefore->data([
    ['description' => 'All Visitors', 'visitors' => 23945],
    ['description' => 'Tried the Demos', 'visitors' => 19165],
    ['description' => 'Downloaded', 'visitors' => 13984],
    ['description' => 'Requested a Quote', 'visitors' => 3216],
    ['description' => 'Purchased', 'visitors' => 1673],
]);

$before = new \Kendo\Dataviz\UI\Chart('before');

$before->title(['text' => 'Before optimization'])
      ->dataSource($dataSourceBefore)
      ->addSeriesItem($series)
      ->legend(['visible' => false])
      ->tooltip(['visible' => true, 'template' => '#= dataItem.description # #= kendo.format("{0:p}",data.value/dataItem.parent()[0].visitors)#']);

$dataSourceAfter = new \Kendo\Data\DataSource();

$dataSourceAfter->data([
    ['description' => 'All Visitors', 'visitors' => 28536],
    ['description' => 'Tried the Demos', 'visitors' => 26539],
    ['description' => 'Downloaded', 'visitors' => 23088],
    ['description' => 'Requested a Quote', 'visitors' => 13853],
    ['description' => 'Purchased', 'visitors' => 9697],
]);

$after = new \Kendo\Dataviz\UI\Chart('after');

$after->title(['text' => 'After optimization'])
      ->dataSource($dataSourceAfter)
      ->addSeriesItem($series)
      ->legend(['visible' => false])
      ->tooltip(['visible' => true, 'template' => '#= dataItem.description # #= kendo.format("{0:p}",data.value/dataItem.parent()[0].visitors)#']);
?>

<div class="demo-section k-content wide">
    <h4>Website optimization stats</h4>
    <?php echo $before->render();?>
    <?php echo $after->render();?>
</div>

<style>
    .demo-section {
        text-align: center;
    }

    .k-chart {
        display: inline-block;
        width: 30%;
        height: 350px;
    }

    #before {
        margin-right: 20px;
    }
</style>

<?php require_once '../include/footer.php'; ?>
