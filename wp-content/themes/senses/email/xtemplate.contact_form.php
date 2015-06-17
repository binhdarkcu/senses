<?php
    //session_start();
    //echo session_id();
    function 	user_contact_form($name,$firstname, $email, $phone, $gender, $birthday,$postalcode, $country){
                include_once	'xtemplate.class.php';
                $header   	= 'Content-type: text/html; charset=utf-8\r\n';				
                $title 		= 'Thank you for submitting your details to senses.be';
                $contact_email = $email;
                $contact_name = $name;
				//echo $contact_email;
                $date = date('d-m-Y');
                $parseTemplate	=	new XTemplate('xtemplate.actived.html');
                $parseTemplate->assign('name',$name);
				$parseTemplate->assign('firstname',$firstname);
                $parseTemplate->assign('email',$email);	
				$parseTemplate->assign('phone',$phone);
				$parseTemplate->assign('gender',$gender);
				$parseTemplate->assign('birthday',$birthday);
				$parseTemplate->assign('birthday',$birthday);
				$parseTemplate->assign('postalcode',$postalcode);
				$parseTemplate->assign('country',$country);		
                $parseTemplate->assign('date',$date);    
                $parseTemplate->parse('main');	
                return wp_mail($contact_email, $title, $parseTemplate->text('main'), $title);
            }
