jQuery(document).ready(function($) {

    // Perform AJAX login on form submit
    $('form#reset_password').on('submit', function(e){

        var action = 'password_reset_action';
        //get email
        var mail_idreset = jQuery("#passreset").val();
        
        $.ajax({
            type: 'POST',
            datatype :'JSON',
            url: ajax_pass_res_object.ajaxurl,
            data: {
        
            action: 'password_reset_action',
            mail_idreset: mail_idreset,

            ajax_nonce: ajax_reg_info_object.nonce
        
        },
        
        success: function(result){
            alert(result);
        },

    
        success: function(data){
            console.log(data)
                mes_modal.style.display = "block";
                modal.style.display = "none";
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
    e.preventDefault();
    
})
    
    });
