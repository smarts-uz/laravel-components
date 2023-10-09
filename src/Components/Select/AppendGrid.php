<?php

namespace Smarts\Components\Select;

use Smarts\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class AppendGrid extends BladeComponent
{

    /** @var string */
    public $id;

    /** @var array */
    public $columns;

    /** @var array */
    public $attributes;

    protected static $assets = ['append-grid'];

    /**
     * @param string $name
     * @param string $id
     * @param string $dsName
     * @param array $data
     */
    public function __construct(string $id, array $columns, string $attributes = null)
    {
        $this->id = $id;
        $this->columns = $columns;
        $this->attributes = $attributes;
    }

    public function render(): View
    {
        return view('smarts::components.select.append-grid');
    }
}
