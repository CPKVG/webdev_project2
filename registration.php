


<!-- seperate modal with success message asking user to verify reg with email-->
<div id = "mes_mdoal" class = "mes_mdoal">
  <div class="modal-contenta3">
    <span class="modal_close">&times;</span>
    <div id = "reg_success_message"></div>
    <div class = reg_instruction>We've sent a verification link, please check your email</div>
    <!-- <div class = reg_instruction>Email not received? <a  href="" id = "rep_email">Click here</a> to send another</div>   -->



  </div>
</div>

<!--End of success message-->




<!-- The Modal -->
<div id="myModala1" class="modala1">

  <!-- Modal content -->
  <div class="modal-contenta1">
    <span class="closea1">&times;</span>
    <!-- <h2 class="register-heading"><?php/* _e( '', 'debate' );*/ ?></h2>-->
    
    <div class = "Register_heading">Register</div>

	  <!--<div id="error-message"></div>-->
	  <!--<div id="error-message1"></div>-->
	<!--<form method="post" id="form_registration">-->

    <div class="left1">
      <div class="form-label"><label for="register_username"><?php _e( '', 'debate' ); ?></label></div>
          <input type="text" autocomplete="off" placeholder="username" name="username" id="register_username" />
            <div id = "username_mes_1" class = error_mes></div>
            <div id = "username_mes_2" class = error_mes></div>

    </div>


    <div class="right1">
      <div class="form-label"><label for="register_email"><?php _e( '', 'debate' ); ?></label></div>
      <input type="text" autocomplete="off" placeholder="E-mail" name="mail" id="register_email"/>
        <div id = "email_mes_1" class = error_mes></div>
        <div id = "email_mes_2" class = error_mes></div>
    </div>

    <div class="left1">
      <div class="form-label"><label for="register_password"><?php _e( '', 'debate' ); ?></label></div>
      <input type="password" placeholder="Password" name="password" id="register_password" />
      <div id = "passwrd_mes_1" class = error_mes></div>
    </div>

    <div class="right1">
      <div class="form-label"><label for="rep_password"><?php _e('','debate' ); ?></label></div>
        <input type="password" placeholder="Repeat Password" name="repassword" id="rep_password" />
      <div id = "repasswrd_mes_1" class = error_mes></div>
    </div>

 <!-- </form> -->





  <div class = "reg_header" id = reg_header_pi>Personal info</div>	

	
<div class="left1">
	<input id="firstname" type="text" name="firstname" placeholder="First Name">
  <div id = "firstname_mes_1" class = error_mes></div>
</div>

	<div class="right1">
	<input id="lastname" type="text" name="lastname" placeholder="Last Name">
  <div id = "lastname_mes_1" class = error_mes></div>
</div>


<div class = "reg_header">Business info</div>

	<div class = "left1">
	<input id="businssname" type="text" name="businssname" placeholder="Name of business">
  <div id = "businssname_mes_1" class = error_mes></div>
</div>

<div class = "right1">
	   <input id="businessage" type="text" name="businessage" placeholder = "Age of business">
     <div id = "businessage_mes_1" class = error_mes></div>
</div>

<div class = "left1">
	<!--<input id="Industrytype" type="dropdown" name="Industrytype" placeholder = "Industry(dropdowns)">-->
	<div id= industrytype type="dropdown" name="Industrytype"> 
			<select id="industselect1">
        <option name="alert1" value="0" checked="">What is your industry?(ANZIC)</option>
        <option name="idb3" value="a">1A - Agriculture, Forestry and Fishing</option>
        <option name="idb3" value="b">2B - Mining</option>
        <option name="idb3" value="c">3C - Manufacturing</option>
        <option name="idb3" value="d">4D - Electricity/Gas/Water Services</option>
        <option name="idb3" value="e">5E - Construction</option>
        <option name="idb3" value="f">6D - Wholesale Trade</option>
        <option name="idb3" value="g">7G - Retail Trade</option>
        <option name="idb3" value="h">8H - Accommodation and Food Services</option>
        <option name="idb3" value="i">9I - Transport, Postal and Warehousing</option>
        <option name="idb3" value="j">10J - Information Media and Telecommunications</option>
	      <option name="idb3" value="k">11K - Financial and Insurance Services</option>
        <option name="idb3" value="l">12L - Rental, Hiring and Real Estate Services</option>
        <option name="idb3" value="m">13M - Professional, Scientific and Technical Services</option>
			  <option name="idb3" value="n">14N - Administrative and Support Services</option>
			  <option name="idb3" value="o">15O - Public Administration and Safety</option>
			  <option name="idb3" value="p">16P - Education and Training</option>
			  <option name="idb3" value="q">17Q - Health Care and Social Assistance</option>
			  <option name="idb3" value="r">18R - Arts and Recreation Services</option>
			  <option name="idb3" value="s">19S - Other Services</option>
      </select>
	  </div>

    <div id = "industrytype_mes_1" class = error_mes></div> 
</div>



<div class = "right1">
	<div id="sizebusiness" type="dropdown" name="sizebusiness" >
		<select id="fsSelect1"> 
			<option name="alert2" value="0" checked="">What would you classifiy your business size as?</option>   
			<option name="idb4" value="a">Small(1-5)</option>
			<option name="idb4" value="b">Medium(6+)</option>
		</select>  
    </div>
    <div id = "sizebusiness_mes_1" class = error_mes></div> 
</div>




<div class = "left1">

    <div class = "leftInline1">
    <div id = city>
      <select id="cities" onChange="myFunction()">
        <option value = "0">Select your location</option>
        <option value="Northland">Northland</option>
        <option value="Auckland">Auckland</option>
        <option value="Waikato">Waikato</option>  
        <option value="Bay_of_plenty">Bay of plenty</option>  
        <option value="Gisborne">Gisborne</option>  
        <option value="Hawkes_bay">Hawkes bay</option>  
        <option value="Whanganui">Whanganui</option>  
        <option value="Wellington">Wellington</option>  
        <option value="Nelson">Nelson</option>  
        <option value="Marlborough">Marlborough</option>  
        <option value="West_coast">West coast</option>  
        <option value="Canterbury">Canterbury</option>  
        <option value="Otago">Otago</option>  
        <option value="Southland">Southland</option>  
      </select>
      </div>
      <div id = "city_mes_1" class = error_mes></div>
    </div>

  <div class = "leftInline2">
    <select id="towns">
        <option>towns</option> 
    </select>  
  </div>

</div>  




<div class = "right1">
	<input id="Postcode" type="text" name="Postcode" placeholder = "Postcode">	
  <div id = "postcode_mes_1" class = error_mes></div>
</div>

<div class = "right1">
    <div class = "reg_margin">
      <label class = 'terms-conditions'>By clicking 'Register', you have read and agree to our <a href="google.com" style = "padding-right: 1em;" >terms.</a>
        <span class = "checkmark"></span>
      </label>
  </div>
</div>

<div class = "left1">
  <div class = "reg_margin">
      <div id = modal-button-container>
        <button type="button" class="reg-submit" id = "register_me">Register</button>
        <button type="button" class="reg-submit" id = "modal_close">close</button>
      </div>
  </div>
</div>
  
<!-- </div> -->


<!--	</div> -->
		</div>
				
        

   
      </div>
    </div>
  </div>
  





    </form>
  </div>

</div>






<script>

//city/town visibility toggle onchange
jQuery(document).ready(function($){
  document.getElementById('towns').style.visibility="hidden";

  $('select#cities').change(function(){
    document.getElementById('towns').style.visibility="visible";

      if($(this).children("option:selected").val() == "0"){
        document.getElementById('towns').style.visibility="hidden";
      }

 })
/*CITY TOWN TOGGLE END*/

 /*Sync's what users selected for industry and business size 'select' with modal */
var btnclass = document.getElementsByClassName("myBtn");
  var modalfunc = function(){ 
        var b1 = document.getElementById("industselect").value;
        var b2 = document.getElementById("fsSelect").value;
      if (b1 != "0"){
        $("#industselect1").val(b1);
      } 
      if(b2 != "0"){
        $("#fsSelect1").val(b2);
      }
      }

Array.from(btnclass).forEach(function(btnclass) {
  btnclass.addEventListener('click', modalfunc);
    });

/*END OF SELECT SNYC WITH MODAL*/
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

 

  

