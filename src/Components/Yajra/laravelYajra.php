<?php

namespace BladeUIKit\Components\Yajra;

use Illuminate\Http\Client\Request;
use Illuminate\View\Component;

class laravelYajra extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tableTitle;
    public $getData;

    protected static $assets = ['yajra'];
    public function __construct($getData,$tableTitle)
    {
        $this->tableTitle = $tableTitle;
        $this->getData = $getData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blade-ui-kit::components.yajra.laravelYajra');
    }
}
