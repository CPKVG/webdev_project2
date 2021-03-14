jQuery(document).ready(function($) {
    $(".password-message").hide();
    
    // Perform AJAX login on form submit
    $(".passreset").on('submit', function(e){


        //get email
        //pw_email_res = from static page pw reset
        //passres = modal attachment from modal login 
        var email_idreset = $(".passres").val()

        console.log(email_idreset);


            $.ajax({
                type: 'POST',
                datatype :'JSON',   
                url: ajax_pwreset_object.ajaxurl,
                data: {
                    'action' : 'ajax_pwreset',
                    'email_idreset' : email_idreset,
                    
                ajax_nonce: ajax_pwreset_object.nonce
                },
            
            success: function(result){
                alert(result);
            },
    
        
            success: function(data){
                console.log(data)
        },
                

            error: function(errorThrown){
                console.log("failure info not sent!");
                console.log(errorThrown);
            }
        });

        

        e.preventDefault();


     });



        });



