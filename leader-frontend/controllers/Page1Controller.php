<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class Page1Controller {
    public static function index(UserSession $userSession) {
        require PAGE1_VIEWS_DIR . 'index.php';
    }

    public static function listDT(UserSession $userSession) {
        header('Content-Type: application/json');

        $batchFilename = array();
        $batchCreationDate = array();
        $batchExceptions = array();
        $isSigned = array();

        // Getting reports from DB
        // $stmt = DB::run("");  Can run db statements here

        //dummy data
        array_push($batchFilename, "test");
        array_push($batchCreationDate, 0);
        array_push($batchExceptions, 0);
        array_push($isSigned, 1);

        $batches = array();
        for ($i = 0; $i < sizeOf($batchFilename); $i++) {
            $temp_array = array('name' => $batchFilename[$i], 'date' => $batchCreationDate[$i], 'todo_items' => $batchExceptions[$i], 'signed' => $isSigned[$i]);
            array_push($batches, $temp_array);
        }

        $start = 0;
        if (isset($_GET['start']))
            $start = intval($_GET['start']);
        $length = count($batches);
        if (isset($_GET['length']))
            $length = intval($_GET['length']);
        $data = array();
        for ($i=$start; $i < count($batches) && $i < ($start + $length); $i++) {
            $batch = $batches[$i];
            $data_row = array();
            $data_row['DT_RowId'] = $i;
            $data_row['name'] = $batch['name'];
            $data_row['date'] = 0;
            $data_row['todo_items'] = $batch['todo_items'];
        
            $data_row['signed'] = $batch['signed'];
            array_push($data, $data_row);
        }
        echo json_encode(
            array(
                "draw" => (isset($_GET['draw'])) ? intval($_GET['draw']) : 0,
                "recordsTotal" => intval(sizeof($batches)),
                "recordsFiltered" => intval(sizeof($batches)),
                "data" => $data,
            )
        );
    }
}