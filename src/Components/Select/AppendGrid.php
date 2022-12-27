<?php

namespace BladeUIKit\Components\Select;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class AppendGrid extends BladeComponent
{

    /** @var string */
    public $name;

    /** @var string */
    public $ds_name;

    /** @var string */
    public $id;

    /** @var array */
    public $data;

    protected static $assets = ['append-grid', 'font-awesome'];

    /**
     * @param string $name
     * @param string $id
     * @param string $ds_name
     * @param array $data
     */
    public function __construct(string $name, string $id, string $ds_name, array $data)
    {
        $this->id = $id;
        $this->name = $name;
        $this->ds_name = $ds_name;
        $this->data = $data;
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.select.append-grid');
    }
}
