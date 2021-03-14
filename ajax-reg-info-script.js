


jQuery(document).ready(function($) {

   $('#register_me').click('submit', function(e){


    //empty on defualt  
    //onsole.log("ajax-reg-info-script.js is called!")
     $firstname = $("#firstname").val();
     $lastname = $("#lastname").val();
     $businssname = $("#businssname").val();
     $businessage = $("#businessage").val();
     $industrytype = $("#industselect1").val();   
     $sizebusiness = $("#fsSelect1").val();
     $city = $("#cities").val();
     $town = $("#towns").val();
     $postcode = $("#Postcode").val();



     $username = $("#register_username").val();
     $mail_id = $("#register_email").val();
     $passwrd = $("#register_password").val();
     $repasswrd = $("#rep_password").val();
   


        //cross validation from ajax-reg-script
/*
        var letters = /^[A-Za-z]+$/;
        var numbers = /^\d+$/;
        var select = /^[a-z0-9]+$/i;
        var selectwspace = /^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/;
        
        var user_n_regEX = /^[a-zA-Z0-9]+$/;
        var email_n_regEX = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
        var pass_n_regEX = /^(?=.*?[a-z]).{8,}$/;
        
        //USERNAME
        f_error = false;
        if(!$username.match(user_n_regEX) && (!$username == '')){
            f_error = true;
            console.log("1");

          }if($username == ''){
            f_error = true;
            console.log("2");
          
          
        //EMAIL 
        }if(!$mail_id.match(email_n_regEX) && (!$mail_id == '')){
            f_error = true;
            console.log("3");
          }if($mail_id == ''){
            f_error = true;
            console.log("4");
          
          
        //PASSWORD
          }if(!$passwrd.match(pass_n_regEX) && (!$passwrd == '')){
            f_error = true;
            console.log("5");
          }if($passwrd == ''){
            f_error = true;
            console.log("6");
          }
        //REPEAT PASSWORD
          if(!$repasswrd.match($passwrd) || !$passwrd.match(pass_n_regEX)){
            f_error = true; 
            console.log("7");
        
          }if($repasswrd == ''){
            f_error = true;
            console.log("8");
        //FIRSTNAME
        }if(!$firstname.match(letters) && (!$firstname == '')){
            f_error = true;
            console.log("9");
        
            }if($firstname == ''){
              f_error = true;
              console.log("10");
            
        
        
        //LASTNAME       
        }if(!$lastname.match(letters) && (!$lastname == '') ){
              f_error = true;
              console.log("11");
            }if($lastname == ''){
              f_error = true;
              console.log("12");

            
        //SIZE OF BUSINESS        
            }if($sizebusiness == '0'){
              f_error = true;
              console.log("13");
        
        //BUSINESS NAME        
            }if(!$businssname.match(letters) && (!businssname == '')){
              f_error = true;
              console.log("14");
            }if($businssname == ''){
              f_error = true;
              console.log("15");
        //INDUSTRY TYPE       
            }if($industrytype == '0'){
              f_error = true;
              console.log("16");
        //BUSINESS AGE        
            
            }if(!$businessage.match(numbers) && (!$businessage == '') ){
              f_error = true;
              console.log("17");
            }if($businessage == ''){
              f_error = true;
              console.log("18");
            
            
        //CITY/TOWN
            }if($city == '0'){
              f_error = true;
              console.log("19");
            
            
        //POSTCODE        
            }if(!$postcode.match(numbers) && ($postcode == '')){
              f_error = true;
              //postcode_error_1.push('Enter Valid Postcode');
              console.log("20");
            }if($postcode == ''){
              f_error = true;
              console.log("21");
          
            
        
            //adjust modal size on error
           // }if( f_error = true){
               //this is causing buggs, need alternative
        
              //readjusts modal size for errors from height 90% -> 110%
             //$(".modal-contenta1").css("height", "115%");
        
    
            


        
            //}if(f_error = false){
    };

    */




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

          }if($username == ''){
          f_error = true;

          }

          //EMAIL 
          if(!$mail_id.match(email_n_regEX) && (!$mail_id == '')){
          f_error = true;

          }if($mail_id == ''){


          }

          //PASSWORD
          if(!$passwrd.match(pass_n_regEX) && (!$passwrd == '')){
          f_error = true;


          }if($passwrd == ''){
          f_error = true;



          //REPEAT PASSWORD
          if($repasswrd !== $passwrd){
          f_error = true; 


          }if($repasswrd == ''){
          f_error = true;


          }


          //FIRSTNAME
          if(!$firstname.match(letters) && (!$firstname == '')){
          f_error = true;


          }if($firstname == ''){
          f_error = true;


          }





          //LASTNAME       
          if(!$lastname.match(letters) && (!$lastname == '') ){
          f_error = true;


          }if($lastname == ''){
          f_error = true;
          var lastname_error_1 = '<div class="error_mes">Lastname is empty</div>';
          $("#lastname_mes_1").show();

          }


          //SIZE OF BUSINESS        
          if($sizebusiness == '0'){
          f_error = true;

          }
          

          //BUSINESS NAME        
          if(!$businssname.match(busname) && (!businssname == '')){
          f_error = true;


          }if($businssname == ''){

          f_error = true;

          }

          //INDUSTRY TYPE       
          if($industrytype == '0'){
          f_error = true;

          }

          //BUSINESS AGE        

          if(!$businessage.match(numbers) && (!$businessage == '') ){
          f_error = true;


          }if($businessage == ''){
          f_error = true;

          }

          //CITY/TOWN
          if($city == '0'){
          f_error = true;


          }

          //POSTCODE        
          $postcode_num = $postcode.toString();

          if(!$postcode.match(numbers) && ($postcode == '')){
          f_error = true;


          }if($postcode == ''){

          f_error = true;


          }if(($postcode_num.length < 4) && (!$postcode == '')){
          f_error = true;


          }if(($postcode_num.length > 4) && (!$postcode == '')){
          f_error = true;


          }







    if(f_error == false){
        console.log('ajax-reg-info-script is called!!**');
    $.ajax({
        type: 'POST',
        datatype :'JSON',
        url: ajax_reg_info_object.ajaxurl,
        data: {
            'action' : 'registration_info',

            'firstname': $("#firstname").val(),
            'lastname': $("#lastname").val(),
            'businssname': $("#businssname").val(),
            'businessage': $("#businessage").val(),
            'industrytype': $("#industselect1").val(),
            'sizebusiness': $("#fsSelect1").val(),
            'city': $("#cities").val(),
            'town': $("#towns").val(),
            'postcode': $("#Postcode").val(),


        ajax_nonce: ajax_reg_info_object.nonce
        
        },
        
        success: function(result){
            alert(result);
        
        },

    
        success: function(data){
            console.log(data)

    },
            
            //add auto login for successful user registration or ask for 
            /*
            if (data.loggedin == true){
                document.location.href = ajax_reg_info_object.redirecturl;
            }
            */
                     /*msg modal before email reg*/
                     //onclick from 'register' button
/*
                       mes_modal.style.display = "block";
                       modal.style.display = "none";
                       console.log(data);*/
        error: function(errorThrown){
            console.log("failure info not sent!");
            console.log(errorThrown);
            alert(errorThrown);
            
        }
    });
}
    e.preventDefault();
} 
})
   
    
    });

    