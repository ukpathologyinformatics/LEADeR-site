<?php
/** @var UserSession $userSession */
$page = 'home';
include_once __DIR__ . '/_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Dashboard</h1>
    </div>
    <div class="row">
        &nbsp;
    </div>
    
    <section id="icd-filters">
        <!-- This is the top bar -->
        <div id="icd-top-bar" class="row">
            <div class="col-md-2">
                <input type="text" id="icd-codes" name="icd-codes" placeholder="Enter ICD Codes">
            </div>
            <div class="col-md-2">
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select> 
            </div>
            <div class="col-md-2">
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select> 
            </div>
            <div class="col-md-2">
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select> 
            </div>
            <div class="col-md-2">
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select> 
            </div>
            <div class="col-md-2">
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select> 
            </div>
        </div>

        <!-- Buttons to select which page to see -->
        <div class="lower-upper-buttons">
            <button id="upper-extremity-btn" class="active">UPPER EXTREMITY</button>
            <button id="lower-extremity-btn" class="">LOWER EXTREMITY</button>
        </div>

        <div id="upper-extremity-section" class="row" style="display: flex">
            <!-- Aaron, here are the 4 sections for the page: -->
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
                    <div class="col-6.5">
                        <input type="checkbox" id="right-scapula" name="right-scapula" value="right-scapula"/>
                        <label for="right-scapula">Scapula</label><br>
                        <p>
                            Humerus<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-humerus-dist" value="right-humerus-dist"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-humerus-mid" value="right-humerus-mid"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-humerus-prox" value="right-humerus-prox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Radius<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-radius-dist" value="right-radius-dist"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-radius-mid" value="right-radius-mid"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-radius-prox" value="right-radius-prox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Ulna<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-ulna-dist" value="right-ulna-dist"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-ulna-mid" value="right-ulna-mid"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="right-ulna-mid" value="right-ulna-mid"/>
                                </div>
                            </div>
                        </p>
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
                        <div class="container">
                            <div class="vertical-center">
                                <br><br><button>Hand</button>
                            </div>
                        </div>
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
                                <label for="5">5</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="5" name="right-phalanges-5" value="right-phalanges-5" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox" name="right-phalanges-4" value="right-phalanges-4"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox" name="right-phalanges-3" value="right-phalanges-3"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox" name="right-phalanges-2" value="right-phalanges-2"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox" name="right-phalanges-1" value="right-phalanges-1"/>
                                </div>
                            </div>
                        </div>
                        Metacarpals<br>
                        <div class="row">
                            <div class="col-2">
                                &#8627
                            </div>
                            <div class="col-2">
                                <label for="5">5</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="5" type="checkbox" name="right-metacarpals-5" value="right-metacarpals-5"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox" name="right-metacarpals-4" value="right-metacarpals-4"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox" name="right-metacarpals-3" value="right-metacarpals-3"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox" name="right-metacarpals-2" value="right-metacarpals-2"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox" name="right-metacarpals-1" value="right-metacarpals-1"/>
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
                    <div class="col-6.5">
                        <input type="checkbox" id="left-scapula" name="left-scapula" value="left-scapula"/>
                        <label for="left-scapula">Scapula</label><br>
                        <p>
                            Humerus<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-humerus-dist" value="left-humerus-dist"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-humerus-mid" value="left-humerus-mid"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-humerus-prox" value="left-humerus-prox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Radius<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-radius-dist" value="left-radius-dist"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-radius-mid" value="left-radius-mid"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-radius-prox" value="left-radius-prox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Ulna<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-ulna-dist" value="left-ulna-dist"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-ulna-mid" value="left-ulna-mid"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="left-ulna-mid" value="left-ulna-mid"/>
                                </div>
                            </div>
                        </p>
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
                        <div class="container">
                            <div class="vertical-center">
                                <br><br><button>Hand</button>
                            </div>
                        </div>
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
                                <label for="5">5</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="5" name="left-phalanges-5" value="left-phalanges-5" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox" name="left-phalanges-4" value="left-phalanges-4"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox" name="left-phalanges-3" value="left-phalanges-3"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox" name="left-phalanges-2" value="left-phalanges-2"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox" name="left-phalanges-1" value="left-phalanges-1"/>
                                </div>
                            </div>
                        </div>
                        Metacarpals<br>
                        <div class="row">
                            <div class="col-2">
                                &#8627
                            </div>
                            <div class="col-2">
                                <label for="5">5</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="5" type="checkbox" name="left-metacarpals-5" value="left-metacarpals-5"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox" name="left-metacarpals-4" value="left-metacarpals-4"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox" name="left-metacarpals-3" value="left-metacarpals-3"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox" name="left-metacarpals-2" value="left-metacarpals-2"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox" name="left-metacarpals-1" value="left-metacarpals-1"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="lower-extremity-section" class="row" style="display: none">
            <div class="col-md-3">test</div>
            <div class="col-md-3">test</div>
            <div class="col-md-3">test</div>
            <div class="col-md-3">test</div>
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
    </script>

        

    
<?php
    include_once __DIR__ . '/_footer.php';
