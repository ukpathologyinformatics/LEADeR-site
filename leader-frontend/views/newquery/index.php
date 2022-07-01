<?php
/** @var UserSession $userSession */
$page = 'new-query';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Search</h1>
    </div>

    <section id="search-page">
        <h5>Choose Search Criteria</h5>
        <div class="row">
            <div class="col-md-4">
                <div class="all-searches">
                    <div class="first-search">
                        <select class="selectpicker" id="search-criteria" data-none-selected-text="Criteria"  data-live-search-placeholder="Search">
                            <option>Criteria</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <button id="add-criteria" class="btn btn-primary" type="button">+Add</button>
                <button id="add-criteria" class="btn btn-primary" type="button">Search</button>
            </div>
            <div class="col-md-5">
            </div>
        </div>


    </section>

    <script type="text/javascript">

        $('#add-criteria').click(function(){
            $('.first-search').clone().first().appendTo('.all-searches');
        });

        $(document).ready( function () {
            var options = [
                {"Id": 100, "Name": "Abc"},
                {"Id": 200, "Name": "XYZ"}
            ];
            console.log(options[0].Id);

            for (var i = 0; i < options.length; i++) {
                    $('#search-criteria').append('<option value="' + options[i].Id + '">' + options[i].Name + '</option>');
            }
//             var $first_select = $('#search-criteria');
//             $first_select.append($("<option />").val('Test').text('test'));
//             $first_select.append($('<option></option>').val("test").text("test"));
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';