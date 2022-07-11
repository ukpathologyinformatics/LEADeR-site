<?php
/** @var UserSession $userSession */
$page = 'new-query';
include_once __DIR__ . '/../_header.php';
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Search</h1>
    </div>

    <section id="search-page">
        <h5>Choose Search Criteria</h5>
        <div class="all-searches">
            <div class="row">
                <div class="col-md-10">
                    <div class="first-search">
                        <select class="selectpicker search-criteria" data-width="100%" data-none-selected-text="Criteria" multiple data-live-search="true" data-live-search-placeholder="Search">
                            <optgroup label="Lower Right Extremity">
                                <option id="lower-right-longitudinal-search" value="lower-right-longitudinal">Lower Right Longitudinal</option>
                                <option id="lower-right-transverse-search" value="lower-right-transverse">Lower Right Transverse</option>
                                <option id="lower-right-ears-search" value="lower-right-ears">Lower Right EARS</option>
                                <option id="lower-right-congenital-search" value="lower-right-congenital">Lower Right Congenital</option>
                                <option id="lower-right-acquired-search" value="lower-right-acquired">Lower Right Acquired</option>
                                <option id="lower-right-tumor-search" value="lower-right-tumor">Lower Right Tumor</option>
                                <option id="lower-right-trauma-search" value="lower-right-trauma">Lower Right Trauma</option>
                                <option id="lower-right-burn-search" value="lower-right-burn">Lower Right Burn</option>
                                <option id="lower-right-infection-search" value="lower-right-infection">Lower Right Infection</option>
                                <option id="lower-right-lawnmower-search" value="lower-right-lawnmower">Lower Right Lawnmower</option>
                                <option id="lower-right-mvc-search" value="lower-right-mvc">Lower Right MVC</option>
                                <option id="lower-right-recreational-search" value="lower-right-recreational">Lower Right Recreational</option>
                                <option id="lower-right-vascular-search" value="lower-right-vascular">Lower Right Vascular</option>
                            </optgroup>
                            <optgroup label="Lower Left Extremity">
                                <option id="lower-left-longitudinal-search" value="lower-left-longitudinal">Lower Left Longitudinal</option>
                                <option id="lower-left-transverse-search" value="lower-left-transverse">Lower Left Transverse</option>
                                <option id="lower-left-ears-search" value="lower-left-ears">Lower Left EARS</option>
                                <option id="lower-left-congenital-search" value="lower-left-congenital">Lower Left Congenital</option>
                                <option id="lower-left-acquired-search" value="lower-left-acquired">Lower Left Acquired</option>
                                <option id="lower-left-tumor-search" value="lower-left-tumor">Lower Left Tumor</option>
                                <option id="lower-left-trauma-search" value="lower-left-trauma">Lower Left Trauma</option>
                                <option id="lower-left-burn-search" value="lower-left-burn">Lower Left Burn</option>
                                <option id="lower-left-infection-search" value="lower-left-infection">Lower Left Infection</option>
                                <option id="lower-left-lawnmower-search" value="lower-left-lawnmower">Lower Left Lawnmower</option>
                                <option id="lower-left-mvc-search" value="lower-left-mvc">Lower Left MVC</option>
                                <option id="lower-left-recreational-search" value="lower-left-recreational">Lower Left Recreational</option>
                                <option id="lower-left-vascular-search" value="lower-left-vascular">Lower Left Vascular</option>
                            </optgroup>
                            <optgroup label="Upper Right Extremity">
                                <option id="upper-right-longitudinal-search" value="right-longitudinal">Upper Right Longitudinal</option>
                                <option id="upper-right-transverse-search" value="right-transverse">Upper Right Transverse</option>
                                <option id="upper-right-ears-search" value="right-ears">Upper Right EARS</option>
                                <option id="upper-right-congenital-search" value="right-congenital">Upper Right Congenital</option>
                                <option id="upper-right-acquired-search" value="right-acquired">Upper Right Acquired</option>
                                <option id="upper-right-tumor-search" value="right-tumor">Upper Right Tumor</option>
                                <option id="upper-right-trauma-search" value="right-trauma">Upper Right Trauma</option>
                                <option id="upper-right-burn-search" value="right-burn">Upper Right Burn</option>
                                <option id="upper-right-infection-search" value="right-infection">Upper Right Infection</option>
                                <option id="upper-right-lawnmower-search" value="right-lawnmower">Upper Right Lawnmower</option>
                                <option id="upper-right-mvc-search" value="right-mvc">Upper Right MVC</option>
                                <option id="upper-right-recreational-search" value="right-recreational">Upper Right Recreational</option>
                                <option id="upper-right-vascular-search" value="right-vascular">Upper Right Vascular</option>
                            </optgroup>
                            <optgroup label="Upper Left Extremity">
                                <option id="upper-left-longitudinal-search" value="left-longitudinal">Upper Left Longitudinal</option>
                                <option id="upper-left-transverse-search" value="left-transverse">Upper Left Transverse</option>
                                <option id="upper-left-ears-search" value="left-ears">Upper Left EARS</option>
                                <option id="upper-left-congenital-search" value="left-congenital">Upper Left Congenital</option>
                                <option id="upper-left-acquired-search" value="left-acquired">Upper Left Acquired</option>
                                <option id="upper-left-tumor-search" value="left-tumor">Upper Left Tumor</option>
                                <option id="upper-left-trauma-search" value="left-trauma">Upper Left Trauma</option>
                                <option id="upper-left-burn-search" value="left-burn">Upper Left Burn</option>
                                <option id="upper-left-infection-search" value="left-infection">Upper Left Infection</option>
                                <option id="upper-left-lawnmower-search" value="left-lawnmower">Upper Left Lawnmower</option>
                                <option id="upper-left-mvc-search" value="left-mvc">Upper Left MVC</option>
                                <option id="upper-left-recreational-search" value="left-recreational">Upper Left Recreational</option>
                                <option id="upper-left-vascular-search" value="left-vascular">Upper Left Vascular</option>
                            </optgroup>
                        </select>
                    </div>

                </div>
                <div class="col-md-2">
                    <button id="add-criteria" class="btn btn-primary" type="button">+Add</button>
                    <button id="search" class="btn btn-primary" type="button">Search</button>
                </div>

            </div>


        </div>
        <hr>
        <table id="search-table" class="display" style="width:100%">
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
        var numCriteria=0;
        $('#add-criteria').click(function(){
            var newDiv = $('<div id="new-criteria_' + numCriteria + '"/>');
            var col10Div = $('<div class="col-md-10" id="col10"/>');
            var col2Div = $('<div class="col-md-2" id="col2"/>');
            var row1Div = $('<div class="row" id="new-row1"/>');
            var row2Div = $('<div class="row" id="new-row2"/>');

//             $('<p> OR </p>').appendTo('.all-searches');
//             var cloned = $('.first-search').clone().first();
//             cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
//             cloned.find('.selectpicker').selectpicker('render');
//             cloned.appendTo('.all-searches');
//             var input = $('<button id="remove-criteria" class="btn btn-primary" type="button">Remove</>');
//             input.appendTo('.all-searches');
            $('<p> &nbsp&nbsp OR </p>').appendTo(row1Div);
            newDiv.append(row1Div);
            var cloned = $('.first-search').clone().first();
            cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
            cloned.find('.selectpicker').selectpicker('render');
            cloned.appendTo(col10Div);
            var input = $('<button id="remove-criteria_' + numCriteria++ + '" class="btn btn-primary" onClick="removeCriteria(this.id)" type="button">Remove</>');
            input.appendTo(col2Div);
            row2Div.append(col10Div);
            row2Div.append(col2Div);
            newDiv.append(row2Div);
            $('.all-searches').append(newDiv);
        });

        function removeCriteria(id) {
            idNum = id.charAt(id.length - 1);
            var element = document.getElementById('new-criteria_' + idNum);
            element.remove(); // Removes the div with the 'div-02' id
            //numCriteria--;
        }

        $(document).ready( function () {
            $('#search-table').DataTable({
                searching: false,
                //serverSide: true,
                //ajax: '/new-query/search-table'
            });
        });

        $('#search').click(function (){
            $('#search-table').DataTable().rows().remove();
            $('#search-table').DataTable().destroy();
            var entries = [];
            var numSelects = 0;
            $(".search-criteria").each(function(){
                var id = $(this).val();
                if (typeof(id) == "object") {
                    numSelects++;
                }
            });
            var counter = 0;
            $(".search-criteria").each(function(){
                var id = $(this).val();
                if (typeof(id) == "object") {
                    $.ajax({
                        url : '/new-query/search-table',
                        type : 'GET',
                        data: 'parameters='+id,

                        success : function(data) {
                            //console.log(data['data']);

                            data['data'].forEach(function(currentValue, index, arr){
                                if (!entries.includes(currentValue["patient_id"])) {
                                    entries.push(currentValue["patient_id"]);
                                    //console.log(currentValue["patient_id"]);
                                    $('#search-table').append("<tr><td>"+currentValue["patient_id"]+"</td><td>"+currentValue["file_status"]+"</td><td>"+currentValue["icd_code"]+"</td><td>"+currentValue["code_id"]+"</td><td>"+currentValue["surgery_id"]+"</td></tr>");
                                }

                            });
                            if (counter == numSelects-1) {
                                $('#search-table').DataTable({
                                    searching: false
                                        //serverSide: true,
                                        //ajax: '/view-all'
                                });
                            }
                            counter++;

                        },
                        error : function(request,error)
                        {
                            console.log("Request: "+JSON.stringify(request));
                        }
                    });
                }
            });

//             test = [1, 2, 3];
//             console.log(test);
//             entries.forEach(function(currentValue, index, arr){
//                 console.log(currentValue);
//                 $('#search-table').append("<tr><td>"+currentValue["patient_id"]+"</td><td>"+currentValue["file_status"]+"</td><td>"+currentValue["icd_code"]+"</td><td>"+currentValue["code_id"]+"</td><td>"+currentValue["surgery_id"]+"</td></tr>");
//             });
//             var seen = {};
//             var final_entries = [];
//             for (var i = 0; i < entries.length; i++) {
//                 if (!(entries[i] in seen)) {
//                     final_entries.push(entries[i]);
//                     seen[entries[i]] = true;
//                 }
//             }
// //             var final_entries = [];
// //             $.each(entries, function(i, el){
// //                 if($.inArray(el, final_entries) === -1) final_entries.push(el);
// //             });
//             console.log(final_entries);
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';