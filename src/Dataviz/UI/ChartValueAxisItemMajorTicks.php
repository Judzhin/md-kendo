<?php

namespace Kendo\Dataviz\UI;

class ChartValueAxisItemMajorTicks extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The color of the value axis major ticks lines. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMajorTicks
    */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
    * The length of the tick line in pixels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMajorTicks
    */
    public function size($value)
    {
        return $this->setProperty('size', $value);
    }

    /**
    * If set to true the chart will display the value axis major ticks. By default the value axis major ticks are visible.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMajorTicks
    */
    public function visible($value)
    {
        return $this->setProperty('visible', $value);
    }

    /**
    * The step of the value axis major ticks.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMajorTicks
    */
    public function step($value)
    {
        return $this->setProperty('step', $value);
    }

    /**
    * The skip of the value axis major ticks.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemMajorTicks
    */
    public function skip($value)
    {
        return $this->setProperty('skip', $value);
    }

//<< Properties
}
