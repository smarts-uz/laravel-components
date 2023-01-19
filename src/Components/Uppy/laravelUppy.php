<?php

namespace BladeUIKit\Components\Uppy;

use BladeUIKit\Components\BladeComponent;
use Illuminate\View\Component;

class laravelUppy extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $target;
    public $fieldName;

    protected static $assets = ['uppy'];

    public function __construct($url,$target,$fieldName)
    {
        $this->url = $url;
        $this->target = $target;
        $this->fieldName = $fieldName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blade-ui-kit::components.uppy.laravelUppy');
    }
}