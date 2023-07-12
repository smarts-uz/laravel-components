<?php

namespace Smarts\Components\SmartsEimzo;

use Smarts\Components\BladeComponent;

class SmartsEimzoLogin extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public static $assets = ['eimzo_login'];

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
        return view('smarts::components.smartsEimzo.smarts_eimzo');
    }
}
