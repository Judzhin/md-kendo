<?php

require_once '../include/header.php';
require_once '../lib/Kendo/Autoload.php';

?>

    <div class="demo-section k-content">
        <h4>PanelBar with images</h4>

<?php
    $panelbar = new \Kendo\UI\PanelBar('panelbar-images');

    $baseball = new \Kendo\UI\PanelBarItem("Baseball");
    $baseball->imageUrl("../content/shared/icons/sports/baseball.png");
    $baseball->addItem(
            ["text" => "Top News", "imageUrl" => "../content/shared/icons/16/star.png"],
            ["text" => "Photo Galleries", "imageUrl" => "../content/shared/icons/16/photo.png"],
            ["text" => "Videos Records", "imageUrl" => "../content/shared/icons/16/video.png"],
            ["text" => "Radio Records", "imageUrl" => "../content/shared/icons/16/speaker.png"]
        );

    $golf = new \Kendo\UI\PanelBarItem("Golf");
    $golf->imageUrl("../content/shared/icons/sports/golf.png");
    $golf->addItem(
            ["text" => "Top News", "imageUrl" => "../content/shared/icons/16/star.png"],
            ["text" => "Photo Galleries", "imageUrl" => "../content/shared/icons/16/photo.png"],
            ["text" => "Videos Records", "imageUrl" => "../content/shared/icons/16/video.png"],
            ["text" => "Radio Records", "imageUrl" => "../content/shared/icons/16/speaker.png"]
        );

    $swimming = new \Kendo\UI\PanelBarItem("Swimming");
    $swimming->imageUrl("../content/shared/icons/sports/swimming.png");
    $swimming->addItem(
            ["text" => "Top News", "imageUrl" => "../content/shared/icons/16/star.png"],
            ["text" => "Photo Galleries", "imageUrl" => "../content/shared/icons/16/photo.png"]
        );

    $snowboarding = new \Kendo\UI\PanelBarItem("Snowboarding");
    $snowboarding->imageUrl("../content/shared/icons/sports/snowboarding.png");
    $snowboarding->addItem(
            ["text" => "Photo Galleries", "imageUrl" => "../content/shared/icons/16/photo.png"],
            ["text" => "Videos Records", "imageUrl" => "../content/shared/icons/16/video.png"]
        );

    $panelbar->dataSource([
        $baseball, $golf, $swimming, $snowboarding
    ]);

    echo $panelbar->render();
?>
    </div>

    <div class="demo-section k-content">

        <h4>PanelBar with sprites</h4>

<?php
    $panelbar = new \Kendo\UI\PanelBar('panelbar-sprites');

    $brazil = new \Kendo\UI\PanelBarItem("Brazil");
    $brazil->spriteCssClass("brazilFlag");
    $brazil->addItem(
            ["text" => "History", "spriteCssClass" => "historyIcon"],
            ["text" => "Geography", "spriteCssClass" => "geographyIcon"]
        );

    $india = new \Kendo\UI\PanelBarItem("India");
    $india->spriteCssClass("indiaFlag");
    $india->addItem(
            ["text" => "Top News", "spriteCssClass" => "historyIcon"],
            ["text" => "Photo Galleries", "spriteCssClass" => "geographyIcon"]
        );

    $netherlands = new \Kendo\UI\PanelBarItem("Netherlands");
    $netherlands->spriteCssClass("netherlandsFlag");
    $netherlands->addItem(
            ["text" => "Top News", "spriteCssClass" => "historyIcon"],
            ["text" => "Photo Galleries", "spriteCssClass" => "geographyIcon"]
        );

    $panelbar->dataSource([
        $brazil, $india, $netherlands
    ]);

    echo $panelbar->render();
?>
    </div>

    <style>
        .k-panel {
            -webkit-transform: translatez(0);
        }
        #panelbar-sprites .k-sprite {
            background-image: url("../content/shared/styles/flags.png");
        }
        .brazilFlag {
            background-position: 0 0;
        }
        .indiaFlag {
            background-position: 0 -32px;
        }
        .netherlandsFlag {
            background-position: 0 -64px;
        }
        .historyIcon {
            background-position: 0 -96px;
        }
        .geographyIcon {
            background-position: 0 -128px;
        }
    </style>

<?php require_once '../include/footer.php'; ?>
