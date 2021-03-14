    //jquery for #progression (for those that are logged in)


        jQuery(document).ready(function($) {

            $('#progressheader2').hide()
      
            size_tr = $("#logged_table tr").size();
            //size_tr for first time users = 5
            //$("tr:gt(1)").hide();
            if(size_tr == 5){
                $('td#progressheader').hide();
                $('d#progressheader2').show()
            }


            if(size_tr < 9){   
               $('#loadMore').hide();
            }; 


            x = 9
           // alert('jquery is called');
            $('#logged_table tr:lt('+x+')').show();
            $('#loadMore').click(function () {
                x= (x+9 <= size_tr) ? x+9 : size_tr;
                $('#logged_table tr:lt('+x+')').show();
                 $('#showLess').show();
                if(x == size_tr){
                    $('#loadMore').hide();
                }
            });

            $('#showLess').click(function () {
                x=(x-2<0) ? 7 : 9;

    

                $('#logged_table tr').not(':lt('+x+')').hide();
                $('#loadMore').show();
                 $('#showLess').show();
                if(x == 9){
                    $('#showLess').hide();
                }
            });




            /*END of #progression on resilme.php */

            // opening and closing reg modal
            var modal = document.getElementById("myModala1");

            // Get the button that opens the modal
            
            //var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal

            //var close = document.getElementsByClassName("closea1")[0];

            // When the user clicks on the button, open the modal

            $("#myBtn").click(function(){
                modal.style.display = "block";
            });

            //ad_btn for non-logined users
            $("#ad_btn").click(function(){
                modal.style.display = "block";
            });
            // When the user clicks on <span> (x), close the modal


            $('.closea1').click(function(){
                modal.style.display = "none";
            });

            $('#modal_close').click(function(){
                modal.style.display = "none";
            })
            
            /*grey click off registraion modal */
            
              window.addEventListener("mousedown", function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
            });
              //end of modal jquery


              /*msg modal before email reg*/
              var mes_modal = document.getElementById("mes_mdoal");
            //activated by ajax-reg-info-script success

            //close 
              $('#modal_close').click(function(){
                mes_modal.style.display = "none";
            })

            window.addEventListener("click", function(event) {
                if (event.target == mes_modal) {
                    mes_modal.style.display = "none";
                }
              });

           



              /*End of msg modal */

       


        });

