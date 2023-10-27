<table id="{{$id}}" {{ $attributes }}></table>
<script>
    var myAppendGrid{{$id}};
    document.addEventListener("DOMContentLoaded", function () {
        myAppendGrid{{$id}} = new AppendGrid({
            element: "{{$id}}",
            uiFramework: "{{$uiFramework}}",
            iconFramework: "{{$iconFramework}}",
            columns: [
                    @foreach($columns as $column)
                {
                    @foreach($column as $key=>$value)
                            {{$key}}: {!!  $value !!},
                    @endforeach
                },
                @endforeach
            ],
            @foreach($options as $key=>$value)
                    {{$key}}: {!! $value !!},
            @endforeach
        });
        @foreach($addEventListener as $key)
            document.getElementById("{{$key['id']}}").addEventListener('{{$key['key']}}',{!! $key['value'] !!});
        @endforeach
    });
</script>
