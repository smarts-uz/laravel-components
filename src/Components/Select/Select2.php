<?php

namespace BladeUIKit\Components\Select;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class Select2 extends BladeComponent
{

    /** @var string */
    public $name;

    /** @var string */
    public $label;

    /** @var string */
    public $id;

    /** @var string */
    public $labelAtributes;

    /** @var array */
    public $options;

    protected static $assets = ['select2'];

    /**
     * @param string $name
     * @param string $id
     * @param string $label
     * @param string $labelAtributes
     * @param array $options
     */
    public function __construct(string $name, string $id, string $label, ?string $labelAtributes, array $options)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->labelAtributes = $labelAtributes;
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.select.select2');
    }
}
