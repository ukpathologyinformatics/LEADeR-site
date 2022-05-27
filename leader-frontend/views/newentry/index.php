<?php
/** @var UserSession $userSession */
$page = 'new-entry';
include_once __DIR__ . '/../_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">New Entry</h1>
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
                <input id="dob" type="text" placeholder="mm/dd/yyyy">
                <label for="dob">Date of Birth</label>
            </div>
            <div class="col-md">
                <input id="start-date" type="text" placeholder="mm/dd/yyyy">    
                <label for="start-date">First Recorded</label>
            </div>
            <div class="col-md">
                <input id="end-date" type="text" placeholder="mm/dd/yyyy">    
                <label for="end-date">Last Recorded</label>
            </div>
        </div>

        <!-- Buttons to select which page to see -->
        <div class="lower-upper-buttons">
            <button id="lower-extremity-btn" class="active btn btn-sm btn-secondary my-2 my-sm-0 ml-2">LOWER EXTREMITY</button>
            <button id="upper-extremity-btn" class="btn btn-sm btn-secondary my-2 my-sm-0 ml-2">UPPER EXTREMITY</button>
            <button id="clear-selections" class="btn btn-sm btn-primary my-2 my-sm-0 ml-2 float-right">Clear</button>
            <button id="submit-entry" class="btn btn-sm btn-primary my-2 my-sm-0 ml-2 float-right">Add Entry</button>
        </div>

        <form id="lower-extremity-form" action="/new-entry/add-lower-entry" method="post">
            <div id="lower-extremity-section" class="row">
                <div class="col-md-6 right-sect">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Right</strong></h4><br>
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
                            <textarea id="right-notes" name="right-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>
                            <textarea id="right-surgical-pro" name="right-surgical-pro" placeholder="Surgical Procedures" rows="2" cols="25"></textarea>
                            <input id="right-surgical-pro-date" type="text" placeholder="mm/dd/yyyy"><br>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="right-birch" class="dropdown-check-list" tabindex="100">
                                        <span id="right-birch-anchor" class="anchor">Birch</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="right-birch-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="right-birch-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-birch-1B"> 1B</li>
                                            <li>&nbsp;<input type="checkbox" value="right-birch-1C"> 1C</li>
                                            <li>&nbsp;<input type="checkbox" value="right-birch-1C"> 1D</li>
                                            <li><input type="checkbox" value="right-birch-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="right-birch-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-birch-2B"> 2B</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="right-jones" class="dropdown-check-list" tabindex="100">
                                        <span id="right-jones-anchor" class="anchor">Jones</span>
                                        <ul class="items">
                                        <li><input type="checkbox" value="right-jones-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="right-jones-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-jones-1B"> 1B</li>
                                            <li><input type="checkbox" value="right-jones-2"> Type 2</li>
                                            <li><input type="checkbox" value="right-jones-3"> Type 3</li>
                                            <li><input type="checkbox" value="right-jones-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="right-aitken" class="dropdown-check-list" tabindex="100">
                                        <span id="right-aitken-anchor" class="anchor">Aitken</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="right-aitken-AB"> A or B (+femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="right-aitken-A"> A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-aitken-B"> B</li>
                                            <li><input type="checkbox" value="right-aitken-CD"> C or D (no femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="right-aitken-C"> C</li>
                                            <li>&nbsp;<input type="checkbox" value="right-aitken-D"> D</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="right-AK" class="dropdown-check-list" tabindex="100">
                                        <span id="right-AK-anchor" class="anchor">A+K</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="right-AK-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="right-AK-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-AK-1B"> 1B</li>
                                            <li><input type="checkbox" value="right-AK-2"> Type 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="right-paley-tibia" class="dropdown-check-list" tabindex="100">
                                        <span id="right-paley-tibia-anchor" class="anchor">Paley Tibia</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="right-paley-tibia-1"> Type 1</li>
                                            <li><input type="checkbox" value="right-paley-tibia-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-2B"> 2B</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-2C"> 2C</li>
                                            <li><input type="checkbox" value="right-paley-tibia-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-3B"> 3B</li>
                                            <li><input type="checkbox" value="right-paley-tibia-4"> Type 4</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-4A"> 4A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-4B"> 4B</li>
                                            <li><input type="checkbox" value="right-paley-tibia-5"> Type 5</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-5A"> 5A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-5B"> 5B</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-tibia-5C"> 5C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="right-paley-femur" class="dropdown-check-list" tabindex="100">
                                        <span id="right-paley-femur-anchor" class="anchor">Paley Femur</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="right-paley-femur-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-1B"> 1B</li>
                                            <li><input type="checkbox" value="right-paley-femur-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-2B"> 2B</li>
                                            <li><input type="checkbox" value="right-paley-femur-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-3B"> 3B</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-femur-3C"> 3C</li>
                                            <li><input type="checkbox" value="right-paley-femur-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <div id="right-paley-fibula" class="dropdown-check-list" tabindex="100">
                                        <span id="right-paley-fibula-anchor" class="anchor">Paley Fibula</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="right-paley-fibula-1"> Type 1</li>
                                            <li><input type="checkbox" value="right-paley-fibula-2"> Type 2</li>
                                            <li><input type="checkbox" value="right-paley-fibula-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-fibula-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-fibula-3B1"> 3B1</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-fibula-3B2"> 3B2</li>
                                            <li>&nbsp;<input type="checkbox" value="right-paley-fibula-3C"> 3C</li>
                                            <li><input type="checkbox" value="right-paley-fibula-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- col-md-6 -->
                <div class="col-md-6 left-sect">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Left</strong></h4><br>
                            <input type="checkbox" id="left-longitudinal" name="left-longitudinal" value="left-longitudinal">
                            <label for="left-longitudinal">longitudinal</label><br>
                            <input type="checkbox" id="left-transverse" name="left-transverse" value="left-transverse">
                            <label for="left-transverse">transverse</label><br>
                            <input type="checkbox" id="left-ears" name="left-ears" value="left-ears">
                            <label for="left-ears">EARS</label><br>
                            <input type="checkbox" id="left-congenital" name="left-congenital" value="left-congenital">
                            <label for="left-congenital">congenital</label><br>
                            <input type="checkbox" id="left-acquired" name="left-acquired" value="left-acquired">
                            <label for="left-acquired">acquired</label>
                            <input id="left-acquired-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <input type="checkbox" id="left-tumor" name="left-tumor" value="left-tumor">
                            <label for="left-tumor">tumor</label>
                            <input id="left-tumor-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <input type="checkbox" id="left-trauma" name="left-trauma" value="left-trauma">
                            <label for="left-trauma">trauma</label>
                            <input id="left-trauma-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="left-burn" name="left-burn" value="left-burn">
                                    <label for="left-burn">burn</label><br>
                                    <input type="checkbox" id="left-infection" name="left-infection" value="left-infection">
                                    <label for="left-infection">infection</label><br>
                                    <input type="checkbox" id="left-lawnmower" name="left-lawnmower" value="left-lawnmower">
                                    <label for="left-lawnmower">lawnmower</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="left-mvc" name="left-mvc" value="left-mvc">
                                    <label for="left-mvc">MVC</label><br>
                                    <input type="checkbox" id="left-recreational" name="left-recreational" value="left-recreational">
                                    <label for="left-recreational">recreational</label><br>
                                    <input type="checkbox" id="left-vascular" name="left-vascular" value="left-vascular">
                                    <label for="left-vascular">vascular</label><br>
                                </div>
                            </div>
                            <input id="left-other" type="text" placeholder="Other"><br><br>
                            <textarea id="left-classification" name="left-classification" placeholder="Classification" rows="2" cols="25"></textarea><br>
                            <textarea id="left-notes" name="left-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>
                            <textarea id="left-surgical-pro" name="left-surgical-pro" placeholder="Surgical Procedures" rows="2" cols="25"></textarea>
                            <input id="left-surgical-pro-date" type="text" placeholder="mm/dd/yyyy"><br>
                        </div>
                        <div class="col-md-6">
                            <h5>Deformities/Missing Bones</h5><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="left-pelvis" name="left-pelvis" value="left-pelvis">
                                    <label for="left-pelvis">pelvis</label><br>
                                    <label>femur</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-femur-dist">dist.</label><br>
                                            <input type="checkbox" id="left-femur-dist" name="left-femur-dist" value="left-femur-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-femur-mid">mid.</label><br>
                                            <input type="checkbox" id="left-femur-mid" name="left-femur-mid" value="left-femur-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-femur-prox">prox.</label><br>
                                            <input type="checkbox" id="left-femur-prox" name="left-femur-prox" value="left-femur-prox">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="left-patella" name="left-patella" value="left-patella">
                                    <label for="left-patella">patella</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="left-tarsals" name="left-tarsals" value="left-tarsals">
                                    <label for="left-tarsals">tarsals</label><br>
                                    <input type="checkbox" id="left-calcaneus" name="left-calcaneus" value="left-calcaneus">
                                    <label for="left-calcaneus">calcaneus</label><br>
                                    <input type="checkbox" id="left-talus" name="left-talus" value="left-talus">
                                    <label for="left-talus">talus</label><br>
                                    <input type="checkbox" id="left-navicular" name="left-navicular" value="left-navicular">
                                    <label for="left-navicular">navicular</label><br>
                                    <input type="checkbox" id="left-cuboid" name="left-cuboid" value="left-cuboid">
                                    <label for="left-cuboid">cuboid</label><br>
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
                                            <label for="left-tibia-dist">dist.</label><br>
                                            <input type="checkbox" id="left-tibia-dist" name="left-tibia-dist" value="left-tibia-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-tibia-mid">mid.</label><br>
                                            <input type="checkbox" id="left-tibia-mid" name="left-tibia-mid" value="left-tibia-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-tibia-prox">prox.</label><br>
                                            <input type="checkbox" id="left-tibia-prox" name="left-tibia-prox" value="left-tibia-prox">
                                        </div>
                                    </div>
                                    <label>fibula</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-fibula-dist">dist.</label><br>
                                            <input type="checkbox" id="left-fibula-dist" name="left-fibula-dist" value="left-fibula-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-fibula-mid">mid.</label><br>
                                            <input type="checkbox" id="left-fibula-mid" name="left-fibula-mid" value="left-fibula-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-fibula-prox">prox.</label><br>
                                            <input type="checkbox" id="left-fibula-prox" name="left-fibula-prox" value="left-fibula-prox">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="left-foot" name="left-foot" value="left-foot">
                                    <label for="left-foot">foot</label><br>
                                </div>
                                <div class="col-md-7">
                                    <label>cuneiform</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-cuneiform-med">med.</label><br>
                                            <input type="checkbox" id="left-cuneiform-med" name="left-cuneiform-med" value="left-cuneiform-med">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="left-cuneiform-intermed">intermed.</label><br>
                                            <input type="checkbox" id="left-cuneiform-intermed" name="left-cuneiform-intermed" value="left-cuneiform-intermed">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="left-cuneiform-lat">lat.</label><br>
                                            <input type="checkbox" id="left-cuneiform-lat" name="left-cuneiform-lat" value="left-cuneiform-lat">
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
                                            <label for="left-phalanges-5">5</label><br>
                                            <input type="checkbox" id="left-phalanges-5" name="left-phalanges-5" value="left-phalanges-5">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-phalanges-4">4</label><br>
                                            <input type="checkbox" id="left-phalanges-4" name="left-phalanges-4" value="left-phalanges-4">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-phalanges-3">3</label><br>
                                            <input type="checkbox" id="left-phalanges-3" name="left-phalanges-3" value="left-phalanges-3">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-phalanges-2">2</label><br>
                                            <input type="checkbox" id="left-phalanges-2" name="left-phalanges-2" value="left-phalanges-2">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-phalanges-1">1</label><br>
                                            <input type="checkbox" id="left-phalanges-1" name="left-phalanges-1" value="left-phalanges-1">
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
                                            <label for="left-metatarsals-5">5</label><br>
                                            <input type="checkbox" id="left-metatarsals-5" name="left-metatarsals-5" value="left-metatarsals-5">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-metatarsals-4">4</label><br>
                                            <input type="checkbox" id="left-metatarsals-4" name="left-metatarsals-4" value="left-metatarsals-4">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-metatarsals-3">3</label><br>
                                            <input type="checkbox" id="left-metatarsals-3" name="left-metatarsals-3" value="left-metatarsals-3">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-metatarsals-2">2</label><br>
                                            <input type="checkbox" id="left-metatarsals-2" name="left-metatarsals-2" value="left-metatarsals-2">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="left-metatarsals-1">1</label><br>
                                            <input type="checkbox" id="left-metatarsals-1" name="left-metatarsals-1" value="left-metatarsals-1">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <h6>Foot:</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="left-birch" class="dropdown-check-list" tabindex="100">
                                        <span id="left-birch-anchor" class="anchor">Birch</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-birch-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="left-birch-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-birch-1B"> 1B</li>
                                            <li>&nbsp;<input type="checkbox" value="left-birch-1C"> 1C</li>
                                            <li>&nbsp;<input type="checkbox" value="left-birch-1C"> 1D</li>
                                            <li><input type="checkbox" value="left-birch-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="left-birch-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-birch-2B"> 2B</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="left-jones" class="dropdown-check-list" tabindex="100">
                                        <span id="left-jones-anchor" class="anchor">Jones</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-jones-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="left-jones-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-jones-1B"> 1B</li>
                                            <li><input type="checkbox" value="left-jones-2"> Type 2</li>
                                            <li><input type="checkbox" value="left-jones-3"> Type 3</li>
                                            <li><input type="checkbox" value="left-jones-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="left-aitken" class="dropdown-check-list" tabindex="100">
                                        <span id="left-aitken-anchor" class="anchor">Aitken</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-aitken-AB"> A or B (+femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="left-aitken-A"> A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-aitken-B"> B</li>
                                            <li><input type="checkbox" value="left-aitken-CD"> C or D (no femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="left-aitken-C"> C</li>
                                            <li>&nbsp;<input type="checkbox" value="left-aitken-D"> D</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="left-AK" class="dropdown-check-list" tabindex="100">
                                        <span id="left-AK-anchor" class="anchor">A+K</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-AK-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="left-AK-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-AK-1B"> 1B</li>
                                            <li><input type="checkbox" value="left-AK-2"> Type 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="left-paley-tibia" class="dropdown-check-list" tabindex="100">
                                        <span id="left-paley-tibia-anchor" class="anchor">Paley Tibia</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-paley-tibia-1"> Type 1</li>
                                            <li><input type="checkbox" value="left-paley-tibia-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-2B"> 2B</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-2C"> 2C</li>
                                            <li><input type="checkbox" value="left-paley-tibia-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-3B"> 3B</li>
                                            <li><input type="checkbox" value="left-paley-tibia-4"> Type 4</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-4A"> 4A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-4B"> 4B</li>
                                            <li><input type="checkbox" value="left-paley-tibia-5"> Type 5</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-5A"> 5A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-5B"> 5B</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-tibia-5C"> 5C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="left-paley-femur" class="dropdown-check-list" tabindex="100">
                                        <span id="left-paley-femur-anchor" class="anchor">Paley Femur</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-paley-femur-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-1B"> 1B</li>
                                            <li><input type="checkbox" value="left-paley-femur-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-2B"> 2B</li>
                                            <li><input type="checkbox" value="left-paley-femur-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-3B"> 3B</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-femur-3C"> 3C</li>
                                            <li><input type="checkbox" value="left-paley-femur-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <div id="left-paley-fibula" class="dropdown-check-list" tabindex="100">
                                        <span id="left-paley-fibula-anchor" class="anchor">Paley Fibula</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="left-paley-fibula-1"> Type 1</li>
                                            <li><input type="checkbox" value="left-paley-fibula-2"> Type 2</li>
                                            <li><input type="checkbox" value="left-paley-fibula-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-fibula-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-fibula-3B1"> 3B1</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-fibula-3B2"> 3B2</li>
                                            <li>&nbsp;<input type="checkbox" value="left-paley-fibula-3C"> 3C</li>
                                            <li><input type="checkbox" value="left-paley-fibula-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="other-things">
                    <h5>Other</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="UE" name="UE" value="UE">
                            <label for="UE">UE</label><br><br><br>
                            <textarea id="other-skel-probs" name="other-skel-probs" placeholder="Other Skeletal Problems" rows="2" cols="25"></textarea>
                        </div>
                        <div class="col-md-6">
                            <textarea id="other-medical-probs" name="other-medical-probs" placeholder="Other Medical Problems" rows="2" cols="25"></textarea>
                            <textarea id="family-history" name="family-history" placeholder="Family History" rows="2" cols="25"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <form id="upper-extremity-form" action="/new-entry/add-upper-entry" method="post">
            <div id="upper-extremity-section" class="row" style="display: none">
                <!-- Aaron, here are the 4 sections for the page: -->
                <div class="col-md-3">yeet</div>
                <div class="col-md-3">yeet</div>
                <div class="col-md-3">yeet</div>
                <div class="col-md-3">yeet</div>
            </div>
        </form>

        
    </section>

    <script type="text/javascript">
        // clear everything on page either upper or lower
        $('#clear-selections').click(function(){
            if(confirm("Are you sure you want to clear the form?")) {
                if ($('#upper-extremity-btn').hasClass('active')) {
                    $('#upper-extremity-form').trigger('reset');
                } else {
                    $('#lower-extremity-form').trigger('reset');
                }
            }
        });

        // submit whatever is on the screen either upper or lower
        $('#submit-entry').click(function(){
            if(confirm("Are you sure you want to submit entry?")) {
                if ($('#upper-extremity-btn').hasClass('active')) {
                    $('#upper-extremity-form').trigger('submit');
                } else {
                    $('#lower-extremity-form').trigger('submit');
                }
            }
        });

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
        
        // Right foot options
        $('#right-birch-anchor').click(function() {
            if ($('#right-birch').hasClass('visible')) {
                $('#right-birch').removeClass('visible');
                $('#right-birch .items').removeClass('high-z-index');
            }
            else {
                $('#right-birch').addClass('visible');
                $('#right-birch .items').addClass('high-z-index');
            }
        });
        $('#right-jones-anchor').click(function() {
            if ($('#right-jones').hasClass('visible')) {
                $('#right-jones').removeClass('visible');
                $('#right-jones .items').removeClass('high-z-index');
            }
            else {
                $('#right-jones').addClass('visible');
                $('#right-jones .items').addClass('high-z-index');
            }
        });
        $('#right-aitken-anchor').click(function() {
            if ($('#right-aitken').hasClass('visible')){
                $('#right-aitken').removeClass('visible');
                $('#right-aitken .items').removeClass('high-z-index');
            }
            else {
                $('#right-aitken').addClass('visible');
                $('#right-aitken .items').addClass('high-z-index');
            }
        });
        $('#right-AK-anchor').click(function() {
            if ($('#right-AK').hasClass('visible')){
                $('#right-AK').removeClass('visible');
                $('#right-AK .items').removeClass('high-z-index');
            }
            else {
                $('#right-AK').addClass('visible');
                $('#right-AK .items').addClass('high-z-index');
            }
        });
        $('#right-paley-tibia-anchor').click(function() {
            if ($('#right-paley-tibia').hasClass('visible')) {
                $('#right-paley-tibia').removeClass('visible');
                $('#right-paley-tibia .items').removeClass('high-z-index');
            }
            else {
                $('#right-paley-tibia').addClass('visible');
                $('#right-paley-tibia .items').addClass('high-z-index');
            }
        });
        $('#right-paley-femur-anchor').click(function() {
            if ($('#right-paley-femur').hasClass('visible')) {
                $('#right-paley-femur').removeClass('visible');
                $('#right-paley-femur .items').removeClass('high-z-index');
            }
            else {
                $('#right-paley-femur').addClass('visible');
                $('#right-paley-femur .items').addClass('high-z-index');
            }
        });
        $('#right-paley-fibula-anchor').click(function() {
            if ($('#right-paley-fibula').hasClass('visible')) {
                $('#right-paley-fibula').removeClass('visible');
                $('#right-paley-fibula .items').removeClass('high-z-index');
            }
            else {
                $('#right-paley-fibula').addClass('visible');
                $('#right-paley-fibula .items').addClass('high-z-index');
            }
        });

        // left foot options
        $('#left-birch-anchor').click(function() {
            if ($('#left-birch').hasClass('visible')) {
                $('#left-birch').removeClass('visible');
                $('#left-birch .items').removeClass('high-z-index');
            }
            else {
                $('#left-birch').addClass('visible');
                $('#left-birch .items').addClass('high-z-index');
            }
        });
        $('#left-jones-anchor').click(function() {
            if ($('#left-jones').hasClass('visible')) {
                $('#left-jones').removeClass('visible');
                $('#left-jones .items').removeClass('high-z-index');
            }
            else {
                $('#left-jones').addClass('visible');
                $('#left-jones .items').addClass('high-z-index');
            }
        });
        $('#left-aitken-anchor').click(function() {
            if ($('#left-aitken').hasClass('visible')){
                $('#left-aitken').removeClass('visible');
                $('#left-aitken .items').removeClass('high-z-index');
            }
            else {
                $('#left-aitken').addClass('visible');
                $('#left-aitken .items').addClass('high-z-index');
            }
        });
        $('#left-AK-anchor').click(function() {
            if ($('#left-AK').hasClass('visible')){
                $('#left-AK').removeClass('visible');
                $('#left-AK .items').removeClass('high-z-index');
            }
            else {
                $('#left-AK').addClass('visible');
                $('#left-AK .items').addClass('high-z-index');
            }
        });
        $('#left-paley-tibia-anchor').click(function() {
            if ($('#left-paley-tibia').hasClass('visible')) {
                $('#left-paley-tibia').removeClass('visible');
                $('#left-paley-tibia .items').removeClass('high-z-index');
            }
            else {
                $('#left-paley-tibia').addClass('visible');
                $('#left-paley-tibia .items').addClass('high-z-index');
            }
        });
        $('#left-paley-femur-anchor').click(function() {
            if ($('#left-paley-femur').hasClass('visible')) {
                $('#left-paley-femur').removeClass('visible');
                $('#left-paley-femur .items').removeClass('high-z-index');
            }
            else {
                $('#left-paley-femur').addClass('visible');
                $('#left-paley-femur .items').addClass('high-z-index');
            }
        });
        $('#left-paley-fibula-anchor').click(function() {
            if ($('#left-paley-fibula').hasClass('visible')) {
                $('#left-paley-fibula').removeClass('visible');
                $('#left-paley-fibula .items').removeClass('high-z-index');
            }
            else {
                $('#left-paley-fibula').addClass('visible');
                $('#left-paley-fibula .items').addClass('high-z-index');
            }
        });
    </script>
<?php
include_once __DIR__ . '/../_footer.php';