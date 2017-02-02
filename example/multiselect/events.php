<?php

require_once '../lib/DataSourceResult.php';
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$multiselect = new \Kendo\UI\MultiSelect('select');

$multiselect->dataTextField('text')
         ->dataValueField('value')
         ->dataSource([
            ['text' => 'Africa', 'value' => '1'],
            ['text' => 'Europe', 'value' => '2'],
            ['text' => 'Asia', 'value' => '3'],
            ['text' => 'North America', 'value' => '4'],
            ['text' => 'South America', 'value' => '5'],
            ['text' => 'Antarctica', 'value' => '6'],
            ['text' => 'Australia', 'value' => '7']
         ])
         ->select('onSelect')
         ->dataBound('onDataBound')
         ->filtering('onFiltering')
         ->change('onChange')
         ->close('onClose')
         ->open('onOpen');
?>

<div class="demo-section k-content">
    <h4>Select Continents</h4>
<?php
echo $multiselect->render();
?>
</div>

<script>
    function onOpen() {
        if ("kendoConsole" in window) {
            kendoConsole.log("event: open");
        }
    }

    function onDataBound(){
        if ("kendoConsole" in window) {
            kendoConsole.log("event: dataBound");
        }
    }

    function onFiltering() {
        kendoConsole.log("event :: filtering");
    };

    function onClose() {
        if ("kendoConsole" in window) {
            kendoConsole.log("event: close");
        }
    }

    function onChange() {
        if ("kendoConsole" in window) {
            kendoConsole.log("event: change");
        }
    }

    function onSelect(e) {
        if ("kendoConsole" in window) {
            var dataItem = this.dataSource.view()[e.item.index()];
            kendoConsole.log("event: select (" + dataItem.text + " : " + dataItem.value + ")" );
        }
    };
</script>
<div class="box">
    <h4>Console log</h4>
    <div class="console"></div>
</div>
<?php require_once '../include/footer.php'; ?>
