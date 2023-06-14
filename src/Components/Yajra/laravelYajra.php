<?php

namespace BladeUIKit\Components\Yajra;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use BladeUIKit\Text\textYajra;

class laravelYajra extends BladeComponent
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
    public string|bool $colReorder;
    public string|bool $stateSave;
    public string|bool $serverSide;
    public string|bool $scrollX;
    public string|bool $responsive;
    public string|bool $select;
    public string|int $scrollY;
    public string|bool $scroller;
    public string|bool $keys;
    public string|bool $rowReorder;
    public string|bool $rowGroup;
    public string $pagingType;
    public $startDate;
    public $endDate ;
    public array $dtHeaders;
    public $exportId;

    protected static $assets = ['yajra'];

    public function __construct(
        $startDate,
        $endDate,
        $exportId,
        string      $tableId = "example",
        string      $getData = null,
        string        $language = 'en-GB',
        string      $dom = 'Blfrtip',
        string|bool $select = 'false',
        string $responsive = 'false',
        string|bool $colReorder = 'false',
        string|bool $stateSave = 'false',
        string|bool $serverSide = 'false',
        string|bool $scrollX = 'false',
        int         $pageLength = 10,
        string|int $scrollY = null,
        string|bool $scroller = 'false',
        string|bool $keys = 'false',
        string|bool $rowReorder = 'false',
        string|bool $rowGroup = 'false',
        string $pagingType = 'simple_numbers'
    )
    {
        $text = new textYajra();
        $this->tableTitle = $exportId::title();
        $this->dtHeaders = $exportId::dtHeaders();
        $this->dtColumns = $exportId::dtColumns();
        $this->tableId = $tableId;
        $this->getData = $getData;
        $this->language = $language;
        $this->dom = $dom;
        $this->pageLength = $pageLength;
        $this->buttons = $text->buttons($this->tableId,$exportId);
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
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blade-ui-kit::components.yajra.laravelYajra');
    }
}
