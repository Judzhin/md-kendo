<?php

namespace Kendo\Dataviz\UI;

class ChartYAxisItemLine extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The color of the lines. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartYAxisItemLine
    */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
    * The dash type of the line.The following dash types are supported:
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartYAxisItemLine
    */
    public function dashType($value)
    {
        return $this->setProperty('dashType', $value);
    }

    /**
    * If set to true the chart will display the y axis lines. By default the y axis lines are visible.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\ChartYAxisItemLine
    */
    public function visible($value)
    {
        return $this->setProperty('visible', $value);
    }

    /**
    * The width of the line in pixels. Also affects the major and minor ticks, but not the grid lines.
#### Example - set the scatter chart y axis line width
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartYAxisItemLine
    */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

//<< Properties
}
