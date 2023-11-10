<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\View\Helpers\Helper;

class BaseComponent extends Component
{
    public $cssClasses;
    public $helper;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cssClasses = null)
    {
        $this->cssClasses = $cssClasses;
        $this->helper = new Helper();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {}
}
