<?php

namespace Kendo\Dataviz\UI;

class MapLayerDefaultsMarkerTooltipAnimationClose extends \Kendo\SerializableObject
{
//>> Properties

    /**
    * Effect to be used for closing of the tooltip.
    * @param string $value
    * @return \Kendo\Dataviz\UI\MapLayerDefaultsMarkerTooltipAnimationClose
    */
    public function effects($value)
    {
        return $this->setProperty('effects', $value);
    }

    /**
    * Defines the animation duration.
    * @param float $value
    * @return \Kendo\Dataviz\UI\MapLayerDefaultsMarkerTooltipAnimationClose
    */
    public function duration($value)
    {
        return $this->setProperty('duration', $value);
    }

//<< Properties
}
