<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnectorFill extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * Defines the fill color of the shape connectors.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorFill
    */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
    * Defines the fill opacity of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorFill
    */
    public function opacity($value)
    {
        return $this->setProperty('opacity', $value);
    }

//<< Properties
}
