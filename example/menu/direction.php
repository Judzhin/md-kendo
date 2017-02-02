<?php

require_once '../include/header.php';
require_once '../lib/Kendo/Autoload.php';

?>

<div class="demo-section k-content">
    <?php
        $menu = new \Kendo\UI\Menu('menu');

    function addSubCategories($item)
    {
        $footwear = new \Kendo\UI\MenuItem('Footwear');
        $footwear->addItem(
        new \Kendo\UI\MenuItem('Leisure Trainers'),
        new \Kendo\UI\MenuItem('Running Shoes'),
        new \Kendo\UI\MenuItem('Outdoor Footwear'),
        new \Kendo\UI\MenuItem('Sandals/Flip Flops'),
        new \Kendo\UI\MenuItem('Footwear Accessories')
        );

        $leisure = new \Kendo\UI\MenuItem('Leisure Clothing');
        $leisure->addItem(
                new \Kendo\UI\MenuItem('T-Shirts'),
                new \Kendo\UI\MenuItem('Hoodies & Sweatshirts'),
                new \Kendo\UI\MenuItem('Jackets'),
                new \Kendo\UI\MenuItem('Pants'),
                new \Kendo\UI\MenuItem('Shorts')
        );

        $sports = new \Kendo\UI\MenuItem('Sports Clothing');
        $sports->addItem(
        new \Kendo\UI\MenuItem('Football'),
        new \Kendo\UI\MenuItem('Basketball'),
        new \Kendo\UI\MenuItem('Golf'),
        new \Kendo\UI\MenuItem('Tennis'),
        new \Kendo\UI\MenuItem('Swimwear')
        );

        $accessories = new \Kendo\UI\MenuItem('Accessories');

        $item->addItem($footwear, $leisure, $sports, $accessories);
    }

        $mens = new \Kendo\UI\MenuItem('Men\'s');
        $womens = new \Kendo\UI\MenuItem('Women\'s');
        $boys = new \Kendo\UI\MenuItem('Boy\'s');
        $girls = new \Kendo\UI\MenuItem('Girl\'s');

        addSubCategories($mens);
        addSubCategories($womens);
        addSubCategories($boys);
        addSubCategories($girls);

        $menu->addItem($mens, $womens, $boys, $girls);

        echo $menu->render();
    ?>
</div>
 <div class="box">
    <h4>Animation Settings</h4>
    <ul class="options">
        <li>
            <input id="default" name="direction" type="radio" checked="checked" /> <label for="default">default / bottom</label>
        </li>
        <li>
            <input id="left" name="direction" type="radio" /> <label for="left">left</label>
        </li>
        <li>
            <input id="right" name="direction" type="radio" /> <label for="right">right</label>
        </li>
        <li>
            <input id="top" name="direction" type="radio" /> <label for="top">top</label>
        </li>
        <li>
            <input id="custom" name="direction" type="radio" /> <label for="custom">custom:</label>
            <input id="customValue" type="text" value="top left" class="k-textbox customValue" />
        </li>
    </ul>
    <br />
    <a class="k-button" id="apply" href="#" style="width: 80px;">Apply</a>
</div>
<script>
    $(document).ready(function() {
        var original = $("#menu").clone(true);

        original.find(".k-state-active").removeClass("k-state-active");

        $("#apply").click( function(e) {
            e.preventDefault();
            var menu = $("#menu"),
                clone = original.clone(true);

            menu.data("kendoMenu").close($("#menu .k-link"));

            menu.replaceWith(clone);

            initMenu();
        });
        var getDirection = function () {
            var checked = $("input[type=radio]:checked")[0].id;
            return /custom|customValue/.test(checked) ? $("#customValue").val() : checked;
        };

        var initMenu = function () {
            $("#menu").kendoMenu({
                direction: getDirection()
            });
        };
    });
</script>

<?php require_once '../include/footer.php'; ?>

