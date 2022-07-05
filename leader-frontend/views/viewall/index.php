<?php
/** @var UserSession $userSession */
$page = 'view-all';
include_once __DIR__ . '/../_header.php';
?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>-->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">View All</h1>
    </div>

    <section id="view-all-page">
        <table id="view-all-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Patient ID</td>
                    <th>File Status</td>
                    <th>ICD Code</td>
                    <th>Classification</td>
                    <th>Surgeries</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>

    <script type="text/javascript">
        $(document).ready( function () {

            $.ajax({
                url : '/view-all/fill-table',
                type : 'GET',

                success : function(data) {
                    //console.log(data['data']);
                    data['data'].forEach(function(currentValue, index, arr){
//                         console.log(currentValue);
//                         currentValue.forEach(function(currentField, index, arr){
//                             if (currentField == null) {
//                                 currentField = "N/A";
//                             }
//                         });
                        $('#view-all-table').append("<tr><td>"+currentValue["patient_id"]+"</td><td>"+currentValue["file_status"]+"</td><td>"+currentValue["icd_code"]+"</td><td>"+currentValue["code_id"]+"</td><td>"+currentValue["surgery_id"]+"</td></tr>");
                    });
                    $('#view-all-table').DataTable({
                        //serverSide: true,
                        //ajax: '/view-all'
                        searching: false
                    });
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request));
                }
            });
             //JOIN patient_surgery ON patient.patient_id=patient_surgery.patient_id JOIN patient_class ON patient.patient_id=patient_class.patient_id
        } );
    </script>
<?php
include_once __DIR__ . '/../_footer.php';