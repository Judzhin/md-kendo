<?php

namespace Kendo\Dataviz\UI;

class StockChartNavigatorCategoryAxisTitleMargin extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The bottom margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisTitleMargin
    */
    public function bottom($value)
    {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisTitleMargin
    */
    public function left($value)
    {
        return $this->setProperty('left', $value);
    }

    /**
    * The right margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisTitleMargin
    */
    public function right($value)
    {
        return $this->setProperty('right', $value);
    }

    /**
    * The top margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisTitleMargin
    */
    public function top($value)
    {
        return $this->setProperty('top', $value);
    }

//<< Properties
}
