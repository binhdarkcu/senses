<?php
    //session_start();
    //echo session_id();
    function user_contact_form($name,$firstname, $email, $phone, $gender, $birthday,$postalcode, $country){
                include_once	'xtemplate.class.php';
                $header   	= 'Content-type: text/html; charset=utf-8\r\n';				
                $title 		= 'Thank you for submitting your details to senses.be';
                $contact_email = $email;
                $contact_name = $name;
				//echo $contact_email;
                $date = date('d-m-Y');
                $parseTemplate	=	new XTemplate('xtemplate.contact_form.html');
                $parseTemplate->assign('name',$name);
				$parseTemplate->assign('firstname',$firstname);
                $parseTemplate->assign('email',$email);	
				$parseTemplate->assign('phone',$phone);
				$parseTemplate->assign('gender',$gender);
				$parseTemplate->assign('birthday',$birthday);
				$parseTemplate->assign('postalcode',$postalcode);
				$parseTemplate->assign('country',$country);		
                $parseTemplate->assign('date',$date);    
                $parseTemplate->parse('main');	
                return wp_mail($contact_email, $title, $parseTemplate->text('main'), $title);
            }

        function alert_user_contact_form($name, $firstname,$useremail, $phone, $gender, $birthday,$postalcode, $country){
            include_once	'xtemplate.class.php';
            $header   	= 'Content-type: text/html; charset=utf-8\r\n';				
            $title 		= 'Have new user submited to senses.be';
            $contact_email = 'binhdarkcu@gmail.com';
			//$contact_email = 'kristien@senses.be';
            $contact_name = $name;
			//echo $contact_email;
            $date = date('d-m-Y');
            $parseTemplate	=	new XTemplate('xtemplate.contact_form.html');
            $parseTemplate->assign('name',$name);
			$parseTemplate->assign('firstname',$firstname);
            $parseTemplate->assign('email',$useremail);	
			$parseTemplate->assign('phone',$phone);
			$parseTemplate->assign('gender',$gender);
			$parseTemplate->assign('birthday',$birthday);
			$parseTemplate->assign('postalcode',$postalcode);
			$parseTemplate->assign('country',$country);		
            $parseTemplate->assign('date',$date);    
            $parseTemplate->parse('main');	
            return wp_mail($contact_email, $title, $parseTemplate->text('main'), $title);
        }