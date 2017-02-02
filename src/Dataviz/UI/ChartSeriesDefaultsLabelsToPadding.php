<?php

namespace Kendo\Dataviz\UI;

class ChartSeriesDefaultsLabelsToPadding extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The bottom padding of the to labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesDefaultsLabelsToPadding
    */
    public function bottom($value)
    {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left padding of the to labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesDefaultsLabelsToPadding
    */
    public function left($value)
    {
        return $this->setProperty('left', $value);
    }

    /**
    * The right padding of the to labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesDefaultsLabelsToPadding
    */
    public function right($value)
    {
        return $this->setProperty('right', $value);
    }

    /**
    * The top padding of the to labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesDefaultsLabelsToPadding
    */
    public function top($value)
    {
        return $this->setProperty('top', $value);
    }

//<< Properties
}
