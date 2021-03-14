<?php
/*
 * Template Name: Page - Reset Password
 */
get_header();
?>

<style>
    #user_pass{
    width:100%;
    max-width: 700px;

    }
#user_pass_confirm{
    width:100%;
    max-width: 700px;
}



</style>

<div id="content" class="content-area" role="main">
    <div class="forms-wrapper">
        <div class="form-reset-password-wrapper">
            <h1>Reset your password</h1>
                <div id = "cond_mesg">Password requires at least 8 characters and 1 number</div>
                <div id = "pw-error"></div>
                <input type="hidden" id="user_login" value="" autocomplete="off">
                <p class="form-row">
                    <input type="password" name="user_pass" id="user_pass" placeholder ="New password">
                </p>
                <p class="form-row">
                    <input type="password" name="user_pass_confirm" id="user_pass_confirm" placeholder = "comfirm new password">
                </p>
                <p class="reset-password-submit">
                <button id="reset-password-btn">Submit</button>
                    <!--<input type="submit" id="reset-password-btn" class="reset-password-btn" value="Submit"/>-->
                </p>
                <div class="form-reset-password-errors"></div>
           
        </div>
    </div>
</div>





<?php get_footer(); ?>