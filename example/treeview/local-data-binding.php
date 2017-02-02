<?php

require_once '../include/header.php';
require_once '../lib/Kendo/Autoload.php';

?>
 <div class="demo-section k-content">
    <h4>Inline data (default settings)</h4>
    <?php
        $inlineDefault = new \Kendo\Data\HierarchicalDataSource();
        $inlineDefault -> data([
            ['text' => 'Furniture', 'items' => [
                ['text' => 'Tables & Chairs'],
                ['text' => 'Sofas'],
                ['text' => 'Occasional Furniture']
            ]],
            ['text' => 'Decor', 'items' => [
                ['text' => 'Bed Linen'],
                ['text' => 'Curtains & Blinds'],
                ['text' => 'Carpets']
            ]]
        ]);

        $treeviewLeft = new \Kendo\UI\TreeView('treeview-left');
        $treeviewLeft -> dataSource($inlineDefault);

        echo $treeviewLeft->render();
    ?>
</div>

 <div class="demo-section k-content">
    <h4>Inline data</h4>
    <?php

        $model = new \Kendo\Data\HierarchicalDataSourceSchemaModel();
        $model ->children("subCategories");

        $schema = new \Kendo\Data\HierarchicalDataSourceSchema();
        $schema->model($model);

        $inline = new \Kendo\Data\HierarchicalDataSource();
        $inline -> schema($schema)
                -> data([
                    ['categoryName' => 'Storage', 'subCategories' => [
                        ['subCategoryName' => 'Wall Shelving'],
                        ['subCategoryName' => 'Floor Shelving'],
                        ['subCategoryName' => 'Kids Storage']
                    ]],
                    ['categoryName' => 'Lights', 'subCategories' => [
                        ['subCategoryName' => 'Ceiling'],
                        ['subCategoryName' => 'Table'],
                        ['subCategoryName' => 'Floor']
                    ]]
                ]);

        $treeviewRight = new \Kendo\UI\TreeView('treeview-right');
        $treeviewRight -> dataSource($inline)
                       -> dataTextField(['categoryName', 'subCategoryName']);

        echo $treeviewRight->render();
    ?>  
</div>

<style>
     #example {
        text-align: center;
    }

    .demo-section {
        display: inline-block;
        vertical-align: top;
        text-align: left;
        margin: 0 2em;
    }
</style>

<?php require_once '../include/footer.php'; ?>
