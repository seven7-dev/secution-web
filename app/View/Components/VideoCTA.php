<?php

namespace App\View\Components;

class VideoCTA extends BaseComponent
{
    public $headline;
    public $subheadline;
    public $videos;
    public $linkUrl;
    public $linkLabel;
    public $linkExternal;
    public $backgroundColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cssClasses = null, $headline = null, $subheadline = null, $videos = null, $linkUrl = null, $linkLabel = null, $linkExternal = false)
    {
        parent::__construct($cssClasses);
        $this->headline = $headline;
        $this->subheadline = $subheadline;
        $this->videos = $videos;
        $this->linkUrl = $linkUrl;
        $this->linkLabel = $linkLabel;
        $this->linkExternal = $linkExternal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video-cta');
    }
}
