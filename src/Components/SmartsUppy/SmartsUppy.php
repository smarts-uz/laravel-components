<?php

namespace Smarts\Components\SmartsUppy;

use Smarts\Components\BladeComponent;
use Illuminate\View\Component;

class SmartsUppy extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $target;
    public $fieldName;
    public $width;
    public $height;
    public $boxUrl;
    public $dropboxUrl;
    public $facebookUrl;
    public $googleDriveUrl;
    public $instagramUrl;
    public $oneDriveUrl;
    public $unsplashUrl;
    public $urlsourceUrl;
    public $zoomUrl;
    public $webcam;
    public $screenCapture;
    public $audio;
    public $theme;
    public $disabled;
    public $locale;
    public $note;
    public $restrictions;
    public $debug;
    public $autoProceed;
    public $showProgressDetails;
    public $inline;
    public $trigger;

    public static $assets = ['uppy'];

    public function __construct(
        $url,
        $target,
        $fieldName,
        $width = '650',$height = '550',
        string $boxUrl = null,
        string $dropboxUrl = null,
        string $facebookUrl = null,
        string $googleDriveUrl = null,
        string $instagramUrl = null,
        string $oneDriveUrl = null,
        string $unsplashUrl = null,
        string $urlsourceUrl = null,
        string $zoomUrl = null,
        string $webcam = null,
        string $screenCapture = null,
        string $audio = null,
        string $theme = null,
        string $disabled = null,
        string $locale = 'en_US',
        string $note = null,
        string $restrictions = "{}",
        string $debug = "true",
        string $autoProceed = "false",
        string $showProgressDetails = "false",
        string $inline = "true",
        string $trigger = null,
    )
    {
        $this->url = $url;
        $this->target = $target;
        $this->fieldName = $fieldName;
        $this->width = $width;
        $this->height = $height;
        $this->boxUrl = $boxUrl;
        $this->dropboxUrl = $dropboxUrl;
        $this->facebookUrl = $facebookUrl;
        $this->googleDriveUrl = $googleDriveUrl;
        $this->instagramUrl = $instagramUrl;
        $this->oneDriveUrl = $oneDriveUrl;
        $this->unsplashUrl = $unsplashUrl;
        $this->urlsourceUrl = $urlsourceUrl;
        $this->webcam = $webcam;
        $this->screenCapture = $screenCapture;
        $this->audio = $audio;
        $this->theme = $theme;
        $this->disabled = $disabled;
        $this->locale = $locale;
        $this->note = $note;
        $this->restrictions = $restrictions;
        $this->debug = $debug;
        $this->autoProceed = $autoProceed;
        $this->showProgressDetails = $showProgressDetails;
        $this->inline = $inline;
        $this->trigger = $trigger;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('smarts::components.smartsUppy.SmartsUppy');
    }
}
