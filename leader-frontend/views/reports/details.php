<?php
/** @var UserSession $userSession */
/** @var BatchReport $batch */
$page = 'reports';
include_once __DIR__ . '/../_header.php';
?>
            <div class="row">
                <div class="col-sm-3" id="scroll-nav">
                    <h6 id="scroll-nav-todo-header"></h6>
                    <h6 id="scroll-nav-components-header"></h6>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <div class="card border-dark">
                                <h5 class="card-header">
                                    <div class="row">
                                        <div class="col-sm-3 pt-1">
                                            <span class="float-sm-right float-left">Batch:</span>
                                        </div>
                                        <div class="col-sm-6 pt-1">
                                            <?php echo str_replace(".json", "", $batch->getFilename()); ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    View Report
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/reports/exceptions/<?php echo $batch->getId(); ?>" target="_blank">Exceptions Summary</a>
                                                    <!--<a class="dropdown-item" href="/reports/summary/"<?php echo $batch->getId(); ?>" target="_blank">Full Summary</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12" id="components">
                            <h3>Loading components (this may take some time)...</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="reviewItemModal" tabindex="-1" role="dialog" aria-labelledby="reviewItemModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewItemModalLabel">Warning Follow-Up Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" id="reviewItemId" />
                                <div class="col-lg-12 form-floating">
                                    <textarea class="form-control" id="reviewItemFollowUp" placeholder="Please describe your follow-up..." style="height: 100px;" autofocus></textarea>
                                    <label for="reviewItemFollowUp">Follow Up</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col float-left">
                                <span class="text-muted">Hint: Press &#60;shift&#62;+&#60;enter&#62; to submit</span>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="submitItemReview();">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="/js/plotly.min.js"></script>
            <script src="/js/scrollnav.min.umd.js"></script>
            <script src="/js/uuid4.js"></script>
            <script src="/js/toxicology-components.js"></script>
            <script type="text/javascript">
                var entries = {};

                function loadComponents() {
                    // tried to make this ajax, did not go well
                    <?php 
                    $batchID = "$_SERVER[REQUEST_URI]";
                    $pos = strrpos($batchID, '/');
                    $batchID = $pos === false ? $batchID : substr($batchID, $pos + 1);
                    $batchContent = "";
                    $handledExceptions = [];
                    $exceptionNotes = [];
                    $exNotesTimestamp = [];
                    $exNotesPersonIDs = [];
                    $handledExceptionsArray = [];

                    try {
                        $stmt = DB::run('SELECT batch_content, signed, personID, signed_timestamp FROM batch_reports WHERE batchID = \''.$batchID.'\'');
                        $row = $stmt->fetch(PDO::FETCH_LAZY);
                        $batchContent = $row['batch_content'];
                        $batchSigned = $row['signed'];
                        if($row['personID'] == "") {
                            $batchPersonID = " ";
                        } else {
                            $batchPersonID = $row['personID'] ?? "n/a";
                        }
                        if ($row['signed_timestamp'] == ""){
                            $batchSignedTimestamp = " ";
                        } else {
                            $batchSignedTimestamp = $row['signed_timestamp'] ?? "n/a";
                        }
                    } catch (Exception $e){
                        $batchContent = "ERROR";
                    }

                    try {
                        $stmt = DB::run("SELECT q.exceptionUUID, q.notes, q.personID, q.timestamp FROM (SELECT report_notes.*, batch_exceptions.batchID FROM report_notes INNER JOIN batch_exceptions ON report_notes.exceptionUUID = batch_exceptions.exceptionUUID) q WHERE q.batchID = '" . $batchID . "' AND q.handled = 1");
                        while ($row = $stmt->fetch(PDO::FETCH_LAZY)){
                            array_push($handledExceptions, $row['exceptionUUID']);
                            array_push($exceptionNotes, $row['notes']);
                            array_push($exNotesTimestamp, $row['timestamp']);
                            array_push($exNotesPersonIDs, $row['personID']);
                        }
                        array_push($handledExceptionsArray, $handledExceptions, $exceptionNotes, $exNotesTimestamp, $exNotesPersonIDs);
                    } catch (Exception $e){
                        error_log($e);
                    }

                    $batchContent = json_encode($batchContent,JSON_PRETTY_PRINT);
                    $batchContent = str_replace("NaN", "-1", $batchContent);
                    $handledExceptionsArray = json_encode($handledExceptionsArray,JSON_PRETTY_PRINT);
                    ?>
                    var result = JSON.parse(<?php echo $batchContent; ?>);
                    var handledExceptions = [<?php echo $handledExceptionsArray; ?>];
                    var batchSigned = <?php echo $batchSigned; ?>;

                    $('#components').html('');
                    $('#scroll-nav-todo-header').html('Generating todo list...');
                    $('#scroll-nav-components-header').html('Generating menu...');
                    if (batchSigned == 1){
                        $('#components').append('<div id="is-signed"><i style="font-size:25px;color:white;" class="fa fa-check-circle"></i> This report was signed by <?php echo $batchPersonID; ?> on <?php echo $batchSignedTimestamp;?>.</div>');
                    }
                    
                    $.each(result, function(idx, entry) {
                        var entryId = addComponent(entry, '#components', handledExceptions);
                        entries[entryId] = entry;
                    });

                    setTimeout(function() {
                        $('#scroll-nav-todo-header').html('ToDo List:');
                        $('#scroll-nav-components-header').html('Components:');
                        scrollnav.init(document.querySelector('#components'), {
                            sections: '.ukhc-todo-item',
                            className: 'scroll-nav-todo',
                            insertTarget: document.querySelector('#scroll-nav'),
                            insertLocation: 'append',
                            easingStyle: 'easeInOutCubic'
                        });
                        scrollnav.init(document.querySelector('#components'), {
                            sections: '.component-name',
                            className: 'scroll-nav-components',
                            insertTarget: document.querySelector('#scroll-nav'),
                            insertLocation: 'append',
                            easingStyle: 'easeInOutCubic'
                        });
                        scrollnav.updatePositions();
                    });
                }

                $(function() {
                    loadComponents();
                });
            </script>
<?php
    include_once __DIR__ . '/../_footer.php';