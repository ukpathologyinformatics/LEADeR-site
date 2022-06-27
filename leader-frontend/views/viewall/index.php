<?php
/** @var UserSession $userSession */
$page = 'view-all';
include_once __DIR__ . '/../_header.php';
?>

    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>-->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">View All</h1>
    </div>

    <section id="view-all-page">
        <table id="view-all-table">
            <thead>
                <tr>
                    <th>Patient ID</td>
                    <th>File Status</td>
                    <th>Date of Birth</td>
                    <th>ICD Code</td>
                    <th>Entry</td>
                </tr>
            </thead>
            <tbody>
                <?php

                    $SELECT = DB::run("SELECT * FROM patient JOIN patient_icd ON patient.patient_id=patient_icd.patient_id");
                    if($SELECT != false) {
                        while ($rows = $SELECT->fetch(PDO::FETCH_LAZY)) {
                            echo "
                            <tr>
                                <td>".$rows["patient_id"]."</td>
                                <td>".$rows["file_status"]."</td>
                                <td>".$rows["dob"]."</td>
                                <td>".$rows["icd_code"]."</td>
                                <td>".$rows["entry"]."</td>
                            </tr>";
                        }
                    }
                    else {
                        echo "
                            <tr>
                            <td colspan='3'>Something went wrong with the query</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#view-all-table').DataTable({
                //serverSide: true,
            });
             //JOIN patient_surgery ON patient.patient_id=patient_surgery.patient_id JOIN patient_class ON patient.patient_id=patient_class.patient_id
        } );
    </script>
<?php
include_once __DIR__ . '/../_footer.php';