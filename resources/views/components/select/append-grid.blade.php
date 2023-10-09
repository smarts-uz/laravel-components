<table id="{{$id}}" {{ $attributes }}></table>
<script>
    var myAppendGrid;
    document.addEventListener("DOMContentLoaded", function () {
            myAppendGrid = new AppendGrid({
                element: {{$id}},
                uiFramework: "bootstrap5",
                iconFramework: "fontawesome5",
                columns: [
                    @foreach($columns as $column)
                        {
                        @foreach($column as $key=>$value)
                            {{$key}}: "{{$value}}",
                        @endforeach
                        },
                    @endforeach
                ]
        });
    });
</script>
