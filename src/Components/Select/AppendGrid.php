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
    public function __construct(string $name, string $id, string $dsName, array $data = ['null'])
    {
        $this->id = $id;
        $this->name = $name;
        $this->dsName = $dsName;

        foreach ($data as $key => $val) {
            $this->data .= $key . ':' . $val;
        }
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.select.append-grid');
    }
}
