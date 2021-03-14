

jQuery(document).ready(function($) {

  $("#username_mes_1").hide();
  $("#email_mes_1").hide();
  $("#passwrd_mes_1").hide();
  $("#repasswrd_mes_1").hide();
  $("#firstname_mes_1").hide();
  $("#lastname_mes_1").hide();
  $("#sizebusiness_mes_1").hide();
  $("#industrytype_mes_1").hide();
  $("#city_mes_1").hide();
  $("#businssname_mes_1").hide();
  $("#businessage_mes_1").hide();
  $("#postcode_mes_1").hide();

  //readjusts modal size for errors
 
    /* Registration Ajax */
    jQuery('#register_me').on('click',function(e){


      //cross client side validation with ajax-reg-info
          //validation for reg_info using regex
    //  client_side_validation();

      //cross validation from ajax-reg-script

          $username = $("#register_username").val();
          $mail_id = $("#register_email").val();
          $passwrd = $("#register_password").val();
          $repasswrd = $("#rep_password").val();


          $firstname = $("#firstname").val();

          $lastname = $("#lastname").val();
          $businssname = $("#businssname").val();
          $businessage = $("#businessage").val();
          $industrytype = $("#industselect1").val();   
          $sizebusiness = $("#fsSelect1").val();
          $city = $("#cities").val();
          $town = $("#towns").val();
          $postcode = $("#Postcode").val();


          var letters = /^[A-Za-z]+$/;
          var busname = /^([1-zA-Z0-1@.\s]{1,255})$/;
          var numbers = /^\d+$/;

          var numbers2 = /^[0-9]{4,4}$/ //this is specifically for when postcode is empty 
          var select = /^[a-z0-9]+$/i;
          var selectwspace = /^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/;

          var user_n_regEX = /^[a-zA-Z0-9]+$/;
          var email_n_regEX = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
          var pass_n_regEX = /^(?=.*?[a-z]).{6,20}$/;
 
        //im sorry whoever is working with this
        //duplicate verification with ajax-reg-info-script.js
        //mind the differenece in $ with variables




      //this one is being read
//USERNAME
f_error = false;
    if(!$username.match(user_n_regEX) && (!$username == '')){
      f_error = true;
      var username_error_1 = '<div class="error_mes">Enter Valid Username</div>';
      $("#username_mes_1").show();

    }if($username == ''){
      f_error = true;
      var username_error_1 = '<div class="error_mes">Username is empty</div>';
    $("#username_mes_1").show();

    }if($username.match(user_n_regEX)){
      var username_error_1 = '';
      $("#username_mes_1").hide();
    }
    
    
//EMAIL 
    if(!$mail_id.match(email_n_regEX) && (!$mail_id == '')){
      f_error = true;
      //mail_error_1.push('<div class="error_mes">Enter Valid Email</div>');
      var mail_error_1 = '<div class="error_mes">Enter Valid Email</div>';
      $("#email_mes_1").show();

    }if($mail_id == ''){
      f_error = true;
      var mail_error_1 = '<div class="error_mes">Email is empty</div>';
      $("#email_mes_1").show();

    }if($mail_id.match(email_n_regEX)){
      var mail_error_1 = '';
      $("#email_mes_1").hide();
    }
    
    
//PASSWORD
  if(!$passwrd.match(pass_n_regEX) && (!$passwrd == '')){
      f_error = true;
      var passwrd_error_1 = 'Password must be between 6 to 20 chacters and at least 1 lower case';
      $("#passwrd_mes_1").show();
      //--==css to make space for error_mes above==--
        $("#reg_header_pi").css("margin-top", "35px");

    }if($passwrd == ''){
      f_error = true;
      var passwrd_error_1 = 'Password is empty';
    
      $("#passwrd_mes_1").show();

    }if($passwrd.match(pass_n_regEX)){
      var passwrd_error_1 ='';
      $("#passwrd_mes_1").hide();
    }
    
//REPEAT PASSWORD
    if($repasswrd !== $passwrd){
      f_error = true; 
      var repasswrd_error_1 = 'Password repeat does not match';
      $("#repasswrd_mes_1").show();

    }if($repasswrd == ''){
      f_error = true;
      var repasswrd_error_1 = 'Password repeat is empty';
      $("#repasswrd_mes_1").show();

    }if($repasswrd == $passwrd && $repasswrd !== ''){
      var repasswrd_error_1 = '';
      $("#repasswrd_mes_1").hide();
    }


//FIRSTNAME
    if(!$firstname.match(letters) && (!$firstname == '')){
      f_error = true;
      //firstname_error_1.push('<div id="error_mes">Enter Valid First Name</div>');
      var firstname_error_1 = 'Enter valid firstname';
      $("#firstname_mes_1").show();

      }if($firstname == ''){
        f_error = true;
        var firstname_error_1 = '<div class="error_mes">Firstname is empty</div>';
        $("#firstname_mes_1").show();

      }if($firstname.match(letters)){
        var firstname_error_1 = '';
        $("#firstname_mes_1").hide();
      }


      
      
      
//LASTNAME       
      if(!$lastname.match(letters) && (!$lastname == '') ){
        f_error = true;
        //lastname_error_1.push('<div class="error_mes">Enter Valid Last Name</div>');
        var lastname_error_1 = '<div class="error_mes">Enter Valid Last Name</div>';
        $("#lastname_mes_1").show();

      }if($lastname == ''){
        f_error = true;
        var lastname_error_1 = '<div class="error_mes">Lastname is empty</div>';
        $("#lastname_mes_1").show();

      }if($lastname.match(letters)){
        var lastname_error_1 = '';
        $("#lastname_mes_1").hide();
      }
      
      
//SIZE OF BUSINESS        
      if($sizebusiness == '0'){
        f_error = true;
       //sizebusiness_error_1.push('Select Business Size');
        var sizebusiness_error_1 = '<div class="error_mes">Business size is not selected</div>';}
        $("#sizebusiness_mes_1").show();

        if($sizebusiness.match(letters)){
          var sizebusiness_error_1 = '';
          $("#sizebusiness_mes_1").hide();
        }
        
  
      
//BUSINESS NAME        
      if(!$businssname.match(busname) && (!businssname == '')){
        f_error = true;
        var businssname_error_1 = '<div class="error_mes">Enter Valid Business Name</div>';
        $("#businssname_mes_1").show();

      }if($businssname == ''){
        var businssname_error_1 = '<div class="error_mes">Business name is empty</div>';
        $("#businssname_mes_1").show();
        f_error = true;

      }if($businssname.match(busname)){
        var businssname_error_1 = '';
        $("#businssname_mes_1").hide();
      }
      
//INDUSTRY TYPE       
      if($industrytype == '0'){
        f_error = true;
        var industrytype_error_1 = 'Industry type is not selected';
        $("#industrytype_mes_1").show();

      }
      if($industrytype !== '0'){
        var industrytype_error_1 = '';
        $("#industrytype_mes_1").hide();
      }
//BUSINESS AGE        
      
      if(!$businessage.match(numbers) && (!$businessage == '') ){
        f_error = true;
        //businessage_error_1.push('<div class="error_mes">Enter Numeric Value</div>');
        var businessage_error_1 = '<div class="error_mes">Enter Numeric Value</div>';
        $("#businessage_mes_1").show();

      }if($businessage == ''){
        f_error = true;
        var businessage_error_1 = '<div class="error_mes">Business age is empty</div>';
        $("#businessage_mes_1").show();

      }if($businessage.match(numbers)){
       var businessage_error_1 = '';
       $("#businessage_mes_1").hide();
      }
      
      
//CITY/TOWN
      if($city == '0'){
        f_error = true;
       var city_error_1 = 'Location is not selected';
       $("#city_mes_1").show();
      
      }if($city !== '0'){
        var city_error_1 = '';
        $("#city_mes_1").hide();
      };
      
      
//POSTCODE        
 $postcode_num = $postcode.toString();

      if(!$postcode.match(numbers) && ($postcode == '')){
        f_error = true;
        //postcode_error_1.push('Enter Valid Postcode');
        var postcode_error_1 = 'Enter Valid Postcode';  
        $("#postcode_mes_1").show();

      }if($postcode == ''){
        var postcode_error_1 = 'Postcode is empty';  
        f_error = true;
        $("#postcode_mes_1").show();

      }if(($postcode_num.length < 4) && (!$postcode == '')){
        f_error = true;
      var postcode_error_1 = 'Postcode is too short';  
      $("#postcode_mes_1").show();

    }if(($postcode_num.length > 4) && (!$postcode == '')){
      f_error = true;
      var postcode_error_1 = 'Postcode is too long';  
      $("#postcode_mes_1").show();

    }if($postcode.match(numbers2)){
        var postcode_error_1 = '';  
            $("#postcode_mes_1").hide();
          };

/*
      if(f_error == true){

        function screenIsWide() {
          var mq = window.matchMedia("(max-width: 768px)");
          return mq.matches;
        }
        
        function screenIsToWide() {
          var mq = window.matchMedia("(max-height: 850px)");
          return mq.matches;
        }
        if(screenIsWide() && screenIsToWide()) {
console.log("yeeet")
          $(".modal-contenta1").css("height", "1600px;"); 
        }
        
        }   
        
      }
*/

  
      if(f_error == false){ //this is default 

       $.ajax({
        type: 'POST',
        dataType: 'json',
        url: ajax_reg_object.ajaxurl,
        data: { 
            'action': 'register_action', 
            username: $("#register_username").val(),
            mail_id: $("#register_email").val(),
            passwrd: $("#register_password").val(),
            repasswrd:$("#rep_password").val(),
          
          
            ajax_nonce: ajax_reg_object.nonce
          },

      

        success: function(data){

          console.log(data);
        },
        
        success: function(response){
          
console.log(response);
console.log(response.reg1);




switch(response.reg1) {
  case 1:
    $("#username_mes_2").html(response.user_msg);
    $("#email_mes_2").hide();
    break;
  case 2:
    $("#email_mes_2").html(response.email_msg);
    $("#username_mes_2").hide();
    break;
  case 3:
    $("#username_mes_2").html(response.user_msg);
    $("#email_mes_2").html(response.email_msg);
    break;
  
    default:
   
    var modal = document.getElementById("myModala1");
    var mes_modal = document.getElementById("mes_mdoal");
    mes_modal.style.display = "block";
    modal.style.display = "none"; 

}

 
      
      }, 
      /*
      success ( res ) {
        if ( ! res.success ) {
       

        }


      },      */  

        
        error: function(errorThrown){
          console.log("failure info not sent!");
          console.log(errorThrown);
          //$('form#form_registration p.username_mes_2').text(errorThrown.message);
 
      },


      
    });

      //on success modal will close 
        
          function modal_reg_func(){
          var modal = document.getElementById("myModala1");
          var mes_modal = document.getElementById("mes_mdoal");
          mes_modal.style.display = "block";
          modal.style.display = "none"; 
          };
      

      };
      //jQuery("#error-message1").html(f_error);
      //jQuery("#error-message1").html(f_error);

      //$(".error_mes").show();

      jQuery("#username_mes_1").html(username_error_1);
      
      jQuery("#email_mes_1").html(mail_error_1);
      jQuery("#passwrd_mes_1").html(passwrd_error_1);
      jQuery("#repasswrd_mes_1").html(repasswrd_error_1);
      jQuery("#firstname_mes_1").html(firstname_error_1);
      jQuery("#lastname_mes_1").html(lastname_error_1);

      jQuery("#sizebusiness_mes_1").html(sizebusiness_error_1);
      jQuery("#industrytype_mes_1").html(industrytype_error_1);
  
      jQuery("#city_mes_1").html(city_error_1);

      jQuery("#businssname_mes_1").html(businssname_error_1);
      jQuery("#businessage_mes_1").html(businessage_error_1);
      jQuery("#postcode_mes_1").html(postcode_error_1);
         



      jQuery("#username_mes_2").html(username_mes_2);
      jQuery("#email_mes_2").html(email_mes_2);




      //jQuery("#error_mes1").html(f_error);

      if (window.matchMedia('(max-width: 768px)').matches) {

      }
      /*
      if (window.matchMedia('(max-width: 768px) && (max-height: 850px)').matches) {
        $(".modal-contenta1").css("height", "1300px;"); 
        
      }   */
      
      else{
        $(".left1").css("margin-bottom", "2em");
        $(".right1").css("margin-bottom", "2em");
      }

      


      e.preventDefault();
       });


      });


