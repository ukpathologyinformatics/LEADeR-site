<?php
/** @var UserSession $userSession */
$page = 'new-entry';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">New Entry</h1>
    </div>

    <section id="icd-filters">
        <form id="extremity-form"  onsubmit="event.preventDefault();">
        <!-- This is the top bar -->
        <div id="icd-top-bar" class="row">
            <div class="col-md">
                <input type="text" id="icd-codes" name="icd-codes" placeholder="Enter ICD Codes" required>
            </div>
            <div class="col-md">
                <select name="subject-id" id="subject-id" required>
                    <option value="" disabled selected hidden>Subject ID</option>
                    <option value="id-1">1</option>
                    <option value="id-2">2</option>
                </select> 
            </div>
            <div class="col-md">
                <input id="dob" name="dob" type="text" placeholder="mm/dd/yyyy" required>
                <label for="dob">Date of Birth</label>
            </div>
            <div class="col-md">
                <input id="start-date" name="start-date" type="text" placeholder="mm/dd/yyyy" required>
                <label for="start-date">First Recorded</label>
            </div>
            <div class="col-md">
                <input id="end-date" name="end-date" type="text" placeholder="mm/dd/yyyy" required>
                <label for="end-date">Last Recorded</label>
            </div>
            <div class="col-md">
                <select name="gender" id="gender" required>
                    <option value="" disabled selected hidden>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="race" id="race" required>
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
                <select name="ethnicity" id="ethnicity" required>
                    <option value="" disabled selected hidden>Ethnicity</option>
                    <option value="eth1">ethnicity 1</option>
                    <option value="eth2">ethnicity 2</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="file" id="file" required>
                    <option value="" disabled selected hidden>Status</option>
                    <option value="complete">Complete</option>
                    <option value="incomplete">Incomplete</option>
                    <option value="partial">Partial</option>
                </select> 
            </div>
            
        </div>

        <!-- Buttons to select which page to see -->
        <div class="lower-upper-buttons">
            <button id="lower-extremity-btn" type="button" class="active btn btn-sm btn-secondary my-2 my-sm-0 ml-2">LOWER EXTREMITY</button>
            <button id="upper-extremity-btn" type="button" class="btn btn-sm btn-secondary my-2 my-sm-0 ml-2">UPPER EXTREMITY</button>
            <button id="clear-selections" type="button" class="btn btn-sm btn-primary my-2 my-sm-0 ml-2 float-right">Clear</button>
            <input type="submit" id="submit-entry" value="Add Entry" class="btn btn-sm btn-primary my-2 my-sm-0 ml-2 float-right">
            
        </div>



            <div id="lower-extremity-section" class="row" style="display: flex">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Right</strong></h4><br>
                            <input type="checkbox" id="lower-right-longitudinal" name="lower-right-longitudinal" value="1">
                            <label for="lower-right-longitudinal">longitudinal</label><br>
                            <input type="checkbox" id="lower-right-transverse" name="lower-right-transverse" value="1">
                            <label for="lower-right-transverse">transverse</label><br>
                            <input type="checkbox" id="lower-right-ears" name="lower-right-ears" value="1">
                            <label for="lower-right-ears">EARS</label><br>
                            <input type="checkbox" id="lower-right-congenital" name="lower-right-congenital" value="1">
                            <label for="lower-right-congenital">congenital</label><br>
                            <input type="checkbox" id="lower-right-acquired" name="lower-right-acquired" value="1">
                            <label for="lower-right-acquired">acquired</label><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-tumor" name="lower-right-tumor" value="1">
                                    <label for="lower-right-tumor">tumor</label><br>
                                    <input type="checkbox" id="lower-right-trauma" name="lower-right-trauma" value="1">
                                    <label for="lower-right-trauma">trauma</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input id="lower-right-tumor-date" name="lower-right-tumor-date" size=12 type="text" placeholder="mm/dd/yyyy" disabled><br>
                                    <input id="lower-right-trauma-date" name="lower-right-trauma-date" size=12 type="text" placeholder="mm/dd/yyyy" disabled><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-burn" name="lower-right-burn" value="1">
                                    <label for="lower-right-burn">burn</label><br>
                                    <input type="checkbox" id="lower-right-infection" name="lower-right-infection" value="1">
                                    <label for="lower-right-infection">infection</label><br>
                                    <input type="checkbox" id="lower-right-lawnmower" name="lower-right-lawnmower" value="1">
                                    <label for="lower-right-lawnmower">lawnmower</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-mvc" name="lower-right-mvc" value="1">
                                    <label for="lower-right-mvc">MVC</label><br>
                                    <input type="checkbox" id="lower-right-recreational" name="lower-right-recreational" value="1">
                                    <label for="lower-right-recreational">recreational</label><br>
                                    <input type="checkbox" id="lower-right-vascular" name="lower-right-vascular" value="1">
                                    <label for="lower-right-vascular">vascular</label><br>
                                </div>
                            </div>
                            <input id="lower-right-other" class="other-box" type="text" placeholder="Other"><br><br>

                            <div class="row">
                                <div class="col-md-7">
                                    <select class="selectpicker" data-width="fit" id="lower-right-classification" name="lower-right-classification" data-none-selected-text="Classifications" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
                                </div>
                                <div class="col-md-5">
                                    <button id = "lower-right-classification-add" onClick="get_location(this.id)" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#classificationModal">+Add</button>
                                </div>
                            </div>

                            <textarea id="lower-right-notes" name="lower-right-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>
                            <div class="row">
                                <div class="col-md-7">
                                    <select class="selectpicker" data-width="fit" id="lower-right-surgeries" name="lower-right-surgeries" data-none-selected-text="Surgeries" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
                                </div>
                                <div class="col-md-5">
                                    <button id="lower-right-surgical-pro" class="btn btn-primary" type="button">+Add</button>
                                </div>
                            </div>
                            <ul id="lower-right-surgery-list" name="lower-right-surgery-list" style="display:none;"></ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Deformities/Missing Bones</h5><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-pelvis" name="lower-right-pelvis" value="1">
                                    <label for="lower-right-pelvis">pelvis</label><br>
                                    <label>femur</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-femur-dist">dist.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-femur-dist" name="lower-right-femur-dist" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-femur-mid">mid.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-femur-mid" name="lower-right-femur-mid" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-femur-prox">prox.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-femur-prox" name="lower-right-femur-prox" value="1">
                                        </div>
                                    </div>
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-patella" name="lower-right-patella" value="1">
                                    <label for="lower-right-patella">patella</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-tarsals" name="lower-right-tarsals" value="1">
                                    <label for="lower-right-tarsals">tarsals</label><br>
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-calcaneus" name="lower-right-calcaneus" value="1" data-id="lower-right-calcaneus" onClick="selectByID()">
                                    <label for="lower-right-calcaneus">calcaneus</label><br>
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-talus" name="lower-right-talus" value="1" data-id="lower-right-talus" onClick="selectByID()">
                                    <label for="lower-right-talus">talus</label><br>
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-navicular" name="lower-right-navicular" value="1" data-id="lower-right-navicular" onClick="selectByID()">
                                    <label for="lower-right-navicular">navicular</label><br>
                                    <input type="checkbox" class="lower-right-checkboxes" id="lower-right-cuboid" name="lower-right-cuboid" value="1" data-id="lower-right-cuboid" onClick="selectByID()">

                                    <label for="lower-right-cuboid">cuboid</label><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>tibia</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-tibia-dist">dist.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-tibia-dist" name="lower-right-tibia-dist" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-tibia-mid">mid.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-tibia-mid" name="lower-right-tibia-mid" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-tibia-prox">prox.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-tibia-prox" name="lower-right-tibia-prox" value="1">
                                        </div>
                                    </div>
                                    <label>fibula</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-fibula-dist">dist.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-fibula-dist" name="lower-right-fibula-dist" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-fibula-mid">mid.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-fibula-mid" name="lower-right-fibula-mid" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-right-fibula-prox">prox.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-fibula-prox" name="lower-right-fibula-prox" value="1">
                                        </div>
                                    </div>
                                    <input type="checkbox" onclick="fillLowerRightCheckboxes()" id="lower-right-foot" value="1">
                                    <label for="lower-right-foot">foot</label><br>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                        <button type="button" id="lower-right-foot-btn" class="btn btn-primary" data-toggle="modal" data-target="#lower-right-foot-modal">Foot</button>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-10">
                                            <div id="lower-right-birch" class="dropdown-check-list" tabindex="100">
                                            <span id="lower-right-birch-anchor" class="anchor">Birch</span>
                                            <ul class="items">
                                            <li><input type="checkbox" name="lower-right-birch-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-birch-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-birch-1B" value="1"> 1B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-birch-1C" value="1"> 1C</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-birch-1C" value="1"> 1D</li>
                                            <li><input type="checkbox" name="lower-right-birch-2" value="1"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-birch-2A" value="1"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-birch-2B" value="1"> 2B</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-7">
                                    <label>cuneiform</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-cuneiform-med">med.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-cuneiform-med" name="lower-right-cuneiform-med" value="1"  data-id="lower-right-cuneiform-med" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lower-right-cuneiform-intermed">intermed.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-cuneiform-intermed" name="lower-right-cuneiform-intermed" value="1"  data-id="lower-right-cuneiform-intermed" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-cuneiform-lat">lat.</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-cuneiform-lat" name="lower-right-cuneiform-lat" value="1" data-id="lower-right-cuneiform-lat" onClick="selectByID()">

                                        </div>
                                    </div>
                                    <label>forefoot</label><br>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <label>phalanges</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1 nopadding">
                                            <label>&nbsp;&#8627;</label>
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-phalanges-5">5</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-phalanges-5" name="lower-right-phalanges-5" value="1" data-id="lower-right-phalanges-5" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-phalanges-4">4</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-phalanges-4" name="lower-right-phalanges-4" value="1" data-id="lower-right-phalanges-4" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-phalanges-3">3</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-phalanges-3" name="lower-right-phalanges-3" value="1" data-id="lower-right-phalanges-3" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-phalanges-2">2</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-phalanges-2" name="lower-right-phalanges-2" value="1" data-id="lower-right-phalanges-2" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-phalanges-1">1</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-phalanges-1" name="lower-right-phalanges-1" value="1" data-id="lower-right-phalanges-1" onClick="selectByID()">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <label>metatarsals</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1 nopadding">
                                            <label>&nbsp;&#8627;</label>
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-metatarsals-5">5</label><br>

                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-metatarsals-5" name="lower-right-metatarsals-5" value="1" data-id="lower-right-metatarsals-5" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-metatarsals-4">4</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-metatarsals-4" name="lower-right-metatarsals-4" value="1" data-id="lower-right-metatarsals-4" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-metatarsals-3">3</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-metatarsals-3" name="lower-right-metatarsals-3" value="1" data-id="lower-right-metatarsals-3" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-metatarsals-2">2</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-metatarsals-2" name="lower-right-metatarsals-2" value="1" data-id="lower-right-metatarsals-2" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-right-metatarsals-1">1</label><br>
                                            <input type="checkbox" class="lower-right-checkboxes" id="lower-right-metatarsals-1" name="lower-right-metatarsals-1" value="1" data-id="lower-right-metatarsals-1" onClick="selectByID()">

                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <div id="lower-right-jones" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-jones-anchor" class="anchor">Jones</span>
                                        <ul class="items">
                                        <li><input type="checkbox" name="lower-right-jones-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-jones-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-jones-1B" value="1"> 1B</li>
                                            <li><input type="checkbox" name="lower-right-jones-2" value="1"> Type 2</li>
                                            <li><input type="checkbox" name="lower-right-jones-3" value="1"> Type 3</li>
                                            <li><input type="checkbox" name="lower-right-jones-4" value="1"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-aitken" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-aitken-anchor" class="anchor">Aitken</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-right-aitken-AB" value="1"> A or B (+femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-aitken-A" value="1"> A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-aitken-B" value="1"> B</li>
                                            <li><input type="checkbox" name="lower-right-aitken-CD" value="1"> C or D (no femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-aitken-C" value="1"> C</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-aitken-D" value="1"> D</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-AK" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-AK-anchor" class="anchor">A+K</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-right-AK-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-AK-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-AK-1B" value="1"> 1B</li>
                                            <li><input type="checkbox" name="lower-right-AK-2" value="1"> Type 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-md-4">
                                    <div id="lower-right-paley-tibia" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-paley-tibia-anchor" class="anchor">Paley Tibia</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-right-paley-tibia-1" value="1"> Type 1</li>
                                            <li><input type="checkbox" name="lower-right-paley-tibia-2" value="1"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-2A" value="1"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-2B" value="1"> 2B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-2C" value="1"> 2C</li>
                                            <li><input type="checkbox" name="lower-right-paley-tibia-3" value="1"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-3A" value="1"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-3B" value="1"> 3B</li>
                                            <li><input type="checkbox" name="lower-right-paley-tibia-4" value="1"> Type 4</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-4A" value="1"> 4A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-4B" value="1"> 4B</li>
                                            <li><input type="checkbox" name="lower-right-paley-tibia-5" value="1"> Type 5</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-5A" value="1"> 5A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-5B" value="1"> 5B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-tibia-5C" value="1"> 5C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-paley-femur" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-paley-femur-anchor" class="anchor">Paley Femur</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-right-paley-femur-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-1B" value="1"> 1B</li>
                                            <li><input type="checkbox" name="lower-right-paley-femur-2" value="1"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-2A" value="1"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-2B" value="1"> 2B</li>
                                            <li><input type="checkbox" name="lower-right-paley-femur-3" value="1"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-3A" value="1"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-3B" value="1"> 3B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-femur-3C" value="1"> 3C</li>
                                            <li><input type="checkbox" name="lower-right-paley-femur-4" value="1"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div id="lower-right-paley-fibula" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-paley-fibula-anchor" class="anchor">Paley Fibula</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-right-paley-fibula-1" value="1"> Type 1</li>
                                            <li><input type="checkbox" name="lower-right-paley-fibula-2" value="1"> Type 2</li>
                                            <li><input type="checkbox" name="lower-right-paley-fibula-3" value="1"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-fibula-3A" value="1"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-fibula-3B1" value="1"> 3B1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-fibula-3B2" value="1"> 3B2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-right-paley-fibula-3C" value="1"> 3C</li>
                                            <li><input type="checkbox" name="lower-right-paley-fibula-4" value="1"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- col-md-6 -->
                <div class="col-md-6 border-left">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Left</strong></h4><br>
                            <input type="checkbox" id="lower-left-longitudinal" name="lower-left-longitudinal" value="1">
                            <label for="lower-left-longitudinal">longitudinal</label><br>
                            <input type="checkbox" id="lower-left-transverse" name="lower-left-transverse" value="1">
                            <label for="lower-left-transverse">transverse</label><br>
                            <input type="checkbox" id="lower-left-ears" name="lower-left-ears" value="1">
                            <label for="lower-left-ears">EARS</label><br>
                            <input type="checkbox" id="lower-left-congenital" name="lower-left-congenital" value="1">
                            <label for="lower-left-congenital">congenital</label><br>
                            <input type="checkbox" id="lower-left-acquired" name="lower-left-acquired" value="1">
                            <label for="lower-left-acquired">acquired</label><br>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-tumor" name="lower-left-tumor" value="1">
                                    <label for="lower-left-tumor">tumor</label><br>
                                    <input type="checkbox" id="lower-left-trauma" name="lower-left-trauma" value="1">
                                    <label for="lower-left-trauma">trauma</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input id="lower-left-tumor-date" name="lower-left-tumor-date" size=12 type="text" placeholder="mm/dd/yyyy" disabled><br>
                                    <input id="lower-left-trauma-date" name="lower-left-trauma-date" size=12 type="text" placeholder="mm/dd/yyyy" disabled><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-burn" name="lower-left-burn" value="1">
                                    <label for="lower-left-burn">burn</label><br>
                                    <input type="checkbox" id="lower-left-infection" name="lower-left-infection" value="1">
                                    <label for="lower-left-infection">infection</label><br>
                                    <input type="checkbox" id="lower-left-lawnmower" name="lower-left-lawnmower" value="1">
                                    <label for="lower-left-lawnmower">lawnmower</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-mvc" name="lower-left-mvc" value="1">
                                    <label for="lower-left-mvc">MVC</label><br>
                                    <input type="checkbox" id="lower-left-recreational" name="lower-left-recreational" value="1">
                                    <label for="lower-left-recreational">recreational</label><br>
                                    <input type="checkbox" id="lower-left-vascular" name="lower-left-vascular" value="1">
                                    <label for="lower-left-vascular">vascular</label><br>
                                </div>
                            </div>
                            <input id="lower-left-other" class="other-box" type="text" placeholder="Other"><br><br>

                            <div class="row">
                                <div class="col-md-7">
                                <select class="selectpicker" data-width="fit" id="lower-left-classification" name="lower-left-classification" data-none-selected-text="Classifications" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
                                </div>
                                <div class="col-md-5">
                                    <button id = "lower-left-classification-add" onClick="get_location(this.id)" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#classificationModal">+Add</button><br>
                                </div>
                            </div>

                            <textarea id="lower-left-notes" name="lower-left-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>
                            <div class="row">
                                <div class="col-md-7">
                                    <select class="selectpicker" data-width="fit" id="lower-left-surgeries" name="lower-left-surgeries" data-none-selected-text="Surgeries" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
                                </div>
                                <div class="col-md-5">
                                    <button id="lower-left-surgical-pro" class="btn btn-primary" type="button">+Add</button><br>
                                </div>
                            </div>
                            <ul id="lower-left-surgery-list" name="lower-left-surgery-list" style="display:none;"></ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Deformities/Missing Bones</h5><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-pelvis" name="lower-left-pelvis" value="1">
                                    <label for="lower-left-pelvis">pelvis</label><br>
                                    <label>femur</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-femur-dist">dist.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-femur-dist" name="lower-left-femur-dist" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-femur-mid">mid.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-femur-mid" name="lower-left-femur-mid" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-femur-prox">prox.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-femur-prox" name="lower-left-femur-prox" value="1">
                                        </div>
                                    </div>
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-patella" name="lower-left-patella" value="1">
                                    <label for="lower-left-patella">patella</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-tarsals" name="lower-left-tarsals" value="1">
                                    <label for="lower-left-tarsals">tarsals</label><br>
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-calcaneus" name="lower-left-calcaneus" value="1" data-id="lower-left-calcaneus" onClick="selectByID()">
                                    <label for="lower-left-calcaneus">calcaneus</label><br>
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-talus" name="lower-left-talus" value="1" data-id="lower-left-talus" onClick="selectByID()">
                                    <label for="lower-left-talus">talus</label><br>
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-navicular" name="lower-left-navicular" value="1" data-id="lower-left-navicular" onClick="selectByID()">
                                    <label for="lower-left-navicular">navicular</label><br>
                                    <input type="checkbox" class="lower-left-checkboxes" id="lower-left-cuboid" name="lower-left-cuboid" data-id="lower-left-cuboid" value="1" onClick="selectByID()">

                                    <label for="lower-left-cuboid">cuboid</label><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>tibia</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-tibia-dist">dist.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-tibia-dist" name="lower-left-tibia-dist" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-tibia-mid">mid.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-tibia-mid" name="lower-left-tibia-mid" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-tibia-prox">prox.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-tibia-prox" name="lower-left-tibia-prox" value="1">
                                        </div>
                                    </div>
                                    <label>fibula</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-fibula-dist">dist.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-fibula-dist" name="lower-left-fibula-dist" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-fibula-mid">mid.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-fibula-mid" name="lower-left-fibula-mid" value="1">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lower-left-fibula-prox">prox.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-fibula-prox" name="lower-left-fibula-prox" value="1">
                                        </div>
                                    </div>
                                    <input type="checkbox" onclick="fillLowerLeftCheckboxes()" id="lower-left-foot" value="1">
                                    <label for="lower-left-foot">foot</label><br>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                        <button type="button" id="lower-left-foot-btn" class="btn btn-primary" data-toggle="modal" data-target="#lower-left-foot-modal">Foot</button>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-10">
                                            <div id="lower-left-birch" class="dropdown-check-list" tabindex="100">
                                                <span id="lower-left-birch-anchor" class="anchor">Birch</span>
                                                <ul class="items">
                                                    <li><input type="checkbox" name="lower-left-birch-1" value="1"> Type 1</li>
                                                    <li>&nbsp;<input type="checkbox" name="lower-left-birch-1A" value="1"> 1A</li>
                                                    <li>&nbsp;<input type="checkbox" name="lower-left-birch-1B" value="1"> 1B</li>
                                                    <li>&nbsp;<input type="checkbox" name="lower-left-birch-1C" value="1"> 1C</li>
                                                    <li>&nbsp;<input type="checkbox" name="lower-left-birch-1C" value="1"> 1D</li>
                                                    <li><input type="checkbox" name="lower-left-birch-2" value="1"> Type 2</li>
                                                    <li>&nbsp;<input type="checkbox" name="lower-left-birch-2A" value="1"> 2A</li>
                                                    <li>&nbsp;<input type="checkbox" name="lower-left-birch-2B" value="1"> 2B</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label>cuneiform</label><br>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-cuneiform-med">med.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-cuneiform-med" name="lower-left-cuneiform-med" value="1" data-id="lower-left-cuneiform-med" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lower-left-cuneiform-intermed">intermed.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-cuneiform-intermed" name="lower-left-cuneiform-intermed" value="1" data-id="lower-left-cuneiform-intermed" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-cuneiform-lat">lat.</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-cuneiform-lat" name="lower-left-cuneiform-lat" value="1" data-id="lower-left-cuneiform-lat" onClick="selectByID()">

                                        </div>
                                    </div>

                                    <label>forefoot</label><br>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <label>phalanges</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1 nopadding">
                                            <label>&nbsp;&#8627;</label>
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-phalanges-5">5</label><br>

                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-phalanges-5" name="lower-left-phalanges-5" value="1" data-id="lower-left-phalanges-5" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-phalanges-4">4</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-phalanges-4" name="lower-left-phalanges-4" value="1" data-id="lower-left-phalanges-4" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-phalanges-3">3</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-phalanges-3" name="lower-left-phalanges-3" value="1" data-id="lower-left-phalanges-3" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-phalanges-2">2</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-phalanges-2" name="lower-left-phalanges-2" value="1" data-id="lower-left-phalanges-2" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-phalanges-1">1</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-phalanges-1" name="lower-left-phalanges-1" value="1" data-id="lower-left-phalanges-1" onClick="selectByID()">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <label>metatarsals</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1 nopadding">
                                            <label>&nbsp;&#8627;</label>
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-metatarsals-5">5</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-metatarsals-5" name="lower-left-metatarsals-5" value="1" data-id="lower-left-metatarsals-5" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-metatarsals-4">4</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-metatarsals-4" name="lower-left-metatarsals-4" value="1" data-id="lower-left-metatarsals-4" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-metatarsals-3">3</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-metatarsals-3" name="lower-left-metatarsals-3" value="1" data-id="lower-left-metatarsals-3" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-metatarsals-2">2</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-metatarsals-2" name="lower-left-metatarsals-2" value="1" data-id="lower-left-metatarsals-2" onClick="selectByID()">
                                        </div>
                                        <div class="col-md-1 nopadding">
                                            <label for="lower-left-metatarsals-1">1</label><br>
                                            <input type="checkbox" class="lower-left-checkboxes" id="lower-left-metatarsals-1" name="lower-left-metatarsals-1" value="1" data-id="lower-left-metatarsals-1" onClick="selectByID()">

                                        </div>
                                    </div>
                                
                                </div>
                            </div>
        
                            <div class="row mt-2">
                                
                                <div class="col-md-4">
                                    <div id="lower-left-jones" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-jones-anchor" class="anchor">Jones</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-left-jones-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-jones-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-jones-1B" value="1"> 1B</li>
                                            <li><input type="checkbox" name="lower-left-jones-2" value="1"> Type 2</li>
                                            <li><input type="checkbox" name="lower-left-jones-3" value="1"> Type 3</li>
                                            <li><input type="checkbox" name="lower-left-jones-4" value="1"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-aitken" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-aitken-anchor" class="anchor">Aitken</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-left-aitken-AB" value="1"> A or B (+femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-aitken-A" value="1"> A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-aitken-B" value="1"> B</li>
                                            <li><input type="checkbox" name="lower-left-aitken-CD" value="1"> C or D (no femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-aitken-C" value="1"> C</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-aitken-D" value="1"> D</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-AK" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-AK-anchor" class="anchor">A+K</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-left-AK-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-AK-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-AK-1B" value="1"> 1B</li>
                                            <li><input type="checkbox" name="lower-left-AK-2" value="1"> Type 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                
                                <div class="col-md-4">
                                    <div id="lower-left-paley-tibia" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-paley-tibia-anchor" class="anchor">Paley Tibia</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-left-paley-tibia-1" value="1"> Type 1</li>
                                            <li><input type="checkbox" name="lower-left-paley-tibia-2" value="1"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-2A" value="1"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-2B" value="1"> 2B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-2C" value="1"> 2C</li>
                                            <li><input type="checkbox" name="lower-left-paley-tibia-3" value="1"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-3A" value="1"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-3B" value="1"> 3B</li>
                                            <li><input type="checkbox" name="lower-left-paley-tibia-4" value="1"> Type 4</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-4A" value="1"> 4A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-4B" value="1"> 4B</li>
                                            <li><input type="checkbox" name="lower-left-paley-tibia-5" value="1"> Type 5</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-5A" value="1"> 5A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-5B" value="1"> 5B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-tibia-5C" value="1"> 5C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-paley-femur" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-paley-femur-anchor" class="anchor">Paley Femur</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-left-paley-femur-1" value="1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-1A" value="1"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-1B" value="1"> 1B</li>
                                            <li><input type="checkbox" name="lower-left-paley-femur-2" value="1"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-2A" value="1"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-2B" value="1"> 2B</li>
                                            <li><input type="checkbox" name="lower-left-paley-femur-3" value="1"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-3A" value="1"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-3B" value="1"> 3B</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-femur-3C" value="1"> 3C</li>
                                            <li><input type="checkbox" name="lower-left-paley-femur-4" value="1"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div id="lower-left-paley-fibula" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-paley-fibula-anchor" class="anchor">Paley Fibula</span>
                                        <ul class="items">
                                            <li><input type="checkbox" name="lower-left-paley-fibula-1" value="1"> Type 1</li>
                                            <li><input type="checkbox" name="lower-left-paley-fibula-2" value="1"> Type 2</li>
                                            <li><input type="checkbox" name="lower-left-paley-fibula-3" value="1"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-fibula-3A" value="1"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-fibula-3B1" value="1"> 3B1</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-fibula-3B2" value="1"> 3B2</li>
                                            <li>&nbsp;<input type="checkbox" name="lower-left-paley-fibula-3C" value="1"> 3C</li>
                                            <li><input type="checkbox" name="lower-left-paley-fibula-4" value="1"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="other-things">
                    <h5>Other</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="checkbox" id="UE" name="UE" value="1">
                            <label for="UE">UE</label>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            
                            <textarea id="other-skel-probs" name="other-skel-probs" placeholder="Other Skeletal Problems" rows="3" cols="30"></textarea>
                        </div>
                        <div class="col-md-4">
                            <textarea id="other-medical-probs" name="other-medical-probs" placeholder="Other Medical Problems" rows="3" cols="30"></textarea>
                        </div>
                        <div class="col-md-4">
                            <textarea id="family-history" name="family-history" placeholder="Family History" rows="3" cols="30"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div id="upper-extremity-section" class="row" style="display: none">
                <div class="col-md-3">
                    <h4><strong>Right</strong></h4><br>
                    <input type="checkbox" id="right-longitudinal" name="right-longitudinal" value="1"/>
                    <label for="right-longitudinal">longitudinal</label><br>
                    <input type="checkbox" id="right-transverse" name="right-transverse" value="1"/>
                    <label for="right-transverse">transverse</label><br>
                    <input type="checkbox" id="right-ears" name="right-ears" value="1"/>
                    <label for="right-ears">EARS</label><br>
                    <input type="checkbox" id="right-congenital" name="right-congenital" value="1"/>
                    <label for="right-congenital">congenital</label><br>
                    <input type="checkbox" id="right-acquired" name="right-acquired" value="1"/>
                    <label for="right-acquired">acquired</label><br>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" id="right-tumor" name="right-tumor" value="1"/>
                            <label for="right-tumor">tumor</label><br>
                            <input type="checkbox" id="right-trauma" name="right-trauma" value="1"/>
                            <label for="right-trauma">trauma</label><br>
                        </div>
                        <div class="col-6">
                            <input id="right-tumor-date" name="right-tumor-date" type="text" size=12 placeholder="mm/dd/yyyy" disabled><br>
                            <input id="right-trauma-date" name="right-trauma-date" type="text" size=12 placeholder="mm/dd/yyyy" disabled><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" id="right-burn" name="right-burn" value="1"/>
                            <label for="right-burn">burn</label><br>
                            <input type="checkbox" id="right-infection" name="right-infection" value="1"/>
                            <label for="right-infection">infection</label><br>
                            <input type="checkbox" id="right-lawnmower" name="right-lawnmower" value="1"/>
                            <label for="right-lawnmower">lawnmower</label><br>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="right-mvc" name="right-mvc" value="1"/>
                            <label for="right-mvc">MVC</label><br>
                            <input type="checkbox" id="right-recreational" name="right-recreational" value="1"/>
                            <label for="right-recreational">recreational</label><br>
                            <input type="checkbox" id="right-vascular" name="right-vascular" value="1"/>
                            <label for="right-vascular">vascular</label><br>
                        </div>
                    </div>

                    <input type="text" class="other-box" name="right-other" placeholder="Other"><br><br>

                    <div class="row">
                        <div class="col-md-7">
                        <select class="selectpicker" data-width="fit" id="right-classification" name="right-classification" data-none-selected-text="Classifications" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
                        </div>
                        <div class="col-md-5">
                            <button id = "right-classification-add" onClick="get_location(this.id)" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#classificationModal">+Add</button><br>
                        </div>
                    </div>

                    <textarea id="right-notes" name="right-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>


                </div>
                <div class="col-md-3">
                    <h5>Deformities/Missing Bones</h5><br>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" class="right-checkboxes" id="right-scapula" name="right-scapula" value="1"/>
                            <label for="right-scapula">scapula</label><br>
                                <label>humerus</label><br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="right-humerus-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-humerus-dist" name="right-humerus-dist" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="right-humerus-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-humerus-mid" name="right-humerus-mid" value="1" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="right-humerus-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-humerus-prox" name="right-humerus-prox" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                <label>radius</label><br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="right-radius-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-radius-dist" name="right-radius-dist" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="right-radius-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-radius-mid" name="right-radius-mid" value="1" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="right-radius-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-radius-prox" name="right-radius-prox" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                <label>ulna<label><br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="right-ulna-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-ulna-dist" name="right-ulna-dist" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="right-ulna-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-ulna-mid" name="right-ulna-mid" value="1" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="right-ulna-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-ulna-prox" name="right-ulna-prox" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                <br><input type="checkbox" onclick="fillRightCheckboxes()" id="right-hand" value="1"/>
                                <label for="right-hand">hand/wrist</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="right-checkboxes" id="right-hamate" name="right-hamate" value="1"/>
                            <label for="right-hamate">hamate</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-pistiform" name="right-pistiform" value="1"/>
                            <label for="right-pistiform">pistiform</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-triquetral" name="right-triquetral" value="1"/>
                            <label for="right-triquetral">triquetral</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-lunate" name="right-lunate" value="1"/>
                            <label for="right-lunate">lunate</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-trapezoid" name="right-trapezoid" value="1"/>
                            <label for="right-trapezoid">trapezoid</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-trapezium" name="right-trapezium" value="1"/>
                            <label for="right-trapezium">trapezium</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-scaphoid" name="right-scaphoid" value="1"/>
                            <label for="right-scaphoid">scaphoid</label><br>
                            <input type="checkbox" class="right-checkboxes" id="right-capitellum" name="right-capitellum" value="1"/>
                            <label for="right-capitellum">capitellum</label><br>
                            <button type="button" class="btn btn-primary" id="right-hand-drawing">Hand</button>
                        </div>
                    </div>
                    <u>Hand</u><br>
                    <div class="row">
                        <div class="col-10 border-left">
                            <label>phalanges</label><br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-phalanges-5" name="right-phalanges-5" value="1" type="checkbox"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-phalanges-4" type="checkbox" name="right-phalanges-4" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-phalanges-3" type="checkbox" name="right-phalanges-3" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-phalanges-2" type="checkbox" name="right-phalanges-2" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-phalanges-1" type="checkbox" name="right-phalanges-1" value="1"/>
                                    </div>
                                </div>
                            </div>
                            <label>metacarpals</label><br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-metacarpals-5" type="checkbox" name="right-metacarpals-5" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-metacarpals-4" type="checkbox" name="right-metacarpals-4" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-metacarpals-3" type="checkbox" name="right-metacarpals-3" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-metacarpals-2" type="checkbox" name="right-metacarpals-2" value="1"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="right-checkboxes" id="right-metacarpals-1" type="checkbox" name="right-metacarpals-1" value="1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 border-left">
                    <h4><strong>Left</strong></h4><br>
                    <input type="checkbox" id="left-longitudinal" name="left-longitudinal" value="1"/>
                    <label for="left-longitudinal">longitudinal</label><br>
                    <input type="checkbox" id="left-transverse" name="left-transverse" value="1"/>
                    <label for="left-transverse">transverse</label><br>
                    <input type="checkbox" id="left-ears" name="left-ears" value="1"/>
                    <label for="left-ears">EARS</label><br>
                    <input type="checkbox" id="left-congenital" name="left-congenital" value="1"/>
                    <label for="left-congenital">congenital</label><br>
                    <input type="checkbox" id="left-acquired" name="left-acquired" value="1"/>
                    <label for="left-acquired">acquired</label><br>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" id="left-tumor" name="left-tumor" value="1"/>
                            <label for="left-tumor">tumor</label><br>
                            <input type="checkbox" id="left-trauma" name="left-trauma" value="1"/>
                            <label for="left-trauma">trauma</label><br>
                        </div>
                        <div class="col-6">
                            <input id="left-tumor-date" name="left-tumor-date" type="text" size=12 placeholder="mm/dd/yyyy" disabled><br>
                            <input id="left-trauma-date" name="left-trauma-date" type="text" size=12 placeholder="mm/dd/yyyy" disabled><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" id="left-burn" name="left-burn" value="1"/>
                            <label for="left-burn">burn</label><br>
                            <input type="checkbox" id="left-infection" name="left-infection" value="1"/>
                            <label for="left-infection">infection</label><br>
                            <input type="checkbox" id="left-lawnmower" name="left-lawnmower" value="1"/>
                            <label for="left-lawnmower">lawnmower</label><br>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="left-mvc" name="left-mvc" value="1"/>
                            <label for="left-mvc">MVC</label><br>
                            <input type="checkbox" id="left-recreational" name="left-recreational" value="1"/>
                            <label for="left-recreational">recreational</label><br>
                            <input type="checkbox" id="left-vascular" name="left-vascular" value="1"/>
                            <label for="left-vascular">vascular</label><br>
                        </div>
                    </div>

                    <input type="text" class="other-box" name="left-other" placeholder="Other"><br><br>
                    <div class="row">
                        <div class="col-md-7">
                        <select class="selectpicker" data-width="fit" id="left-classification" name="left-classification" data-none-selected-text="Classifications" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
                        </div>
                        <div class="col-md-5">
                            <button id="left-classification-add" onClick="get_location(this.id)" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#classificationModal">+Add</button><br>
                        </div>
                    </div>

                    <textarea id="left-notes" name="left-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>

                </div>
                <div class="col-md-3">
                    <h5>Deformities/Missing Bones</h5><br>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" class="left-checkboxes" id="left-scapula" name="left-scapula" value="1"/>
                            <label for="left-scapula">scapula</label><br>
                                <label>humerus</label><br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="left-humerus-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-humerus-dist" name="left-humerus-dist" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="left-humerus-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-humerus-mid" name="left-humerus-mid" value="1" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="left-humerus-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-humerus-prox" name="left-humerus-prox" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                <label>radius<label><br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="left-radius-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-radius-dist" name="left-radius-dist" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="left-radius-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-radius-mid" name="left-radius-mid" value="1" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="left-radius-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-radius-prox" name="left-radius-prox" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                <label>ulna</label><br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="left-ulna-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-ulna-dist" name="left-ulna-dist" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="left-ulna-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-ulna-mid" name="left-ulna-mid" value="1" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="left-ulna-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-ulna-prox" name="left-ulna-prox" value="1" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                <br><input type="checkbox" onclick="fillLeftCheckboxes()" id="left-hand" value="1"/>
                                <label for="left-hand">hand/wrist</label><br>

                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="left-checkboxes" id="left-hamate" name="left-hamate" value="1"/>
                            <label for="left-hamate">hamate</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-pistiform" name="left-pistiform" value="1"/>
                            <label for="left-pistiform">pistiform</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-triquetral" name="left-triquetral" value="1"/>
                            <label for="left-triquetral">triquetral</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-lunate" name="left-lunate" value="1"/>
                            <label for="left-lunate">lunate</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-trapezoid" name="left-trapezoid" value="1"/>
                            <label for="left-trapezoid">trapezoid</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-trapezium" name="left-trapezium" value="1"/>
                            <label for="left-trapezium">trapezium</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-scaphoid" name="left-scaphoid" value="1"/>
                            <label for="left-scaphoid">scaphoid</label><br>
                            <input type="checkbox" class="left-checkboxes" id="left-capitellum" name="left-capitellum" value="1"/>
                            <label for="left-capitellum">capitellum</label><br>
                            <button type="button" class="btn btn-primary" id="left-hand-drawing">Hand</button>

                        </div>
                    </div>
                    <u>Hand</u><br>
                    <div class="row">
                        <div class="col-10 border-left">
                            <label>phalanges</label><br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-phalanges-5" name="left-phalanges-5" value="1" type="checkbox" data-id="left-phalanges-5" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-phalanges-4" type="checkbox" name="left-phalanges-4" value="1" data-id="left-phalanges-4" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-phalanges-3" type="checkbox" name="left-phalanges-3" value="1" data-id="left-phalanges-3" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-phalanges-2" type="checkbox" name="left-phalanges-2" value="1" data-id="left-phalanges-2" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-phalanges-1" type="checkbox" name="left-phalanges-1" value="1" data-id="left-phalanges-1" onClick="selectByID()"/>

                                    </div>
                                </div>
                            </div>
                            <label>metacarpals</label><br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-metacarpals-5" type="checkbox" name="left-metacarpals-5" value="1" data-id="left-metacarpals-5" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-metacarpals-4" type="checkbox" name="left-metacarpals-4" value="1" data-id="left-metacarpals-4" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-metacarpals-3" type="checkbox" name="left-metacarpals-3" value="1" data-id="left-metacarpals-3" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-metacarpals-2" type="checkbox" name="left-metacarpals-2" value="1" data-id="left-metacarpals-2" onClick="selectByID()"/>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="left-checkboxes" id="left-metacarpals-1" type="checkbox" name="left-metacarpals-1" value="1" data-id="left-metacarpals-1" onClick="selectByID()"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Surgical Procedure Modal -->
    <div class="modal fade" id="surgicalModal" tabindex="-1" role="dialog" aria-labelledby="surgicalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="surgicalModalLabel">Add Surgical Procedures</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row surgery-top">
                        <div class="col-md-3 form-floating">                    
                            <input class="form-control" style="pointer-events: auto;" type="text" id="surgery-date" name="surgery-date" placeholder="Surgery Date"/>
                            <label for="surgery-date">Surgery Date </label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input class="form-control" style="pointer-events: auto;" type="text" id="surgeon" name="surgeon" placeholder="Attending Surgeon"/>
                            <label for="surgeon">Attending Surgeon </label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input class="form-control" style="pointer-events: auto;" type="text" id="age" name="age" placeholder="Age"/>
                            <label for="age">Age </label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input class="form-control" style="pointer-events: auto;" type="text" id="cpt-code" name="cpt-code" placeholder="cpt Code"/>
                            <label for="cpt-code">CPT Code </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 left-modal-stuff input-group">
                            <select class="selectpicker" id="surgery-name" name="surgery-name" data-none-selected-text="Surgery Name" multiple data-live-search="true" data-live-search-placeholder="Search"></select>
<!--                             <span class="input-group-text">Surgery Name</span> -->
<!--                             <textarea id="surgery-name" name="surgery-name" class="form-control" aria-label="Surgery Name"></textarea> -->
                        </div>
                        <div class="col-md-9 right-modal-stuff input-group">
                            <span class="input-group-text">Notes</span>
                            <textarea id="surgery-notes" name="surgery-notes" class="form-control" aria-label="Notes"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="delete-surgery" style="display:none" type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="add-surgery-submit" type="button" class="btn btn-primary" data-update-id="" onclick="addSurgery(this)">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!--Classification Model-->
    <div class="modal fade" id="classificationModal" tabindex="-1" role="dialog" aria-labelledby="classificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="classificationModalLabel">Add Classification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-3 form-floating">
                            <input class="form-control" type="text" style="pointer-events: auto;" name="classificationModalName" id="classificationModalName" placeholder="Name" />
                            <label for="classificationModalName">Name</label>
                        </div>
                        <div class="col-sm-12 mb-3 form-floating">
                            <input class="form-control" type="text" style="pointer-events: auto;" name="classificationModalCode" id="classificationModalCode" placeholder="Code" />
                            <label for="classificationModalCode">Code</label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="add_classification();">Add Classification</button>
                </div>
            </div>
        </div>
    </div>

    <!--Lower right Foot Image Modal-->
    <div class="modal fade" id="lower-right-foot-modal" tabindex="-1" role="dialog" aria-labelledby="lower-right-foot-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lower-right-foot-label">Interactive Foot Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="container">
                        <img id="footImage" src="/img/footImage.jpg"/>
                        <input type="checkbox" id="modal-lower-right-phalanges-1" value=1 onClick="selectByID()" data-id="lower-right-phalanges-1">
                        <input type="checkbox" id="modal-lower-right-phalanges-2" value=1 onClick="selectByID()" data-id="lower-right-phalanges-2">
                        <input type="checkbox" id="modal-lower-right-phalanges-3" value=1 onClick="selectByID()" data-id="lower-right-phalanges-3">
                        <input type="checkbox" id="modal-lower-right-phalanges-4" value=1 onClick="selectByID()" data-id="lower-right-phalanges-4">
                        <input type="checkbox" id="modal-lower-right-phalanges-5" value=1 onClick="selectByID()" data-id="lower-right-phalanges-5">

                        <input type="checkbox" id="modal-lower-right-metatarsals-1" value=1 onClick="selectByID()" data-id="lower-right-metatarsals-1">
                        <input type="checkbox" id="modal-lower-right-metatarsals-2" value=1 onClick="selectByID()" data-id="lower-right-metatarsals-2">
                        <input type="checkbox" id="modal-lower-right-metatarsals-3" value=1 onClick="selectByID()" data-id="lower-right-metatarsals-3">
                        <input type="checkbox" id="modal-lower-right-metatarsals-4" value=1 onClick="selectByID()" data-id="lower-right-metatarsals-4">
                        <input type="checkbox" id="modal-lower-right-metatarsals-5" value=1 onClick="selectByID()" data-id="lower-right-metatarsals-5">

                        <input type="checkbox" id="modal-lower-right-cuneiform-med" value=1 onClick="selectByID()" data-id="lower-right-cuneiform-med">
                        <input type="checkbox" id="modal-lower-right-cuneiform-intermed" value=1 onClick="selectByID()" data-id= "lower-right-cuneiform-intermed">
                        <input type="checkbox" id="modal-lower-right-cuneiform-lat" value=1 onClick="selectByID()" data-id= "lower-right-cuneiform-lat">

                        <input type="checkbox" id="modal-lower-right-calcaneus" value=1 onClick="selectByID()" data-id="lower-right-calcaneus">         
                        <input type="checkbox" id="modal-lower-right-talus" value=1 onClick="selectByID()" data-id="lower-right-talus">      
                        <input type="checkbox" id="modal-lower-right-navicular" value=1 onClick="selectByID()" data-id="lower-right-navicular">       
                        <input type="checkbox" id="modal-lower-right-cuboid" value=1 onClick="selectByID()" data-id="lower-right-cuboid">
                    </div>
                </div>
            </div>
        </div>
    </div>  


    <!--Lower Left Foot Image Modal-->
    <div class="modal fade" id="lower-left-foot-modal" tabindex="-1" role="dialog" aria-labelledby="lower-left-foot-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lower-left-foot-label">Interactive Foot Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class ="container">
                        <img id="footImage" src="/img/footImage.jpg"/>
                        <input type="checkbox" id="modal-lower-left-phalanges-1" value=1 onClick="selectByID()" data-id="lower-left-phalanges-1">
                        <input type="checkbox" id="modal-lower-left-phalanges-2" value=1 onClick="selectByID()" data-id="lower-left-phalanges-2">
                        <input type="checkbox" id="modal-lower-left-phalanges-3" value=1 onClick="selectByID()" data-id="lower-left-phalanges-3">
                        <input type="checkbox" id="modal-lower-left-phalanges-4" value=1 onClick="selectByID()" data-id="lower-left-phalanges-4">
                        <input type="checkbox" id="modal-lower-left-phalanges-5" value=1 onClick="selectByID()" data-id="lower-left-phalanges-5">

                        <input type="checkbox" id="modal-lower-left-metatarsals-1" value=1 onClick="selectByID()" data-id="lower-left-metatarsals-1">
                        <input type="checkbox" id="modal-lower-left-metatarsals-2" value=1 onClick="selectByID()" data-id="lower-left-metatarsals-2">
                        <input type="checkbox" id="modal-lower-left-metatarsals-3" value=1 onClick="selectByID()" data-id="lower-left-metatarsals-3">
                        <input type="checkbox" id="modal-lower-left-metatarsals-4" value=1 onClick="selectByID()" data-id="lower-left-metatarsals-4">
                        <input type="checkbox" id="modal-lower-left-metatarsals-5" value=1 onClick="selectByID()" data-id="lower-left-metatarsals-5">

                        <input type="checkbox" id="modal-lower-left-cuneiform-med" value=1 onClick="selectByID()" data-id="lower-left-cuneiform-med">
                        <input type="checkbox" id="modal-lower-left-cuneiform-intermed" value=1 onClick="selectByID()" data-id="lower-left-cuneiform-intermed">
                        <input type="checkbox" id="modal-lower-left-cuneiform-lat" value=1 onClick="selectByID()" data-id="lower-left-cuneiform-lat">

                        <input type="checkbox" id="modal-lower-left-calcaneus" value=1 onClick="selectByID()" data-id="lower-left-calcaneus">         
                        <input type="checkbox" id="modal-lower-left-talus" value=1 onClick="selectByID()" data-id="lower-left-talus">      
                        <input type="checkbox" id="modal-lower-left-navicular" value=1 onClick="selectByID()" data-id="lower-left-navicular">       
                        <input type="checkbox" id="modal-lower-left-cuboid" value=1 data-id="lower-left-cuboid" onClick="selectByID()">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var surgery_side = null;
        
        function showSurgicalModal() {
            $('#add-surgery-submit').html('Add');
            $('#delete-surgery').css('display', 'none');
            $('#surgicalModal').modal('show');
        }

        function clear_surgical_form() {
            $('#surgicalModal #surgery-name').val('');
            $('#surgicalModal #surgery-date').val('');
            $('#surgicalModal #surgeon').val('');
            $('#surgicalModal #age').val('');
            $('#surgicalModal #surgery-notes').val('');
            $('#surgicalModal #cpt-code').val('');
        }

        function fill_surgical_form(selected_json) {
            if (selected_json !== null) {
                let ux_date = new Date(selected_json["surg-date"]);
                let surg_date = ux_date.toLocaleDateString("en-US");
                
                $('#surgicalModal #surgery-name').val(selected_json["surg-name"]);
                $('#surgicalModal #surgery-date').val(surg_date);
                $('#surgicalModal #surgeon').val(selected_json["surgeon"]);
                $('#surgicalModal #age').val(selected_json["age"]);
                $('#surgicalModal #surgery-notes').val(selected_json["notes"]);   
            }
        }

        function addSurgery(el){
            let sub_button = $(el);
            // if (sub_button.attr('data-update-id') == ''){
                // if ($('#'+surgery_side+'-surgery-list').css('display') == 'none'){
                //     $('#'+surgery_side+'-surgery-list').css('display', '');
                // }
            let surg_date = $('#surgicalModal #surgery-date').val();
            if (surg_date == "") {
                showError("Date cannot be blank.");
                return false;
            }
//             surg_date = Date.parse(surg_date);
             if (isNaN(Date.parse(surg_date))){
                 showError("Cannot parse date.");
                 return false;
             }
            let surgeon = $('#surgicalModal #surgeon').val();
            if (surgeon == "") {
                showError("Attending surgeon cannot be blank.");
                return false;
            }
            let age = $('#surgicalModal #age').val();
            if (age == ""){
                showError("Age cannot be blank.");
                return false;
            }
            if(isNaN(age)){
                showError("Age must be a number.");
                return false;
            }
            let cpt_code = $('#surgicalModal #cpt-code').val();
            if (cpt_code == ""){
                showError("cpt code cannot be blank.");
                return false;
            }
            let surg_name = $('#surgicalModal #surgery-name').val();
            if (surg_name == "") {
                showError("Surgery name cannot be blank.");
                return false;
            }
            let notes = $('#surgicalModal #surgery-notes').val();

            let surgery_info = {
                "surg-name": surg_name,
                "surg-date": surg_date,
                "surgeon": surgeon,
                "age": age,
                "notes": notes,
                "cpt": cpt_code
            }
            let encoded_surg = JSON.stringify(surgery_info);
            //base64 encode json obj
            //let encoded_surg = btoa(JSON.stringify(surgery_info));
            // $('#'+surgery_side+'-surgery-list').append("<li id='"+surgery_side+"-surgery-"+surgery_counter+"' data-value="+ encoded_surg +">"+ surg_name +"</li>");
            $('#'+surgery_side+'-surgeries').append("<option id='"+surgery_side+"-surgery-"+surg_name+"' value="+ encoded_surg +">"+ surg_name +"</option>");
            $('#'+surgery_side+'-surgeries').selectpicker('refresh');
            $('#surgicalModal').modal('hide');
            showSuccess("Added Surgery to List");
//             $.ajax({
//                 url : '/new-entry/add-surgery',
//                 type : 'POST',
//                 data : 'surg-name='+surg_name+'&surg-date='+surg_date+'&surgeon='+surgeon+'&age='+age+'&notes='+notes+'&cpt='+cpt_code,
//
//                 success : function(data) {
//                     console.log('Data: '+JSON.stringify(data));
//                 },
//                 error : function(request,error)
//                 {
//                     console.log("Request: "+JSON.stringify(request));
//                 }
//             });
            // } else {
            //     let target_li = sub_button.attr('data-update-id');
            //     let surg_name = $('#surgicalModal #surgery-name').val();
            //     if (surg_name == "") {
            //         showError("Surgery name cannot be blank.");
            //         return false;
            //     }
            //     let surg_date = $('#surgicalModal #surgery-date').val();
            //     if (surg_date == "") {
            //         showError("Date cannot be blank.");
            //         return false;
            //     }
            //     surg_date = Date.parse(surg_date);
            //     if (isNaN(surg_date)){
            //         showError("Cannot parse date.");
            //         return false;
            //     }
            //     let surgeon = $('#surgicalModal #surgeon').val();
            //     if (surgeon == "") {
            //         showError("Attending surgeon cannot be blank.");
            //         return false;
            //     }
            //     let age = $('#surgicalModal #age').val();
            //     if (age == ""){
            //         showError("Age cannot be blank.");
            //         return false;
            //     }
            //     if(isNaN(age)){
            //         showError("Age must be a number.");
            //         return false;
            //     }
            //     let notes = $('#surgicalModal #surgery-notes').val();

            //     let surgery_info = {
            //         "surg-name": surg_name,
            //         "surg-date": surg_date,
            //         "surgeon": surgeon,
            //         "age": age,
            //         "notes": notes
            //     }
            //     //base64 encode json obj
            //     let encoded_surg = btoa(JSON.stringify(surgery_info));
            //     $('#'+target_li).attr('data-value', encoded_surg);
            //     $('#'+target_li).html(surg_name);
            //     $('#surgicalModal').modal('hide');
            //     showSuccess("Updated Surgery");
            // }
        }

        $(document).ready(function() {
            $.ajax({
                url : '/new-entry/fill-dropdown',
                type : 'GET',

                success : function(data) {
                    data['data'].forEach(function(currentValue, index, arr){

                        if (currentValue['location'] == "LL") {
                            $('#lower-left-classification').append("<option value='"+currentValue['code_id']+"'>"+ currentValue['class_name'] +"</option>");
                            $('#lower-left-classification').selectpicker('refresh');
                        }
                        else if (currentValue['location'] == "LR") {
                            $('#lower-right-classification').append("<option value='"+currentValue['code_id']+"'>"+ currentValue['class_name'] +"</option>");
                            $('#lower-right-classification').selectpicker('refresh');
                        }
                        else if (currentValue['location'] == "UL") {
                            $('#left-classification').append("<option value='"+currentValue['code_id']+"'>"+ currentValue['class_name'] +"</option>");
                            $('#left-classification').selectpicker('refresh');
                        }
                        else if (currentValue['location'] == "UR") {
                            $('#right-classification').append("<option value='"+currentValue['code_id']+"'>"+ currentValue['class_name'] +"</option>");
                            $('#right-classification').selectpicker('refresh');
                        }

                    });
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request));
                }
            });
        });

        var checkedRightToggle = 0;

        function fillRightCheckboxes() {
            var clist=document.getElementsByClassName("right-checkboxes");
            if (checkedRightToggle == 0) {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = true;
                }
                checkedRightToggle = 1;
            }
            else {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = false;
                }
                checkedRightToggle = 0;
            }
        }

        var checkedLeftToggle = 0;

        function fillLeftCheckboxes() {
            var clist=document.getElementsByClassName("left-checkboxes");
            if (checkedLeftToggle == 0) {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = true;
                }
                checkedLeftToggle = 1;
            }
            else {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = false;
                }
                checkedLeftToggle = 0;
            }
        }

        var checkedLowerRightToggle = 0;

        function fillLowerRightCheckboxes() {
            var clist=document.getElementsByClassName("lower-right-checkboxes");
            if (checkedLowerRightToggle == 0) {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = true;
                }
                checkedLowerRightToggle = 1;
            }
            else {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = false;
                }
                checkedLowerRightToggle = 0;
            }
        }

        var checkedLowerLeftToggle = 0;

        function fillLowerLeftCheckboxes() {
            var clist=document.getElementsByClassName("lower-left-checkboxes");
            if (checkedLowerLeftToggle == 0) {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = true;
                }
                checkedLowerLeftToggle = 1;
            }
            else {
                for (var i = 0; i < clist.length; ++i) {
                    clist[i].checked = false;
                }
                checkedLowerLeftToggle = 0;
            }
        }

        var current_location;
        function get_location(clicked_id) {
            if(clicked_id=="lower-right-classification-add") {
                current_location = "LR";
            }
            else if(clicked_id=="lower-left-classification-add") {
                current_location = "LL";
            }
            else if(clicked_id=="right-classification-add") {
                current_location = "UR";
            }
            else if(clicked_id=="left-classification-add") {
                current_location = "UL";
            }
        }

        function selectByID() {
            let val = event.srcElement.dataset.id;
            let allInputs = document.querySelectorAll("input[type=checkbox]");
            for(let x=0; x<allInputs.length; x++){
                if(allInputs[x].dataset.id == val){
                    if(allInputs[x].id != event.srcElement.id){
                        if(event.srcElement.checked){
                            allInputs[x].checked = true;
                        }
                        else{
                            allInputs[x].checked = false;
                        }
                    }
                }   
            }
        }


        // jQuery Below
        var classificationId;

        function add_classification() {
            let name = $('#classificationModalName').val();
            if (name == "") {
                showError("Classification name cannot be blank.");
                return false;
            }
            let code = $('#classificationModalCode').val();
            if (code == "") {
                showError("Classification code cannot be blank.");
                return false;
            }

            dropdown = classificationId.slice(0, -4);
            select = document.getElementById(dropdown);
            select.add(new Option(name));
            $(select).selectpicker('refresh');
            $('#classificationModal').modal('hide');
            showSuccess("Added Classification to List");
            let location = current_location;
            $.ajax({
                url : '/new-entry/add-classification',
                type : 'POST',
                data : 'name='+name+'&code='+code+'&location='+location,

                success : function(data) {
                    console.log('Data: '+JSON.stringify(data));
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request));
                }
            });
        }

        function isChecked(element){
            if(element.checked = true)
                return true;
            else    
                return false;
        }

        // jQuery Below

        $('#lower-right-classification-add, #lower-left-classification-add, #right-classification-add, #left-classification-add').click(function() {
            classificationId = $(this).attr('id');
        });

        $("#surgicalModal").on('hidden.bs.modal', function() {
            clear_surgical_form();
            $('#add-surgery-submit').attr('data-update-id', '');
        });

        $('#lower-right-surgical-pro, #lower-left-surgical-pro, #upper-right-surgical-pro, #upper-left-surgical-pro').click(function(){
            showSurgicalModal();
            const tempArr = this.id.split('-');
            surgery_side = tempArr.slice(0, 2).join('-');
        });

        // clear everything on page either upper or lower
        $('#clear-selections').click(function(){
            if(confirm("Are you sure you want to clear the form?")) {
                $('#extremity-form').trigger('reset');
                $('#lower-right-surgery-list, #lower-left-surgery-list').empty();
                $('#lower-right-surgery-list, #lower-left-surgery-list').css("display","none");
            }
        });

        $('#delete-surgery').click(function (){
            if(confirm('Are you sure you want to delete this surgery?')){
                let id_delete = $('#add-surgery-submit').attr('data-update-id');
                $('#'+id_delete).remove();
                if ($('#'+surgery_side+'-surgery-list li').length == 0){
                    $('#'+surgery_side+'-surgery-list').css('display', 'none') 
                }
                $('#surgicalModal').modal('hide');
            }
        });

        $('#lower-right-surgery-list').on('click', 'li', function(){
            const tempArr = this.parentNode.id.split('-');
            surgery_side = tempArr.slice(0, 2).join('-');

            surgery_info = JSON.parse(atob(this.dataset.value));
            $('#add-surgery-submit').attr('data-update-id', this.id);
            $('#add-surgery-submit').html('Update');
            $('#delete-surgery').css('display', '');
            fill_surgical_form(surgery_info);
            $('#surgicalModal').modal('show');
        });

        $('#lower-left-surgery-list').on('click', 'li', function(){
            const tempArr = this.parentNode.id.split('-');
            surgery_side = tempArr.slice(0, 2).join('-');
            
            surgery_info = JSON.parse(atob(this.dataset.value));
            $('#add-surgery-submit').attr('data-update-id', this.id);
            $('#add-surgery-submit').html('Update');
            $('#delete-surgery').css('display', '');
            fill_surgical_form(surgery_info);
            $('#surgicalModal').modal('show');
        });

//         $('#upper-right-surgery-list').on('click', 'li', function(){
//             const tempArr = this.parentNode.id.split('-');
//             surgery_side = tempArr.slice(0, 2).join('-');
//
//             surgery_info = JSON.parse(atob(this.dataset.value));
//             $('#add-surgery-submit').attr('data-update-id', this.id);
//             $('#add-surgery-submit').html('Update');
//             $('#delete-surgery').css('display', '');
//             fill_surgical_form(surgery_info);
//             $('#surgicalModal').modal('show');
//         });
//
//         $('#upper-left-surgery-list').on('click', 'li', function(){
//             const tempArr = this.parentNode.id.split('-');
//             surgery_side = tempArr.slice(0, 2).join('-');
//
//             surgery_info = JSON.parse(atob(this.dataset.value));
//             $('#add-surgery-submit').attr('data-update-id', this.id);
//             $('#add-surgery-submit').html('Update');
//             $('#delete-surgery').css('display', '');
//             fill_surgical_form(surgery_info);
//             $('#surgicalModal').modal('show');
//         });

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

        $('#lower-right-tumor, #lower-right-trauma, #lower-left-tumor, #lower-left-trauma, #right-tumor, #right-trauma, #left-tumor, #left-trauma').on('change', function() {
            var elem = $(this).attr('id');
            if($(this).is(':checked')) {
                $('#'+elem+'-date').prop('disabled', false);
            } else {
                $('#'+elem+'-date').prop('disabled', true);
                $('#'+elem+'-date').val('');
            }
        });

        $('#extremity-form').submit(function(){

            if(confirm("Are you sure you want to submit entry?")) {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() === input.attr('placeholder')) {
                        event.preventDefault();
                        input.val('');
                    }
                });

                let the_entry = $('#extremity-form :input').serializeArray();
                let temp_entry = the_entry.filter(function(v) {
                    return v['value'] !== "";
                });

                let filtered_entry = temp_entry.filter(function(v) {
                    return v['name'] !== "lower-left-classification" && v['name'] !== "lower-right-classification" && v['name'] !== "left-classification" && v['name'] !== "right-classification" && v['name'] !== "lower-right-surgeries" && v['name'] !== "lower-left-surgeries";
                });
                let left_class = $('#left-classification').val();
                let right_class = $('#right-classification').val();
                let lower_left_class = $('#lower-left-classification').val();
                let lower_right_class = $('#lower-right-classification').val();

                let lower_right_surgeries = $('#lower-right-surgeries').val();
                let lower_left_surgeries = $('#lower-left-surgeries').val();

                filtered_entry.push({
                    name:   "left-classification",
                    value: left_class
                });
                filtered_entry.push({
                    name:   "right-classification",
                    value: right_class
                });
                filtered_entry.push({
                    name:   "lower-left-classification",
                    value: lower_left_class
                });
                filtered_entry.push({
                    name:   "lower-right-classification",
                    value: lower_right_class
                });
                filtered_entry.push({
                    name:   "lower-right-surgeries",
                    value: lower_right_surgeries
                });
                filtered_entry.push({
                    name:   "lower-left-surgeries",
                    value: lower_left_surgeries
                });

//                 filtered_entry['left-classification'] = left_class;
//                 filtered_entry['right-classification'] = right_class;
//                 filtered_entry['lower-left-classification'] = lower_left_class;
//                 filtered_entry['lower-right-classification'] = lower_right_class;

                console.log(filtered_entry);

                $.ajax({
                    url : '/new-entry/add-entry',
                    type : 'POST',
                    data : filtered_entry,

                    success : function(data) {
                        console.log('Data: '+JSON.stringify(data));
                    },
                    error : function(request,error)
                    {
                        console.log("Request: "+JSON.stringify(request));
                    }
                });
            }
        });

        // Right foot options
        $('#lower-right-birch-anchor').click(function() {
            if ($('#lower-right-birch').hasClass('visible')) {
                $('#lower-right-birch').removeClass('visible');
                $('#lower-right-birch .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-birch').addClass('visible');
                $('#lower-right-birch .items').addClass('high-z-index');
            }
        });
        $('#lower-right-jones-anchor').click(function() {
            if ($('#lower-right-jones').hasClass('visible')) {
                $('#lower-right-jones').removeClass('visible');
                $('#lower-right-jones .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-jones').addClass('visible');
                $('#lower-right-jones .items').addClass('high-z-index');
            }
        });
        $('#lower-right-aitken-anchor').click(function() {
            if ($('#lower-right-aitken').hasClass('visible')){
                $('#lower-right-aitken').removeClass('visible');
                $('#lower-right-aitken .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-aitken').addClass('visible');
                $('#lower-right-aitken .items').addClass('high-z-index');
            }
        });
        $('#lower-right-AK-anchor').click(function() {
            if ($('#lower-right-AK').hasClass('visible')){
                $('#lower-right-AK').removeClass('visible');
                $('#lower-right-AK .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-AK').addClass('visible');
                $('#lower-right-AK .items').addClass('high-z-index');
            }
        });
        $('#lower-right-paley-tibia-anchor').click(function() {
            if ($('#lower-right-paley-tibia').hasClass('visible')) {
                $('#lower-right-paley-tibia').removeClass('visible');
                $('#lower-right-paley-tibia .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-paley-tibia').addClass('visible');
                $('#lower-right-paley-tibia .items').addClass('high-z-index');
            }
        });
        $('#lower-right-paley-femur-anchor').click(function() {
            if ($('#lower-right-paley-femur').hasClass('visible')) {
                $('#lower-right-paley-femur').removeClass('visible');
                $('#lower-right-paley-femur .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-paley-femur').addClass('visible');
                $('#lower-right-paley-femur .items').addClass('high-z-index');
            }
        });
        $('#lower-right-paley-fibula-anchor').click(function() {
            if ($('#lower-right-paley-fibula').hasClass('visible')) {
                $('#lower-right-paley-fibula').removeClass('visible');
                $('#lower-right-paley-fibula .items').removeClass('high-z-index');
            }
            else {
                $('#lower-right-paley-fibula').addClass('visible');
                $('#lower-right-paley-fibula .items').addClass('high-z-index');
            }
        });

        // lower-left foot options
        $('#lower-left-birch-anchor').click(function() {
            if ($('#lower-left-birch').hasClass('visible')) {
                $('#lower-left-birch').removeClass('visible');
                $('#lower-left-birch .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-birch').addClass('visible');
                $('#lower-left-birch .items').addClass('high-z-index');
            }
        });
        $('#lower-left-jones-anchor').click(function() {
            if ($('#lower-left-jones').hasClass('visible')) {
                $('#lower-left-jones').removeClass('visible');
                $('#lower-left-jones .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-jones').addClass('visible');
                $('#lower-left-jones .items').addClass('high-z-index');
            }
        });
        $('#lower-left-aitken-anchor').click(function() {
            if ($('#lower-left-aitken').hasClass('visible')){
                $('#lower-left-aitken').removeClass('visible');
                $('#lower-left-aitken .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-aitken').addClass('visible');
                $('#lower-left-aitken .items').addClass('high-z-index');
            }
        });
        $('#lower-left-AK-anchor').click(function() {
            if ($('#lower-left-AK').hasClass('visible')){
                $('#lower-left-AK').removeClass('visible');
                $('#lower-left-AK .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-AK').addClass('visible');
                $('#lower-left-AK .items').addClass('high-z-index');
            }
        });
        $('#lower-left-paley-tibia-anchor').click(function() {
            if ($('#lower-left-paley-tibia').hasClass('visible')) {
                $('#lower-left-paley-tibia').removeClass('visible');
                $('#lower-left-paley-tibia .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-paley-tibia').addClass('visible');
                $('#lower-left-paley-tibia .items').addClass('high-z-index');
            }
        });
        $('#lower-left-paley-femur-anchor').click(function() {
            if ($('#lower-left-paley-femur').hasClass('visible')) {
                $('#lower-left-paley-femur').removeClass('visible');
                $('#lower-left-paley-femur .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-paley-femur').addClass('visible');
                $('#lower-left-paley-femur .items').addClass('high-z-index');
            }
        });
        $('#lower-left-paley-fibula-anchor').click(function() {
            if ($('#lower-left-paley-fibula').hasClass('visible')) {
                $('#lower-left-paley-fibula').removeClass('visible');
                $('#lower-left-paley-fibula .items').removeClass('high-z-index');
            }
            else {
                $('#lower-left-paley-fibula').addClass('visible');
                $('#lower-left-paley-fibula .items').addClass('high-z-index');
            }
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';