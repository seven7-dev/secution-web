<?php

namespace App\View\Components;

class ActionBox extends BaseComponent
{
    public $headline;
    public $text;
    public $linkUrl;
    public $linkLabel;
    public $linkExternal;
    public $backgroundColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cssClasses = null, $headline = null, $text = null, $linkUrl = null, $linkLabel = null, $linkExternal = false, $backgroundColor = null)
    {
        parent::__construct($cssClasses);
        $this->headline = $headline;
        $this->text = $text;
        $this->linkUrl = $linkUrl;
        $this->linkLabel = $linkLabel;
        $this->linkExternal = $linkExternal;
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.action-box');
    }
}
