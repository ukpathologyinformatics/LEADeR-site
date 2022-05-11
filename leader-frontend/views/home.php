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
            <div class="col-md-3">yeet</div>
            <div class="col-md-3">yeet</div>
            <div class="col-md-3">yeet</div>
            <div class="col-md-3">yeet</div>
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
