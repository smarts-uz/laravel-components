<script src="https://releases.transloadit.com/uppy/locales/v3.0.7/{{$locale}}.min.js"></script>

<script>
    var uppy = new Uppy.Core({
        id: '{{$id}}',
        allowMultipleUploadBatches: {{$allowMultipleUploadBatches}},
        debug: {{$debug}},
        autoProceed: {{$autoProceed}},
        restrictions: {!! $restrictions !!},
        meta: {!! $meta !!},
        onBeforeFileAdded: (currentFile, files) => currentFile,
        onBeforeUpload: (files) => {
        },
        locale: Uppy.locales.{{$locale}},
        store: new Uppy.DefaultStore(),
        logger: Uppy.justErrorsLogger,
        infoTimeout: {{$infoTimeout}},
    })
        .use(Uppy.Dashboard, {
            trigger: '{{$trigger}}',
            inline: {{$inline}},
            target: '{{$target}}',
            showProgressDetails: {{$showProgressDetails}},
            note: '{{$note}}',
            width: {{$width}},
            height:{{$height}},
            metaFields: [
                @foreach($metaFields as $metaField)
                    {id: '{{$metaField['id']}}', name: '{{$metaField['name']}}', placeholder: '{{$metaField['placeholder']}}'},
                @endforeach
            ],
            browserBackButtonClose: true,
            waitForThumbnailsBeforeUpload: {{$waitForThumbnailsBeforeUpload}},
            showLinkToFileUploadResult: {{$showLinkToFileUploadResult}},
            hideUploadButton: {{$hideUploadButton}},
            hideRetryButton: {{$hideRetryButton}},
            hidePauseResumeButton: {{$hidePauseResumeButton}},
            hideCancelButton: {{$hideCancelButton}},
            hideProgressAfterFinish: {{$hideProgressAfterFinish}},
            showSelectedFiles: {{$showSelectedFiles}},
            singleFileFullScreen: {{$singleFileFullScreen}},
            closeModalOnClickOutside: {{$closeModalOnClickOutside}},
            closeAfterFinish: {{$closeAfterFinish}},
            disablePageScrollWhenModalOpen: {{$disablePageScrollWhenModalOpen}},
            animateOpenClose: {{$animateOpenClose}},
            fileManagerSelectionType: "{{$fileManagerSelectionType}}",
            proudlyDisplayPoweredByUppy: {{$proudlyDisplayPoweredByUppy}},
            disableStatusBar: {{$disableStatusBar}},
            disableInformer: {{$disableInformer}},
            disableThumbnailGenerator: {{$disableThumbnailGenerator}},
            disableLocalFiles: {{$disableLocalFiles}},
            theme: "{{ $theme }}",
            disabled: "{{ $disabled }}",
        })
        @if($webcam)
        .use(Uppy.Webcam, {
            target: Uppy.Dashboard,
            countdown: {{$countdown}},
            modes: {{$modes}},
            mirror: {{$mirror}},
            videoConstraints: {{$videoConstraints}},
            showVideoSourceDropdown: {{$showVideoSourceDropdown}},
            showRecordingLength: {{$showRecordingLength}},
            preferredVideoMimeType: "{{$webcamPreferredVideoMimeType}}",
            preferredImageMimeType: "{{$preferredImageMimeType}}",
            mobileNativeCamera: {{$mobileNativeCamera}},
        })
        @endif
        @if($screenCapture)
        .use(Uppy.ScreenCapture, {
            target: Uppy.Dashboard,
            displayMediaConstraints: {{$displayMediaConstraints}},
            userMediaConstraints: {{$userMediaConstraints}},
            preferredVideoMimeType: "{{$screenCapturePreferredVideoMimeType}}",
        })
        @endif
        @if($audio)
        .use(Uppy.Audio, {
            target: Uppy.Dashboard,
            showAudioSourceDropdown: {{$showAudioSourceDropdown}},
        })
        @endif
        @if($boxUrl)
        .use(Uppy.Box, {
            target: Uppy.Dashboard,
            companionUrl: '{{$boxUrl}}',
            companionHeaders: {{$boxHeaders}},
            companionCookiesRule: '{{$boxCookiesRule}}',
        })
        @endif
        @if($dropboxUrl)
        .use(Uppy.Dropbox, {
            target: Uppy.Dashboard,
            companionUrl: '{{$dropboxUrl}}',
            companionHeaders: '{{$dropboxHeaders}}',
            companionCookiesRule: '{{$dropboxCookiesRule}}',
        })
        @endif
        @if($facebookUrl)
        .use(Uppy.Facebook, {
            target: Uppy.Dashboard,
            companionUrl: '{{$facebookUrl}}',
            companionHeaders: '{{$facebookHeaders}}',
            companionCookiesRule: '{{$facebookCookiesRule}}',
        })
        @endif
        @if($googleDriveUrl)
        .use(Uppy.GoogleDrive, {
            target: Uppy.Dashboard,
            companionUrl: '{{$googleDriveUrl}}',
            companionHeaders: '{{$googleDriveHeaders}}',
            companionCookiesRule: '{{$googleDriveCookiesRule}}',
        })
        @endif
        @if($instagramUrl)
        .use(Uppy.Instagram, {
            target: Uppy.Dashboard,
            companionUrl: '{{$instagramUrl}}',
            companionHeaders: '{{$instagramHeaders}}',
            companionCookiesRule: '{{$instagramCookiesRule}}',
        })
        @endif
        @if($oneDriveUrl)
        .use(Uppy.OneDrive, {
            target: Uppy.Dashboard,
            companionUrl: '{{$oneDriveUrl}}',
            companionHeaders: '{{$oneDriveHeaders}}',
            companionCookiesRule: '{{$oneDriveCookiesRule}}',
        })
        @endif
        @if($unsplashUrl)
        .use(Uppy.Unsplash, {
            target: Uppy.Dashboard,
            companionUrl: '{{$unsplashUrl}}',
            companionHeaders: '{{$unsplashHeaders}}',
            companionCookiesRule: '{{$unsplashCookiesRule}}',
        })
        @endif
        @if($urlsourceUrl)
        .use(Uppy.Url, {
            target: Uppy.Dashboard,
            companionUrl: '{{$urlsourceUrl}}',
            companionHeaders: '{{$urlsourceHeaders}}',
            companionCookiesRule: '{{$urlsourceCookiesRule}}',
        })
        @endif
        @if($zoomUrl)
        .use(Uppy.Zoom, {
            target: Uppy.Dashboard,
            companionUrl: '{{$zoomUrl}}',
        })
        @endif
        .use(Uppy.XHRUpload, {
            endpoint: '{{$url}}',
            formData: true,
            fieldName: '{{$fieldName}}',
            headers: file => ({
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }),
        });
    @foreach($events as $key=>$value)
    uppy.on('{{$key}}', {!! $value !!});
    @endforeach
    // uppy.on('upload-success', (file, response) => {
    //     const httpStatus = response.status // HTTP status code
    //     const httpBody = response.body   // extracted response data
    //     // do something with file and response
    // });
    // uppy.on('file-added', (file) => {
    //     uppy.setFileMeta(file.id, {
    //         size: file.size,
    //     })
    //     console.log(file.name);
    // });
    // uppy.on('complete', result => {
    //     console.log('successful files:', result.successful)
    //     console.log('failed files:', result.failed)
    // });
</script>
