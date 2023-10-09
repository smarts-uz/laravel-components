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

    /** @var string */
    public $attributes;

    /** @var string */
    public $uiFramework;

    /** @var string */
    public $iconFramework;

    protected static $assets = ['append-grid'];

    public function __construct(string $id,
                                array $columns,
                                string $attributes = null,
                                string $uiFramework = 'bootstrap5',
                                string $iconFramework = 'fontawesome5')
    {
        $this->id = $id;
        $this->columns = $columns;
        $this->attributes = $attributes;
        $this->uiFramework = $uiFramework;
        $this->iconFramework = $iconFramework;
    }

    public function render(): View
    {
        return view('smarts::components.select.append-grid');
    }
}
