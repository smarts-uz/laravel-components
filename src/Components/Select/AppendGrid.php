<?php

namespace Smarts\Components\Select;

use Smarts\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class AppendGrid extends BladeComponent
{

    /** @var string */
    public $id;

    /** @var array
     * Array of column options
     */
    public $columns;

    /** @var string */
    public $attributes;

    /** @var string
     * The name of UI framework to be used for styling.
     */
    public $uiFramework;

    /** @var string
     * The name of icon framework to be used on buttons. These icon frameworks may have several download format. AppendGrid is implemented to work with their Webfont format.
     */
    public $iconFramework;

    /** @var array
     * Other column options
     */
    public $options;

    /** @var array
     * addEventListener
     */
    public $addEventListener;

    /** @var array
     * Add new function
     */
    public $addFunction;

    /** @var array
     * Fixed Header
     */
    public $fixedHeader;

    protected static $assets = ['append-grid'];

    public function __construct(string $id,
                                array $columns,
                                string $attributes = null,
                                string $uiFramework = 'bootstrap5',
                                string $iconFramework = 'fontawesome5',
                                array $options = [],
                                array $addEventListener = [],
                                array $addFunction = [],
                                string $fixedHeader = null)
    {
        $this->id = $id;
        $this->columns = $columns;
        $this->attributes = $attributes;
        $this->uiFramework = $uiFramework;
        $this->iconFramework = $iconFramework;
        $this->options = $options;
        $this->addEventListener = $addEventListener;
        $this->addFunction = $addFunction;
        $this->fixedHeader = $fixedHeader;
    }

    public function render(): View
    {
        return view('smarts::components.select.append-grid');
    }
}
