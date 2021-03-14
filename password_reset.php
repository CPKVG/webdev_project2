

<!-- The Modal -->
<div id="passr_modal" class="passr_modal">

  <!-- Modal content -->
  <div class="modal_content_passr">
    <span class="close_passr">&times;</span>

<form class = "passreset" method = "post">

  <p class="status"></p>
    <label for="passreset">Email</label>
    <input class="passres" type="text" name="passreset"style="width:97%;">

    <div class = button_container >
      <button id = "Email_modal_btn_req" class="passreset">Submit request</button>
    </div>  

    <?php //wp_nonce_field( 'ajax-passres-nonce', 'pass-security' );  ?>
</form>



  </div>

</div>

        



    <?php if (is_user_logged_in()) { ?>
<?php } else { ?>
        <!-- Button to Open the Modal (needs to be in menu)-->
        <div class = "button_wrapper">
         <!-- password reset button (placeholder here)
           <button id="myBtn_passr">reset password</button>
          -->
        </div>
<?php } ?>


<script>


//ALL PASSWORD RESET MODAL HERE (some stuff are in login.php)

// Get the modal
var modal_passr = document.getElementById("passr_modal");

// Get the button that opens the modal
var btn_passr = document.getElementById("myBtn_passr");

// Get the button that opens the modal (MOBILE)
var myBtn_passr_mobile = document.getElementById("myBtn_passr_mobile");


// Get the <span> element that closes the modal
var close_passr = document.getElementsByClassName("close_passr")[0];

// When the user clicks on the button, open the password_reset modal
btn_passr.onclick = function() {
    modal_passr.style.display = "block";
};

// When the user clicks on the button, open the modal(MOBILE)
myBtn_passr_mobile.onclick = function() {
    modal_passr.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
close_passr.onclick = function() {
    modal_passr.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}*/
window.addEventListener("mousedown", function(event) {
  if (event.target == modal_passr) {
    modal_passr.style.display = "none";
  }
});
</script>


  










