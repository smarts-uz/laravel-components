<div id="{{$tableId}}Text"></div>

<table id="{{$tableId}}" class="display wrap table-bordered " style="border-collapse: collapse; width: 100%; padding-top: 10px">
    <thead class="border border-dark">
    @foreach($dtHeaders as $array => $data)
        <tr class="border border-dark">
            @foreach($data as $header=>$key)
                <th colspan="{{$key["colspan"]}}" rowspan="{{$key["rowspan"]}}" style="text-align: center;" class="border border-dark">{{ $header }}</th>
            @endforeach
            @if($tableControlers)
                <th colspan="0" rowspan="0" style="text-align: center;" class="border border-dark">Action</th>
                <th colspan="0" rowspan="0" style="text-align: center;" class="border border-dark">Action</th>
            @endif
        </tr>
    @endforeach
    </thead>
</table>
<script>
    $(document).ready(function() {
        @foreach($functions as $key => $option)
            function {{$key}}({{$option['parameters']}}) {
                {!! $option['value'] !!}
            }
        @endforeach
        // $.fn.dataTable.moment('DD-MM-YYYY');
        @foreach($fn as $fnvalue)
            {!! $fnvalue !!}
        @endforeach
        @if($headerclone)
            $('#{{$tableId}} thead tr').clone(true).addClass('filters').appendTo( '#{{$tableId}} thead' );
        @endif

        var {{$tableId}} = $('#{{$tableId}}').DataTable( {
            stateSave: "{{$stateSave}}",
            scrollX: "{{$scrollX}}",
            scrollY: {{$scrollY}},
            serverSide: "{{$serverSide}}",
            keys: "{{$keys}}",
            rowReorder: {!! $rowReorder !!},
            rowGroup: {!! $rowGroup !!},
            responsive: {!! $responsive !!},
            searchBuilder: {!! $searchBuilder !!},
            select: {!! $select !!},
            order: [[0, 'desc']],
            colReorder: "{{$colReorder}}",
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "{{ __('Все') }}"] ] ,
            "pagingType": "{{$pagingType}}",
            pageLength: {{$pageLength}},
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/{{$language}}.json"
            },
            dom: "{{$dom}}",
            columns: [
                    @foreach($dtColumns as $column)
                {data: "{{$column['data']}}", name: "{{$column['name']}}", render: {!! $column['render'] ?? 'null' !!} },
                @endforeach
                @if($tableControlers)
                {
                    data: null,
                    className: 'dt-center editor-edit',
                    defaultContent: '<i class="fa fa-pencil"/>',
                    orderable: false
                },
                {
                    data: null,
                    className: 'dt-center editor-delete',
                    defaultContent: '<i class="fa fa-trash"/>',
                    orderable: false
                }
                @endif
            ],
            {!! $buttons !!}
            ajax: {
                url: " {{$getData}}",
                data: {
                    _token: '{{csrf_token()}}',
                    startDate: '{{ $startDate ?? '' }}',
                    endDate: '{{$endDate ?? '' }}'
                },
                type: "POST",
            },
            @foreach($options as $key=>$value)
                    {{$key}}: {!! $value !!},
            @endforeach
            "fnInitComplete": function(){

                // Enable THEAD scroll bars
                $('.dataTables_scrollHead').css('overflow', 'auto');

                // Sync THEAD scrolling with TBODY
                $('.dataTables_scrollHead').on('scroll', function () {
                    $('.dataTables_scrollBody').scrollLeft($(this).scrollLeft());
                });
            },
        });
        @foreach($addEventListener as $key => $value)
            document.querySelector('{{$key}}').addEventListener({{$value}});
        @endforeach
        @foreach($objects as $key => $value)
            {{$key}} = {!! $value !!};
        @endforeach
        var divTitle = ''
            + '<div class="col-12 text-center text-md-left pt-4 pb-4 display-2" style="text-align: center !important;">'
            + '<h1 class="text-dark">' + '{{$tableTitle}}' + '</h1>'
            + '</div>';

        $("#{{$tableId}}Text").append(divTitle);
        @foreach($events as $key => $value)
            {{$tableId}}.on("{{$key}}", {!! $value !!});
        @endforeach
        @foreach($querySelectorAll as $key => $value)
            document.querySelectorAll("{{$key}}").{!! $value !!};
        @endforeach
    });
</script>
