<?php

namespace Smarts\Components\SmartsUppy;

use Smarts\Components\BladeComponent;
use Illuminate\View\Component;

class SmartsUppy extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $target;
    public $fieldName;
    public $width;
    public $height;

    public static $assets = ['uppy'];

    public function __construct($url,$target,$fieldName,$width = '750',$height = '550')
    {
        $this->url = $url;
        $this->target = $target;
        $this->fieldName = $fieldName;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('smarts::components.smartsUppy.SmartsUppy');
    }
}
