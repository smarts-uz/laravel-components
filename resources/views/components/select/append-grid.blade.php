<table id="{{$id}}" {{ $attributes }}></table>
<script>
    var myAppendGrid;
    document.addEventListener("DOMContentLoaded", function () {
        myAppendGrid = new AppendGrid({
            element: "{{$id}}",
            uiFramework: "{{$uiFramework}}",
            iconFramework: "{{$iconFramework}}",
            columns: [
                    @foreach($columns as $column)
                {
                    @foreach($column as $key=>$value)
                            {{$key}}: "{{$value}}",
                    @endforeach
                },
                @endforeach
            ],
            @foreach($options as $key=>$value)
                    {{$key}}: {!! $value !!},
            @endforeach
        });
    });
</script>
