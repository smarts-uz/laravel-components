<?php

namespace Smarts\Components\SmartsTable;

use Smarts\Components\BladeComponent;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use Smarts\Text\textYajra;
use Illuminate\View\Component as IlluminateComponent;

class SmartsTable extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * @var string
     * Table name
     */
    public string $tableTitle;
    /**
     * @var array
     * Table column
     */
    public array $dtColumns;
    /**
     * @var string
     * Table id
     */
    public string $tableId;
    /**
     * @var string
     * Table data
     */
    public string $getData;
    /**
     * @var string
     */
    public string $language;
    /**
     * @var string
     * Default "Blfrtip"
     */
    public string $dom;
    /**
     * @var int
     * Button collection that will control the DataTables' page length.
     */
    public int $pageLength;
    /**
     * @var string
     * As part of the DataTables constructor, the buttons option can be given as an array of the buttons you wish to show - this is typically just the button name, although you can provide options to customise the button's actions
     */
    public string $buttons;
    /**
     * @var bool
     * ColReorder adds the ability for the end user to be able to reorder columns in a DataTable through a click and drag operation
     */
    public bool $colReorder;
    /**
     * @var bool
     * State saving - restore table state on page reload.
     */
    public bool $stateSave;
    /**
     * @var bool
     * DataTables provides a server-side processing option for handling large data sets.
     */
    public bool $serverSide;
    /**
     * @var string
     * Horizontal scrolling.
     */
    public string $scrollX;
    /**
     * @var bool|string
     * Enable and configure the Responsive extension for DataTables.
     */
    public bool|string $responsive;
    /**
     * @var bool|string
     * Select configuration object.
     */
    public bool|string $select;
    /**
     * @var string|int
     * Vertical scrolling.
     */
    public string|int $scrollY;
    /**
     * @var bool
     * Enable and configure the Scroller extension for DataTables.
     */
    public bool $scroller;
    /**
     * @var bool
     * Enable and configure the KeyTable extension for DataTables.
     */
    public bool $keys;
    /**
     * @var bool|string
     * Enable and configure the RowReorder extension for DataTables.
     */
    public bool|string $rowReorder;
    /**
     * @var bool|string
     * A single button that displays the SearchBuilder container in a popover.
     */
    public bool|string $searchBuilder;
    /**
     * @var array
     * Add something before creating table
     */
    public array $fn;
    /**
     * @var bool|string
     * Enable and configure the RowGroup extension for DataTables.
     */
    public bool|string $rowGroup;
    /**
     * @var string
     * Pagination button display options.
     */
    public string $pagingType;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate ;
    /**
     * @var array
     * Table header
     */
    public array $dtHeaders;
    /**
     * @var string
     * Excel export class
     */
    public $exportId;
    /**
     * @var array
     * Add other table options
     */
    public array $options;
    /**
     * @var array
     * Event
     */
    public array $events;
    /**
     * @var array
     * Add new object
     */
    public array $objects;
    /**
     * @var array
     * Add addEventListener
     */
    public array $addEventListener;
    /**
     * @var array
     * Create new function before creating table
     */
    public array $functions;
    /**
     * @var array
     * Add querySelectorAll
     */
    public array $querySelectorAll;
    /**
     * @var bool
     * Header Clone
     */
    public bool $headerclone;
    /**
     * @var bool
     * Actions
     */
    public bool $tableControlers;

    public static $assets = ['yajra'];

    public function __construct(
        string $startDate,
        string $endDate,
        string $exportId,
        string $tableId = "example",
        string $getData = null,
        string $language = 'en-GB',
        string $dom = 'Blfrtip',
        bool|string $select = "false",
        bool|string $responsive = "null",
        bool $colReorder = false,
        bool $stateSave = false,
        bool $serverSide = false,
        int $pageLength = 10,
        string|int $scrollY = "null",
        bool $scrollX = false,
        bool $scroller = false,
        bool $keys = false,
        bool|string $rowReorder = "null",
        bool|string $searchBuilder = "null",
        array $fn = [],
        bool|string $rowGroup = "false",
        string $pagingType = 'simple_numbers',
        array $options = null,
        array $objects = [],
        array $events = [],
        array $addEventListener = [],
        array $functions = [],
        array $querySelectorAll = [],
        bool $headerclone = false,
        bool $tableControlers = false,
    )
    {
        $text = new textYajra();
        $this->tableTitle = $exportId::title();
        $this->dtHeaders = $exportId::headers();
        $this->dtColumns = $exportId::columns();
        $this->options = $options ? array_merge($exportId::options(),$options) : $exportId::options();
        $this->tableId = $tableId;
        $this->getData = $getData;
        $this->language = $language;
        $this->dom = $dom;
        $this->pageLength = $pageLength;
        $this->buttons = $text->buttons($this->tableTitle,$exportId,$startDate,$endDate);
        $this->colReorder = $colReorder;
        $this->stateSave = $stateSave;
        $this->serverSide = $serverSide;
        $this->scrollX = $scrollX;
        $this->responsive = $responsive;
        $this->select = $select;
        $this->scrollY = $scrollY;
        $this->scroller = $scroller;
        $this->keys = $keys;
        $this->rowReorder = $rowReorder;
        $this->searchBuilder = $searchBuilder;
        $this->fn = $fn;
        $this->rowGroup = $rowGroup;
        $this->pagingType = $pagingType;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->exportId = $exportId;
        $this->objects = $objects;
        $this->events = $events ? array_merge($exportId::events(),$events) : $exportId::events();
        $this->addEventListener = $addEventListener;
        $this->functions = $functions;
        $this->querySelectorAll = $querySelectorAll;
        $this->headerclone = $headerclone;
        $this->tableControlers = $tableControlers;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('smarts::components.smartsTable.SmartsTable');
    }
}
