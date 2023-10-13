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
    public $metaFields;
    public $waitForThumbnailsBeforeUpload;
    public $showLinkToFileUploadResult;
    public $hideUploadButton;
    public $hideRetryButton;
    public $hidePauseResumeButton;
    public $hideCancelButton;
    public $hideProgressAfterFinish;
    public $showSelectedFiles;
    public $singleFileFullScreen;
    public $closeModalOnClickOutside;
    public $closeAfterFinish;

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
        array $metaFields = [
            ['id' => 'name','name' => 'Name', 'placeholder' => 'file name'],
            ['id' => 'caption','name' => 'Caption', 'placeholder' => 'describe what the image is about']
        ],
        string $waitForThumbnailsBeforeUpload = "false",
        string $showLinkToFileUploadResult = "false",
        string $hideUploadButton = "false",
        string $hideRetryButton = "false",
        string $hidePauseResumeButton = "false",
        string $hideCancelButton = "false",
        string $hideProgressAfterFinish = "false",
        string $showSelectedFiles = "true",
        string $singleFileFullScreen = "true",
        string $closeModalOnClickOutside = "false",
        string $closeAfterFinish = "false",
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
        $this->metaFields = $metaFields;
        $this->waitForThumbnailsBeforeUpload = $waitForThumbnailsBeforeUpload;
        $this->showLinkToFileUploadResult = $showLinkToFileUploadResult;
        $this->hideUploadButton = $hideUploadButton;
        $this->hideRetryButton = $hideRetryButton;
        $this->hidePauseResumeButton = $hidePauseResumeButton;
        $this->hideCancelButton = $hideCancelButton;
        $this->hideProgressAfterFinish = $hideProgressAfterFinish;
        $this->showSelectedFiles = $showSelectedFiles;
        $this->singleFileFullScreen = $singleFileFullScreen;
        $this->closeModalOnClickOutside = $closeModalOnClickOutside;
        $this->closeAfterFinish = $closeAfterFinish;
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
