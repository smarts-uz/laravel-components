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

    /**
     * @var
     * UrlComponent
     */
    public $url;
    /**
     * @var
     *
     * A quick overview of the complete API.
     */
    public $target;
    /**
     * @var
     *
     * When formData is set to true, this is used as the form field name for the file to be uploaded.
     */
    public $fieldName;
    /**
     * @var
     *
     * Drag and drop area width (string, default: '100%').
     */
    public $width;
    /**
     * @var
     *
     * Drag and drop area height (string, default: '100%').
     */
    public $height;
    /**
     * @var
     *
     * Box Url
     */
    public $boxUrl;
    /**
     * @var
     *
     * dropBox Url
     */
    public $dropboxUrl;
    /**
     * @var
     *
     * Facebook Url
     */
    public $facebookUrl;
    /**
     * @var
     *
     * GoogleDrive Url
     */
    public $googleDriveUrl;
    /**
     * @var
     *
     * Instagram Url
     */
    public $instagramUrl;
    /**
     * @var
     *
     * OneDrive Url
     */
    public $oneDriveUrl;
    /**
     * @var
     *
     * Unsplash Url
     */
    public $unsplashUrl;
    /**
     * @var
     *
     * urlSource Url
     */
    public $urlsourceUrl;
    /**
     * @var
     *
     * Zoom Url
     */
    public $zoomUrl;
    public $webcam;
    public $screenCapture;
    public $audio;
    /**
     * @var
     *
     * Light or dark theme for the Dashboard (string, default: 'light').
     */
    public $theme;
    /**
     * @var
     *
     * Enabling this option makes the Dashboard grayed-out and non-interactive (boolean, default: false).
     */
    public $disabled;
    /**
     * @var
     *
     * Locale
     */
    public $locale;
    /**
     * @var
     *
     *
     * Optionally, specify a string of text that explains something about the upload for the user (string, default: null).
     * This is a place to explain any restrictions that are put in place. For example: 'Images and video only, 2–3 files, up to 1 MB'.
     */
    public $note;
    /**
     * @var
     *
     * Conditions for restricting an upload (Object, default: {}).
     */
    public $restrictions;
    /**
     * @var
     *
     * Whether to send debugging and warning logs (boolean, default: false).
     */
    public $debug;
    /**
     * @var
     *
     * Upload as soon as files are added (boolean, default: false).
     */
    public $autoProceed;
    /**
     * @var
     *
     * Display remaining upload size and estimated time (boolean, default: false)
     */
    public $showProgressDetails;
    /**
     * @var
     *
     * Render the Dashboard as a modal or inline (boolean, default: false).
     */
    public $inline;
    /**
     * @var
     *
     * A CSS selector for a button that will trigger opening the Dashboard modal (string, default: null).
     */
    public $trigger;
    /**
     * @var
     *
     * Create text or custom input fields for the user to fill in (Array<Object> or Function, default: null).
     */
    public $metaFields;
    /**
     * @var
     *
     * Whether to wait for all thumbnails to be ready before starting the upload (boolean, default: false).
     */
    public $waitForThumbnailsBeforeUpload;
    /**
     * @var
     *
     * Turn the file icon and thumbnail in the Dashboard into a link to the uploaded file (boolean, default: false).
     */
    public $showLinkToFileUploadResult;
    /**
     * @var
     *
     * Hide the upload button (boolean, default: false).
     */
    public $hideUploadButton;
    /**
     * @var
     *
     * Hide the retry button (boolean, default: false).
     */
    public $hideRetryButton;
    /**
     * @var
     *
     * Hide pause/resume buttons (for resumable uploads, via tus, for example) (boolean, default: false).
     */
    public $hidePauseResumeButton;
    /**
     * @var
     *
     * Hide the cancel button (boolean, default: false).
     */
    public $hideCancelButton;
    /**
     * @var
     *
     * Hide the status bar after the upload has finished (boolean, default: false).
     */
    public $hideProgressAfterFinish;
    /**
     * @var
     *
     * Show the list of added files with a preview and file information (boolean, default: true).
     */
    public $showSelectedFiles;
    /**
     * @var
     *
     * When only one file is selected, its preview and meta information will be centered and enlarged (boolean, default: true).
     */
    public $singleFileFullScreen;
    /**
     * @var
     *
     * Set to true to automatically close the modal when the user clicks outside of it (boolean, default: false).
     */
    public $closeModalOnClickOutside;
    /**
     * @var
     *
     * Set to true to automatically close the modal when all current uploads are complete (boolean, default: false).
     */
    public $closeAfterFinish;
    /**
     * @var
     *
     * Disable page scroll when the modal is open (boolean, default: true).
     */
    public $disablePageScrollWhenModalOpen;
    /**
     * @var
     *
     * Add animations when the modal dialog is opened or closed, for a more satisfying user experience (boolean, default: true).
     */
    public $animateOpenClose;
    /**
     * @var
     *
     * Configure the type of selections allowed when browsing your file system via the file manager selection window (string, default: 'files').
     */
    public $fileManagerSelectionType;
    /**
     * @var
     *
     * Show the Uppy logo with a link (boolean, default: true).
     */
    public $proudlyDisplayPoweredByUppy;
    /**
     * @var
     *
     * Disable the status bar completely (boolean, default: false).
     */
    public $disableStatusBar;
    /**
     * @var
     *
     * Disable informer (shows notifications in the form of toasts) completely (boolean, default: false).
     */
    public $disableInformer;
    /**
     * @var
     *
     * Disable the thumbnail generator completely (boolean, default: false).
     */
    public $disableThumbnailGenerator;
    /**
     * @var
     *
     * Disable local files (boolean, default: false).
     */
    public $disableLocalFiles;
    /**
     * @var
     *
     * You can use on and once to listen to these events.
     */
    public $events;
    /**
     * @var
     *
     * ID
     */
    public $id;
    /**
     * @var
     *
     * Whether to allow several upload batches (boolean, default: true).
     */
    public $allowMultipleUploadBatches;
    /**
     * @var
     *
     * The meta data will only be set on a file object if it’s entered by the user.
     */
    public $meta;
    /**
     * @var
     *
     * How long an Informer notification will be visible (number, default: 5000).
     */
    public $infoTimeout;
    /**
     * @var
     *
     * When taking a picture: the amount of seconds to wait before actually taking a snapshot (boolean, default: false).
     */
    public $countdown;
    /**
     * @var
     *
     * The types of recording modes to allow (Array, default: []).
     */
    public $modes;
    /**
     * @var
     *
     * Configures whether to mirror preview image from the camera (boolean, default: true).
     */
    public $mirror;
    /**
     * @var
     *
     * Configure the MediaTrackConstraints (Object, default: {}).
     */
    public $videoConstraints;
    /**
     * @var
     */
    public $showVideoSourceDropdown;
    /**
     * @var
     *
     * Configures whether to show a dropdown which enables to choose the video device to use (boolean, default: false).
     */
    public $showRecordingLength;
    /**
     * @var
     *
     * Set the preferred mime type for video recordings, for example 'video/webm' (string, default: null).
     */
    public $webcamPreferredVideoMimeType;
    /**
     * @var
     *
     * Set the preferred mime type for images, for example 'image/png' (string, default: image/jpeg).
     */
    public $preferredImageMimeType;
    /**
     * @var
     *
     * Replaces Uppy’s custom camera UI on mobile and tablet with the native device camera (Function: boolean or boolean, default: isMobile()).
     */
    public $mobileNativeCamera;
    /**
     * @var
     *
     * Options passed to MediaDevices.getDisplayMedia() (Object, default: null).
     */
    public $displayMediaConstraints;
    /**
     * @var
     *
     * Options passed to MediaDevices.getUserMedia() (Object, default: null).
     */
    public $userMediaConstraints;
    /**
     * @var
     *
     * Set the preferred mime type for video recordings, for example 'video/webm' (string, default: null).
     */
    public $screenCapturePreferredVideoMimeType;
    /**
     * @var
     *
     * Configures whether to show a dropdown to select audio device (boolean, default: false).
     */
    public $showAudioSourceDropdown;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $boxHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $dropboxHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $facebookHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $googleDriveHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $instagramHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $oneDriveHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $unsplashHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $urlsourceHeaders;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $zoomHeaders;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $boxCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $dropboxCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $facebookCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $googleDriveCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $instagramCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $oneDriveCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $unsplashCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $urlsourceCookiesRule;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $zoomCookiesRule;
    /**
     * @var
     *
     * Methods
     */
    public $method;
    /**
     * @var
     *
     * Configures whether to use a multipart form upload, using FormData (boolean, default: true).
     */
    public $formData;
    /**
     * @var
     *
     * Pass an array of field names to limit the metadata fields that will be added to upload.
     */
    public $allowedMetaFields;
    /**
     * @var
     *
     * An object containing HTTP headers to use for the upload request. Keys are header names, values are header values.
     */
    public $headers;
    /**
     * @var
     *
     * Send all files in a single multipart request (boolean, default: false).
     */
    public $bundle;
    /**
     * @var
     *
     * Check if the response was successful (function, default: (status, responseText, response) => boolean).
     */
    public $validateStatus;
    /**
     * @var
     *
     * Extract the response data from the successful upload (function, default: (responseText, response) => void).
     */
    public $getResponseData;
    /**
     * @var
     *
     * Extract the error from the failed upload (function, default: (responseText, response) => void).
     */
    public $getResponseError;
    /**
     * @var
     *
     * The field name containing the location of the uploaded file (string, default: 'url').
     */
    public $responseUrlFieldName;
    /**
     * @var
     *
     * Number of images that will be compressed in parallel (number, default: 10).
     */
    public $limit;
    /**
     * @var
     *
     * The response type expected from the server, determining how the xhr.response property should be filled (string, default: 'text').
     */
    public $responseType;
    /**
     * @var
     *
     * Configure the requests to send Cookies using the xhr.withCredentials property (boolean, default: false).
     */
    public $withCredentials;
    /**
     * @var
     *
     * The Transloadit API URL to use (string, default: https://api2.transloadit.com).
     */
    public $service;
    /**
     * @var
     *
     * Limit the amount of uploads going on at the same time (number, default: 20).
     */
    public $transloaditLimit;
    /**
     * @var
     *
     * Configure the Assembly Instructions, the fields to send along to the assembly, and authentication (object | function, default: null).
     */
    public $assemblyOptions;
    /**
     * @var
     *
     * Wait for the template to finish, rather than only the upload, before marking the upload complete (boolean, default: false).
     */
    public $waitForEncoding;
    /**
     * @var
     *
     * Wait for Transloadit’s backend to catch early errors, not the entire Assembly to complete. (boolean, default: false)
     */
    public $waitForMetadata;
    /**
     * @var
     *
     * Allow another plugin to upload files, and then import those files into the Transloadit Assembly (boolean, default: false).
     */
    public $importFromUploadURLs;
    /**
     * @var
     *
     * Always create and run an Assembly when uppy.upload() is called, even if no files were selected (boolean, default: false).
     */
    public $alwaysRunAssembly;
    /**
     * @var
     *
     * True or False
     */
    public $transloadit;
    /**
     * @var
     *
     * When uploading a chunk fails, automatically try again after the defined millisecond intervals (Array<number>, default: [0, 1000, 3000, 5000]).
     */
    public $retryDelays;
    /**
     * @var
     *
     * True or False
     */
    public $tus;
    /**
     * @var
     *
     * Limit the amount of uploads going on at the same time (number, default: 20).
     */
    public $tusLimit;
    /**
     * @var
     *
     * A boolean, or a function that returns a boolean which is called for each file that is uploaded with the corresponding UppyFile instance as argument.
     */
    public $shouldUseMultipart;
    /**
     * @var
     *
     * AwsS3 Url
     */
    public $awsS3Url;
    /**
     * @var
     *
     * The maximum amount of files to upload in parallel (number, default: 6).
     */
    public $awsS3Limit;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (Object, default: {}).
     */
    public $awsS3Headers;
    /**
     * @var
     *
     * This option correlates to the RequestCredentials value (string, default: 'same-origin').
     */
    public $awsS3CookiesRule;
    /**
     * @var
     *
     * Limit the amount of uploads going on at the same time (number, default: 5).
     */
    public $timeout;
    /**
     * @var
     *
     * Remote Sources Url
     */
    public $remoteSourcesUrl;
    /**
     * @var
     *
     * List of remote sources that will be enabled (array, default: ['Box', 'Dropbox', 'Facebook', 'GoogleDrive','Instagram', 'OneDrive', 'Unsplash', 'Url', 'Zoom']).
     */
    public $sources;
    /**
     * @var
     *
     * Custom headers that should be sent along to Companion on every request (object, default: {}).
     */
    public $remoteSourcesHeaders;
    /**
     * @var
     *
     * This option correlates to the Request.credentials value, which tells the plugin whether to send cookies to Companion (string, default: same-origin).
     */
    public $remoteSourcesCookiesRule;
    /**
     * @var
     *
     * True or False
     */
    public $goldenretriever;
    /**
     * @var
     *
     * How long to store metadata and files for. Used for LocalStorage and IndexedDB (number, default: 24 * 60 * 60 * 1000 // 24 hours).
     */
    public $expires;
    /**
     * @var
     *
     * Whether to enable Service Worker storage (boolean, default: false).
     */
    public $serviceWorker;
    /**
     * @var
     *
     * True or False
     */
    public $compressor;
    /**
     * @var
     *
     * The quality of the output image passed to Compressor.js (number, default: 0.6).
     */
    public $compressorQuality;
    /**
     * @var
     *
     * Number of images that will be compressed in parallel (number, default: 10).
     */
    public $compressorLimit;

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
        string $goldenretriever = null,
        string $expires = "24 * 60 * 60 * 1000",
        string $serviceWorker = "false",
        string $compressor = null,
        string $compressorQuality = "0.6",
        string $compressorLimit = "10",
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
        $this->goldenretriever = $goldenretriever;
        $this->expires = $expires;
        $this->serviceWorker = $serviceWorker;
        $this->compressor = $compressor;
        $this->compressorQuality = $compressorQuality;
        $this->compressorLimit = $compressorLimit;
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
