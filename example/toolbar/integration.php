<?php
require_once '../lib/Kendo/Autoload.php';

require_once '../include/header.php';

$toolbar = new \Kendo\UI\ToolBar('toolbar');

$toolbar->addItem(
    ["template" => "<label>SHAPE:</label><input id='shape' />"],
    ["type" => "separator"],
    ["template" => "<label>H:</label><input id='height' style='width: 70px;' type='text' />"],
    ["template" => "<label>W:</label><input id='width' style='width: 70px;' type='text' />"],
    ["type" => "separator"],
    ["template" => "<label>POSITION:</label>"],
    [
        "type" => "buttonGroup",
        "buttons" => [
            ["text" => "Left", "togglable" => true, "group" => "position"],
            ["text" => "Center", "togglable" => true, "group" => "position", "selected" => true],
            ["text" => "Right", "togglable" => true, "group" => "position"]
        ]
    ],
    ["type" => "separator"],
    ["template" => "<label>BACKGROUND:</label><div type='color' id='background-picker'></div>"],
    ["type" => "separator"],
    ["template" => "<label>BORDER:</label><div type='color' id='border-picker'></div>"],
    ["template" => "<input id='border-style' style='width: 100px;' />"]
)
        ->resizable(false)
        ->toggle("onToggle");

?>

<div id="example">
    <div class="demo-section k-content wide">
        <h4>Customize the element</h4>
        <?php echo $toolbar->render(); ?>
    </div>
    <div class="box wide">
        <div id="target"></div>
    </div>
</div>

<script>
    function onToggle(e) {
        var position = e.target.text().toLowerCase();

        if (position == "center") {
            position = "none";
        }

        target.css("float", position);
    }

    var target;

    $(document).ready(function() {
        target = $("#target");

        $("#shape").kendoDropDownList({
            dataTextField: "text",
            dataValueField: "value",
            dataSource: [
                { text: "Rectangle", value: 0 },
                { text: "Rounded rectangle", value: 30 },
                { text: "Circle/Ellipse", value: 300 }
            ],
            change: function() {
                target.css("border-radius", parseInt(this.value()));
            }
        });

        $("#border-style").kendoDropDownList({
            dataTextField: "text",
            dataValueField: "value",
            dataSource: [
                { text: "Solid", value: "solid" },
                { text: "Dashed", value: "dashed" },
                { text: "Dotted", value: "dotted" }
            ],
            change: function() {
                target.css("border-style", this.value());
            }
        });

        $("#background-picker").kendoColorPicker({
            value: "#ffffff",
            buttons: false,
            change: function() {
                target.css("background-color", this.value());
            }
        });

        $("#border-picker").kendoColorPicker({
            value: "#333333",
            buttons: false,
            change: function() {
                target.css("border-color", this.value());
            }
        });

        $("#height, #width").kendoNumericTextBox({
            value: 150,
            decimals: 0,
            format: "n0",
            max: 300,
            min: 50,
            change: function() {
                var dimension = this.element.attr("id");

                target.css(dimension, this.value());
            }
        });
    });
</script>

<style>
    #toolbar {
        margin: 1em 0;
        padding: 0 .9em;
    }

    #toolbar label {
        font-size: .85em;
        font-weight: bold;
    }
    #toolbar .k-separator {
        margin: 0 .9em;
    }
    #target {
        border: 3px solid #333333;
        border-radius: 0;
        background-color: #ffffff;
        height: 150px;
        width: 150px;
        margin: 0 auto;
    }
</style>

<?php require_once '../include/footer.php'; ?>
