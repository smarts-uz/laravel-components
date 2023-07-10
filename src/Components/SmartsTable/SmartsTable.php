<?php

namespace BladeUIKit\Components\SmartsTable;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use BladeUIKit\Text\textYajra;
use Illuminate\View\Component as IlluminateComponent;

class SmartsTable extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $tableTitle;
    public array $dtColumns;
    public string $tableId;
    public string $getData;
    public string $language;
    public string $dom;
    public int $pageLength;
    public string $buttons;
    public bool $colReorder;
    public bool $stateSave;
    public bool $serverSide;
    public bool $scrollX;
    public bool $responsive;
    public bool $select;
    public string|int $scrollY;
    public bool $scroller;
    public bool $keys;
    public bool $rowReorder;
    public bool $rowGroup;
    public string $pagingType;
    public $startDate;
    public $endDate ;
    public array $dtHeaders;
    public $exportId;
    public array $options;
    public array $events;

    protected static $assets = ['yajra'];

    public function __construct(
        string $startDate,
        string $endDate,
        string $exportId,
        string $tableId = "example",
        string $getData = null,
        string $language = 'en-GB',
        string $dom = 'Blfrtip',
        bool $select = false,
        bool $responsive = false,
        bool $colReorder = false,
        bool $stateSave = false,
        bool $serverSide = false,
        bool $scrollX = false,
        int $pageLength = 10,
        int $scrollY = null,
        bool $scroller = false,
        bool $keys = false,
        bool $rowReorder = false,
        bool $rowGroup = false,
        string $pagingType = 'simple_numbers',
    )
    {
        $text = new textYajra();
        $this->tableTitle = $exportId::title();
        $this->dtHeaders = $exportId::headers();
        $this->dtColumns = $exportId::columns();
        $this->options = $exportId::options();
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
        $this->scrollY = isset($scrollY) ? "scrollY:  $scrollY," : "";
        $this->scroller = $scroller;
        $this->keys = $keys;
        $this->rowReorder = $rowReorder;
        $this->rowGroup = $rowGroup;
        $this->pagingType = $pagingType;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->exportId = $exportId;
        $this->events = $exportId::events();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blade-ui-kit::components.smartsTable.SmartsTable');
    }
}