<?php

namespace Kendo\Dataviz\UI;

class ChartXAxisItemNotesDataItemIconBorder extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * The border color of the icon.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemIconBorder
    */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
    * The border width of the icon.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItemIconBorder
    */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

//<< Properties
}
