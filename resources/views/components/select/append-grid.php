<table id="{{$element}}"></table>
<script>
    var myAppendGrid;
    var token = document.getElementsByName('_token')[0].value;
    document.addEventListener("DOMContentLoaded", function () {
        myAppendGrid = new AppendGrid({
            element: {{$element}},
        uiFramework: "bootstrap4",
            iconFramework: "fontawesome5",
            columns: [{
            name: "{{$name}}",
            display: "{{$display}}",
            type: "select",
            ctrlAttr: {
                "rows": 5
            },
            ctrlOptions: {
                @foreach (json_decode($ctrlOptions) as $key =>  $elem)
        {{$key}}: "{{ $elem }}",
        @endforeach}
    }]
    });
    });
</script>
