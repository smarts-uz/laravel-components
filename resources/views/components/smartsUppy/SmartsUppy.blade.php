<script src="https://releases.transloadit.com/uppy/locales/v3.0.7/{{$locale}}.min.js"></script>

<script>
    var uppy = new Uppy.Core({
        debug: true,
        autoProceed: true,
        restrictions: {
            minFileSize: null,
            maxTotalFileSize: null,
            minNumberOfFiles: 0,
            allowedFileTypes: null,
            requiredMetaFields: [],
        },
        meta: {},
        onBeforeFileAdded: (currentFile, files) => currentFile,
        onBeforeUpload: (files) => {
        },
        locale: Uppy.locales.{{$locale}},
        store: new Uppy.DefaultStore(),
        logger: Uppy.justErrorsLogger,
        infoTimeout: 5000,
    })
        .use(Uppy.Dashboard, {
            trigger: '.UppyModalOpenerBtn',
            inline: true,
            target: '{{$target}}',
            showProgressDetails: true,
            note: '{{$note}}',
            width: {{$width}},
            height:{{$height}},
            metaFields: [
                {id: 'name', name: 'Name', placeholder: 'file name'},
                {id: 'caption', name: 'Caption', placeholder: 'describe what the image is about'}
            ],
            browserBackButtonClose: true,
            theme: "{{ $theme }}",
            disabled: "{{ $disabled }}",
        })
        @if($webcam)
        .use(Uppy.Webcam, { target: Uppy.Dashboard })
        @endif
        @if($screenCapture)
        .use(Uppy.ScreenCapture, { target: Uppy.Dashboard })
        @endif
        @if($audio)
        .use(Uppy.Audio, { target: Uppy.Dashboard })
        @endif
        @if($boxUrl)
        .use(Uppy.Box, {
            target: Uppy.Dashboard,
            companionUrl: '{{$boxUrl}}',
        })
        @endif
        @if($dropboxUrl)
        .use(Uppy.Dropbox, {
            target: Uppy.Dashboard,
            companionUrl: '{{$dropboxUrl}}',
        })
        @endif
        @if($facebookUrl)
        .use(Uppy.Facebook, {
            target: Uppy.Dashboard,
            companionUrl: '{{$facebookUrl}}',
        })
        @endif
        @if($googleDriveUrl)
        .use(Uppy.GoogleDrive, {
            target: Uppy.Dashboard,
            companionUrl: '{{$googleDriveUrl}}',
        })
        @endif
        @if($instagramUrl)
        .use(Uppy.Instagram, {
            target: Uppy.Dashboard,
            companionUrl: '{{$instagramUrl}}',
        })
        @endif
        @if($oneDriveUrl)
        .use(Uppy.OneDrive, {
            target: Uppy.Dashboard,
            companionUrl: '{{$oneDriveUrl}}',
        })
        @endif
        @if($unsplashUrl)
        .use(Uppy.Unsplash, {
            target: Uppy.Dashboard,
            companionUrl: '{{$unsplashUrl}}',
        })
        @endif
        @if($urlsourceUrl)
        .use(Uppy.Url, {
            target: Uppy.Dashboard,
            companionUrl: '{{$urlsourceUrl}}',
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
    uppy.on('upload-success', (file, response) => {
        const httpStatus = response.status // HTTP status code
        const httpBody = response.body   // extracted response data
        // do something with file and response
    });
    uppy.on('file-added', (file) => {
        uppy.setFileMeta(file.id, {
            size: file.size,
        })
        console.log(file.name);
    });
    uppy.on('complete', result => {
        console.log('successful files:', result.successful)
        console.log('failed files:', result.failed)
    });
</script>
