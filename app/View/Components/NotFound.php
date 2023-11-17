<?php

namespace App\View\Components;

class NotFound extends BaseComponent
{
    public $headline;
    public $subheadline;
    public $text;
    public $backgroundTextHeadline;
    public $backgroundTextSubheadline;
    public $linkLeftLabel;
    public $linkRightLabel;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cssClasses = null, $headline = null, $subheadline = null, $text = null, $backgroundTextHeadline = null, $backgroundTextSubheadline = null, $linkLeftLabel = null, $linkRightLabel = null)
    {
        parent::__construct($cssClasses);
        $this->headline = $headline;
        $this->subheadline = $subheadline;
        $this->text = $text;
        $this->backgroundTextHeadline = $backgroundTextHeadline;
        $this->backgroundTextSubheadline = $backgroundTextSubheadline;
        $this->linkLeftLabel = $linkLeftLabel;
        $this->linkRightLabel = $linkRightLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.not-found');
    }
}
