<?php

require_once '../include/header.php';
require_once '../lib/Kendo/Autoload.php';

?>

<div class="demo-section hidden-on-narrow k-content wide">
    <div class="product-display">
        <img class="product-image" src="../content/web/colorpicker/sofa-ffcc33.jpg" alt="" width="285" height="149">

<?php
    $colorChooser = new \Kendo\UI\ColorPalette('color-chooser');

    $colorChooser
            ->tileSize(30)
            ->change('preview')
            ->value('#ffcc33')
            ->palette([
                '#ddd1c3', '#d2d2d2', '#746153', '#3a4c8b', '#ffcc33', '#fb455f', '#ac120f'
            ])
            ->change('onChange');

    echo $colorChooser->render();
?>
<script>
    function onChange() {
        var colorId = this.value().substring(1);
        $(".product-image").attr("src", "../content/web/colorpicker/sofa-" + colorId + ".jpg");
    }
</script>
   </div>

    <div class="product-info">
        <h3>Natural Linen Loveseat</h3>
        <p>Add comfortable seating to your living room or den. The soft foam in the cushions make this loveseat a great place to relax.</p>
        <dl>
            <dt>Dimensions</dt>
            <dd>34" D x 52" W x 31" H</dd>

            <dt>Materials</dt>
            <dd>Wood, Fabric, Foam</dd>

            <dt>Assembly</dt>
            <dd>No Assembly Required</dd>
        </dl>

        <button class="k-primary k-button">Add to cart</button>
    </div>
</div>
    
    <div class="responsive-message"></div>

<style>

    .demo-section {
        overflow: hidden;
        padding: 0;
    }

    .product-display, .product-info {
        float: left;
    }

    .product-display {
        background-color: #fff;
        background-image: url();
        height: 380px;
        width: 450px;
        margin: -10px 4%;
        text-align: center;
    }

    .product-image {
        display: block;
        margin: 56px auto;
    }

    .product-info {
        width: 300px;
    }

    .product-info h3 {
        font-size: 1.5em;
        padding: 1.615em 0 .6em;
    }

    .product-info dl {
        margin: 2em 0;
        overflow: hidden;
    }

    .product-info dt,
    .product-info dd {
        float: left;
        margin: 0;
        padding: 0 0 .7em 0;
    }

    .product-info dt {
        font-weight: bold;
        width: 34%;
        text-align: right;
        padding-right: 2.4%;
    }

    .product-info dt:after {
        content: ":";
    }

    .product-info dd {
        width: 63.6%;
    }

    .product-info button {
    width: 60%;
    height: 32px;
    text-align: center;
    }
</style>

<?php require_once '../include/footer.php'; ?>

