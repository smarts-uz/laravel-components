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
    public $disablePageScrollWhenModalOpen;
    public $animateOpenClose;
    public $fileManagerSelectionType;
    public $proudlyDisplayPoweredByUppy;
    public $disableStatusBar;
    public $disableInformer;
    public $disableThumbnailGenerator;
    public $disableLocalFiles;
    public $events;
    public $id;
    public $allowMultipleUploadBatches;
    public $meta;
    public $infoTimeout;
    public $countdown;
    public $modes;
    public $mirror;
    public $videoConstraints;
    public $showVideoSourceDropdown;
    public $showRecordingLength;
    public $webcamPreferredVideoMimeType;
    public $preferredImageMimeType;
    public $mobileNativeCamera;
    public $displayMediaConstraints;
    public $userMediaConstraints;
    public $screenCapturePreferredVideoMimeType;
    public $showAudioSourceDropdown;
    public $boxHeaders;
    public $dropboxHeaders;
    public $facebookHeaders;
    public $googleDriveHeaders;
    public $instagramHeaders;
    public $oneDriveHeaders;
    public $unsplashHeaders;
    public $urlsourceHeaders;
    public $zoomHeaders;
    public $boxCookiesRule;
    public $dropboxCookiesRule;
    public $facebookCookiesRule;
    public $googleDriveCookiesRule;
    public $instagramCookiesRule;
    public $oneDriveCookiesRule;
    public $unsplashCookiesRule;
    public $urlsourceCookiesRule;
    public $zoomCookiesRule;
    public $method;
    public $formData;
    public $allowedMetaFields;
    public $headers;
    public $bundle;
    public $validateStatus;
    public $getResponseData;
    public $getResponseError;
    public $responseUrlFieldName;
    public $limit;
    public $responseType;
    public $withCredentials;
    public $service;
    public $transloaditLimit;
    public $assemblyOptions;
    public $waitForEncoding;
    public $waitForMetadata;
    public $importFromUploadURLs;
    public $alwaysRunAssembly;
    public $transloadit;
    public $retryDelays;
    public $tus;
    public $tusLimit;
    public $shouldUseMultipart;
    public $awsS3Url;
    public $awsS3Limit;
    public $awsS3Headers;
    public $awsS3CookiesRule;
    public $timeout;
    public $remoteSourcesUrl;
    public $sources;
    public $remoteSourcesHeaders;
    public $remoteSourcesCookiesRule;

    public static $assets = ['uppy'];

    public function __construct(
        $url,
        $target,
        $fieldName = "files[]",
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
        string $disablePageScrollWhenModalOpen = "true",
        string $animateOpenClose = "true",
        string $fileManagerSelectionType = "files",
        string $proudlyDisplayPoweredByUppy = "true",
        string $disableStatusBar = "false",
        string $disableInformer = "false",
        string $disableThumbnailGenerator = "false",
        string $disableLocalFiles = "false",
        array $events = [],
        string $id = "uppy",
        string $allowMultipleUploadBatches = "true",
        string $meta = "{}",
        string $infoTimeout = "5000",
        string $countdown = "false",
        string $modes = "[]",
        string $mirror = "true",
        string $videoConstraints = "{}",
        string $showVideoSourceDropdown = "false",
        string $showRecordingLength = "false",
        string $webcamPreferredVideoMimeType = "null",
        string $preferredImageMimeType = "image/jpeg",
        string $mobileNativeCamera = "false",
        string $displayMediaConstraints = "null",
        string $userMediaConstraints = "null",
        string $screenCapturePreferredVideoMimeType = "null",
        string $showAudioSourceDropdown = "false",
        string $boxHeaders = "{}",
        string $dropboxHeaders = "{}",
        string $facebookHeaders = "{}",
        string $googleDriveHeaders = "{}",
        string $instagramHeaders = "{}",
        string $oneDriveHeaders = "{}",
        string $unsplashHeaders = "{}",
        string $urlsourceHeaders = "{}",
        string $zoomHeaders = "{}",
        string $awsS3Headers = "{}",
        string $remoteSourcesHeaders = "{}",
        string $boxCookiesRule = "same-origin",
        string $dropboxCookiesRule = "same-origin",
        string $facebookCookiesRule = "same-origin",
        string $googleDriveCookiesRule = "same-origin",
        string $instagramCookiesRule = "same-origin",
        string $oneDriveCookiesRule = "same-origin",
        string $unsplashCookiesRule = "same-origin",
        string $urlsourceCookiesRule = "same-origin",
        string $zoomCookiesRule = "same-origin",
        string $awsS3CookiesRule = "same-origin",
        string $remoteSourcesCookiesRule = "same-origin",
        string $method = "post",
        string $formData = "true",
        string $allowedMetaFields = "null",
        string $headers = null,
        string $bundle = "false",
        string $validateStatus = "(status, responseText, response) => status",
        string $getResponseData = "(responseText, response) => responseText",
        string $getResponseError = "(responseText, response) => responseText",
        string $responseUrlFieldName = "url",
        string $limit = "5",
        string $responseType = "text",
        string $withCredentials = "false",
        string $service = "https://api2.transloadit.com",
        string $transloaditLimit = "20",
        string $tus = null,
        string $tusLimit = "20",
        string $assemblyOptions = "null",
        string $waitForEncoding = "false",
        string $waitForMetadata = "false",
        string $importFromUploadURLs = "false",
        string $alwaysRunAssembly = "false",
        string $transloadit = null,
        string $retryDelays = "[0, 1000, 3000, 5000]",
        string $shouldUseMultipart = "(file) => file.size > 100 * 2 ** 20",
        string $awsS3Url = null,
        string $awsS3Limit = "6",
        string $timeout = "30_000",
        string $remoteSourcesUrl = null,
        string $sources = "['Box', 'Dropbox', 'Facebook', 'GoogleDrive','Instagram', 'OneDrive', 'Unsplash', 'Url', 'Zoom']",
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
        $this->disablePageScrollWhenModalOpen = $disablePageScrollWhenModalOpen;
        $this->animateOpenClose = $animateOpenClose;
        $this->fileManagerSelectionType = $fileManagerSelectionType;
        $this->proudlyDisplayPoweredByUppy = $proudlyDisplayPoweredByUppy;
        $this->disableStatusBar = $disableStatusBar;
        $this->disableInformer = $disableInformer;
        $this->disableThumbnailGenerator = $disableThumbnailGenerator;
        $this->disableLocalFiles = $disableLocalFiles;
        $this->events = $events;
        $this->id = $id;
        $this->allowMultipleUploadBatches = $allowMultipleUploadBatches;
        $this->meta = $meta;
        $this->infoTimeout = $infoTimeout;
        $this->countdown = $countdown;
        $this->modes = $modes;
        $this->mirror = $mirror;
        $this->videoConstraints = $videoConstraints;
        $this->showVideoSourceDropdown = $showVideoSourceDropdown;
        $this->showRecordingLength = $showRecordingLength;
        $this->webcamPreferredVideoMimeType = $webcamPreferredVideoMimeType;
        $this->preferredImageMimeType = $preferredImageMimeType;
        $this->mobileNativeCamera = $mobileNativeCamera;
        $this->displayMediaConstraints = $displayMediaConstraints;
        $this->userMediaConstraints = $userMediaConstraints;
        $this->screenCapturePreferredVideoMimeType = $screenCapturePreferredVideoMimeType;
        $this->showAudioSourceDropdown = $showAudioSourceDropdown;
        $this->boxHeaders = $boxHeaders;
        $this->dropboxHeaders = $dropboxHeaders;
        $this->facebookHeaders = $facebookHeaders;
        $this->googleDriveHeaders = $googleDriveHeaders;
        $this->instagramHeaders = $instagramHeaders;
        $this->oneDriveHeaders = $oneDriveHeaders;
        $this->unsplashHeaders = $unsplashHeaders;
        $this->urlsourceHeaders = $urlsourceHeaders;
        $this->zoomHeaders = $zoomHeaders;
        $this->boxCookiesRule = $boxCookiesRule;
        $this->dropboxCookiesRule = $dropboxCookiesRule;
        $this->facebookCookiesRule = $facebookCookiesRule;
        $this->googleDriveCookiesRule = $googleDriveCookiesRule;
        $this->instagramCookiesRule = $instagramCookiesRule;
        $this->oneDriveCookiesRule = $oneDriveCookiesRule;
        $this->unsplashCookiesRule = $unsplashCookiesRule;
        $this->urlsourceCookiesRule = $urlsourceCookiesRule;
        $this->zoomCookiesRule = $zoomCookiesRule;
        $this->method = $method;
        $this->formData = $formData;
        $this->allowedMetaFields = $allowedMetaFields;
        $this->headers = $headers;
        $this->bundle = $bundle;
        $this->validateStatus = $validateStatus;
        $this->getResponseData = $getResponseData;
        $this->getResponseError = $getResponseError;
        $this->responseUrlFieldName = $responseUrlFieldName;
        $this->limit = $limit;
        $this->responseType = $responseType;
        $this->withCredentials = $withCredentials;
        $this->service = $service;
        $this->transloaditLimit = $transloaditLimit;
        $this->tus = $tus;
        $this->tusLimit = $tusLimit;
        $this->assemblyOptions = $assemblyOptions;
        $this->waitForEncoding = $waitForEncoding;
        $this->waitForMetadata = $waitForMetadata;
        $this->importFromUploadURLs = $importFromUploadURLs;
        $this->alwaysRunAssembly = $alwaysRunAssembly;
        $this->transloadit = $transloadit;
        $this->retryDelays = $retryDelays;
        $this->shouldUseMultipart = $shouldUseMultipart;
        $this->awsS3Url = $awsS3Url;
        $this->awsS3Limit = $awsS3Limit;
        $this->awsS3Headers = $awsS3Headers;
        $this->awsS3CookiesRule = $awsS3CookiesRule;
        $this->timeout = $timeout;
        $this->remoteSourcesUrl = $remoteSourcesUrl;
        $this->sources = $sources;
        $this->remoteSourcesHeaders = $remoteSourcesHeaders;
        $this->remoteSourcesCookiesRule = $remoteSourcesCookiesRule;
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
