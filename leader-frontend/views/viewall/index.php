<?php
/** @var UserSession $userSession */
$page = 'view-all';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">View All</h1>
    </div>

    <section id="view-all-page">
        <table>
            <thead>
                <tr>
                    <th>Patient ID</td>
                    <th>File Status</td>
                    <th>Date of Birth</td>
                    <th>Entry</td>
                </tr>
            </thead>
            <tbody>
                <?php
//                     require_once __DIR__ . '/../utilities/db.php';
//                     include_once MODELS_DIR . 'User.php';

                    $SELECT = DB::run("SELECT * FROM patient");
                    if($SELECT != false) {
                        #while($rows = mysqli_fetch_array($SELECT)) {
                        while ($rows = $SELECT->fetch(PDO::FETCH_LAZY)) {
                            echo "
                            <tr>
                                <td>".$rows["patient_id"]."</td>
                                <td>".$rows["file_status"]."</td>
                                <td>".$rows["dob"]."</td>
                                <td>".$rows["entry"]."</td>
                            </tr>
                            ";
                        }
                    }
                    else
                    {
                        echo "
                            <tr>
                            <td colspan='3'>Something went wrong with the query</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </section>
<?php
include_once __DIR__ . '/../_footer.php';