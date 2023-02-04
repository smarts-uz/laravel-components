<script>
    $(document).ready(function() {
        $.fn.dataTable.moment('DD-MM-YYYY');
        $('#example').DataTable( {
            scrollX: true,
            keys: {{$keys}},
            rowReorder: {{$rowReorder}},
            rowGroup: {{$rowGroup}},
            responsive: {{$responsive}},
            select: {{$select}},
            order: [[0, 'desc']],
            colReorder: {{$colReorder}},
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "{{ __('Все') }}"] ] ,
            "pagingType": "{{$pagingType}}",
            pageLength: {{$pageLength}},
            "language" : {!! $language !!},
            dom: "{{$dom}}",
            ajax: "{{$getData}}",
            {!! $buttons !!}
            columns: columns,
        });
        var divTitle = ''
            + '<div class="col-12 text-center text-md-left pt-4 pb-4 display-2" style="text-align: center !important;">'
            + '<h1 class="text-dark">' + '{{$tableTitle}}' + '</h1>'
            + '</div>';
        $("#fortext").append(divTitle);
        $(".content").prepend('<div id = "buttons-container" class="buttons-container"></div>');
        $("#buttons-container").append($(".dataTables_length"));
        $("#buttons-container").append($(".daterangepicker-form"));
        $("#buttons-container").append($(".dt-buttons"));
        $("#buttons-container").append($(".dataTables_filter"));
        $("#buttons-container").insertAfter($("#fortext"));
    });
</script>
