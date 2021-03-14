<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','font-awesome','flexslider' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

//CUSTOM CODE
//custom short codes
	include('custom-shortcodes.php');




add_action('wp_enqueue_scripts','ajax_tool_init');


function ajax_tool_init(){

   	wp_register_script('ajax-resil-script', 
       get_stylesheet_directory_uri() . '/ajax-resil-script.js', 
		array('jquery') ); 

	wp_localize_script('ajax-resil-script','ajax_resil_object', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('nonce_name')

	));
	 // To enqueque the JS file.
	
	wp_enqueue_script('ajax-resil-script');
	

	if(is_user_logged_in()){
		add_action('init', 'ajax_tool');
	}
	else{
		add_action('init', 'ajax_tool');
		}
};


function ajax_tool(){	
	
	global $wpdb, $score, $date;
		
	$user = get_current_user_id();

	$score = $_POST['score'];
	$date = $_POST['date'];
	
	$wpdb->insert(	
		'wp_score',
		array(
			'score' => $score,
			'date'  => $date,	
			'ID' => $user
		)
		
	);
	$user = $_POST['ID'];
die();
};

add_action('wp_ajax_ajax_tool','ajax_tool');
add_action('wp_ajax_nopriv_ajax_tool','ajax_tool');



//ajax-reg-script (registration)functions**

add_action('wp_enqueue_scripts','ajax_reg_init');

function ajax_reg_init(){

		wp_register_script('ajax-reg-script', 
		get_stylesheet_directory_uri() . '/ajax-reg-script.js', 
		array('jquery') ); 

	wp_localize_script('ajax-reg-script','ajax_reg_object', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('nonce_name')

	));
	// To enqueque the JS file.
	wp_enqueue_script('ajax-reg-script');
	if (!is_user_logged_in()) {
		add_action('init', 'st_handle_registration', 10 , 1 );
	}
 
}
 



function st_handle_registration(){

	if( $_POST['action'] == 'register_action' ) {

	$error = '';
	
	 $uname = trim( $_POST['username'] );
	 $email = trim( $_POST['mail_id'] );
	 $pswrd = $_POST['passwrd'];
	 $repasswrd = $_POST['repasswrd'];



	
	if( empty( $_POST['username'] ) ){
	 $error .= '<p class="error">Enter Username</p>';
	}


	if( empty( $_POST['mail_id'] ) ){
	 $error .= '<p class="error">Enter Email Id</p>';
	}
	 elseif( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
	 $error .= '<p class="error">Enter Valid Email</p>';
	 }
	if( empty( $_POST['passwrd'] ) ){
	 $error .= '<p class="error">Password should not be blank</p>';
	}
	if(empty($_POST['repasswrd'])){
	$error .= '<p class="error">Password should not be blank</p>';
	}
	if(!preg_match("/^(?=.*?[a-z]).{8,}$/", $pswrd)){
		$error .= '<p class="error">At least 1 lower case character and minimum of 8 in length </p>';
	}

	elseif(($_POST["passwrd"]) != ($_POST["repasswrd"])){
			$error .='<p class="error">Password does not match</p>';
	}
	
	if( empty( $error) ){	

	
		$status = wp_create_user( $uname, $pswrd ,$email );




	if( is_wp_error($status) ){
		
		if( username_exists( $uname ) && !email_exists($email)){
		echo json_encode(array('reg1'=> 1,'user_msg' => 'This username is unavailable.'));

		}if(email_exists($email) && !username_exists( $uname )){
		echo json_encode(array('reg1'=> 2,'email_msg' => 'This email is already registered.'));

		}if(email_exists($email) && username_exists( $uname )){
			echo json_encode(array('reg1'=> 3,'email_msg' => 'This email is already registered.','user_msg' => 'This username is unavailable.'));
		}
		
		


	 }else{
		//echo json_encode(array('reg'=> true));


			

		///echo $msg;

		};
	
	}else{
	
	echo $error;
	 }
	die(1);
	 }



	}

	



/*
	function st_handle_registration(){

		$error = '';
	
		$uname = trim( $_POST['username'] );
		$email = trim( $_POST['mail_id'] );
		$pswrd = trim ($_POST['passwrd']);
		$repasswrd =trim( $_POST['repasswrd']);

		if( empty( $error) ){

			//add_action('init', 'emailtestfunc');
			$status = wp_create_user( $uname, $pswrd ,$email );
			
	
		if( is_wp_error($status) ){
		
		$msg = '';
		
		 foreach( $status->errors as $key=>$val ){
		
		 foreach( $val as $k=>$v ){
		
		 $msg = '<p class="error">'.$v.'</p>';
			 }
		 }

		}

	}
};






*/







	add_action( 'wp_ajax_register_action', 'st_handle_registration' );
	add_action( 'wp_ajax_nopriv_register_action', 'st_handle_registration' );



	add_action('wp_enqueue_scripts','registration_info_init');
	function registration_info_init(){
	
		   wp_register_script('ajax-reg-info-script', 
           get_stylesheet_directory_uri() . '/ajax-reg-info-script.js', 
			array('jquery') ); 

			wp_enqueue_style( 'registration.css', get_stylesheet_directory_uri() . '/registration.css');
	
		wp_localize_script('ajax-reg-info-script','ajax_reg_info_object', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('nonce_name')//,
			//'redirecturl' => home_url()
			//'loadingmessage' => __('Sending user info, please wait...')

		));
		 // To enqueque the JS file.
		wp_enqueue_script('ajax-reg-info-script');
	
		
	
		if(!is_user_logged_in()){
			add_action('init', 'registration_info');
		}

	
    };
    
	
	
	
	function registration_info(){

		$error ='';
		global $wpdb;

		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$businssname = trim($_POST['businssname']);
		$businessage = trim($_POST['businessage']);
		$industrytype = trim($_POST['industrytype']);
		$sizebusiness = trim($_POST['sizebusiness']);
		$city = trim($_POST['city']);
		$town = trim($_POST['town']);
		$postcode = trim($_POST['postcode']);

		//validation for reg_info

		//WARNING : Errors are all placeholders for future use, they are not feeded onto front end, 
		//javascript Ajax-reg-script fills that role
		
		if( empty( $firstname ) ){
			$error = '<p class="error">Enter First Name</p>';
		}elseif( !preg_match("/^[a-zA-Z'-]+$/",$firstname) ){
			$error = '<p class="error">Enter Valid First Name</p>';
		}


		if( empty( $lastname ) ){
			$error = '<p class="error">Enter Last Name</p>';
		}elseif( !preg_match("/^[a-zA-Z'-]+$/",$lastname) ){
			$error = '<p class="error">Enter Valid Last Name</p>';
		}


		if( empty( $businssname) ){
			$error = '<p class="error">Enter Business Name</p>';
		}elseif( !preg_match("/^[a-zA-Z'-]+$/",$businssname) ){
			$error = '<p class="error">Enter Valid Business Name</p>';
		}


		if( empty( $businessage ) ){
			$error = '<p class="error">Enter Numeric Value</p>';
		}
		if( !is_numeric($businessage) ){
			$error = '<p class="error">Enter Valid Numeric Value</p>';
		}
		elseif( strlen($businessage) > 3){
			$error = '<p class="error">Age Number Is Too Large</p>';
		}


	//back end validation for industry type, industry size, city, town and user
		if( empty( $industrytype )){
			$error = '<p class="error">Please enter input</p>';
		}
		//passes only numeric + text char
		elseif( !preg_match("/[A-Za-z0-9]+/", $industrytype )){
			$error = '<p class="error">Please enter valid input</p>';
		}

		if( empty( $sizebusiness )){
			$error = '<p class="error">Please enter input</p>';
		}
		elseif(  (!preg_match("/^[a-zA-Z'-]+$/", $sizebusiness))){
			$error = '<p class="error">Please enter valid input</p>';
		}


		if( empty( $city )){
			$error = '<p class="error">Please enter input</p>';
		}
		elseif( !preg_match("/^[a-zA-Z'-]+$/", $city)){
			$error = '<p class="error">Please enter valid input</p>';
		}
		

		if( empty( $town )){
			$error = '<p class="error">Please enter input</p>';
		}
		
		elseif( !preg_match("/^[a-zA-Z'-]+$/", $town)){
			$error = '<p class="error">Please enter valid input</p>';
		}
		
		if( empty( $postcode ) ){
			$error = '<p class="error">Enter Postcode</p>';
		}
		elseif( !is_numeric($postcode)||(strlen($postcode) != 4 ) ){
			$error = '<p class="error">Enter Valid Postcode</p>';
		}


		if(empty($error)){
			$wpdb->insert(	
				'wp_user_info',
				 array(
					'firstname' => $firstname,
					'lastname'  => $lastname,	
					'businssname' => $businssname,
					'businessage' => $businessage,
					'industrytype' => $industrytype,
					'sizebusiness' => $sizebusiness,
					'city' => $city,
					'town' => $town,
					'postcode' => $postcode
				)
				
			);
		
		}

	
	};

	function registration_info_user_id( $user_id ){ 

	global $wpdb; 

		$wpdb->update(
			'wp_user_info',
			array(
				'User_ID' => $user_id
			),
			array( 'User_ID' => NULL )//replace null with user ID provided by user_meta_data
		); 

 };

	add_action('wp_ajax_registration_info','registration_info');
	add_action('wp_ajax_nopriv_registration_info','registration_info');

	add_action('user_register', 'registration_info_user_id',11, 1);





//--==email verification START==--

//generate random strings
function generateRandomString($stringLength){
	//specify characters to be used in generating random string, do not specify any characters that wordpress does not allow in the creation.
	$characters = "0123456789ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz_[]{}!@$%^*().,>=-;|:?";

	//get the total length of specified characters to be used in generating random string
	$charactersLength = strlen($characters);

	//declare a string that we will use to create the random string 
	$randomString = '';

	for ($i = 0; $i < $stringLength; $i++) {
	//generate random characters
	$randomCharacter = $characters[rand(0, $charactersLength - 1)];
	//add the random characters to the random string
	$randomString .=  $randomCharacter;
	};

	//sanitize_user, just in case 
	$sanRandomString = sanitize_user($randomString);
	//check that random string contains Uppercase/Lowercase/Intergers/Special Char and that it is the correct length
	if (
	(preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z].*[_\W])', $sanRandomString)==1) &&
	(strlen($sanRandomString)==$stringLength)
	) 
	{
	//return the random string if it meets the complexity criteria 
	return $sanRandomString;
	}else {
	// if the random string does not meet minimium criteria call function again 
	return call_user_func("generateRandomString",($stringLength) );
	}       
	};
	
	//end of generateRandomString function
	//call the function to generate a random string with Uppercase Letters/Lowercase Letters/Intergers/Special Characters 
	//into the function we pass the length of string we require, in this exampe it will generate a string 32 characters long
	

	function my_registration( $user_id ) {

		$code = generateRandomString(32);

		// make it into a code to send it to user via email

		// create the activation code and activation status
		update_user_meta($user_id, 'account_activated', 0);
		update_user_meta($user_id, 'activation_code', $code);

		$string = array('id'=>$user_id, 'code'=>$code);
		// create the url
		$url = get_site_url(). '/my-account/?act=' .base64_encode( serialize($string));
		
		$html = 'Please click on the following link <br/><br/> <a href="'.$url.'">'.$url.'</a>';

		//get user data
		$user_info = get_userdata($user_id);
		$mailadresje = $user_info->user_email;
		wp_mail( $mailadresje, 'ResilMe: Account Activation Link',$html);

	//add_action( 'wp_enqueue_scripts', 'process_my_form' );
	}

	
	add_action( 'user_register', 'my_registration', 12, 3 );



//setting is_activated = 0 to deactivate user as default and to login/prompt email verification 



	add_action( 'init', 'verify_user_code' );

	function verify_user_code(){
		if(isset($_GET['act'])){
			$data = unserialize(base64_decode($_GET['act']));
			$code = get_user_meta($data['id'], 'activation_code', true);
			// verify whether the code given is the same as ours
			if($code == $data['code']){	
				// update the user meta
				//$user_status_activated = update_user_meta($data['id'], 'is_activated', 1);
				update_user_meta($data['id'], 'is_activated', 1);

		
	
				//alert condition to trigger success alert

				
				//account activation
				//extra layer of security if $html link is hacked
				if( !current_user_can('editor') || !current_user_can('administrator') ){
					//auto login 
					$user_id = $data['id'];

					clean_user_cache($user_id);
					wp_clear_auth_cookie();
					wp_set_current_user($user_id);
					wp_set_auth_cookie($user_id, true, false);
						
					$user = get_user_by('id', $user_id);
					update_user_caches($user);
					
					//wp_redirect( home_url() );
					//exit;	


					//add_action('wp_footer', 'reg_succ');
					// /die();
				}
				/*
				$newURL = 'https://www.resilme.co.nz/';
				header('Location: '.$newURL);
				die();*/
				echo "<script>alert('Your account has been activated successfully');document.location='https://www.resilme.co.nz/'</script>";
			}



		}
	
	}



/*
	function reg_succ(){
		?>
		<script type="text/javascript">
			function codeAddress() {

					
				setTimeout(function(){alert('Your account has been activated successfully');},1000);
	
			}
			window.onload = codeAddress;
			
		</script>
	
		<?php
	};
*/
	// for user success alert
	/*
if(verify_user_code() == true){
	add_action('wp_footer', 'reg_succ');	
}
*/



	//user activation status 
	add_action( 'init', 'default_deactivated_user', 5 , 4 );

	function default_deactivated_user(){
		$user_id = get_current_user_id();
		$status = get_user_meta($user_id,'is_activated',true);

			if( current_user_can('subscriber') || current_user_can('editor')){
				//avoid anyone else but editor(extra security for the future) or subscriber signing up 
				if($status =='1'){

					//activated users are not auto logged out
				}else{
					wp_logout();
					//can add message to authenticate their account first
				}	
			}
	}




//--==email verification END ==--



//modal login ajax//

function ajax_login_init(){

    wp_register_script('ajax-login-script', get_stylesheet_directory_uri() . '/ajax-login-script.js', array('jquery') ); 
	wp_enqueue_script('ajax-login-script');
	wp_enqueue_style( 'login.css', get_stylesheet_directory_uri() . '/login.css');

    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}


function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}



//-==USER SETTINGS==--

function ajax_user_settings_init(){

	wp_register_script('ajax-user-settings-script', get_stylesheet_directory_uri() . '/ajax-user-settings-script.js', array('jquery') ); 
	wp_enqueue_script('ajax-user-settings-script');


	wp_localize_script('ajax-user-settings-script','ajax_user_settings_object', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('nonce_name')

	));
	//wp_enqueue_script('ajax_user_settings-script');
	add_action('wp_ajax_user_settings','ajax_user_settings');

	//add_action('init', 'ajax_user_settings');
	add_action('wp_ajax_user_settings','user_settings');
}

if (is_user_logged_in()){
	add_action('init','ajax_user_settings_init');
}


function user_settings(){

	$user_id = get_current_user_id();

	$error ='';
	global $wpdb;

	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$businssname = trim($_POST['businssname']);
	$businessage = trim($_POST['businessage']);
	$industrytype = trim($_POST['industrytype']);
	$sizebusiness = trim($_POST['sizebusiness']);
	$city = trim($_POST['city']);
	$town = trim($_POST['town']);
	$postcode = trim($_POST['postcode']);


	//check past users if empty data for validation(1)

	//get past users data for validation(2)
	$get_firstname = $wpdb->get_var($wpdb->prepare( "SELECT firstname FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_lastname = $wpdb->get_var($wpdb->prepare( "SELECT lastname FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_businssname = $wpdb->get_var($wpdb->prepare( "SELECT businssname FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_businessage = $wpdb->get_var($wpdb->prepare( "SELECT businessage FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_industrytype = $wpdb->get_var($wpdb->prepare( "SELECT industrytype FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_sizebusiness = $wpdb->get_var($wpdb->prepare( "SELECT sizebusiness FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_postcode = $wpdb->get_var($wpdb->prepare( "SELECT postcode FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_city = $wpdb->get_var($wpdb->prepare( "SELECT city FROM wp_user_info WHERE User_ID = $user_id" ));
	$get_town = $wpdb->get_var($wpdb->prepare( "SELECT town FROM wp_user_info WHERE User_ID = $user_id" ));
	

 

	//validation + data entry for firstname

	if( empty( $firstname ) && empty($get_firstname) ){
		$fn_error = '<p class="error">Enter First Name</p>';
	}elseif( !preg_match("/^[a-zA-Z'-]+$/",$firstname) ){
		$fn_error = '<p class="error">Enter Valid First Name</p>';
	}
	
	if(empty($fn_error)){
		$wpdb->update( 
			'wp_user_info', 
			array( 
				'firstname' => $firstname
			), 
			array( 'User_ID' => $user_id ),
			array( 
				'%s' 
			), 
			array( '%d' ) 
		);

	}
	
	//end of firstname


	if( empty( $lastname ) && empty($get_lastname) ){
		$ln_error = '1';
	}elseif( !preg_match("/^[a-zA-Z'-]+$/",$lastname) ){
		$ln_error = '1';
	}

	if(empty($ln_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'lastname' => $lastname
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%s'  
		), 
		array( '%d' ) 
	);
	}



	if( empty( $businssname) && empty($get_businssname) ){
		$bn_error = '<p class="error">Enter Business Name</p>';
	}elseif( !preg_match("/^[a-zA-Z'-]+$/",$businssname) ){
		$bn_error = '<p class="error">Enter Valid Business Name</p>';
	}

	if(empty($bn_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'businssname' => $businssname 
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%s'   
		), 
		array( '%d' ) 
	);
	}



	if( empty( $businessage ) && empty($get_businessage) ){
		$ba_error = '<p class="error">Business Enter Numeric Value</p>';
	}
	if( !is_numeric($businessage) ){
		$ba_error = '<p class="error">Enter Valid Numeric Value</p>';
	}
	elseif( strlen($businessage) > 3){
		$ba_error = '<p class="error">Age Number Is Too Large</p>';
	}
	if(empty($ba_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'businessage' => $businessage
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%d',    // value4
		), 
		array( '%d' ) 
	);
	}


//back end validation for industry type, industry size, city, town and user
	if( empty( $industrytype  ) && empty($get_industrytype)){
		$it_error = '<p class="error">Please enter input</p>';
	}
	//passes only numeric + text char
	elseif( !preg_match("/[A-Za-z]+/", $industrytype )){
		$it_error = '<p class="error">Please enter valid input</p>';
	}
	if(empty($it_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'industrytype' => $industrytype
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%s'
		), 
		array( '%d' ) 
	);
	}



	if( empty( $sizebusiness ) && empty($get_sizebusiness) ){
		$sb_error = '<p class="error">Please enter input</p>';
	}
	elseif(  (!preg_match("/^[a-zA-Z'-]+$/", $sizebusiness))){
		$sb_error = '<p class="error">Please enter valid input</p>';
	}
	if(empty($sb_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'sizebusiness' => $sizebusiness
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%s'   
		), 
		array( '%d' ) 
	);
	}


	if( empty( $city ) && empty($get_city) ){
		$c_error = '<p class="error">Please enter input</p>';
	}
	elseif( !preg_match("/^[a-zA-Z'-]+$/", $city)){
		$c_error = '<p class="error">Please enter valid input</p>';
	}
	if(empty($c_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'city' => $city 
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%s'   
		), 
		array( '%d' ) 
	);
	}


	

	if( empty( $town ) && empty($get_town) ){
		$t_error = '<p class="error">Please enter input</p>';
	}
	elseif( !preg_match("/^[a-zA-Z'-]+$/", $town)){
		$t_error = '<p class="error">Please enter valid input</p>';
	}
	if(empty($t_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'town' => $town
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%s' 
		), 
		array( '%d' ) 
	);
	}



	
	if( empty( $postcode ) && empty( $get_postcode ) ){
		$p_error = '<p class="error">Enter Postcode</p>';
	}
	elseif( !is_numeric($postcode)||(strlen($postcode) != 4 ) ){
		$p_error = '<p class="error">Enter Valid Postcode</p>';
	}
	if(empty($p_error)){
	$wpdb->update( 
		'wp_user_info', 
		array( 
			'postcode' => $postcode  // value9
		), 
		array( 'User_ID' => $user_id ),
		array( 
			'%d'    // value9
		), 
		array( '%d' ) 
	);
	}

}

//account killer button




/*
add_action('wp_enqueue_scripts','account_del_init');
function account_del_init(){	

	wp_register_script('ajax-acc-del-script', get_stylesheet_directory_uri() . '/ajax-acc-del-script.js', array('jquery') ); 
	wp_enqueue_script('ajax-acc-del-script');


	wp_localize_script('ajax-acc-del-script','ajax_acc_del_object', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('nonce_name')

	));
	//wp_enqueue_script('ajax_user_settings-script');
	add_action('wp_ajax_account_del','ajax_account_del');

	//add_action('init', 'ajax_user_settings');
	add_action('wp_ajax_account_del','account_del');
}

*/


add_action('wp_enqueue_scripts','account_del_init');

function account_del_init(){

	wp_register_script('ajax-acc-del-script', 
    get_stylesheet_directory_uri() . '/ajax-acc-del-script.js', 
	 array('jquery') ); 

 	wp_localize_script('ajax-acc-del-script','ajax_acc_del_object', array(
	 'ajaxurl' => admin_url('admin-ajax.php'),
	 'nonce' => wp_create_nonce('nonce_name')

 ));
  // To enqueque the JS file.
 wp_enqueue_script('ajax-acc-del-script');
 //add_action( 'wp_ajax_nopriv_ajax_reg', 'ajax_reg' );

	if(is_user_logged_in()){
		add_action('init', 'account_del');
		//echo "account_del_init";	
	}

}	




function account_del(){

		$del_acc = trim($_POST['del_acc']);
	
	if ( ! is_user_logged_in() ) {
        return;
	}
	
	//$del_acc = trim($_POST['del_acc']);
	//echo $del_acc;	

	if($del_acc == 'yes'){
		if( !current_user_can('editor') || !current_user_can('administrator') ){

			$current_user = wp_get_current_user();
			wp_delete_user( $current_user->ID );

			$id = $current_user;

			$html = 'Your account was successfully deleted';

			//get user data
			$user_info = get_userdata($id);
			$mailadresje = $user_info->user_email;
			wp_mail( $mailadresje, 'ResilMe: Account deleted',$html);



			//delete row custom table
			$table = 'wp_user_info';
			$wpdb->delete( $table, array( 'User_ID' => $id ) );



		}else{
			echo "admin users are unable to delete their accounts";
		}


		wp_logout();
		

/*
		wp_redirect(home_url());
		exit;
*/


		//add_action( 'wp_logout','wpdocs_ahir_redirect_after_logout' );
	}
	

 
	//add_action( 'wp_logout','wpdocs_ahir_redirect_after_logout' );
}








/*
//default logout redirects to homepage
add_action( 'wp_logout','wpdocs_ahir_redirect_after_logout' );
function wpdocs_ahir_redirect_after_logout() {
    wp_safe_redirect( home_url() );
    exit();
}

*/

add_action( 'wp_ajax_account_del', 'account_del' );
add_action( 'wp_ajax_nopriv_account_del', 'account_del' );




//ROLE DATA CLEASE, ONLY INICIATE IF YOU KNOW WHAT UR DOING
//add_action( 'init', 'subscriber_nuke' );
function subscriber_nuke(){
	require_once ABSPATH . 'wp-admin/includes/user.php';
	$get_subscribers = get_users('role=subscriber');
		foreach($get_subscribers as $user){
			wp_delete_user($user->ID);
		}
    }
//END OF NUKE/CLEASE




//end ofaccount killer button


//-==END USER SETTINGS==--


//-==FORGOT PASSWORD==--


function ajax_pwreset_init(){

   	wp_register_script('ajax-pwreset-script', get_stylesheet_directory_uri() . '/ajax-pwreset-script.js', array('jquery') ); 
	wp_enqueue_script('ajax-pwreset-script');

	wp_localize_script('ajax-pwreset-script','ajax_pwreset_object', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('nonce_name')

	));
	//add_action('init', 'ajax_pwreset');
	add_action('wp_ajax_nopriv_ajax_pwreset','ajax_pwreset');
}
//add_action('wp_ajax_ajax_pwreset','ajax_pwreset');


// Execute the action only if the user isn't logged in
if (!is_user_logged_in()){
	add_action('init','ajax_pwreset_init');
}

function ajax_pwreset($user){
	$email_idreset = trim($_POST['email_idreset']);
	$exists = email_exists($email_idreset);

	if ( $exists ) {
		echo "You've requested a link to reset your  , you should receive an email within a few minutes. For security reasons the link can only be used for 30 minutes."; 


		$user = get_user_by( 'email', $email_idreset );
		$key = get_password_reset_key( $user );
		//echo $key;
		//echo $reset_key;

		$user_login = stripslashes($user->user_login);
		$rp_link =  wp_login_url() ."?action=rp&key=$key&login=" . rawurlencode( $user_login ); 
		
		$html = "Password reset was requested for this account<br>
		'<a href=$rp_link>Click Here</a>'to set a new password.<br><br>
		If this wasn’t you, please ignore this email.";

		wp_mail( $email_idreset, 'ResilMe: Password Reset',$html);
	} else {
		echo "That E-mail doesn't belong to any registered users on this site";
	}
	}



	add_filter( 'lostpassword_url', 'my_lost_password_page', 10, 2 );
	function my_lost_password_page( $lostpassword_url, $redirect ) {
		return home_url( '/lost-password/?redirect_to=' . $redirect );
	}



// PASSWORD RESET FOR USERS THAT ARE LOGGIN
//AJAX, (ln = loggedin)


//if(is_page( 'reset-password' )){
add_action('wp_enqueue_scripts','ajax_rpw_ln_init');
//}



function ajax_rpw_ln_init(){
	if ( is_page('reset-password') ) {

		wp_register_script('ajax-rpw-ln-script', get_stylesheet_directory_uri() . '/ajax-rpw-ln-script.js', array('jquery') ); 
		wp_enqueue_script('ajax-rpw-ln-script');


		wp_localize_script('ajax-rpw-ln-script','ajax_rpw_ln_object', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('nonce_name')

		));
		wp_enqueue_script('ajax-rpw-ln-script');

		

		if(is_user_logged_in()){	
			add_action('init', 'ajax_rpw_ln', 10 , 1 );
		}

		add_action('wp_ajax_ajax_rpw_ln','ajax_rpw_ln');

	}
};



function ajax_rpw_ln(){
//validation + redirect after success

	if( $_POST['action'] == 'ajax_rpw_ln' ) {

			$user_pass = trim( $_POST['user_pass'] );

			$user_id = get_current_user_id(); 
			
			if( empty( $user_pass ) ){
				$pw_error = '<p class="error">Enter valid Password</p>';
			}elseif(preg_match("/^(?=.*?[a-z]).{8,}$/", $user_pass)){
				//1 lower case + min 8 char REGEX
				wp_set_password( $user_pass, $user_id );		
				//End of Pw reset on users page --> redirect to homeurl()

				//send email-reminder that their password has changed

				$user_info = get_userdata($user_id);
				$mailadresje = $user_info->user_email;
				//res_url for user's email to override their previous pw incase of hack

				$res_url = "https://www.resilme.co.nz/password-reset/";

				$html = "Reminder that your account's password was changed <br><br> If this was not you, please reset your password by clicking 
				'<a href=$res_url>Here</a>';
				or get in contact with us at southharbourbiz@xtra.co.nz.";
				wp_mail( $mailadresje, 'ResilMe: Password Was Changed',$html);


				
			}
		}else{
			die();
		}
	};
	add_action('wp_ajax_ajax_rpw_ln','ajax_rpw_ln');
	//add_action( 'wp_ajax_nopriv_ajax_rpw_ln', 'ajax_rpw_ln' );








add_filter('body_class', function($classlist) {
    // add custom css class to body element if user is logged in
    if (is_user_logged_in()) {
        $classlist[] = 'user-is-loggedin';
    }

    return $classlist;
});


//remove admin bar 
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
     // 'manage_options' is a capability assigned only to administrators
     if (!current_user_can('manage_options') && !is_admin()) {
         show_admin_bar(false);
     }
}
//displays username for users/personal message for users
function personal_message_when_logged_in() {
	
	if ( is_user_logged_in() ) :
		
		$current_user = wp_get_current_user();
		echo '<div class="button_wrapper">';
		echo 'Hi there ' . $current_user->display_name . '!';
		//echo '<button class = "loginout_button">logout</button>';
		echo '<a class = "logout_link" href="' . wp_logout_url( home_url() ) . '" title="Logout">Logout</a>';
		echo '</div>';
		wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css');
	else :
		echo '<div class="button_wrapper">';
		echo '<a id="myBtn">Register</a>';
		echo '<a id="myBtn_login">login</a>';	
		
			echo 'Hello, new visitor!';
			echo '</div>';
			endif;
	}

	add_action( 'wp_head', 'personal_message_when_logged_in' );


function utilitybar(){
	if ( !is_user_logged_in() ){
	//if(is_page( 'test' )){
		require_once( get_stylesheet_directory() . '/registration.php' );
		require_once( get_stylesheet_directory() . '/login.php' );
		require_once( get_stylesheet_directory() . '/password_reset.php' );
	//}
	}
	
}
add_action( 'wp_head', 'utilitybar' );



//different menus if logged in/logged out
function my_wp_nav_menu_args($args = '') {
    if(is_user_logged_in()) {
        $args['menu'] = 'logged-in';
    }
    else {
        $args['menu'] = 'logged-out';
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');



//custom menu for login + logout
/*
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args) { 
		$loginoutlink = wp_loginout('index.php', false); 

		//$loginoutlink = ('login.php',false);
		//$loginoutlink =  login_customForm('login.php',false);
		
        //$loginoutlink = wp_loginout('index.php', false); 
        $items .= '<li>'. $loginoutlink .'</li>'; 
    return $items; 
}

add_filter( 'nav_menu_link_attributes', 'menu_atts', 10, 3 );
function menu_atts( $atts, $item, $args )
{
  // The ID of the target menu item
 
  //$menu_name = ;WIP stuff here

  // inspect $item
  if ($item->ID == $menu_name) {
    $atts['data-toggle'] = 'modal';
    $atts['data-target'] = '#IDofModal';
  }
  return $atts;
}

*/

	// menu customiser
function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        height:100px;
        width:300px;
        background-size: 300px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );


//login customiser
function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'RESILME';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


function my_registration_stylesheet() {
    wp_enqueue_style( 'registration', get_stylesheet_directory_uri() . '/registration.css' );
    wp_enqueue_script( 'registration', get_stylesheet_directory_uri() . '/registration.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'my_registration_stylesheet' );




// custom css for a particular template

function resil_tool_stylesheet(){
if ( is_page_template('resil-tool.php')) {
	wp_enqueue_style( 'resil-tool', get_stylesheet_directory_uri() . '/resil-tool.css');
	
}
}
add_action( 'wp_enqueue_scripts', 'resil_tool_stylesheet' );	



//add custom js file (resil-tool.js)
function add_js_scripts(){
	if ( is_page_template('resil-tool.php')) {
	wp_enqueue_script( 'resil-tool', get_stylesheet_directory_uri(). '/resil-tool.js', array() );

	wp_localize_script('resil-tool','ajaxurl',admin_url('admin.php'));
}}

add_action( 'wp_enqueue_scripts', 'add_js_scripts' );




