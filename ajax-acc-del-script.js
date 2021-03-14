
jQuery(document).ready(function($) {



          jQuery('#del_acc').on('click',function(){
              //hides modal
              $('#del_acc_conf_modal').hide();
          //trigger popup with confirmation 

/*
          var action = 'acc_del_action';
          var del_acc = jQuery("#del_acc").val();
          console.log(del_acc);
          var ajaxdata = {
      
               action: 'acc_del_action',
               del_acc: del_acc
 
              };

         jQuery.post( ajaxurl, ajaxdata, function(res){ // ajaxurl must be defined previously
               //jQuery("#error-message").html(res);
               //jQuery("#error-message1").html(res);
          });

*/



          var del_acc = jQuery("#del_acc").val();

      
          $.ajax({
               type: 'POST',
               datatype :'JSON',
               url: ajax_acc_del_object.ajaxurl,
               data: {
                   'action' : 'account_del',
       
                   'del_acc': del_acc,

          
              
               ajax_nonce: ajax_acc_del_object.nonce
               
               },
               
               success: function(result){
                   //alert(result);
               },
       
           
               success: function(response){
                window.location.href = "https://www.resilme.co.nz/";
           },
                   
                   //add auto login for successful user registration or ask for 
       
               error: function(errorThrown){
                window.location.href = "https://www.resilme.co.nz/";
                   /*
                   console.log("failure info not sent!");
                   console.log(errorThrown);
                   alert(errorThrown);
                   */
               }
           });
           
  
  
  
  
  
      })    
})