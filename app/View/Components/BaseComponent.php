<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseComponent extends Component
{
    public $cssClasses;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cssClasses = null)
    {
        $this->cssClasses = $cssClasses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
    }
}
