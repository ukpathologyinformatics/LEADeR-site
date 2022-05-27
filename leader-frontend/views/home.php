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
            <button id="submit-entry" class="btn btn-sm btn-primary my-2 my-sm-0 ml-2">Add Entry</button>
            <button id="clear-selections" class="btn btn-sm btn-primary my-2 my-sm-0 ml-2">Clear</button>
        </div>


        <form id="lower-extremity-form" action="/new-entry/add-lower-entry" method="post">
            <div id="lower-extremity-section" class="row">
                <div class="col-md-6 lower-right-sect">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Right</strong></h4><br>
                            <input type="checkbox" id="lower-right-longitudinal" name="lower-right-longitudinal" value="lower-right-longitudinal">
                            <label for="lower-right-longitudinal">longitudinal</label><br>
                            <input type="checkbox" id="lower-right-transverse" name="lower-right-transverse" value="lower-right-transverse">
                            <label for="lower-right-transverse">transverse</label><br>
                            <input type="checkbox" id="lower-right-ears" name="lower-right-ears" value="lower-right-ears">
                            <label for="lower-right-ears">EARS</label><br>
                            <input type="checkbox" id="lower-right-congenital" name="lower-right-congenital" value="lower-right-congenital">
                            <label for="lower-right-congenital">congenital</label><br>
                            <input type="checkbox" id="lower-right-acquired" name="lower-right-acquired" value="lower-right-acquired">
                            <label for="lower-right-acquired">acquired</label>
                            <input id="lower-right-acquired-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <input type="checkbox" id="lower-right-tumor" name="lower-right-tumor" value="lower-right-tumor">
                            <label for="lower-right-tumor">tumor</label>
                            <input id="lower-right-tumor-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <input type="checkbox" id="lower-right-trauma" name="lower-right-trauma" value="lower-right-trauma">
                            <label for="lower-right-trauma">trauma</label>
                            <input id="lower-right-trauma-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-burn" name="lower-right-burn" value="lower-right-burn">
                                    <label for="lower-right-burn">burn</label><br>
                                    <input type="checkbox" id="lower-right-infection" name="lower-right-infection" value="lower-right-infection">
                                    <label for="lower-right-infection">infection</label><br>
                                    <input type="checkbox" id="lower-right-lawnmower" name="lower-right-lawnmower" value="lower-right-lawnmower">
                                    <label for="lower-right-lawnmower">lawnmower</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-mvc" name="lower-right-mvc" value="lower-right-mvc">
                                    <label for="lower-right-mvc">MVC</label><br>
                                    <input type="checkbox" id="lower-right-recreational" name="lower-right-recreational" value="lower-right-recreational">
                                    <label for="lower-right-recreational">recreational</label><br>
                                    <input type="checkbox" id="lower-right-vascular" name="lower-right-vascular" value="lower-right-vascular">
                                    <label for="lower-right-vascular">vascular</label><br>
                                </div>
                            </div>
                            <input id="lower-right-other" type="text" placeholder="Other"><br><br>
                            <textarea id="lower-right-classification" name="lower-right-classification" placeholder="Classification" rows="2" cols="25"></textarea><br>
                            <textarea id="lower-right-notes" name="lower-right-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>
                            <textarea id="lower-right-surgical-pro" name="lower-right-surgical-pro" placeholder="Surgical Procedures" rows="2" cols="25"></textarea>
                            <input id="lower-right-surgical-pro-date" type="text" placeholder="mm/dd/yyyy"><br>
                        </div>
                        <div class="col-md-6">
                            <h5>Deformities/Missing Bones</h5><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-pelvis" name="lower-right-pelvis" value="lower-right-pelvis">
                                    <label for="lower-right-pelvis">pelvis</label><br>
                                    <label>femur</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-femur-dist">dist.</label><br>
                                            <input type="checkbox" id="lower-right-femur-dist" name="lower-right-femur-dist" value="lower-right-femur-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-femur-mid">mid.</label><br>
                                            <input type="checkbox" id="lower-right-femur-mid" name="lower-right-femur-mid" value="lower-right-femur-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-femur-prox">prox.</label><br>
                                            <input type="checkbox" id="lower-right-femur-prox" name="lower-right-femur-prox" value="lower-right-femur-prox">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="lower-right-patella" name="lower-right-patella" value="lower-right-patella">
                                    <label for="lower-right-patella">patella</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-right-tarsals" name="lower-right-tarsals" value="lower-right-tarsals">
                                    <label for="lower-right-tarsals">tarsals</label><br>
                                    <input type="checkbox" id="lower-right-calcaneus" name="lower-right-calcaneus" value="lower-right-calcaneus">
                                    <label for="lower-right-calcaneus">calcaneus</label><br>
                                    <input type="checkbox" id="lower-right-talus" name="lower-right-talus" value="lower-right-talus">
                                    <label for="lower-right-talus">talus</label><br>
                                    <input type="checkbox" id="lower-right-navicular" name="lower-right-navicular" value="lower-right-navicular">
                                    <label for="lower-right-navicular">navicular</label><br>
                                    <input type="checkbox" id="lower-right-cuboid" name="lower-right-cuboid" value="lower-right-cuboid">
                                    <label for="lower-right-cuboid">cuboid</label><br>
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
                                            <label for="lower-right-tibia-dist">dist.</label><br>
                                            <input type="checkbox" id="lower-right-tibia-dist" name="lower-right-tibia-dist" value="lower-right-tibia-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-tibia-mid">mid.</label><br>
                                            <input type="checkbox" id="lower-right-tibia-mid" name="lower-right-tibia-mid" value="lower-right-tibia-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-tibia-prox">prox.</label><br>
                                            <input type="checkbox" id="lower-right-tibia-prox" name="lower-right-tibia-prox" value="lower-right-tibia-prox">
                                        </div>
                                    </div>
                                    <label>fibula</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-fibula-dist">dist.</label><br>
                                            <input type="checkbox" id="lower-right-fibula-dist" name="lower-right-fibula-dist" value="lower-right-fibula-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-fibula-mid">mid.</label><br>
                                            <input type="checkbox" id="lower-right-fibula-mid" name="lower-right-fibula-mid" value="lower-right-fibula-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-fibula-prox">prox.</label><br>
                                            <input type="checkbox" id="lower-right-fibula-prox" name="lower-right-fibula-prox" value="lower-right-fibula-prox">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="lower-right-foot" name="lower-right-foot" value="lower-right-foot">
                                    <label for="lower-right-foot">foot</label><br>
                                </div>
                                <div class="col-md-7">
                                    <label>cuneiform</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-cuneiform-med">med.</label><br>
                                            <input type="checkbox" id="lower-right-cuneiform-med" name="lower-right-cuneiform-med" value="lower-right-cuneiform-med">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lower-right-cuneiform-intermed">intermed.</label><br>
                                            <input type="checkbox" id="lower-right-cuneiform-intermed" name="lower-right-cuneiform-intermed" value="lower-right-cuneiform-intermed">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-right-cuneiform-lat">lat.</label><br>
                                            <input type="checkbox" id="lower-right-cuneiform-lat" name="lower-right-cuneiform-lat" value="lower-right-cuneiform-lat">
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
                                            <label for="lower-right-phalanges-5">5</label><br>
                                            <input type="checkbox" id="lower-right-phalanges-5" name="lower-right-phalanges-5" value="lower-right-phalanges-5">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-phalanges-4">4</label><br>
                                            <input type="checkbox" id="lower-right-phalanges-4" name="lower-right-phalanges-4" value="lower-right-phalanges-4">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-phalanges-3">3</label><br>
                                            <input type="checkbox" id="lower-right-phalanges-3" name="lower-right-phalanges-3" value="lower-right-phalanges-3">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-phalanges-2">2</label><br>
                                            <input type="checkbox" id="lower-right-phalanges-2" name="lower-right-phalanges-2" value="lower-right-phalanges-2">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-phalanges-1">1</label><br>
                                            <input type="checkbox" id="lower-right-phalanges-1" name="lower-right-phalanges-1" value="lower-right-phalanges-1">
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
                                            <label for="lower-right-metatarsals-5">5</label><br>
                                            <input type="checkbox" id="lower-right-metatarsals-5" name="lower-right-metatarsals-5" value="lower-right-metatarsals-5">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-metatarsals-4">4</label><br>
                                            <input type="checkbox" id="lower-right-metatarsals-4" name="lower-right-metatarsals-4" value="lower-right-metatarsals-4">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-metatarsals-3">3</label><br>
                                            <input type="checkbox" id="lower-right-metatarsals-3" name="lower-right-metatarsals-3" value="lower-right-metatarsals-3">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-metatarsals-2">2</label><br>
                                            <input type="checkbox" id="lower-right-metatarsals-2" name="lower-right-metatarsals-2" value="lower-right-metatarsals-2">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-right-metatarsals-1">1</label><br>
                                            <input type="checkbox" id="lower-right-metatarsals-1" name="lower-right-metatarsals-1" value="lower-right-metatarsals-1">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <h6>Foot:</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="lower-right-birch" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-birch-anchor" class="anchor">Birch</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-right-birch-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-birch-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-birch-1B"> 1B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-birch-1C"> 1C</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-birch-1C"> 1D</li>
                                            <li><input type="checkbox" value="lower-right-birch-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-birch-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-birch-2B"> 2B</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-jones" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-jones-anchor" class="anchor">Jones</span>
                                        <ul class="items">
                                        <li><input type="checkbox" value="lower-right-jones-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-jones-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-jones-1B"> 1B</li>
                                            <li><input type="checkbox" value="lower-right-jones-2"> Type 2</li>
                                            <li><input type="checkbox" value="lower-right-jones-3"> Type 3</li>
                                            <li><input type="checkbox" value="lower-right-jones-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-aitken" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-aitken-anchor" class="anchor">Aitken</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-right-aitken-AB"> A or B (+femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-aitken-A"> A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-aitken-B"> B</li>
                                            <li><input type="checkbox" value="lower-right-aitken-CD"> C or D (no femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-aitken-C"> C</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-aitken-D"> D</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="lower-right-AK" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-AK-anchor" class="anchor">A+K</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-right-AK-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-AK-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-AK-1B"> 1B</li>
                                            <li><input type="checkbox" value="lower-right-AK-2"> Type 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-paley-tibia" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-paley-tibia-anchor" class="anchor">Paley Tibia</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-right-paley-tibia-1"> Type 1</li>
                                            <li><input type="checkbox" value="lower-right-paley-tibia-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-2B"> 2B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-2C"> 2C</li>
                                            <li><input type="checkbox" value="lower-right-paley-tibia-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-3B"> 3B</li>
                                            <li><input type="checkbox" value="lower-right-paley-tibia-4"> Type 4</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-4A"> 4A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-4B"> 4B</li>
                                            <li><input type="checkbox" value="lower-right-paley-tibia-5"> Type 5</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-5A"> 5A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-5B"> 5B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-tibia-5C"> 5C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-right-paley-femur" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-paley-femur-anchor" class="anchor">Paley Femur</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-right-paley-femur-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-1B"> 1B</li>
                                            <li><input type="checkbox" value="lower-right-paley-femur-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-2B"> 2B</li>
                                            <li><input type="checkbox" value="lower-right-paley-femur-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-3B"> 3B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-femur-3C"> 3C</li>
                                            <li><input type="checkbox" value="lower-right-paley-femur-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <div id="lower-right-paley-fibula" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-right-paley-fibula-anchor" class="anchor">Paley Fibula</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-right-paley-fibula-1"> Type 1</li>
                                            <li><input type="checkbox" value="lower-right-paley-fibula-2"> Type 2</li>
                                            <li><input type="checkbox" value="lower-right-paley-fibula-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-fibula-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-fibula-3B1"> 3B1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-fibula-3B2"> 3B2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-right-paley-fibula-3C"> 3C</li>
                                            <li><input type="checkbox" value="lower-right-paley-fibula-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- col-md-6 -->
                <div class="col-md-6 lower-left-sect">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Left</strong></h4><br>
                            <input type="checkbox" id="lower-left-longitudinal" name="lower-left-longitudinal" value="lower-left-longitudinal">
                            <label for="lower-left-longitudinal">longitudinal</label><br>
                            <input type="checkbox" id="lower-left-transverse" name="lower-left-transverse" value="lower-left-transverse">
                            <label for="lower-left-transverse">transverse</label><br>
                            <input type="checkbox" id="lower-left-ears" name="lower-left-ears" value="lower-left-ears">
                            <label for="lower-left-ears">EARS</label><br>
                            <input type="checkbox" id="lower-left-congenital" name="lower-left-congenital" value="lower-left-congenital">
                            <label for="lower-left-congenital">congenital</label><br>
                            <input type="checkbox" id="lower-left-acquired" name="lower-left-acquired" value="lower-left-acquired">
                            <label for="lower-left-acquired">acquired</label>
                            <input id="lower-left-acquired-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <input type="checkbox" id="lower-left-tumor" name="lower-left-tumor" value="lower-left-tumor">
                            <label for="lower-left-tumor">tumor</label>
                            <input id="lower-left-tumor-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <input type="checkbox" id="lower-left-trauma" name="lower-left-trauma" value="lower-left-trauma">
                            <label for="lower-left-trauma">trauma</label>
                            <input id="lower-left-trauma-date" type="text" placeholder="mm/dd/yyyy"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-burn" name="lower-left-burn" value="lower-left-burn">
                                    <label for="lower-left-burn">burn</label><br>
                                    <input type="checkbox" id="lower-left-infection" name="lower-left-infection" value="lower-left-infection">
                                    <label for="lower-left-infection">infection</label><br>
                                    <input type="checkbox" id="lower-left-lawnmower" name="lower-left-lawnmower" value="lower-left-lawnmower">
                                    <label for="lower-left-lawnmower">lawnmower</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-mvc" name="lower-left-mvc" value="lower-left-mvc">
                                    <label for="lower-left-mvc">MVC</label><br>
                                    <input type="checkbox" id="lower-left-recreational" name="lower-left-recreational" value="lower-left-recreational">
                                    <label for="lower-left-recreational">recreational</label><br>
                                    <input type="checkbox" id="lower-left-vascular" name="lower-left-vascular" value="lower-left-vascular">
                                    <label for="lower-left-vascular">vascular</label><br>
                                </div>
                            </div>
                            <input id="lower-left-other" type="text" placeholder="Other"><br><br>
                            <textarea id="lower-left-classification" name="lower-left-classification" placeholder="Classification" rows="2" cols="25"></textarea><br>
                            <textarea id="lower-left-notes" name="lower-left-notes" placeholder="Notes" rows="2" cols="25"></textarea><br>
                            <textarea id="lower-left-surgical-pro" name="lower-left-surgical-pro" placeholder="Surgical Procedures" rows="2" cols="25"></textarea>
                            <input id="lower-left-surgical-pro-date" type="text" placeholder="mm/dd/yyyy"><br>
                        </div>
                        <div class="col-md-6">
                            <h5>Deformities/Missing Bones</h5><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-pelvis" name="lower-left-pelvis" value="lower-left-pelvis">
                                    <label for="lower-left-pelvis">pelvis</label><br>
                                    <label>femur</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-femur-dist">dist.</label><br>
                                            <input type="checkbox" id="lower-left-femur-dist" name="lower-left-femur-dist" value="lower-left-femur-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-femur-mid">mid.</label><br>
                                            <input type="checkbox" id="lower-left-femur-mid" name="lower-left-femur-mid" value="lower-left-femur-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-femur-prox">prox.</label><br>
                                            <input type="checkbox" id="lower-left-femur-prox" name="lower-left-femur-prox" value="lower-left-femur-prox">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="lower-left-patella" name="lower-left-patella" value="lower-left-patella">
                                    <label for="lower-left-patella">patella</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="lower-left-tarsals" name="lower-left-tarsals" value="lower-left-tarsals">
                                    <label for="lower-left-tarsals">tarsals</label><br>
                                    <input type="checkbox" id="lower-left-calcaneus" name="lower-left-calcaneus" value="lower-left-calcaneus">
                                    <label for="lower-left-calcaneus">calcaneus</label><br>
                                    <input type="checkbox" id="lower-left-talus" name="lower-left-talus" value="lower-left-talus">
                                    <label for="lower-left-talus">talus</label><br>
                                    <input type="checkbox" id="lower-left-navicular" name="lower-left-navicular" value="lower-left-navicular">
                                    <label for="lower-left-navicular">navicular</label><br>
                                    <input type="checkbox" id="lower-left-cuboid" name="lower-left-cuboid" value="lower-left-cuboid">
                                    <label for="lower-left-cuboid">cuboid</label><br>
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
                                            <label for="lower-left-tibia-dist">dist.</label><br>
                                            <input type="checkbox" id="lower-left-tibia-dist" name="lower-left-tibia-dist" value="lower-left-tibia-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-tibia-mid">mid.</label><br>
                                            <input type="checkbox" id="lower-left-tibia-mid" name="lower-left-tibia-mid" value="lower-left-tibia-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-tibia-prox">prox.</label><br>
                                            <input type="checkbox" id="lower-left-tibia-prox" name="lower-left-tibia-prox" value="lower-left-tibia-prox">
                                        </div>
                                    </div>
                                    <label>fibula</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-fibula-dist">dist.</label><br>
                                            <input type="checkbox" id="lower-left-fibula-dist" name="lower-left-fibula-dist" value="lower-left-fibula-dist">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-fibula-mid">mid.</label><br>
                                            <input type="checkbox" id="lower-left-fibula-mid" name="lower-left-fibula-mid" value="lower-left-fibula-mid">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-fibula-prox">prox.</label><br>
                                            <input type="checkbox" id="lower-left-fibula-prox" name="lower-left-fibula-prox" value="lower-left-fibula-prox">
                                        </div>
                                    </div>
                                    <input type="checkbox" id="lower-left-foot" name="lower-left-foot" value="lower-left-foot">
                                    <label for="lower-left-foot">foot</label><br>
                                </div>
                                <div class="col-md-7">
                                    <label>cuneiform</label><br>
                                    <div class="row">
                                        <div class="col-md-1 offset-md-1">
                                            <label>&#8627;</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-cuneiform-med">med.</label><br>
                                            <input type="checkbox" id="lower-left-cuneiform-med" name="lower-left-cuneiform-med" value="lower-left-cuneiform-med">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lower-left-cuneiform-intermed">intermed.</label><br>
                                            <input type="checkbox" id="lower-left-cuneiform-intermed" name="lower-left-cuneiform-intermed" value="lower-left-cuneiform-intermed">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="lower-left-cuneiform-lat">lat.</label><br>
                                            <input type="checkbox" id="lower-left-cuneiform-lat" name="lower-left-cuneiform-lat" value="lower-left-cuneiform-lat">
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
                                            <label for="lower-left-phalanges-5">5</label><br>
                                            <input type="checkbox" id="lower-left-phalanges-5" name="lower-left-phalanges-5" value="lower-left-phalanges-5">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-phalanges-4">4</label><br>
                                            <input type="checkbox" id="lower-left-phalanges-4" name="lower-left-phalanges-4" value="lower-left-phalanges-4">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-phalanges-3">3</label><br>
                                            <input type="checkbox" id="lower-left-phalanges-3" name="lower-left-phalanges-3" value="lower-left-phalanges-3">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-phalanges-2">2</label><br>
                                            <input type="checkbox" id="lower-left-phalanges-2" name="lower-left-phalanges-2" value="lower-left-phalanges-2">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-phalanges-1">1</label><br>
                                            <input type="checkbox" id="lower-left-phalanges-1" name="lower-left-phalanges-1" value="lower-left-phalanges-1">
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
                                            <label for="lower-left-metatarsals-5">5</label><br>
                                            <input type="checkbox" id="lower-left-metatarsals-5" name="lower-left-metatarsals-5" value="lower-left-metatarsals-5">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-metatarsals-4">4</label><br>
                                            <input type="checkbox" id="lower-left-metatarsals-4" name="lower-left-metatarsals-4" value="lower-left-metatarsals-4">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-metatarsals-3">3</label><br>
                                            <input type="checkbox" id="lower-left-metatarsals-3" name="lower-left-metatarsals-3" value="lower-left-metatarsals-3">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-metatarsals-2">2</label><br>
                                            <input type="checkbox" id="lower-left-metatarsals-2" name="lower-left-metatarsals-2" value="lower-left-metatarsals-2">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="lower-left-metatarsals-1">1</label><br>
                                            <input type="checkbox" id="lower-left-metatarsals-1" name="lower-left-metatarsals-1" value="lower-left-metatarsals-1">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <h6>Foot:</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="lower-left-birch" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-birch-anchor" class="anchor">Birch</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-birch-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-birch-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-birch-1B"> 1B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-birch-1C"> 1C</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-birch-1C"> 1D</li>
                                            <li><input type="checkbox" value="lower-left-birch-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-birch-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-birch-2B"> 2B</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-jones" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-jones-anchor" class="anchor">Jones</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-jones-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-jones-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-jones-1B"> 1B</li>
                                            <li><input type="checkbox" value="lower-left-jones-2"> Type 2</li>
                                            <li><input type="checkbox" value="lower-left-jones-3"> Type 3</li>
                                            <li><input type="checkbox" value="lower-left-jones-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-aitken" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-aitken-anchor" class="anchor">Aitken</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-aitken-AB"> A or B (+femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-aitken-A"> A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-aitken-B"> B</li>
                                            <li><input type="checkbox" value="lower-left-aitken-CD"> C or D (no femoral head)</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-aitken-C"> C</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-aitken-D"> D</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="lower-left-AK" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-AK-anchor" class="anchor">A+K</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-AK-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-AK-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-AK-1B"> 1B</li>
                                            <li><input type="checkbox" value="lower-left-AK-2"> Type 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-paley-tibia" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-paley-tibia-anchor" class="anchor">Paley Tibia</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-paley-tibia-1"> Type 1</li>
                                            <li><input type="checkbox" value="lower-left-paley-tibia-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-2B"> 2B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-2C"> 2C</li>
                                            <li><input type="checkbox" value="lower-left-paley-tibia-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-3B"> 3B</li>
                                            <li><input type="checkbox" value="lower-left-paley-tibia-4"> Type 4</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-4A"> 4A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-4B"> 4B</li>
                                            <li><input type="checkbox" value="lower-left-paley-tibia-5"> Type 5</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-5A"> 5A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-5B"> 5B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-tibia-5C"> 5C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="lower-left-paley-femur" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-paley-femur-anchor" class="anchor">Paley Femur</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-paley-femur-1"> Type 1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-1A"> 1A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-1B"> 1B</li>
                                            <li><input type="checkbox" value="lower-left-paley-femur-2"> Type 2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-2A"> 2A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-2B"> 2B</li>
                                            <li><input type="checkbox" value="lower-left-paley-femur-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-3B"> 3B</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-femur-3C"> 3C</li>
                                            <li><input type="checkbox" value="lower-left-paley-femur-4"> Type 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <div id="lower-left-paley-fibula" class="dropdown-check-list" tabindex="100">
                                        <span id="lower-left-paley-fibula-anchor" class="anchor">Paley Fibula</span>
                                        <ul class="items">
                                            <li><input type="checkbox" value="lower-left-paley-fibula-1"> Type 1</li>
                                            <li><input type="checkbox" value="lower-left-paley-fibula-2"> Type 2</li>
                                            <li><input type="checkbox" value="lower-left-paley-fibula-3"> Type 3</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-fibula-3A"> 3A</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-fibula-3B1"> 3B1</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-fibula-3B2"> 3B2</li>
                                            <li>&nbsp;<input type="checkbox" value="lower-left-paley-fibula-3C"> 3C</li>
                                            <li><input type="checkbox" value="lower-left-paley-fibula-4"> Type 4</li>
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
            <div id="upper-extremity-section" class="row" style="display: flex">
                <div class="col-md-3">
                    <p><strong>Right</strong><br></p>
                    <input type="checkbox" id="right-longitudinal" name="right-longitudinal" value="right-longitudinal"/>
                    <label for="right-longitudinal">Longitudinal</label><br>
                    <input type="checkbox" id="right-transverse" name="right-transverse" value="right-transverse"/>
                    <label for="right-transverse">Transverse</label><br>
                    <input type="checkbox" id="right-ears" name="right-ears" value="right-ears"/>
                    <label for="right-ears">EARS</label><br>
                    <input type="checkbox" id="right-congenital" name="right-congenital" value="right-congenital"/>
                    <label for="right-congenital">Congenital</label><br>
                    <input type="checkbox" id="right-acquired" name="right-acquired" value="right-acquired"/>
                    <label for="right-acquired">Acquired</label><br>
                    <div class="row">
                        <div class="col-5">
                            <input type="checkbox" id="right-tumor" name="right-tumor" value="right-tumor"/>
                            <label for="right-tumor">Tumor</label><br>
                            <input type="checkbox" id="right-trauma" name="right-trauma" value="right-trauma"/>
                            <label for="right-trauma">Trauma</label><br>
                        </div>
                        <div class="col-7">
                            <input type="date" id="right-tumor-date" name="right-tumor-date" value="right-tumor-date"><br>
                            <input type="date" id="right-trauma-date" name="right-trauma-date" value="right-trauma-date"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <input type="checkbox" id="right-burn" name="right-burn" value="right-burn"/>
                            <label for="right-burn">Burn</label><br>
                            <input type="checkbox" id="right-mvc" name="right-mvc" value="right-mvc"/>
                            <label for="right-mvc">MVC</label><br>
                            <input type="checkbox" id="right-vascular" name="right-vascular" value="right-vascular"/>
                            <label for="right-vascular">Vascular</label><br>
                        </div>
                        <div class="col-7">
                            <input type="checkbox" id="right-recreational" name="right-recreational" value="right-recreational"/>
                            <label for="right-recreational">Recreational</label><br>
                            <input type="checkbox" id="right-infection" name="right-infection" value="right-infection"/>
                            <label for="right-infection">Infection</label><br>
                            <input type="checkbox" id="right-lawnmower" name="right-lawnmower" value="right-lawnmower"/>
                            <label for="right-lawnmower">Lawnmower</label><br>
                        </div>
                    </div>

                    <input type="text" name="right-other" placeholder="Other"><br><br><br>
                    <textarea name="right-notes" placeholder="Notes" value="right-notes" rows="4" cols="25"></textarea>
                    <textarea name="right-classification" placeholder="Classification" value="right-classification" rows="4" cols="25"></textarea>

                </div>
                <div class="col-md-3">
                    <p><strong>Deformities/Missing Bones</strong><br></p>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" id="right-scapula" name="right-scapula" value="right-scapula"/>
                            <label for="right-scapula">Scapula</label><br>
                                Humerus<br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="right-humerus-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-humerus-dist" name="right-humerus-dist" value="right-humerus-dist" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="right-humerus-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-humerus-mid" name="right-humerus-mid" value="right-humerus-mid" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="right-humerus-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-humerus-prox" name="right-humerus-prox" value="right-humerus-prox" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                Radius<br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="right-radius-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-radius-dist" name="right-radius-dist" value="right-radius-dist" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="right-radius-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-radius-mid" name="right-radius-mid" value="right-radius-mid" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="right-radius-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-radius-prox" name="right-radius-prox" value="right-radius-prox" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                Ulna<br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="right-ulna-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-ulna-dist" name="right-ulna-dist" value="right-ulna-dist" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="right-ulna-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-ulna-mid" name="right-ulna-mid" value="right-ulna-mid" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="right-ulna-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-ulna-prox" name="right-ulna-prox" value="right-ulna-prox" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="right-hamate" name="right-hamate" value="right-hamate"/>
                            <label for="right-hamate">Hamate</label><br>
                            <input type="checkbox" id="right-pistiform" name="right-pistiform" value="right-pistiform"/>
                            <label for="right-pistiform">Pistiform</label><br>
                            <input type="checkbox" id="right-triquetral" name="right-triquetral" value="right-triquetral"/>
                            <label for="right-triquetral">Triquetral</label><br>
                            <input type="checkbox" id="right-lunate" name="right-lunate" value="right-lunate"/>
                            <label for="right-lunate">Lunate</label><br>
                            <input type="checkbox" id="right-trapezoid" name="right-trapezoid" value="right-trapezoid"/>
                            <label for="right-trapezoid">Trapezoid</label><br>
                            <input type="checkbox" id="right-trapezium" name="right-trapezium" value="right-trapezium"/>
                            <label for="right-trapezium">Trapezium</label><br>
                            <input type="checkbox" id="right-scaphoid" name="right-scaphoid" value="right-scaphoid"/>
                            <label for="right-scaphoid">Scaphoid</label><br>
                            <input type="checkbox" id="right-capitellum" name="right-capitellum" value="right-capitellum"/>
                            <label for="right-capitellum">Capitellum</label><br>
                            <button>Hand</button>
                        </div>
                    </div>
                    <u>Hand</u><br>
                    <div class="row">
                        <div class="col-10 border-left">
                            Phalanges<br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-phalanges-5" name="right-phalanges-5" value="right-phalanges-5" type="checkbox"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-phalanges-4" type="checkbox" name="right-phalanges-4" value="right-phalanges-4"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-phalanges-3" type="checkbox" name="right-phalanges-3" value="right-phalanges-3"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-phalanges-2" type="checkbox" name="right-phalanges-2" value="right-phalanges-2"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-phalanges-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-phalanges-1" type="checkbox" name="right-phalanges-1" value="right-phalanges-1"/>
                                    </div>
                                </div>
                            </div>
                            Metacarpals<br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-metacarpals-5" type="checkbox" name="right-metacarpals-5" value="right-metacarpals-5"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-metacarpals-4" type="checkbox" name="right-metacarpals-4" value="right-metacarpals-4"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-metacarpals-3" type="checkbox" name="right-metacarpals-3" value="right-metacarpals-3"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-metacarpals-2" type="checkbox" name="right-metacarpals-2" value="right-metacarpals-2"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="right-metacarpals-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="right-metacarpals-1" type="checkbox" name="right-metacarpals-1" value="right-metacarpals-1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 border-left">
                    <p><strong>Left</strong><br></p>
                    <input type="checkbox" id="left-longitudinal" name="left-longitudinal" value="left-longitudinal"/>
                    <label for="left-longitudinal">Longitudinal</label><br>
                    <input type="checkbox" id="left-transverse" name="left-transverse" value="left-transverse"/>
                    <label for="left-transverse">Transverse</label><br>
                    <input type="checkbox" id="left-ears" name="left-ears" value="left-ears"/>
                    <label for="left-ears">EARS</label><br>
                    <input type="checkbox" id="left-congenital" name="left-congenital" value="left-congenital"/>
                    <label for="left-congenital">Congenital</label><br>
                    <input type="checkbox" id="left-acquired" name="left-acquired" value="left-acquired"/>
                    <label for="left-acquired">Acquired</label><br>
                    <div class="row">
                        <div class="col-5">
                            <input type="checkbox" id="left-tumor" name="left-tumor" value="left-tumor"/>
                            <label for="left-tumor">Tumor</label><br>
                            <input type="checkbox" id="left-trauma" name="left-trauma" value="left-trauma"/>
                            <label for="left-trauma">Trauma</label><br>
                        </div>
                        <div class="col-7">
                            <input type="date" id="left-tumor-date" name="left-tumor-date" value="left-tumor-date"><br>
                            <input type="date" id="left-trauma-date" name="left-trauma-date" value="left-trauma-date"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <input type="checkbox" id="left-burn" name="left-burn" value="left-burn"/>
                            <label for="left-burn">Burn</label><br>
                            <input type="checkbox" id="left-mvc" name="left-mvc" value="left-mvc"/>
                            <label for="left-mvc">MVC</label><br>
                            <input type="checkbox" id="left-vascular" name="left-vascular" value="left-vascular"/>
                            <label for="left-vascular">Vascular</label><br>
                        </div>
                        <div class="col-7">
                            <input type="checkbox" id="left-recreational" name="left-recreational" value="left-recreational"/>
                            <label for="left-recreational">Recreational</label><br>
                            <input type="checkbox" id="left-infection" name="left-infection" value="left-infection"/>
                            <label for="left-infection">Infection</label><br>
                            <input type="checkbox" id="left-lawnmower" name="left-lawnmower" value="left-lawnmower"/>
                            <label for="left-lawnmower">Lawnmower</label><br>
                        </div>
                    </div>

                    <input type="text" name="left-other" placeholder="Other"><br><br><br>
                    <textarea name="left-notes" placeholder="Notes" value="left-notes" rows="4" cols="25"></textarea>
                    <textarea name="left-classification" placeholder="Classification" value="left-classification" rows="4" cols="25"></textarea>

                </div>
                <div class="col-md-3">
                    <p><strong>Deformities/Missing Bones</strong><br></p>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" id="left-scapula" name="left-scapula" value="left-scapula"/>
                            <label for="left-scapula">Scapula</label><br>
                                Humerus<br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="left-humerus-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-humerus-dist" name="left-humerus-dist" value="left-humerus-dist" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="left-humerus-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-humerus-mid" name="left-humerus-mid" value="left-humerus-mid" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="left-humerus-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-humerus-prox" name="left-humerus-prox" value="left-humerus-prox" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                Radius<br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="left-radius-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-radius-dist" name="left-radius-dist" value="left-radius-dist" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="left-radius-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-radius-mid" name="left-radius-mid" value="left-radius-mid" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="left-radius-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-radius-prox" name="left-radius-prox" value="left-radius-prox" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                                Ulna<br>
                                <div class="row">
                                    <div class="col-1">
                                        &#8627
                                    </div>
                                    <div class="col-3">
                                        <label for="left-ulna-dist">dist.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-ulna-dist" name="left-ulna-dist" value="left-ulna-dist" type="checkbox"/>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="left-ulna-mid">mid.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-ulna-mid" name="left-ulna-mid" value="left-ulna-mid" type="checkbox"/>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <label for="left-ulna-prox">prox.</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-ulna-prox" name="left-ulna-prox" value="left-ulna-prox" type="checkbox"/>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="left-hamate" name="left-hamate" value="left-hamate"/>
                            <label for="left-hamate">Hamate</label><br>
                            <input type="checkbox" id="left-pistiform" name="left-pistiform" value="left-pistiform"/>
                            <label for="left-pistiform">Pistiform</label><br>
                            <input type="checkbox" id="left-triquetral" name="left-triquetral" value="left-triquetral"/>
                            <label for="left-triquetral">Triquetral</label><br>
                            <input type="checkbox" id="left-lunate" name="left-lunate" value="left-lunate"/>
                            <label for="left-lunate">Lunate</label><br>
                            <input type="checkbox" id="left-trapezoid" name="left-trapezoid" value="left-trapezoid"/>
                            <label for="left-trapezoid">Trapezoid</label><br>
                            <input type="checkbox" id="left-trapezium" name="left-trapezium" value="left-trapezium"/>
                            <label for="left-trapezium">Trapezium</label><br>
                            <input type="checkbox" id="left-scaphoid" name="left-scaphoid" value="left-scaphoid"/>
                            <label for="left-scaphoid">Scaphoid</label><br>
                            <input type="checkbox" id="left-capitellum" name="left-capitellum" value="left-capitellum"/>
                            <label for="left-capitellum">Capitellum</label><br>
                            <button>Hand</button>

                        </div>
                    </div>
                    <u>Hand</u><br>
                    <div class="row">
                        <div class="col-10 border-left">
                            Phalanges<br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-phalanges-5" name="left-phalanges-5" value="left-phalanges-5" type="checkbox"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-phalanges-4" type="checkbox" name="left-phalanges-4" value="left-phalanges-4"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-phalanges-3" type="checkbox" name="left-phalanges-3" value="left-phalanges-3"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-phalanges-2" type="checkbox" name="left-phalanges-2" value="left-phalanges-2"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-phalanges-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-phalanges-1" type="checkbox" name="left-phalanges-1" value="left-phalanges-1"/>
                                    </div>
                                </div>
                            </div>
                            Metacarpals<br>
                            <div class="row">
                                <div class="col-2">
                                    &#8627
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-5">5</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-metacarpals-5" type="checkbox" name="left-metacarpals-5" value="left-metacarpals-5"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-4">4</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-metacarpals-4" type="checkbox" name="left-metacarpals-4" value="left-metacarpals-4"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-3">3</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-metacarpals-3" type="checkbox" name="left-metacarpals-3" value="left-metacarpals-3"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-2">2</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-metacarpals-2" type="checkbox" name="left-metacarpals-2" value="left-metacarpals-2"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="left-metacarpals-1">1</label><br>
                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="left-metacarpals-1" type="checkbox" name="left-metacarpals-1" value="left-metacarpals-1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    include_once __DIR__ . '/_footer.php';
