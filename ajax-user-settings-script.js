

jQuery(document).ready(function($) {

    //trigger account delete
    /*
    $('$delete_account').click(function(e){
        //trigger popup with confirmation 
        del_acc = true;








    })
*/

    $('#submit_all_changes').click('submit', function(e){
     

     //console.log("ajax-user-settings.js is called!")
     firstName_input = $("#firstName_input").val();
     lastName_input = $("#lastName_input").val();
     businessName_input = $("#businessName_input").val();
     businessAge_input = $("#businessAge_input").val();
     industry_input = $("#industry_input").val();
     businessSize_input = $("#businessSize_input").val();   
     city_input = $("#cities").val();
     town_input = $("#towns").val();
     postcode_input = $("#postcode_input").val();
 
         //cross client side validation with ajax-reg-info
             //validation for reg_info using regex
       /*  client_side_validation();
         function client_side_validation($error){*/
            
      var letters = /^[A-Za-z]+$/;
      var numbers = /^\d+$/;
      var select = /^[a-z0-9]+$/i
      var selectwspace = /^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/;
         
      //console.log('ajax-user-settings.js here');
 





      $.ajax({
        type: 'POST',
        datatype :'JSON',
        url: ajax_user_settings_object.ajaxurl,
        data: {
            'action' : 'user_settings',

            'firstname': firstName_input,
            'lastname': lastName_input,
            'businssname': businessName_input,
            'businessage': businessAge_input,
            'industrytype': industry_input,
            'sizebusiness': businessSize_input,
            'city': city_input,
            'town': town_input,
            'postcode': postcode_input,


       
        ajax_nonce: ajax_user_settings_object.nonce
        
        },
        
        success: function(result){
           // alert(result);
        },

    
        success: function(data){
           //alert(data);
                   //refresh to display changes
            location.reload();
    },
            
            //add auto login for successful user registration or ask for 

        error: function(errorThrown){
            console.log("failure info not sent!");
            console.log(errorThrown);
            alert(errorThrown);
            
        }
    });
    
















 /*
      var f_error = [];
      console.log(f_error); 
      if(!firstName_input.match(letters)){
         f_error.push('Enter Valid First Name');
      }if(!lastName_input.match(letters)){
         f_error.push('Enter Valid Last Name');
 
      }if(!businessSize_input.match(select)){
         f_error.push('Select Business Size');
          
      }if(!businessName_input.match(letters)){
         f_error.push('Enter Business Name');
 
      }if(!industry_input.match(select)){
         f_error.push('Select Industry type');
 
      }if(!businessAge_input.match(numbers)){
         f_error.push('Enter Valid Numeric Value');

      }if(!city_input.match(selectwspace)){
         f_error.push('Select Location');
 
      }if(!businessAge_input.length > 3){
         f_error.push('Age Number Is Too Large');
 
     }if(!postcode_input.match(numbers)||(postcode.length != 4)){
         f_error.push('Enter Valid Postcode');
      }
 
      console.log(f_error.length);
      if(f_error.length === 0){
       
     $.ajax({
         type: 'POST',
         datatype :'JSON',
         url: ajax_user_settings_object.ajaxurl,
         data: {
             'action' : 'user_settings',
 
             'firstname': firstName_input,
             'lastname': lastName_input,
             'businssname': businessName_input,
             'businessage': businessAge_input,
             'industrytype': industry_input,
             'sizebusiness': businessSize_input,
             'city': city_input,
             'town': town_input,
             'postcode': postcode_input,
 

        
         ajax_nonce: ajax_user_settings_object.nonce
         
         },
         
         success: function(result){
             alert(result);
         },
 
     
         success: function(data){
            alert(data);
     },
             
             //add auto login for successful user registration or ask for 

         error: function(errorThrown){
             console.log("failure info not sent!");
             console.log(errorThrown);
             alert(errorThrown);
             
         }
     });
     

 }
     e.preventDefault();
     
     */

 })
     
     });
 