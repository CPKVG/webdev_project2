jQuery(document).ready(function($) {


    jQuery('#reset-password-btn').on('click',function(){
    var user_pass = jQuery("#user_pass").val();

    var user_pass_confirm = jQuery("#user_pass_confirm").val();


    var verf_pass = /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/;


    var pw_error = [];
    
    if(!user_pass.match(verf_pass)){
        pw_error.push('<p class="pw-error">Remember, passwords require at least 8 characters and 1 number!</p>');
    }if(!user_pass.match(user_pass_confirm)){
        pw_error.push('<p class="pw-error">Password does not match</p>');
  

    }if(pw_error.length === 0){
        
        $.ajax({
            type: 'POST',
            datatype :'JSON',
            url: ajax_rpw_ln_object.ajaxurl,
            data: {
                'action' : 'ajax_rpw_ln',

                'user_pass': user_pass,

            ajax_nonce: ajax_rpw_ln_object.nonce
            
            },
            
            success: function(result){
                alert(result);
                    alert("Password successfully changed");
            },

        
            success: function(data){
                console.log(data)
                alert("Password successfully changed");

            },
                

            error: function(errorThrown){
                console.log("failure info not sent!");
                console.log(errorThrown);
                alert(errorThrown);
                
            }
        });

    }


});
});