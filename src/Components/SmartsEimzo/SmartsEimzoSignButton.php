<?php

namespace Smarts\Components\SmartsEimzo;

use Smarts\Components\BladeComponent;

class SmartsEimzoSignButton extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blade-ui-kit::components.smartsEimzo.smarts_sign');
    }
}
