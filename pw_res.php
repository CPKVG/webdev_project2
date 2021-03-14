
<?php
/*
 * Template Name: Page - pw_res - non-loggined users
 */
get_header();
?>
<style>
  /*MOBILE VERS*/
@media screen and (max-width: 768px) {

    #pw_email_res{
    width:100%;
    max-width: 700px;

    }
    #colophon {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 2.5rem;
    padding-bottom: 6.5rem;  
    }
}
  /*DESKTOP VERS*/
  
  @media screen and (min-width: 768px) {

    #pw_email_res{
    width:100%;
    max-width: 700px;

    }
    #colophon {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 2.5rem;
    padding-bottom: 6.5rem;  
    }
  }


</style>

<!-- ajax-pwreset-script.js-->

    <form class = "passreset" method = "post">

        <h1>Email request for password reset</h1>
        <div id = "cond_mesg">Please enter your email</div>
        <input class="passres" type="text" name="pw_email_res" placeholder = "Email">

        <div class = button_container >
        <button class="passreset">Submit request</button>
        </div>  

        <div class="email_nonlogged_reset_error"></div>


    </form>



    <?php get_footer(); ?>