<?php

namespace Kendo\Dataviz\UI;

class ChartCategoryAxisItemCrosshairTooltipPadding extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The bottom padding of the crosshair tooltip.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartCategoryAxisItemCrosshairTooltipPadding
    */
    public function bottom($value)
    {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left padding of the crosshair tooltip.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartCategoryAxisItemCrosshairTooltipPadding
    */
    public function left($value)
    {
        return $this->setProperty('left', $value);
    }

    /**
    * The right padding of the crosshair tooltip.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartCategoryAxisItemCrosshairTooltipPadding
    */
    public function right($value)
    {
        return $this->setProperty('right', $value);
    }

    /**
    * The top padding of the crosshair tooltip.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartCategoryAxisItemCrosshairTooltipPadding
    */
    public function top($value)
    {
        return $this->setProperty('top', $value);
    }

//<< Properties
}
