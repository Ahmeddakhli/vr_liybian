<script>
    $('.m_selectpicker').selectpicker();
</script>
<script>
    $('body').addClass('kt-aside--enabled kt-aside--fixed');
</script>
<script>
    function initTable1(url) {
        var table = $('#domain_table');
        return table.DataTable({
            dom: '<"top"i>Bfrtip',
            buttons: [
                // {
                //     extend: 'pdf',
                //     footer: true,
                //     exportOptions: {
                //         columns: [0,1,2]
                //     }
                // },
                // {
                //     extend: 'csv',
                //     footer: true,
                //     exportOptions: {
                //         columns: [0,1,2]
                //     }
                // },
                // {
                //     extend: 'excel',
                //     footer: true,
                //     exportOptions: {
                //         columns: [0,1,2]
                //     }
                // }
            ],
            responsive: true,
            searchDelay: 500,
            processing: true,
                        serverSide: true,
            language:{
                search:"{{__('datatables.search')}}",
                emptyTable:"{{__('datatables.no_records_available')}}",
                info:"{{__('datatables.showing_page')}} _START_ {{__('datatables.of')}} _END_ {{__('datatables.of')}} _TOTAL_ ",

                infoEmpty:"{{__('datatables.showing_page')}} _START_ {{__('datatables.of')}} _END_ {{__('datatables.of')}} _TOTAL_",
            },
            ajax: {
                url: url,
                type: 'POST',
                data: {
                    // Parameters
                    columnsDef: [
                        //
                    ],
                },
            },
            columns: [
                {data: 'id', orderable: true, searchable: true},
                {data: 'domain', orderable: true, searchable: true},
                {data: 'tour_code', orderable: false, searchable: true},
                {data: 'created_at', orderable: true, searchable: true},
                {data: 'last_updated_at', orderable: true, searchable: true},
            ],
            columnDefs: [
                {
                    targets: 0,
                    title: '{{__('domainsetting::domains.id')}}',
                    render: function(data, type, full, meta) {
                        return full.id;
                    },
                },
                {
                    targets: 1,
                    title: '{{__('domainsetting::domains.domain')}}',
                    render: function(data, type, full, meta) {
                        return full.domain;
                    },
                },
                {
                    targets: 2,
                    title: '{{__('domainsetting::domains.folder_name')}}',
                    render: function(data, type, full, meta) {
                        return full.folder_name;
                    },
                },
                {
                    targets: 3,
                    title: '{{__('domainsetting::domains.tour_code')}}',
                    render: function(data, type, full, meta) {
                        return full.tour_code;
                    },
                },
                {
                    targets: 4,
                    title: '{{__('domainsetting::domains.created_at')}}',
                    render: function(data, type, full, meta) {
                        return full.created_at;
                    },
                },
                {
                    targets: 5,
                    title: '{{__('domainsetting::domains.last_updated_at')}}',
                    render: function(data, type, full, meta) {
                        return full.last_updated_at;
                    },
                },
                {
                    targets: 6,
                    title: '{{__('domainsetting::domains.actions')}}',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var delete_url = '{{route("domains.delete", "id=:id")}}';
                        delete_url = delete_url.replace(':id', full.id);

                        @if (true)
                            var value = `
                            <span class="dropdown">
                                <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                            `;
                            @if (true)
                                value += `
                                    <a href="{{route('domains.modals.update')}}" class="dropdown-item" data-toggle="modal" data-target="#fast_modal" data-path="{{route('domains.modals.update')}}" data-title="{{__('domainsetting::domains.update_domains')}}" data-id="`+full.id+`" data-modal-load>
                                        <span>
                                            <i class="la la-edit"></i>
                                            <span>{{__('domainsetting::domains.update_domains')}}</span>
                                        </span>
                                    </a>
                                `;
                            @endif
                            @if (true)
                                value += `
                                    <a class="dropdown-item" data-8x-delete-it='{"container":false, "path":"`+delete_url+`", "callback": "deletedomainsCallback"}' href="#"><i class="la la-trash"></i> {{__('domainsetting::domains.delete_domains')}}</a>
                                `;
                            @endif
                            value += `
                                </div>
                            </span>
                            `;
                            return value;
                        @else
                            return ``;
                        @endif
                    },
                }
            ],
        });
    };
    jQuery(document).ready(function() {
        // Init datatable
        domain_table = initTable1('{{ route('domains.index') }}');

        // Search datatable
        $('#m_search').on('click', function(e) {
            e.prdomainsDefault();
            var query = $('#search_domain_form').serialize();
            $("#domain_table").dataTable().fnDestroy();
            domain_table = initTable1('{{ route('domains.index') }}'+'?'+query);
        });

        // Reset search form
        $('#m_reset').on('click', function(e) {
            e.prdomainsDefault();
            $(this).closest('form').trigger("reset");
            $("#domain_table").dataTable().fnDestroy();
            domain_table = initTable1('{{ route('domains.index') }}');
        });
    });
</script>
<script>
    function deletedomainsCallback() {
        // Reload datatable with delay to clear cache
        setTimeout(function() {
            domain_table.ajax.reload(function(json) {
                //
            }, false);
        }, 3000);
    }
</script>