<?php
/* 
Template Name: user-settings-page 
*/  

get_header();
?>  
<?php
if( !is_user_logged_in() ) {
    //wp_redirect( site_url( 'login' ) );
    wp_redirect( home_url() );
    exit;
}

/*GET ROW BY USER ID */

?>

<style>

.settings-container, .left_input ,.right_input {
font-size:26px;
}

.settings-container button{
    color: #404040;
    font-family: sans-serif;
    font-size: 12px;
    line-height: 1.5;
    vertical-align: middle;
}
















#del_acc_conf_modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.del_acc_modal_content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>








<div class = "settings-container">
    <h1>Account settings<h1>
    <div class = "left_input_container">

        <div class = "left_input">
            <label for = "accountName_input">Account Name</label>
                <!-- ADD USER NAME HERE from functionss.php-->
                <input type = "text" id = "accountName_input" name = "accountName_input" class = "input_settings">

                <?php global $current_user;
                wp_get_current_user();  
                echo ': ' . $current_user->user_login . "\n";
                ?>
<!--
                <button id = "accountName_input_button">Change</button>
                <button id = "accountName_input_button_confirm">Confirm</button>
-->
        </div>


        <div class = "left_input">
            <label for = "firstName_input">First Name</label>
                <!-- ADD USER'S FIRST NAME HERE from functionss.php-->



                <?php   
                global $wpdb;
                $user_id = get_current_user_id();
                $get_firstname = $wpdb->get_var($wpdb->prepare( "SELECT firstname FROM wp_user_info WHERE User_ID = $user_id" ));
                    
                echo ': ' . $get_firstname . "\n";
                ?>
                <input type = "text" id = "firstName_input" name = "firstName_input" class = "input_settings" placeholder="Enter new firstname">

                <button id = "firstName_input_button">Change</button>
                <button id = "firstName_input_button_confirm">Close</button>

        </div>

        
        <div class = "left_input">
            <label for = "lastName_input">Last Name</label>
                <!-- ADD USER'S FIRST NAME HERE from functionss.php-->
                

                <?php   
                global $wpdb;
                $user_id = get_current_user_id();
                $get_lastname = $wpdb->get_var($wpdb->prepare( "SELECT lastname FROM wp_user_info WHERE User_ID = $user_id" ));
                    
                echo ': ' . $get_lastname . "\n";
                ?>
                <input type = "text" id = "lastName_input" name = "lastName_input" class = "input_settings" placeholder="Enter new lastname">  

                <button id = "lastName_input_button">Change</button>
                <button id = "lastName_input_button_confirm">Close</button>
        </div>


        <div class = "left_input">
        
        <label for = "businessName_input">Name of business</label>
            <!-- ADD USER'S FIRST NAME HERE from functionss.php-->
            
            <?php   
            global $wpdb;
            $user_id = get_current_user_id();
            $get_businssname = $wpdb->get_var($wpdb->prepare( "SELECT businssname FROM wp_user_info WHERE User_ID = $user_id" ));
                    
            echo ': ' . $get_businssname . "\n";
            ?>

            <input type = "text" id = "businessName_input" name = "businessName_input" class = "input_settings" placeholder="Enter new business name">

            <button id = "businessName_input_button">Change</button>
            <button id = "businessName_input_button_confirm">Close</button>
        </div>

        <div class = "left_input">
            <label for = "businessAge_input">Age of business</label>
                <!-- ADD USER'S FIRST NAME HERE from functionss.php-->
    
            <?php   
            global $wpdb;
            $user_id = get_current_user_id();
            $get_businessage = $wpdb->get_var($wpdb->prepare( "SELECT businessage FROM wp_user_info WHERE User_ID = $user_id" ));
                    
            echo ': ' . $get_businessage . "\n";
            ?>

            <input type = "text" id = "businessAge_input" name = "businessAge_input" class = "input_settings" placeholder="Enter new age">

            <button id = "businessAge_input_button">Change</button>
            <button id = "businessAge_input_button_confirm">Close</button>
        </div>



        <div class = "left_input">
            <label for = "businessSize_input">Business size</label>
            <!-- ADD USER'S FIRST NAME HERE from functionss.php-->

            <?php   
            global $wpdb;
            $user_id = get_current_user_id();
            $get_sizebusiness = $wpdb->get_var($wpdb->prepare( "SELECT sizebusiness FROM wp_user_info WHERE User_ID = $user_id" ));


            //convert database output --> for front 
            if($get_sizebusiness === 'a'){
                $f_sizebusiness = 'Small(1-5)';
            }else{
                $f_sizebusiness = 'Medium(6+)';
            }

            echo ': ' . $f_sizebusiness . "\n";
            ?>

            <select name="businessSize_input" id="businessSize_input">
            <option>Select your business size</option>
            <option value="a">Small(1-5)</option>
            <option value="b">Medium(6+)</option>
            </select>

            <button id = "businessSize_input_button">Change</button>
            <button id = "businessSize_input_button_confirm">Close</button>
        </div>


        <div class = "left_input">
            <label for = "postcode_input">Postcode</label>
                

            <?php   
            global $wpdb;
            $user_id = get_current_user_id();
            $get_postcode = $wpdb->get_var($wpdb->prepare( "SELECT postcode FROM wp_user_info WHERE User_ID = $user_id" ));
                    
            echo ': ' . $get_postcode . "\n";
            ?>
                <input type = "text" id = "postcode_input" name = "postcode_input" class = "input_settings" placeholder="Enter new postcode">

                <button id = "postcode_input_button">Change</button>
                <button id = "postcode_input_button_confirm">Close</button>
        
        </div>



        <div class = "left_input">
            <!-- SELECT BOX FOR THE NEXT TWO QUESTIONS-->
            <label for = "location_input">Location</label>
    

            <?php   
            global $wpdb;
            $user_id = get_current_user_id();
            $get_city = $wpdb->get_var($wpdb->prepare( "SELECT city FROM wp_user_info WHERE User_ID = $user_id" ));
            $get_town = $wpdb->get_var($wpdb->prepare( "SELECT town FROM wp_user_info WHERE User_ID = $user_id" ));
            echo ': ' . $get_city ,',', $get_town . "\n";
            ?>
                <button id = "location_input_button">Change</button>
                <button id = "location_input_button_confirm">Close</button>
        </div>


        <div class = "left_input">
            <select id="cities" onChange="myFunction()">
                <option>Select your City</option>
                <option  value="Northland">Northland</option>
                <option  value="Auckland">Auckland</option>
                <option  value="Waikato">Waikato</option>  
                <option  value="Bay_of_plenty">Bay of plenty</option>  
                <option  value="Gisborne">Gisborne</option>  
                <option  value="Hawkes_bay">Hawkes bay</option>  
                <option  value="Whanganui">Whanganui</option>  
                <option  value="Wellington">Wellington</option>  
                <option  value="Nelson">Nelson</option>  
                <option  value="Marlborough">Marlborough</option>  
                <option  value="West_coast">West coast</option>  
                <option  value="Canterbury">Canterbury</option>  
                <option  value="Otago">Otago</option>  
                <option  value="Southland">Southland</option>  
            </select>
        </div>

        <div class = "left_input">
            <select id="towns">
                <option>Select your Town</option>            
            </select>  
        </div>
        


            



        <?php   
            global $wpdb;
            $user_id = get_current_user_id();
            $get_industrytype = $wpdb->get_var($wpdb->prepare( "SELECT industrytype FROM wp_user_info WHERE User_ID = $user_id" ));
            ?>


        <div class = "left_input">
            <label for = "industry_input">Industry type</label>

        <?php   
    switch($get_industrytype){
    case 'a':
        $f_industrytype = '1A - Agriculture, Forestry and Fishing';
    break;
    case "b":
        $f_industrytype = '2B - Mining';
    break;
    case "c":
        $f_industrytype = '3C - Manufacturing'; 
    break;
    case "d":
        $f_industrytype = '4D - Electricity/Gas/Water Services';
    break;
    case "e":
        $f_industrytype = '5E - Construction';
    break;
    case "f":
        $f_industrytype = '6f - Wholesale Trade';
    break;
    case "g":
        $f_industrytype = '7G - Retail Trade';
    break;
    case "h":
        $f_industrytype = '8H - Accommodation and Food Services';
    break;
    case "i":
        $f_industrytype = '9I - Transport, Postal and Warehousing';
    break;
    case "j":
        $f_industrytype = '10J - Information Media and Telecommunications';
    break;
    case "k":
        $f_industrytype = '11K - Financial and Insurance Services';
    break;
    case "l":
        $f_industrytype = '12L - Rental, Hiring and Real Estate Services';
    break;
    case "m":
        $f_industrytype = '13M - Professional, Scientific and Technical Services';
    break;
    case "n":
        $f_industrytype = '14N - Administrative and Support Services';
    break;
    case "o":
        $f_industrytype = '15O - Public Administration and Safety';
    break;
    case "p":
        $f_industrytype = '16P - Education and Training';
    break;
    case "q":
        $f_industrytype = '17Q - Health Care and Social Assistance';
    break;
    case "r":
        $f_industrytype = '18R - Arts and Recreation Services';
    break;
    case "s":
        $f_industrytype = '19S - Other Services';
    break;

    }

            echo ': ' . $f_industrytype . "\n";
            ?>

            <select id="industry_input">
                <option name="uai1" value= "0">What is your industry?(ANZIC)</option>
                <option  name="uai1" value="a">1A - Agriculture, Forestry and Fishing</option>
                <option  name="uai1" value="b">2B - Mining</option>
                <option  name="uai1" value="c">3C - Manufacturing</option>
                <option  name="uai1" value="d">4D - Electricity/Gas/Water Services</option>
                <option  name="uai1" value="e">5E - Construction</option>
                <option  name="uai1" value="f">6f - Wholesale Trade</option>
                <option  name="uai1" value="g">7G - Retail Trade</option>
                <option  name="uai1" value="h">8H - Accommodation and Food Services</option>
                <option  name="uai1" value="i">9I - Transport, Postal and Warehousing</option>
                <option  name="uai1" value="j">10J - Information Media and Telecommunications</option>
                <option  name="uai1" value="k">11K - Financial and Insurance Services</option>
                <option  name="uai1" value="l">12L - Rental, Hiring and Real Estate Services</option>
                <option  name="uai1" value="m">13M - Professional, Scientific and Technical Services</option>
                <option  name="uai1" value="n">14N - Administrative and Support Services</option>
                <option  name="uai1" value="o">15O - Public Administration and Safety</option>
                <option  name="uai1" value="p">16P - Education and Training</option>
                <option  name="uai1" value="q">17Q - Health Care and Social Assistance</option>
                <option  name="uai1" value="r">18R - Arts and Recreation Services</option>
                <option  name="uai1" value="s">19S - Other Services</option>
            </select>

            <button id = "industry_input_button">Change</button>
            <button id = "industry_input_button_confirm">Close</button>
        </div>  


    </div>


    <!-- assign this side to Account info-->
    <div class = "right_input_container">
    <div class = "right_input">
        <label for = "Email_input">Email</label>


            <?php   
            global $wpdb;
            $current_user = wp_get_current_user();
            echo ':'  . $current_user->user_email. "\n";

            ?>


        <div class = "right_input">
            <label for = "password_input">Password</label>
            <!-- Change password onto wp-assigned page-->
            <button id = "password_input_button">Change</button>
        </div>

    </div>
    </div>
</div>

<button id = "submit_all_changes">Submit all changes</button>
<!-- account deletion (are you sure added here)-->
<button id = "delete_account_btn">Delete account</button>


    <div id="del_acc_conf_modal" class="del_modal">

        <div class="del_acc_modal_content">
            <span class="close">&times;</span>
            <div>Your about to delete your account and all of its data.</div>
            <div>Are you sure?</div>
        <button id = "no_del_acc">No</button>
        <button id = "del_acc" value = 'yes'>Yes</button>
        </div>
    </div>
    





<script>

    //del_acc_conf_modal_prompt functions
        var del_acc_conf_modal = document.getElementById("del_acc_conf_modal");
        //btn
        var delete_account_btn = document.getElementById("delete_account_btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        delete_account_btn.onclick = function() {
            del_acc_conf_modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            del_acc_conf_modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == del_acc_conf_modal) {
                del_acc_conf_modal.style.display = "none";
            }
        }



         jQuery(document).ready(function($) {
             //user inputs
            $('#accountName_input').hide();
            $('#firstName_input').hide();
            $('#lastName_input').hide();
            $('#businessName_input').hide();
            $('#businessAge_input').hide();
            $('#location_input').hide();
            $('#cities').hide();
            $('#towns').hide();
            $('#postcode_input').hide();
            $('#businessSize_input').hide();
            $('#industry_input').hide();


            //buttons
            
            $('#accountName_input_button_confirm').hide();
            $('#firstName_input_button_confirm').hide();
            $('#lastName_input_button_confirm').hide();
            $('#businessName_input_button_confirm').hide();
            $('#businessAge_input_button_confirm').hide();
            $('#businessSize_input_button_confirm').hide();
            $('#postcode_input_button_confirm').hide();
            $('#location_input_button_confirm').hide();
            $('#industry_input_button_confirm').hide();
            $('#password_input_button_confirm').hide();


            $( "#firstName_input_button" ).click(function() {
                $('#firstName_input').show();
                $('#firstName_input_button').hide();
                $('#firstName_input_button_confirm').show();
            });


            $( "#firstName_input_button_confirm" ).click(function() {
                $('#firstName_input').hide();
                $('#firstName_input_button').show();
                $('#firstName_input_button_confirm').hide();

            });


            $( "#lastName_input_button" ).click(function() {
                $('#lastName_input').show();
                $('#lastName_input_button').hide();
                $('#lastName_input_button_confirm').show();
            });


            $( "#lastName_input_button_confirm" ).click(function() {
                $('#lastName_input').hide();
                $('#lastName_input_button').show();
                $('#lastName_input_button_confirm').hide();
   
            });


            $( "#businessName_input_button" ).click(function() {
                $('#businessName_input').show();
                $('#businessName_input_button').hide();
                $('#businessName_input_button_confirm').show();
            });


            $( "#businessName_input_button_confirm" ).click(function() {
                $('#businessName_input').hide();
                $('#businessName_input_button').show();
                $('#businessName_input_button_confirm').hide();

            });

            $( "#businessAge_input_button" ).click(function() {
                $('#businessAge_input').show();
                $('#businessAge_input_button').hide();
                $('#businessAge_input_button_confirm').show();
            });


            $( "#businessAge_input_button_confirm" ).click(function() {
                $('#businessAge_input').hide();
                $('#businessAge_input_button').show();
                $('#businessAge_input_button_confirm').hide();

            });


            $( "#businessSize_input_button" ).click(function() {
                $('#businessSize_input').show();
                $('#businessSize_input_button').hide();
                $('#businessSize_input_button_confirm').show();
            });


            $( "#businessSize_input_button_confirm" ).click(function() {
                $('#businessSize_input').hide();
                $('#businessSize_input_button').show();
                $('#businessSize_input_button_confirm').hide();


            });


            $( "#postcode_input_button" ).click(function() {
                $('#postcode_input').show();
                $('#postcode_input_button').hide();
                $('#postcode_input_button_confirm').show();
            });


            $( "#postcode_input_button_confirm" ).click(function() {
                $('#postcode_input').hide();
                $('#postcode_input_button').show();
                $('#postcode_input_button_confirm').hide();


            });

            $( "#location_input_button" ).click(function() {
                $('#cities, #towns').show();
                $('#location_input_button').hide();
                $('#location_input_button_confirm').show();
            });


            $( "#location_input_button_confirm" ).click(function() {
                //close input bar 
                $('#cities, #towns').hide();
                $('#location_input_button').show();
                $('#location_input_button_confirm').hide();

            });


            $( "#industry_input_button" ).click(function() {
                $('#industry_input').show();
                $('#industry_input_button').hide();
                $('#industry_input_button_confirm').show();

            });


            $( "#industry_input_button_confirm" ).click(function() {
                //close input bar 
                $('#industry_input').hide();
                $('#industry_input_button').show();
                $('#industry_input_button_confirm').hide();

            });


            //WIP  REDIRECT password change here//
            $( "#password_input_button" ).click(function() {
                window.location.href = "https://www.resilme.co.nz/reset-password/";
            });

            

        
         })
         
function myFunction() {

var selectedArr = (document.getElementById("cities").value);
var countries = document.getElementById('towns');


var arrNorthland = ['Far North', 'kaipara','Whangarei'];
var arrAuckland = ['Auckland City', 'Franklin','Hauraki Gulf Islands','Manukau City','North Shore City','Papakura','Rodney','Waiheke Island','Waitakere City'];
var arrWaikato = ['Hamilton','Hauraki','Matamata-Piako','Otorohanga','South Waikato','Taupo','Thames-Coromandel','Waikato','Waipa','Waitomo'];
var arrBay_of_plenty = ['Kaweau','Opotiki','Rotorua','Tauranga','Western Bay of Plenty','Whakatane'];
var arrGisborne = ['Gisborne'];
var arrHawkes_bay = ['Central Hawke\'s bay','Hastings','Napier','Wairoa'];
var arrWhanganui = ['Horowhenua','Manawatu','Palmerston North','Rangitikei','Ruapehu','Taraua','Whanganui'];
var arrWellington = ['Carterton','Kapiti Coast','Lower Hutt','Masterton','Porirua','South Wairarapa','Upper Hutt','Wellington'];
var arrNelson = ['Nelson','Tasman'];
var arrMarlborough = ['Blenheim','Kaikoura','Marlborough'];
var arrWest_coast = ['Buller','Grey','Westland'];
var arrCanterbury = ['Ashburton','Banks Peninsula','Christchurch City','Hurunui','Mackenzie','Selwyn','Timaru','Waimakariri','Waimate'];
var arrOtago = ['Central Otago','Clutha','Dunedin','Queenstown-Lakes','South Otago','Waitaki','Wanaka'];
var arrSouthland = ['Catlins','Gore','Invercargill','Southland'];

document.getElementById('towns').innerHTML = "";


if (selectedArr == "Northland"){
   for (i=0 ; i<arrNorthland.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrNorthland[i];
    seloptions.value = arrNorthland[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Auckland"){
   for (i=0 ; i<arrAuckland.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrAuckland[i];
    seloptions.value = arrAuckland[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Waikato"){
   for (i=0 ; i<arrWaikato.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrWaikato[i];
    seloptions.value = arrWaikato[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Bay_of_plenty"){
    for (i=0 ; i<arrBay_of_plenty.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrBay_of_plenty[i];
    seloptions.value = arrBay_of_plenty[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Gisborne"){
    for (i=0 ; i<arrGisborne.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrGisborne[i];
    seloptions.value = arrGisborne[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Hawkes_bay"){
    for (i=0 ; i<arrHawkes_bay.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrHawkes_bay[i];
    seloptions.value = arrHawkes_bay[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Whanganui"){
    for (i=0 ; i<arrWhanganui.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrWhanganui[i];
    seloptions.value = arrWhanganui[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Wellington"){
    for (i=0 ; i<arrWellington.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrWellington[i];
    seloptions.value = arrWellington[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Nelson"){
    for (i=0 ; i<arrNelson.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrNelson[i];
    seloptions.value = arrNelson[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Marlborough"){
    for (i=0 ; i<arrMarlborough.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrMarlborough[i];
    seloptions.value = arrMarlborough[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "West_coast"){
    for (i=0 ; i<arrWest_coast.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrWest_coast[i];
    seloptions.value = arrWest_coast[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Canterbury"){
    for (i=0 ; i<arrCanterbury.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrCanterbury[i];
    seloptions.value = arrCanterbury[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Otago"){
    for (i=0 ; i<arrOtago.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrOtago[i];
    seloptions.value = arrOtago[i];
    countries.appendChild(seloptions);
   } 
}
if (selectedArr == "Southland"){
    for (i=0 ; i<arrSouthland.length ; i++){
    var seloptions = document.createElement('option');
    seloptions.innerHTML = arrSouthland[i];
    seloptions.value = arrSouthland[i];
    countries.appendChild(seloptions);
   } 
}else{

}

}
</script>
<?php get_footer(); ?>