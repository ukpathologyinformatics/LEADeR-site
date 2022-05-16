<?php
/** @var UserSession $userSession */
$page = 'home';
include_once __DIR__ . '/_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Dashboard</h1>
    </div>
    
    <section id="icd-filters">
        <!-- This is the top bar -->
        <div id="icd-top-bar" class="row">
            <div class="col-md">
                <input type="text" id="icd-codes" name="icd-codes" placeholder="Enter ICD Codes">
            </div>
            <div class="col-md">
                <select name="gender" id="gender">
                    <option value="" disabled selected hidden>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="race" id="race">
                    <option value="" disabled selected hidden>Race</option>
                    <option value="amer-ind-alaska">American Indian or Alaska Native</option>
                    <option value="asian">Asian</option>
                    <option value="black-african-amer">Black of African American</option>
                    <option value="hisp">Hispanic or Latino</option>
                    <option value="hawaii-island">Native Hawaiian or Other Pacific Islander</option>
                    <option value="white">White</option>
                    <option value="other">Other Race</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="ethnicity" id="ethnicity">
                    <option value="" disabled selected hidden>Ethnicity</option>
                    <option value="eth1">ethnicity 1</option>
                    <option value="eth2">ethnicity 2</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="file" id="file">
                    <option value="" disabled selected hidden>Status</option>
                    <option value="pending">Pending</option>
                    <option value="complete">Complete</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="subject-id" id="subject-id">
                    <option value="" disabled selected hidden>Subject ID</option>
                    <option value="id-1">1</option>
                    <option value="id-2">2</option>
                </select> 
            </div>
            <div class="col-md">
                <label for="dob">Date of Birth</label>
                <input id="dob" type="text" placeholder="mm/dd/yyyy">
            </div>
            <div class="col-md">
                <label for="start-date">First Recorded</label>
                <input id="start-date" type="text" placeholder="mm/dd/yyyy">
            </div>
            <div class="col-md">
                <label for="end-date">Last Recorded</label>
                <input id="end-date" type="text" placeholder="mm/dd/yyyy">
            </div>
        </div>

        <!-- Buttons to select which page to see -->
        <div class="lower-upper-buttons">
            <button id="lower-extremity-btn" class="active">LOWER EXTREMITY</button>
            <button id="upper-extremity-btn" class="">UPPER EXTREMITY</button>
        </div>

        <div id="lower-extremity-section" class="row" style="display: flex">
            <div class="col-md-6 right-sect row">
                <div class="col-md-6">
                    <h5>Right</h5><br>
                    <input type="checkbox" id="right-longitudinal" name="right-longitudinal" value="right-longitudinal">
                    <label for="right-longitudinal">longitudinal</label><br>
                    <input type="checkbox" id="right-transverse" name="right-transverse" value="right-transverse">
                    <label for="right-transverse">transverse</label><br>
                    <input type="checkbox" id="right-ears" name="right-ears" value="right-ears">
                    <label for="right-ears">EARS</label><br>
                    <input type="checkbox" id="right-congenital" name="right-congenital" value="right-congenital">
                    <label for="right-congenital">congenital</label><br>
                    <input type="checkbox" id="right-acquired" name="right-acquired" value="right-acquired">
                    <label for="right-acquired">acquired</label>
                    <input id="right-acquired-date" type="text" placeholder="mm/dd/yyyy"><br>
                    <input type="checkbox" id="right-tumor" name="right-tumor" value="right-tumor">
                    <label for="right-tumor">tumor</label>
                    <input id="right-tumor-date" type="text" placeholder="mm/dd/yyyy"><br>
                    <input type="checkbox" id="right-trauma" name="right-trauma" value="right-trauma">
                    <label for="right-trauma">trauma</label>
                    <input id="right-trauma-date" type="text" placeholder="mm/dd/yyyy"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="right-burn" name="right-burn" value="right-burn">
                            <label for="right-burn">burn</label><br>
                            <input type="checkbox" id="right-infection" name="right-infection" value="right-infection">
                            <label for="right-infection">infection</label><br>
                            <input type="checkbox" id="right-lawnmower" name="right-lawnmower" value="right-lawnmower">
                            <label for="right-lawnmower">lawnmower</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="right-mvc" name="right-mvc" value="right-mvc">
                            <label for="right-mvc">MVC</label><br>
                            <input type="checkbox" id="right-recreational" name="right-recreational" value="right-recreational">
                            <label for="right-recreational">recreational</label><br>
                            <input type="checkbox" id="right-vascular" name="right-vascular" value="right-vascular">
                            <label for="right-vascular">vascular</label><br>
                        </div>
                    </div>
                    <input id="right-other" type="text" placeholder="Other"><br><br>
                    <textarea id="right-classification" name="right-classification" placeholder="Classification" rows="2" cols="25"></textarea><br>
                    <textarea id="right-notes" name="right-notes" placeholder="Notes" rows="2" cols="25"></textarea>
                </div>
                <div class="col-md-6">
                    <h5>Deformities/Missing Bones</h5><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="right-pelvis" name="right-pelvis" value="right-pelvis">
                            <label for="right-pelvis">pelvis</label><br>
                            <label>femur</label><br>
                            <div class="row">
                                <div class="col-md-1 offset-md-1">
                                    <label>&#8627;</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="right-femur-dist">dist.</label><br>
                                    <input type="checkbox" id="right-femur-dist" name="right-femur-dist" value="right-femur-dist">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-femur-mid">mid.</label><br>
                                    <input type="checkbox" id="right-femur-mid" name="right-femur-mid" value="right-femur-mid">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-femur-prox">prox.</label><br>
                                    <input type="checkbox" id="right-femur-prox" name="right-femur-prox" value="right-femur-prox">
                                </div>
                            </div>
                            <input type="checkbox" id="right-patella" name="right-patella" value="right-patella">
                            <label for="right-patella">patella</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="right-tarsals" name="right-tarsals" value="right-tarsals">
                            <label for="right-tarsals">tarsals</label><br>
                            <input type="checkbox" id="right-calcaneus" name="right-calcaneus" value="right-calcaneus">
                            <label for="right-calcaneus">calcaneus</label><br>
                            <input type="checkbox" id="right-talus" name="right-talus" value="right-talus">
                            <label for="right-talus">talus</label><br>
                            <input type="checkbox" id="right-navicular" name="right-navicular" value="right-navicular">
                            <label for="right-navicular">navicular</label><br>
                            <input type="checkbox" id="right-cuboid" name="right-cuboid" value="right-cuboid">
                            <label for="right-cuboid">cuboid</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>tibia</label><br>
                            <div class="row">
                                <div class="col-md-1 offset-md-1">
                                    <label>&#8627;</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="right-tibia-dist">dist.</label><br>
                                    <input type="checkbox" id="right-tibia-dist" name="right-tibia-dist" value="right-tibia-dist">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-tibia-mid">mid.</label><br>
                                    <input type="checkbox" id="right-tibia-mid" name="right-tibia-mid" value="right-tibia-mid">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-tibia-prox">prox.</label><br>
                                    <input type="checkbox" id="right-tibia-prox" name="right-tibia-prox" value="right-tibia-prox">
                                </div>
                            </div>
                            <label>fibula</label><br>
                            <div class="row">
                                <div class="col-md-1 offset-md-1">
                                    <label>&#8627;</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="right-fibula-dist">dist.</label><br>
                                    <input type="checkbox" id="right-fibula-dist" name="right-fibula-dist" value="right-fibula-dist">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-fibula-mid">mid.</label><br>
                                    <input type="checkbox" id="right-fibula-mid" name="right-fibula-mid" value="right-fibula-mid">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-fibula-prox">prox.</label><br>
                                    <input type="checkbox" id="right-fibula-prox" name="right-fibula-prox" value="right-fibula-prox">
                                </div>
                            </div>
                            <input type="checkbox" id="right-foot" name="right-foot" value="right-foot">
                            <label for="right-foot">foot</label><br>
                        </div>
                        <div class="col-md-7">
                            <label>cuneiform</label><br>
                            <div class="row">
                                <div class="col-md-1 offset-md-1">
                                    <label>&#8627;</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="right-cuneiform-med">med.</label><br>
                                    <input type="checkbox" id="right-cuneiform-med" name="right-cuneiform-med" value="right-cuneiform-med">
                                </div>
                                <div class="col-md-4">
                                    <label for="right-cuneiform-intermed">intermed.</label><br>
                                    <input type="checkbox" id="right-cuneiform-intermed" name="right-cuneiform-intermed" value="right-cuneiform-intermed">
                                </div>
                                <div class="col-md-2">
                                    <label for="right-cuneiform-lat">lat.</label><br>
                                    <input type="checkbox" id="right-cuneiform-lat" name="right-cuneiform-lat" value="right-cuneiform-lat">
                                </div>
                            </div>

                            <label>forefoot</label><br>
                            <div class="row">
                                <div class="col-md-11 offset-md-1">
                                    <label>phalanges</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 offset-md-1">
                                    <label>&nbsp;&#8627;</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="right-phalanges-5">5</label><br>
                                    <input type="checkbox" id="right-phalanges-5" name="right-phalanges-5" value="right-phalanges-5">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-phalanges-4">4</label><br>
                                    <input type="checkbox" id="right-phalanges-4" name="right-phalanges-4" value="right-phalanges-4">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-phalanges-3">3</label><br>
                                    <input type="checkbox" id="right-phalanges-3" name="right-phalanges-3" value="right-phalanges-3">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-phalanges-2">2</label><br>
                                    <input type="checkbox" id="right-phalanges-2" name="right-phalanges-2" value="right-phalanges-2">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-phalanges-1">1</label><br>
                                    <input type="checkbox" id="right-phalanges-1" name="right-phalanges-1" value="right-phalanges-1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 offset-md-1">
                                    <label>metatarsals</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 offset-md-1">
                                    <label>&nbsp;&#8627;</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="right-metatarsals-5">5</label><br>
                                    <input type="checkbox" id="right-metatarsals-5" name="right-metatarsals-5" value="right-metatarsals-5">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-metatarsals-4">4</label><br>
                                    <input type="checkbox" id="right-metatarsals-4" name="right-metatarsals-4" value="right-metatarsals-4">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-metatarsals-3">3</label><br>
                                    <input type="checkbox" id="right-metatarsals-3" name="right-metatarsals-3" value="right-metatarsals-3">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-metatarsals-2">2</label><br>
                                    <input type="checkbox" id="right-metatarsals-2" name="right-metatarsals-2" value="right-metatarsals-2">
                                </div>
                                <div class="col-md-1">
                                    <label for="right-metatarsals-1">1</label><br>
                                    <input type="checkbox" id="right-metatarsals-1" name="right-metatarsals-1" value="right-metatarsals-1">
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <h6>Foot:</h6>
                    <div class="row" id="right-foot-info">
                        <div class="col-md-4">
                            <div id="right-birch" class="dropdown-check-list" tabindex="100">
                                <span id="right-birch-anchor" class="anchor">Birch</span>
                                <ul class="items">
                                    <li>Type 1</li>
                                    <li>&nbsp;<input type="checkbox" value="right-birch-1A"> 1A</li>
                                    <li>&nbsp;<input type="checkbox" value="right-birch-1B"> 1B</li>
                                    <li>&nbsp;<input type="checkbox" value="right-birch-1C"> 1C</li>
                                    <li>&nbsp;<input type="checkbox" value="right-birch-1C"> 1D</li>
                                    <li>Type 2<li>
                                    <li>&nbsp;<input type="checkbox" value="right-birch-2A"> 2A</li>
                                    <li>&nbsp;<input type="checkbox" value="right-birch-2B"> 2B</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="right-jones" class="dropdown-check-list" tabindex="100">
                                <span id="right-jones-anchor" class="anchor">Jones</span>
                                <ul class="items">
                                    <li>Type 1</li>
                                    <li>&nbsp;<input type="checkbox" value="right-jones-1A"> 1A</li>
                                    <li>&nbsp;<input type="checkbox" value="right-jones-1B"> 1B</li>
                                    <li><input type="checkbox" value="right-jones-2"> Type 2</li>
                                    <li><input type="checkbox" value="right-jones-3"> Type 3</li>
                                    <li><input type="checkbox" value="right-jones-4"> Type 4</li>
                                </ul>
                            </div>
                            <!-- <select name="right-jones" id="right-jones">
                                <option value="" disabled selected hidden>Jones</option>
                                    <optgroup label="Type 1">
                                        <option value="right-jones-1A">1A</option>
                                        <option value="right-birch-1B">1B</option>
                                    </optgroup>
                                    <option value="right-jones-2">Type 2</option>
                                    <option value="right-jones-3">Type 3</option>
                                    <option value="right-jones-4">Type 4</option>
                            </select>  -->
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 left-sect row">
                <div class="col-md-6">Nuts</div>
                <div class="col-md-6">Peanuts</div>
            </div>
        </div>

        <div id="upper-extremity-section" class="row" style="display: none">
            <!-- Aaron, here are the 4 sections for the page: -->
            <div class="col-md-3">yeet</div>
            <div class="col-md-3">yeet</div>
            <div class="col-md-3">yeet</div>
            <div class="col-md-3">yeet</div>
        </div>

        
    </section>

    <script type="text/javascript">
        // this makes the buttons show diff things
        $('#lower-extremity-btn').click(function(){
            if ($('#upper-extremity-btn').hasClass('active')) {
                $('#upper-extremity-btn').removeClass('active');
                $('#upper-extremity-section').css('display', 'none');
                $('#lower-extremity-btn').addClass('active');
                $('#lower-extremity-section').css('display', 'flex');
            }
        });
        $('#upper-extremity-btn').click(function(){
            if ($('#lower-extremity-btn').hasClass('active')) {
                $('#lower-extremity-btn').removeClass('active');
                $('#lower-extremity-section').css('display', 'none');
                $('#upper-extremity-btn').addClass('active');
                $('#upper-extremity-section').css('display', 'flex');
            }
        });

        // fuzzy date pickers
        // $(document).ready(function(){
        //     $("#dob").datepicker();
        //     $("#start-date").datepicker();
        //     $("#end-date").datepicker();
        //     $("#acquired-date").datepicker();
        //     //$("#tumor-date").datepicker();
        // });

        
        $('#right-birch-anchor').click(function() {
            if ($('#right-birch').hasClass('visible'))
                $('#right-birch').removeClass('visible');
            else
                $('#right-birch').addClass('visible');
        });
        $('#right-jones-anchor').click(function() {
            if ($('#right-jones').hasClass('visible'))
                $('#right-jones').removeClass('visible');
            else
                $('#right-jones').addClass('visible');
        });
    </script>

    <style>
        /* MOVE THIS */
        .dropdown-check-list {
            display: inline-block;
        }

        .dropdown-check-list .anchor {
            position: relative;
            cursor: pointer;
            display: inline-block;
            padding: 5px 50px 5px 10px;
            border: 1px solid #ccc;
        }

        .dropdown-check-list .anchor:after {
            position: absolute;
            content: "";
            border-left: 2px solid black;
            border-top: 2px solid black;
            padding: 5px;
            right: 10px;
            top: 20%;
            -moz-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .dropdown-check-list .anchor:active:after {
            right: 8px;
            top: 21%;
        }

        .dropdown-check-list ul.items {
            padding: 2px;
            display: none;
            margin: 0;
            border: 1px solid #ccc;
            border-top: none;
        }

        .dropdown-check-list ul.items li {
            list-style: none;
        }

        .dropdown-check-list.visible .anchor {
            color: #0094ff;
        }

        .dropdown-check-list.visible .items {
            display: block;
        }
    </style>

<?php
    include_once __DIR__ . '/_footer.php';
