<?php

namespace Kendo\Dataviz\UI;

class StockChartValueAxisItemNotesDataItemLine extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The line width of the note.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartValueAxisItemNotesDataItemLine
    */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

    /**
    * The line color of the note.
    * @param string $value
    * @return \Kendo\Dataviz\UI\StockChartValueAxisItemNotesDataItemLine
    */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
    * The length of the connecting lines in pixels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartValueAxisItemNotesDataItemLine
    */
    public function length($value)
    {
        return $this->setProperty('length', $value);
    }

//<< Properties
}
