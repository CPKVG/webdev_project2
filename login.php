<!-- The Modal -->
<div id="login_modal" class="login_modal">



  <!-- Modal content -->
  <div class="modal_content_login">
    <span class="close_login">&times;</span>
    <div class = "Login_heading">login</div>
    <form id="login" action="form" method="post">
      <div class = loginform>
                    <p class="status"></p>
                    <!--<label for="username">Username</label> -->
                    <input id="username" type="text" placeholder = "username" name="username"style="width:72%;margin-bottom: 1em;"> 
                    
                    <!-- <label for="password">Password</label> -->
                    <div class = "lost_container">
                        <input id="password" type="password" placeholder = "password" name="password"style="width:72%;margin-bottom: 1em;">
                        <a class="lost" id="myBtn_passr" >Forgot password?</a>
                    </div>


                    <!--log in button -->
                    <div class = button_container>
                        <input class="btn btn-primary" id = "login_button" type="submit" value="Login" name="submit">
                        <a class="lost_mobile" id="myBtn_passr_mobile" >Forgot password?</a>
                    </div>

                    <?php
                    //prevent automated login scripts
                    wp_nonce_field( 'ajax-login-nonce', 'security' ); 
                    ?>
      </div>
    </form>




  </div>

</div>

<!--register + login + reset password-->
<?php if (is_user_logged_in()) { ?>
    <a class="loginout_button" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
<?php }?>

<script>

// Get the modal
var modal_login = document.getElementById("login_modal");

// Get the button that opens the modal
var btn_login = document.getElementById("myBtn_login");

// Get the <span> element that closes the modal
var close_login = document.getElementsByClassName("close_login")[0];

// When the user clicks on the button, open the modal
btn_login.onclick = function() {
    modal_login.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
close_login.onclick = function() {
    modal_login.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}*/
window.addEventListener("mousedown", function(event) {
  if (event.target == modal_login) {
    modal_login.style.display = "none";
  }
});

</script>


  










