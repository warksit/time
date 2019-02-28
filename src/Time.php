<?php

namespace Warksit\Time;

use Laravel\Nova\Fields\Field;

class Time extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'Time';

    public function step($step)
    {
        return $this->withMeta([
            'step' => $step
        ]);
    }

    public function includeSeconds()
    {
        return $this->withMeta([
            'step' => 1
        ]);
    }
}
