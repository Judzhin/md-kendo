<?php

namespace Kendo\Dataviz\UI;

class ChartSeriesItemStack extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The type of stack to plot. The following types are supported:
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemStack
    */
    public function type($value)
    {
        return $this->setProperty('type', $value);
    }

    /**
    * Indicates that the series should be stacked in a group with the specified name.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemStack
    */
    public function group($value)
    {
        return $this->setProperty('group', $value);
    }

//<< Properties
}
