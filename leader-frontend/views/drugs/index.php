<?php
/** @var UserSession $userSession */
$page = 'drugs';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Drugs - <span class="text-muted">List</span></h1>
    </div>
    <div class="row">
        <div class="col">
            <table id="drugs" class="table table-bordered dt-responsive responsive-text" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Number of Issues</th>
                    <th style="text-align: center;">Limits</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Number of Issues</th>
                    <th style="text-align: center;">Limits</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="modal fade" id="editLimModal" tabindex="-1" role="dialog" aria-labelledby="editLimModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLimModalLabel">Edit Limits</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6><strong>NES Limits</strong></h6>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Area:&nbsp;</label><br /><input id="nes-area" value="" readonly></input>
                        </div>
                        <div class="col-md-6">
                        <label>IS Area:&nbsp;</label><br /><input id="nes-is-area" value="" readonly></input>
                        </div>
                    </div>
                    <br />
                    <h6><strong>DAU Limits</strong></h6>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mean Slope:&nbsp;</label><br /><input id="dau-slope" value="" readonly></input>
                        </div>
                        <div class="col-md-6">
                            <label>Outlier Cutoff (ng/mL):&nbsp;</label><br /><input id="outlier-cutoff" value="" readonly></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Low Mean:&nbsp;</label><br /><input id="dau-l-mean" value="" readonly></input>
                        </div>
                        <div class="col-md-6">
                            <label>Low Std. Dev.:&nbsp;</label><br /><input id="dau-l-sd" value="" readonly></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Medium Mean:&nbsp;</label><br /><input id="dau-m-mean" value="" readonly></input>
                        </div>
                        <div class="col-md-6">
                            <label>Medium Std. Dev.:&nbsp;</label><br /><input id="dau-m-sd" value="" readonly></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>High Mean:&nbsp;</label><br /><input id="dau-h-mean" value="" readonly></input>
                        </div>
                        <div class="col-md-6">
                            <label>High Std. Dev.:&nbsp;</label><br /><input id="dau-h-sd" value="" readonly></input>
                        </div>
                    </div>
                    <br />
                    <h6><strong>Slope Acceptance Criteria</strong></h6>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Lower Bound:&nbsp;</label><br /><input id="low-bound" value="" readonly></input>
                        </div>
                        <div class="col-md-6">
                            <label>Upper Bound:&nbsp;</label><br /><input id="up-bound" value="" readonly></input>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="submit btn btn-primary" onclick="">Submit</button>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    var drugsTable = $('#drugs');
    var drugsDataTable = null;
    $(function(){
        drugsDataTable = drugsTable.DataTable({
            serverSide: false,
            ajax: {
                url: "/drugs/list"
            },
            order: [[ 1, "desc" ]],
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'pageLength', 'colvis'
            ],
            pageLength: 25,
            columnDefs: [
                {
                    className: "dt-center",
                    targets: [0, 1, 2]
                },
                {
                    orderable: false,
                    targets: [2]
                }
            ],
            language: {
                emptyTable: "No drugs have been added"
            },
            pagingType: "full_numbers",
            columns: [
                {
                    data: null,
                    render: function ( data, type ) {
                        return data.name.replace(" 1", "");   
                    }
                },
                {
                    data: null,
                    render: function ( data, type ) {
                        return data.issues;   
                    }
                },
                {
                    data: null,
                    render: function ( data, type ) {
                        return '<button onClick="addDataToLimModal(\''+ data.name +'\')" class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#editLimModal">View</button>';   
                    }
                },
            ],
        });
    });

    function addDataToLimModal(drug) {
        $.ajax({
            type: "POST",
            url: "/drugs/limits", 
            data: {
                'name': drug,
            },
        success: function(result){
            if (result.success){
                $('#nes-area').val(parseFloat(result.data.nes_area));
                $('#nes-is-area').val(parseFloat(result.data.nes_is_area));
                $('#dau-slope').val(parseFloat(result.data.dau_slope));
                $('#dau-l-mean').val(parseFloat(result.data.dau_l_mean));
                $('#dau-l-sd').val(parseFloat(result.data.dau_l_sd));
                $('#dau-m-mean').val(parseFloat(result.data.dau_m_mean));
                $('#dau-m-sd').val(parseFloat(result.data.dau_m_sd));
                $('#dau-h-mean').val(parseFloat(result.data.dau_h_mean));
                $('#dau-h-sd').val(parseFloat(result.data.dau_h_sd));
                $('#outlier-cutoff').val(parseFloat(result.data.outlier_cutoff));
                if (isNaN(parseFloat(result.data.low_slope))){
                    $('#low-bound').val('No Lower Bound');
                } else {
                    $('#low-bound').val(parseFloat(result.data.low_slope));
                }
                if (isNaN(parseFloat(result.data.up_slope))){
                    $('#up-bound').val('No Upper Bound');
                } else {
                    $('#up-bound').val(parseFloat(result.data.up_slope));
                }

                $('#editLimModal .modal-content small').remove();
                if (result.data.person != ''){
                    $('#editLimModal .modal-content').append('<small style="text-align:right">Last Updated: '+ result.data.timestamp + ' by ' + result.data.person + '&nbsp;</small>')
                }
            } else {
                showError(result.message);
            }
        }
        });

        <?php if($userSession->getUser()->isAdmin()){ ?>
        $('#editLimModalLabel').html('Edit '+ drug.replace(" 1", "") + ' Limits');
        $('#nes-area').removeAttr('readonly');
        $('#nes-is-area').removeAttr('readonly');
        $('#dau-slope').removeAttr('readonly');
        $('#dau-l-mean').removeAttr('readonly');
        $('#dau-l-sd').removeAttr('readonly');
        $('#dau-m-mean').removeAttr('readonly');
        $('#dau-m-sd').removeAttr('readonly');
        $('#dau-h-mean').removeAttr('readonly');
        $('#dau-h-sd').removeAttr('readonly');
        $('#low-bound').removeAttr('readonly');
        $('#up-bound').removeAttr('readonly');
        $('#outlier-cutoff').removeAttr('readonly');
        <?php } else { ?>
        $('#editLimModalLabel').html(drug + ' Limits');
        $('#editLimModal .modal-footer .submit').remove();
        <?php } ?>
        var modal = $('#editLimModal')
        modal.find('.modal-footer .btn-primary').attr('onclick','submitUpdatedLimits(\''+ drug +'\');');
    }

    function submitUpdatedLimits(drug) {
        var nes_area = $('#nes-area').val();
        var nes_is_area = $('#nes-is-area').val();
        var dau_slope = $('#dau-slope').val();
        var dau_l_mean = $('#dau-l-mean').val();
        var dau_l_sd = $('#dau-l-sd').val();
        var dau_m_mean = $('#dau-m-mean').val();
        var dau_m_sd = $('#dau-m-sd').val();
        var dau_h_mean = $('#dau-h-mean').val();
        var dau_h_sd = $('#dau-h-sd').val();
        var low_slope = $('#low-bound').val();
        var up_slope = $('#up-bound').val();

        if (isNaN(nes_area) || isNaN(nes_is_area) || isNaN(dau_slope) || isNaN(dau_l_mean) || isNaN(dau_l_sd) || isNaN(dau_m_mean) || isNaN(dau_m_sd) || isNaN(dau_h_mean) || isNaN(dau_h_sd) || isNaN(low_slope) || isNaN(up_slope)){
            showError("Invalid Limits: Check Inputs.")
            return;
        }

        $.ajax({
            type: "POST",
            url: "/drugs/update", 
            data: {
                'name': drug,
                'nesArea': nes_area,
                'nesISArea': nes_is_area,
                'dauSlope': dau_slope,
                'dauLowMean': dau_l_mean,
                'dauLowSD': dau_l_sd,
                'dauMedMean': dau_m_mean,
                'dauMedSD': dau_m_sd,
                'dauHighMean': dau_h_mean,
                'dauHighSD': dau_h_sd,
                'lowSlope': low_slope,
                'upSlope': up_slope,
        },
        success: function(result){
            if (result.success) {
                drugsDataTable.ajax.reload();
                showSuccess(result.message);
                $('#editLimModal').modal('hide');
            } else {
                showError(result.message);
                //$('#editLimModal').modal('hide');
            }
        }
        });
    }
</script>
<?php
include_once __DIR__ . '/../_footer.php';