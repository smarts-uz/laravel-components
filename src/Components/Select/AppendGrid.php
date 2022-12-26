<?php

declare(strict_types=1);

namespace BladeUIKit\Components\Select;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class AppendGrid extends BladeComponent
{

    public $ctrlOptions;
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var array */
    public $options;

    protected static $assets = ['appendgrid'];

    public function __construct(string $name, string $id = null, array $options = [])
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->options = $options;
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.editors.easy-mde');
    }
}
