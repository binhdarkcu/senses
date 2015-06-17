<?php
add_action("wp_ajax_user_contact_form", "contact_form");
add_action("wp_ajax_nopriv_user_contact_form", "contact_form");
function contact_form(){
	$u_name = $_REQUEST['u_name'];
	$u_firstname = $_REQUEST['u_firstname'];
	$u_email = $_REQUEST['u_email'];
	$u_phone = $_REQUEST['u_phone'];
	$u_gender = $_REQUEST['u_gender'];
	$u_birthday = $_REQUEST['u_birthday'];
	$u_postalcode = $_REQUEST['u_postalcode'];
	$u_country = $_REQUEST['u_country'];
	global $wpdb;	
	//save file
	$root = get_home_path();
	$upload_dir = $root.'/wp-content/uploads/cv/';
	if (!file_exists($upload_dir)) {
		mkdir($upload_dir);
	}
	$filename = time().$_FILES['p_files']['name'];
	$target_file = $upload_dir.basename($filename);
	$validate = 0;
	if(move_uploaded_file($_FILES['p_files']['tmp_name'], $target_file )){
		global $wpdb;	
		$results = $wpdb->insert('wp_contact',
			array(
			  'u_name'          => $u_name,
			  'u_firstname'       => $u_firstname,
			  'u_email'          => $u_email,
			  'u_phone'       => $u_phone,
			  'u_gender'          => $u_gender,
			  'u_birthday'       => $u_birthday,
			  'u_postalcode'          => $u_postalcode,
			  'u_country'       => $u_country,
			  'p_files'       => $filename
			),
			array(
			  '%s',
			  '%s',
			  '%s',
			  '%s',
			  '%s',
			  '%s',
			  '%s',
			  '%s',
			  '%s'
			) 
		);
		
		if($results){
			//send_new_subscriber($data['p_email']);
			echo '1';
			die();
		}
		else{
			echo '0';
			die('Error upload file');
		}
	}else{
		die('Error upload file');
	}
}