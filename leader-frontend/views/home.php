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
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="race" id="race">
                    <option value="" disabled selected>Race</option>
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
                    <option value="" disabled selected>Ethnicity</option>
                    <option value="eth1">ethnicity 1</option>
                    <option value="eth2">ethnicity 2</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="file" id="file">
                    <option value="" disabled selected>Status</option>
                    <option value="pending">Pending</option>
                    <option value="complete">Complete</option>
                </select> 
            </div>
            <div class="col-md">
                <select name="subject-id" id="subject-id">
                    <option value="" disabled selected>Subject ID</option>
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
                    <input id="right-other" type="text" placeholder="Other">
                </div>
                <div class="col-md-6">
                    <h5>Deformities/Missing Bones</h5><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="right-pelvis" name="right-pelvis" value="right-pelvis">
                            <label for="right-pelvis">pelvis</label><br>
                            <label>femur</label><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-arrow-right" style="padding-left:10px;font-size:20px;"></i>
                                </div>
                                <div class="col-md-3">
                                    <label for="right-femur-dist">dist.</label><br>
                                    <input type="checkbox" id="right-femur-dist" name="right-femur-dist" value="right-femur-dist">
                                </div>
                                <div class="col-md-3">
                                    <label for="right-femur-mid">mid.</label><br>
                                    <input type="checkbox" id="right-femur-mid" name="right-femur-mid" value="right-femur-mid">
                                </div>
                                <div class="col-md-3">
                                    <label for="right-femur-prox">prox.</label><br>
                                    <input type="checkbox" id="right-femur-prox" name="right-femur-prox" value="right-femur-prox">
                                </div>
                            </div>
                            <input type="checkbox" id="right-patella" name="right-patella" value="right-patella">
                            <label for="right-patella">patella</label><br>
                            <label>tibia</label><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-arrow-right" style="padding-left:10px;font-size:20px;"></i>
                                </div>
                                <div class="col-md-3">
                                    <label for="right-tibia-dist">dist.</label><br>
                                    <input type="checkbox" id="right-tibia-dist" name="right-tibia-dist" value="right-tibia-dist">
                                </div>
                                <div class="col-md-3">
                                    <label for="right-tibia-mid">mid.</label><br>
                                    <input type="checkbox" id="right-tibia-mid" name="right-tibia-mid" value="right-tibia-mid">
                                </div>
                                <div class="col-md-3">
                                    <label for="right-tibia-prox">prox.</label><br>
                                    <input type="checkbox" id="right-tibia-prox" name="right-tibia-prox" value="right-tibia-prox">
                                </div>
                            </div>
                            <label>fibula</label><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-arrow-right" style="padding-left:10px;font-size:20px;"></i>
                                </div>
                                <div class="col-md-3">
                                    <label for="right-fibula-dist">dist.</label><br>
                                    <input type="checkbox" id="right-fibula-dist" name="right-fibula-dist" value="right-fibula-dist">
                                </div>
                                <div class="col-md-3">
                                    <label for="right-fibula-mid">mid.</label><br>
                                    <input type="checkbox" id="right-fibula-mid" name="right-fibula-mid" value="right-fibula-mid">
                                </div>
                                <div class="col-md-3">
                                    <label for="right-fibula-prox">prox.</label><br>
                                    <input type="checkbox" id="right-fibula-prox" name="right-fibula-prox" value="right-fibula-prox">
                                </div>
                            </div>
                            <input type="checkbox" id="right-foot" name="right-foot" value="right-foot">
                            <label for="right-foot">foot</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="right-tarsals" name="right-tarsals" value="right-tarsals">
                            <label for="right-tarsals">tarsals</label><br>
                            <input type="checkbox" id="right-calcaneus" name="right-calcaneus" value="right-calcaneus">
                            <label for="right-calcaneus">calcaneus</label><br>
                            <!-- HERERERERERERERE -->
                        </div>
                    </div>
                    <div class="row" id="right-foot-info">
                        <h5>Foot:</h5>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
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
    </script>

<?php
    include_once __DIR__ . '/_footer.php';
