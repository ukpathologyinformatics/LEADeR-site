<?php
/** @var UserSession $userSession */
$page = 'reports';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Reports - <span class="text-muted">List</span></h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#uploadBatchModal">
                <i class="fas fa-plus"></i>
                Add New Batch
            </button>
        </div> -->
    </div>
    <div class="row">
        <div class="col">
            <table id="batches" class="table table-bordered dt-responsive responsive-text" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Report Created</th>
                    <th style="text-align: center;">Remaining Items</th>
                    <th style="text-align: center;">Signed</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Report Created</th>
                    <th style="text-align: center;">Remaining Items</th>
                    <th style="text-align: center;">Signed</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="modal fade" id="uploadBatchModal" tabindex="-1" role="dialog" aria-labelledby="uploadBatchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadBatchModalLabel">Upload New Batch Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12 mb-3 form-floating">
                        <input type="text" class="form-control" id="uploadBatchName" placeholder="Batch Name" autofocus />
                        <label for="uploadBatchName">Batch Name</label>
                    </div>
                    <div class="col-lg-12 mb-3 form-floating">
                        <div class="custom-file" id="customFile" lang="es">
                            <input type="file" class="form-control custom-file-input" accept=".txt" id="uploadBatchFile" aria-describedby="fileHelp">
                            <label class="form-control custom-file-label" for="batchFile">
                                Select file...
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="submitBatchReport();">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var batches = {};
        var batchesTable = $('#batches');
        var batchesDataTable = null;

        var uploadBatchModal = $('#uploadBatchModal');
        var uploadBatchName = $('#uploadBatchName');
        var uploadBatchFile = $('#uploadBatchFile');

        uploadBatchModal.on('shown.bs.modal', function() {

        });

        uploadBatchModal.on('hidden.bs.modal', function() {
            uploadBatchName.val('');
            uploadBatchFile.val('');
            uploadBatchFile.next('.custom-file-label').html('Select file...');
        });

        function submitBatchReport() {
            if (uploadBatchName.val() === null || uploadBatchName.val() === '') {
                showError('You must supply a batch name');
                return;
            }
            if (uploadBatchFile.val() === null || uploadBatchFile.val() === '') {
                showError('You must select a batch report .txt file');
                return;
            }
            var file = uploadBatchFile[0].files[0];
            if (file === undefined) {
                showError('Unknown file error encountered');
                return;
            }
            var form_data = new FormData();
            form_data.append('name', uploadBatchName.val());
            form_data.append('filename', file.name);
            form_data.append('file', file);
            $.ajax({
                url: '/reports/submit',
                method: 'post',
                dataType: 'json',
                data: form_data,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.success) {
                        showSuccess(res.message);
                        uploadBatchModal.modal('hide');
                        setTimeout(function(){ location.reload();}, 1000);
                    } else {
                        showError(res.message);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr.responseText);
                    console.log(ajaxOptions);
                    console.log(thrownError);
                    showError('Error communicating with the server');
                }
            })
        }

        $(function() {
            $('.custom-file-input').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            batchesDataTable = batchesTable.DataTable({
                serverSide: false,
                ajax: {
                    url: "/reports/list"
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
                                return "<a href='/reports/" + data.id + "'>" + data.name + "</a>";
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
            batchesDataTable.buttons().container().prependTo('#batches_filter');
            batchesDataTable.buttons().container().addClass('float-left');
            $('.dt-buttons').addClass('btn-group-sm');
            $('.dt-buttons div').addClass('btn-group-sm');
            batchesTable.on('xhr.dt', function (e, settings, data) {
                batches = {};
                $.each(data.data, function(i, v) {
                    batches[v.id] = v;
                });
            });
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';