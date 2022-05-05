<?php
/** @var UserSession $userSession */
$page = 'page1';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Page 1 - <span class="text-muted">Subtitle</span></h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#uploadBatchModal">
                <i class="fas fa-plus"></i>
                Add New Batch
            </button>
        </div> -->
    </div>
    <div class="row">
        <div class="col">
            <table id="collection" class="table table-bordered dt-responsive responsive-text" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Column 1</th>
                    <th style="text-align: center;">Column 2</th>
                    <th style="text-align: center;">Column 3</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Column 1</th>
                    <th style="text-align: center;">Column 2</th>
                    <th style="text-align: center;">Column 3</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
   
    <script type="text/javascript">
        var collection = {};
        var collectionTable = $('#collection');
        var collectionDataTable = null;

        $(function() {
            $('.custom-file-input').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            collectionDataTable = collectionTable.DataTable({
                serverSide: false,
                ajax: {
                    url: "/page1/list"
                },
                order: [[ 0, "asc" ]],
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'pageLength', 'colvis'
                ],
                columnDefs: [
                    {
                        className: "dt-center",
                        targets: [0, 1, 2, 3]
                    },
                    {
                        orderable: true,
                        targets: [1, 2]
                    }
                ],
                language: {
                    emptyTable: "No reports have been added"
                },
                pagingType: "full_numbers",
                columns: [
                    {
                        data: null,
                        render: function ( data, type ) {
                            if (type === 'display' || type === 'filter') {
                                return "<a href='/page1/putpagehere'>" + data.name + "</a>";
                            } else {
                                return data.name;
                            }
                        }
                    },
                    {
                        data: 'date',
                        render: function ( data, type ) {
                            if (type === 'display'  || type === 'filter' ) {
                                return (data !== null) ? moment.unix(data).format('MM/DD/YYYY') : '';
                            } else {
                                return data;
                            }
                        }
                    },
                    {
                        data: 'todo_items'
                    },
                    {
                        data: null,
                        render: function (data, type) {
                            if (data.signed == 1) {
                                return 'Yes';
                            }
                            else {
                                return 'No';
                            }
                        }
                    }
                ],
                "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                    if ( aData['todo_items'] > 0 )
                        $(nRow).addClass("rFailed");
                    else if (aData['todo_items'] == 0 && aData['signed'] == 0)
                        $(nRow).addClass("rAlmostDone");
                    else
                        $(nRow).addClass("rCompleted");
                    return nRow;
                }
            });
            collectionDataTable.buttons().container().prependTo('#collection_filter');
            collectionDataTable.buttons().container().addClass('float-left');
            $('.dt-buttons').addClass('btn-group-sm');
            $('.dt-buttons div').addClass('btn-group-sm');
            collectionTable.on('xhr.dt', function (e, settings, data) {
            });
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';