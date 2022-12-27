
<table id="{{$id}}"></table>
<script>
    var myAppendGrid;
    document.addEventListener("DOMContentLoaded", function () {
        myAppendGrid = new AppendGrid({
            element: {{$id}},
        uiFramework: "bootstrap4",
            iconFramework: "fontawesome5",
            columns: [{
            name: "{{$name}}",
            display: "{{$ds_name}}",
            type: "select",
            ctrlAttr: {
                "rows": 5
            },
            ctrlOptions: {
                @foreach (json_decode($data) as $key =>  $item)
        {{$key}}: "{{ $item }}",
        @endforeach}
    }]
    });
    });
</script>
