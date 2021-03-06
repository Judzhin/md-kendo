<?php

namespace Kendo\Dataviz\UI;

class SparklineCategoryAxisItemCrosshairTooltipBorder extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The color of the border.
    * @param string $value
    * @return \Kendo\Dataviz\UI\SparklineCategoryAxisItemCrosshairTooltipBorder
    */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
    * The width of the border.
    * @param float $value
    * @return \Kendo\Dataviz\UI\SparklineCategoryAxisItemCrosshairTooltipBorder
    */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

//<< Properties
}
