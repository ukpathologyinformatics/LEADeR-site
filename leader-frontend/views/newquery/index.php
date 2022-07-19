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
        <div class="all-searches" id="all">
            <div id="new-group-0">
                <div class="row">
                    <div class="col-md-8">
                        <div class="first-search">
                            <select class="selectpicker search-criteria" data-width="100%" data-none-selected-text="Criteria" data-live-search="true" data-live-search-placeholder="Search">
                                <option value="" selected disabled>Criteria</option>
                                <optgroup label="Longitudinal">
                                    <option id="lower-right-longitudinal-search" value="lower-right-longitudinal">Lower Right Longitudinal</option>
                                    <option id="lower-left-longitudinal-search" value="lower-left-longitudinal">Lower Left Longitudinal</option>
                                    <option id="upper-right-longitudinal-search" value="right-longitudinal">Upper Right Longitudinal</option>
                                    <option id="upper-left-longitudinal-search" value="left-longitudinal">Upper Left Longitudinal</option>
                                </optgroup>
                                <optgroup label="Transverse">
                                    <option id="lower-right-transverse-search" value="lower-right-transverse">Lower Right Transverse</option>
                                    <option id="lower-left-transverse-search" value="lower-left-transverse">Lower Left Transverse</option>
                                    <option id="upper-right-transverse-search" value="right-transverse">Upper Right Transverse</option>
                                    <option id="upper-left-transverse-search" value="left-transverse">Upper Left Transverse</option>
                                </optgroup>
                                <optgroup label="EARS">
                                    <option id="lower-right-ears-search" value="lower-right-ears">Lower Right EARS</option>
                                    <option id="lower-left-ears-search" value="lower-left-ears">Lower Left EARS</option>
                                    <option id="upper-right-ears-search" value="right-ears">Upper Right EARS</option>
                                    <option id="upper-left-ears-search" value="left-ears">Upper Left EARS</option>
                                </optgroup>
                                <optgroup label="Congenital">
                                    <option id="lower-right-congenital-search" value="lower-right-congenital">Lower Right Congenital</option>
                                    <option id="lower-left-congenital-search" value="lower-left-congenital">Lower Left Congenital</option>
                                    <option id="upper-right-congenital-search" value="right-congenital">Upper Right Congenital</option>
                                    <option id="upper-left-congenital-search" value="left-congenital">Upper Left Congenital</option>
                                </optgroup>
                                <optgroup label="Acquired">
                                    <option id="lower-right-acquired-search" value="lower-right-acquired">Lower Right Acquired</option>
                                    <option id="lower-left-acquired-search" value="lower-left-acquired">Lower Left Acquired</option>
                                    <option id="upper-right-acquired-search" value="right-acquired">Upper Right Acquired</option>
                                    <option id="upper-left-acquired-search" value="left-acquired">Upper Left Acquired</option>
                                </optgroup>
                                <optgroup label="Tumor">
                                    <option id="lower-right-tumor-search" value="lower-right-tumor">Lower Right Tumor</option>
                                    <option id="lower-left-tumor-search" value="lower-left-tumor">Lower Left Tumor</option>
                                    <option id="upper-right-tumor-search" value="right-tumor">Upper Right Tumor</option>
                                    <option id="upper-left-tumor-search" value="left-tumor">Upper Left Tumor</option>
                                </optgroup>
                                <optgroup label="Trauma">
                                    <option id="lower-right-trauma-search" value="lower-right-trauma">Lower Right Trauma</option>
                                    <option id="lower-left-trauma-search" value="lower-left-trauma">Lower Left Trauma</option>
                                    <option id="upper-right-trauma-search" value="right-trauma">Upper Right Trauma</option>
                                    <option id="upper-left-trauma-search" value="left-trauma">Upper Left Trauma</option>
                                </optgroup>
                                <optgroup label="Burn">
                                    <option id="lower-right-burn-search" value="lower-right-burn">Lower Right Burn</option>
                                    <option id="lower-left-burn-search" value="lower-left-burn">Lower Left Burn</option>
                                    <option id="upper-right-burn-search" value="right-burn">Upper Right Burn</option>
                                    <option id="upper-left-burn-search" value="left-burn">Upper Left Burn</option>
                                </optgroup>
                                <optgroup label="Infection">
                                    <option id="lower-right-infection-search" value="lower-right-infection">Lower Right Infection</option>
                                    <option id="lower-left-infection-search" value="lower-left-infection">Lower Left Infection</option>
                                    <option id="upper-right-infection-search" value="right-infection">Upper Right Infection</option>
                                    <option id="upper-left-infection-search" value="left-infection">Upper Left Infection</option>
                                </optgroup>
                                <optgroup label="Lawnmower">
                                    <option id="lower-right-lawnmower-search" value="lower-right-lawnmower">Lower Right Lawnmower</option>
                                    <option id="lower-left-lawnmower-search" value="lower-left-lawnmower">Lower Left Lawnmower</option>
                                    <option id="upper-right-lawnmower-search" value="right-lawnmower">Upper Right Lawnmower</option>
                                    <option id="upper-left-lawnmower-search" value="left-lawnmower">Upper Left Lawnmower</option>
                                </optgroup>
                                <optgroup label="MVC">
                                    <option id="lower-right-mvc-search" value="lower-right-mvc">Lower Right MVC</option>
                                    <option id="lower-left-mvc-search" value="lower-left-mvc">Lower Left MVC</option>
                                    <option id="upper-right-mvc-search" value="right-mvc">Upper Right MVC</option>
                                    <option id="upper-left-mvc-search" value="left-mvc">Upper Left MVC</option>
                                </optgroup>
                                <optgroup label="Recreational">
                                    <option id="lower-right-recreational-search" value="lower-right-recreational">Lower Right Recreational</option>
                                    <option id="lower-left-recreational-search" value="lower-left-recreational">Lower Left Recreational</option>
                                    <option id="upper-right-recreational-search" value="right-recreational">Upper Right Recreational</option>
                                    <option id="upper-left-recreational-search" value="left-recreational">Upper Left Recreational</option>
                                </optgroup>
                                <optgroup label="Vascular">
                                    <option id="lower-right-vascular-search" value="lower-right-vascular">Lower Right Vascular</option>
                                    <option id="lower-left-vascular-search" value="lower-left-vascular">Lower Left Vascular</option>
                                    <option id="upper-right-vascular-search" value="right-vascular">Upper Right Vascular</option>
                                    <option id="upper-left-vascular-search" value="left-vascular">Upper Left Vascular</option>
                                </optgroup>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="trueFalse">
                            <select class="selectpicker search-option" data-width="100%" data-none-selected-text="is True/False">
                                <option id="search-option-true" value="1">is True</option>
                                <option id="search-option-false" value="0">is False</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="add-and-criteria btn btn-secondary" data-group="0" onClick="addAndCriteria(this)" type="button">And</button>
                        <button id="search" class="btn btn-primary" type="button">Search</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="or-statements">
            <div class="row">
                <div class="col-md-1">
                    <h6>OR</h6>
                </div>
                <div class="col-md-11">
                    <button id="add-or-criteria" class="btn btn-secondary" onClick="addOrCriteria()" type="button">Add New Rule</button>
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
        var numGroup=0;
        var currentGroups = [0];

        function addOrCriteria() {
            numGroup++;
            currentGroups.push(numGroup);
            //console.log(currentGroups);
            let bigDiv = $('<div id="new-group-' + numGroup + '"/>');
            let newDiv = $('<div id="new-criteria-' + numCriteria + '"/>');
            let col8Div = $('<div class="col-md-8"/>');
            let col2Div = $('<div class="col-md-2"/>');
            let colButtonDiv = $('<div class="col-md-2"/>');
            let row1Div = $('<div class="row"/>');
            let row2Div = $('<div class="row"/>');

            $('<h6> &nbsp&nbsp OR </h6>').appendTo(row1Div);
            bigDiv.append(row1Div);
            let cloned = $('.first-search').clone().first();
            cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
            cloned.find('.selectpicker').selectpicker('render');
            cloned.appendTo(col8Div);
            let cloned2 = $('.trueFalse').clone().first();
            cloned2.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
            cloned2.find('.selectpicker').selectpicker('render');
            cloned2.appendTo(col2Div);
            let and = $('<button class="add-and-criteria btn btn-secondary mr-1" data-group="' + numGroup + '" onClick="addAndCriteria(this)" type="button">And</>');
            let remove = $('<button class="remove-criteria btn btn-secondary" data-criteria="' + numCriteria + '" data-group="' + numGroup + '" onClick="removeCriteria(this)" type="button">Remove</>');

            and.appendTo(colButtonDiv);
            remove.appendTo(colButtonDiv);
            row2Div.append(col8Div);
            row2Div.append(col2Div);
            row2Div.append(colButtonDiv);
            newDiv.append(row2Div);
            bigDiv.append(newDiv);
            $('.all-searches').append(bigDiv);

            numCriteria++;
        }

        function addAndCriteria(current) {
            //let currentGroup = current.data('group');
            let currentGroup = $(current).attr('data-group');
            //let currentGroup = currentGroupClass.substr(17, 1);
            //console.log(currentGroup);
            let newDiv = $('<div id="new-criteria-' + numCriteria + '"/>');
            let col8Div = $('<div class="col-md-8"/>');
            let col2Div = $('<div class="col-md-2"/>');
            let colButtonDiv = $('<div class="col-md-2"/>');
            let rowDiv = $('<div class="row"/>');

            let cloned = $('.first-search').clone().first();
            cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
            cloned.find('.selectpicker').selectpicker('render');
            cloned.appendTo(col8Div);
            let cloned2 = $('.trueFalse').clone().first();
            cloned2.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
            cloned2.find('.selectpicker').selectpicker('render');
            cloned2.appendTo(col2Div);
            let and = $('<button class="add-and-criteria btn btn-secondary mr-1" data-group="' + currentGroup + '" onClick="addAndCriteria(this)" type="button">And</>');
            let remove = $('<button class="remove-criteria btn btn-secondary" data-criteria="' + numCriteria + '" data-group="' + currentGroup + '" onClick="removeCriteria(this)" type="button">Remove</>');

            and.appendTo(colButtonDiv);
            remove.appendTo(colButtonDiv);
            rowDiv.append(col8Div);
            rowDiv.append(col2Div);
            rowDiv.append(colButtonDiv);
            newDiv.append(rowDiv);
            $('#new-group-' + currentGroup).append(newDiv);
            numCriteria++;
        }

        function removeCriteria(current) {
            let idNum = $(current).attr('data-criteria');
            let group = $(current).attr('data-group');
            //console.log(idNum);
            //console.log(group);
            let numChildren = (document.getElementById("new-group-" + group).childElementCount) - 1;
            if (numChildren > 1 || group == 0) {
                let element = document.getElementById('new-criteria-' + idNum);
                element.remove();
            }
            else {
                //console.log(currentGroups);
                let index = currentGroups.indexOf(parseInt(group, 10));
                //console.log(index);
                currentGroups.splice(index, 1);
                //console.log(currentGroups);
                let element = document.getElementById("new-group-" + group);
                element.remove();
            }

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
            //let numOrs = document.getElementById("all").childElementCount;
            //console.log(numOrs);
            let entries = [];
            let counter = 0;
//             let numSelects = 0;
//             $(".search-criteria").each(function(){
//                 let id = $(this).val();
//                 //console.log(typeof(id));
//                 if (id !== "") {
//                     numSelects++;
//                 }
// //                 if (typeof(id) == "object") {
// //                     numSelects++;
// //                 }
//             });
            //console.log(numSelects);
            currentGroups.forEach(function(currentValue, index, arr){
                let currentDiv = document.getElementById("new-group-" + currentValue);
                let divChildren = currentDiv.childElementCount;
                if (currentValue > 0) {
                    divChildren--;
                }
                let allCriteria = currentDiv.getElementsByClassName("search-criteria");
                values = []
                for (var j = 0; j < allCriteria.length; j++) {
                    if(typeof allCriteria[j].value !== "undefined") {
                        values.push(allCriteria[j].value);
                    }
                }
                let allCriteriaOptions = currentDiv.getElementsByClassName("search-option");
                options = []
                for (var j = 0; j < allCriteriaOptions.length; j++) {
                    if(typeof allCriteriaOptions[j].value !== "undefined") {
                        options.push(allCriteriaOptions[j].value);
                    }
                }
                //console.log(values);
                //console.log(options);
                $.ajax({
                    url : '/new-query/search-table',
                    type : 'GET',
                    data: 'parameters='+values+'&options='+options,

                    success : function(data) {
                        console.log(data['data']);

                        data['data'].forEach(function(currentValue, index, arr){
                            if (!entries.includes(currentValue["patient_id"])) {
                                entries.push(currentValue["patient_id"]);
                                //console.log(currentValue["patient_id"]);
                                $('#search-table').append("<tr><td>"+currentValue["patient_id"]+"</td><td>"+currentValue["file_status"]+"</td><td>"+currentValue["icd_code"]+"</td><td>"+currentValue["code_id"]+"</td><td>"+currentValue["surgery_id"]+"</td></tr>");
                            }

                        });
                        counter++;
                        if (counter == arr.length) {
                            $('#search-table').DataTable({
                                searching: false
                                    //serverSide: true,
                                    //ajax: '/view-all'
                            });
                        }


                    },
                    error : function(request,error)
                    {
                        console.log("Request: "+JSON.stringify(request));
                    }
                });
                //console.log(test)
//                 parameters = []
//
//                 for (var j = 0; j < divChildren; j++) {
//                     parameters.push()
//                 }
                //console.log(i+" has "+divChildren+" children.");
            });
//             let entries = [];
//             let numSelects = 0;
//             $(".search-criteria").each(function(){
//                 let id = $(this).val();
//                 if (typeof(id) == "object") {
//                     numSelects++;
//                 }
//             });
//             console.log(numSelects);
//             let counter = 0;
//             $(".search-criteria").each(function(){
//                 let id = $(this).val();
//                 if (typeof(id) == "object") {
//                     console.log(id);
//                     $.ajax({
//                         url : '/new-query/search-table',
//                         type : 'GET',
//                         data: 'parameters='+id,
//
//                         success : function(data) {
//                             //console.log(data['data']);
//
//                             data['data'].forEach(function(currentValue, index, arr){
//                                 if (!entries.includes(currentValue["patient_id"])) {
//                                     entries.push(currentValue["patient_id"]);
//                                     //console.log(currentValue["patient_id"]);
//                                     $('#search-table').append("<tr><td>"+currentValue["patient_id"]+"</td><td>"+currentValue["file_status"]+"</td><td>"+currentValue["icd_code"]+"</td><td>"+currentValue["code_id"]+"</td><td>"+currentValue["surgery_id"]+"</td></tr>");
//                                 }
//
//                             });
//                             if (counter == numSelects-1) {
//                                 $('#search-table').DataTable({
//                                     searching: false
//                                         //serverSide: true,
//                                         //ajax: '/view-all'
//                                 });
//                             }
//                             counter++;
//
//                         },
//                         error : function(request,error)
//                         {
//                             console.log("Request: "+JSON.stringify(request));
//                         }
//                     });
//                 }
//             });
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';