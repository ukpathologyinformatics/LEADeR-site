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
                <p><strong>Left</strong><br></p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Longitudinal</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Transverse</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">EARS</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Congenital</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Acquired</label>
                </div><br>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Tumor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Trauma</label>
                        </div>
                    </div>
                    <div class="col-8">
                        <input type="date"><br>
                        <input type="date"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Burn</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">MVC</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Vascular</label>
                        </div><br>
                    </div>
                    <div class="col-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Recreational</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Infection</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Lawnmower</label>
                        </div><br>
                    </div>
                </div>

                <input type="text" name="Other" placeholder="Other"/><br><br><br>
                <textarea name="Notes" placeholder="Notes" rows="4" cols="25"></textarea>
                <textarea name="Classification" placeholder="Classification" rows="4" cols="25"></textarea>

            </div>
            <div class="col-md-3">
                <p><strong>Deformities/Missing Bones</strong><br></p>
                <div class="row">
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Scapula</label>
                        </div>
                        <p>
                            Humerus<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Radius<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Ulna<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Hamate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Pistiform</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Triquetral</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Lunate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Trapezoid</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Trapezium</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Scaphoid</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Capitellum</label>
                        </div>
                        <div class="container">
                            <div class="vertical-center">
                                <br><button>Hand</button>
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
                                        <input class="form-check-input" id="5" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox"/>
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
                                        <input class="form-check-input" id="5" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 border-left">
                <p><strong>Right</strong><br></p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Longitudinal</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Transverse</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">EARS</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Congenital</label>
                </div><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"/>
                    <label class="form-check-label">Acquired</label>
                </div><br>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Tumor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Trauma</label>
                        </div>
                    </div>
                    <div class="col-8">
                        <input type="date"><br>
                        <input type="date"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Burn</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">MVC</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Vascular</label>
                        </div><br>
                    </div>
                    <div class="col-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Recreational</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Infection</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Lawnmower</label>
                        </div><br>
                    </div>
                </div>
                <input type="text" name="Other" placeholder="Other"/><br><br><br>
                <textarea name="Notes" placeholder="Notes" rows="4" cols="25"></textarea>
                <textarea name="Classification" placeholder="Classification" rows="4" cols="25"></textarea>
            </div>
            <div class="col-md-3">
                <p><strong>Deformities/Missing Bones</strong><br></p>
                <div class="row">
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Scapula</label>
                        </div>
                        <p>
                            Humerus<br>

                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Radius<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </div>
                        </p>
                        <p>
                            Ulna<br>
                            &#8627 dist. mid. prox.<br>
                            <div style="padding:0px 0px 0px 12px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Hamate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Pistiform</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Triquetral</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Lunate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Trapezoid</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Trapezium</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Scaphoid</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label">Capitellum</label>
                        </div>
                        <div class="container">
                            <div class="vertical-center">
                                <br><button>Hand</button>
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
                                        <input class="form-check-input" id="5" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox"/>
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
                                        <input class="form-check-input" id="5" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="4">4</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="4" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="3">3</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="3" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="2">2</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="2" type="checkbox"/>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="1">1</label><br>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="1" type="checkbox"/>
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
