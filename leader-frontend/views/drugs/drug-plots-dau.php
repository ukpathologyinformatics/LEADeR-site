<?php
/** @var UserSession $userSession */
$page = 'drug-plots-qc';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Drug Plots - <span class="text-muted">QC</span></h1>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <select class="form-control" id="drug-selector" disabled>
                    <option selected>-- Loading Drug Plots (This may take some time...) --</option>
                </select>
            </div>
        </div>
    </div>
    <div id="all-drug-plots">
    </div>
    

<script src="/js/plotly.min.js"></script>
<script src="/js/drug-plots-dau.js"></script>
<script type="text/javascript">

var drugs = {}

$.ajax({
    type: "GET",
    url: "/drugs/plot-data-dau", 
    success: function(result){
        $('#all-drug-plots').empty();
        $('#drug-selector').empty();
        $('#drug-selector').append("<option selected>-- Please Select a Drug --</option>");
        var date = null;
        var accepted_min = null;
        var accepted_max = null;
        var actual_vals = [];
        var name = null;
        var qc_names = [];
        var filename = null;
        var statuses = [];
        var theData = JSON.parse(result.data);
        if(theData.length == 0){
            $('#all-drug-plots').append('<h3 style="text-align:center;">No Reports Have Been Created.</h3>');
        }
        for(var i = 0; i < theData.length; i++) {
            var components = JSON.parse(theData[i]);
            date = moment(result.times[i]).toDate();
            filename = result.filenames[i];
            for (var j = 0; j < components.length; j++){
                name = result.altnames[i][j];
                actual_vals = [];
                qc_names = [];
                statuses = [];
                if (components[j].qc.length != 0) {
                    accepted_min = components[j].qc[0].qc_daul_cutoff;
                    accepted_max = components[j].qc[0].qc_dauh_cutoff;
                }
                for(var k = 0; k < components[j].qc.length; k++) {
                    qc_names.push(components[j].qc[k].qc_name);
                    actual_vals.push(components[j].qc[k].qc_calculated_concentration);
                    statuses.push(components[j].qc[k].qc_status);
                }
            
                var drugData = {
                    'name': name,
                    'accepted_min': accepted_min,
                    'accepted_max': accepted_max,
                    'actual_vals': actual_vals,
                    'qc_names': qc_names,
                    'date': date,
                    'filename': filename,
                    'statuses': statuses,
                }
                if (drugs[name] === undefined) {
                    drugs[name] = []
                }
                drugs[name].push(drugData);
            }
        }
        $.each(Object.keys(drugs).sort(), function(i, v) {
            $('#drug-selector').append("<option>" + v + "</option>");
        });
        $('#drug-selector').on('change', function() {
            $('#all-drug-plots').empty();
            var drug = $(this).val()
            if (drug !== '-- Please Select a Drug --') {
                $.each(drugs[drug], function(i, v) {
                    addQCPlot(v, '#all-drug-plots');
                });
            }
        });
        $('#drug-selector').attr('disabled', false);
    }
});

// var data = {
//     'name': 'Naloxone',
//     'accepted_min': 0,
//     'accepted_max': 20,
//     'actual_min': 10,
//     'actual_max': 15,
//     'date': '2013-10-04 22:23:00',
// }
// addPlot(data, '#all-drug-plots');
</script>
<?php
include_once __DIR__ . '/../_footer.php';