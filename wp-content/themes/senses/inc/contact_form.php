<?php
add_action("wp_ajax_user_contact_form", "contact_form");
add_action("wp_ajax_nopriv_user_contact_form", "contact_form");
function contact_form(){
	$data['u_name'] = $_REQUEST['u_name'];
	$data['u_firstname'] = $_REQUEST['u_firstname'];
	$data['u_email'] = $_REQUEST['u_email'];
	$data['u_phone'] = $_REQUEST['u_phone'];
	$data['u_gender'] = $_REQUEST['u_gender'];
	$data['u_birthday'] = $_REQUEST['u_birthday'];
	$data['u_postalcode'] = $_REQUEST['u_postalcode'];
	$data['u_country'] = $_REQUEST['u_country'];
	$data['p_files'] = $_FILES['p_files']['name'];
	global $wpdb;	
	//save file
	$root = get_home_path();
	$upload_dir = $root.'/wp-content/uploads/cv/';
	if (!file_exists($upload_dir)) {
		mkdir($upload_dir);
	}
	$filename = time().$data['p_files'];
	$target_file = $upload_dir.basename($filename);
	$data['p_files'] = $fileName;
	echo $data['p_files'];
	if(move_uploaded_file($_FILES['p_files']['tmp_name'], $target_file )){
		global $wpdb;	
		$results = $wpdb->insert('wp_contact', $data);
		if($results){
			//send_new_subscriber($data['p_email']);
			echo 'true';
		}
		else{
			echo 'false';
		}
	}else{
	
		die('error uploading File!');
	}
	
}