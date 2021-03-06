<?php
require_once '../lib/Kendo/Autoload.php';
require_once '../include/header.php';
?>

<div class="demo-section k-content">
    <div class="k-rtl">
        <h4>Select a state in USA:</h4>
<?php

$states = ['Alabama', 'Alaska', 'American Samoa', 'Arizona', 'Arkansas', 'California',
            'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia',
            'Guam', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
            'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
            'Northern Marianas Islands', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
            'Puerto Rico', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee',
            'Texas', 'Utah', 'Vermont', 'Virginia', 'Virgin Islands', 'Washington',
            'West Virginia', 'Wisconsin', 'Wyoming'];

$dataSource = new \Kendo\Data\DataSource();
$dataSource->data($states);

$autoComplete = new \Kendo\UI\AutoComplete('states');
$autoComplete->dataSource($dataSource)
             ->placeholder('Select state ...')
             ->attr('style', 'width: 100%;');

echo $autoComplete->render();
?>
        <div class="demo-hint">Hint: type <strong>m</strong></div>
    </div>
</div>
<?php require_once '../include/footer.php'; ?>
