<?php

namespace BladeUIKit\Components\Select;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class AppendGrid extends BladeComponent
{

    /** @var string */
    public $name;

    /** @var string */
    public $dsName;

    /** @var string */
    public $id;

    /** @var array */
    public $data;

    protected static $assets = ['append-grid', 'font-awesome'];

    /**
     * @param string $name
     * @param string $id
     * @param string $dsName
     * @param array $data
     */
    public function __construct(string $name, string $id, string $dsName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dsName = $dsName;
        $this->data = json_encode(['test', 'test2']);
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.select.append-grid', ['data' => $this->data]);
    }
}
