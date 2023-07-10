<?php

namespace BladeUIKit\Components\SmartsEimzo;

use BladeUIKit\Components\BladeComponent;

class SmartsEimzoUpdateButton extends BladeComponent
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
        return view('blade-ui-kit::components.smartsEimzo.smarts_update');
    }
}
