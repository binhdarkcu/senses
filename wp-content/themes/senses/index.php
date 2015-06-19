<?php get_header();?>
<body>
    <div class="wraper">
        <div class="container">
            <header>
                <a href="#" class="logo"><img src="images/logo.png"/></a>
                <h3 class="slogan">Let's catch up on your career</h3>
                <img src="images/banner.jpg" class="banner"/>
            </header>
            <div class="arrowdown">
                <a href="javascript:void(0)"></a>
            </div>
            <div class="staff" id="staff">
                <h4>
                    <span>We invite advertising and communication profiles</span>
                    <span>to sit with us and have a chat!</span>
                </h4>
                <ul>
                    <li class="first">
                        <div class="imgbox">
                            <img src="images/staff01.png" />
                        </div>
                        <h3 class="name">Anne Sneyers</h3>
                        <span>+32 475 97 50 41</span>
                    </li>
                    <li>
                        <div class="imgbox">
                            <img src="images/staff02.png" />
                        </div>
                        <h3 class="name">Elke Koninckx</h3>
                        <span>+32 496 68 67 60</span>
                    </li>
                    <li class="last">
                        <div class="imgbox">
                            <img src="images/staff03.png" />
                        </div>
                        <h3 class="name">Kristien Smeyers</h3>
                        <span>+32 494 30 76 21</span>
                    </li>
                </ul>
            </div>
            <div class="arrowdown">
                <a href="javascript:void(0)"></a>
            </div>
            <div class="contactForm" id="contactForm">
            	<div class="loading"><img src="images/loading.gif"/></div>
                <form action="" method="post" id="contactFormSubmit" enctype="multipart/form-data">
                    <h4>
                        Leave your contact details
                    </h4>
                    <div class="row">
                        <div class="col col01">
                            <input name="u_name" type="text" value="" placeholder="Name"/>
                        </div>
                        <div class="col col02">
                            <input name="u_firstname" type="text" value="" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col01">
                            <input name="u_email" type="text" value="" placeholder="Email" />
                        </div>
                        <div class="col col02">
                            <input name="u_phone" type="text" value="" min-length="8" max-length="15" placeholder="Mobile Number" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col01">
                            <select name="u_gender">
                                <option value="0">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col col02 birthdayCol">
                            <input id="birthday" name="u_birthday" type="text" value="" placeholder="Birthday" />
                            <img src="images/date-icon.png" class="ui-datepicker-trigger"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col01">
                            <input name="u_postalcode" type="text" value="" placeholder="Postal Code" />
                        </div>
                        <div class="col col02">
                            <select name="u_country" id="countries">
                                <option value="0">Country</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Netherlands">Netherlands</option>
								<option value="France">France</option>
                                <option value="Luxembourg">Luxembourg</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="fileUpload ">
                            <span>UPLOAD YOUR CV</span>
                            <input type="file" class="upload" name="p_files" id="p_files">
                        </div>
						<span class="file_message error"></span>
                    </div>
                    <div class="row">
						<?php wp_nonce_field('apply_cv','act_apply_cv');?>
						<input name="action" type="hidden" class="action" value="user_contact_form"/>
						<input name="ajaxurl" type="hidden" class="ajaxurl" value="<?php echo bloginfo('home').'/wp-admin/admin-ajax.php'; ?>"/>
                        <input type="submit" value="SUBMIT"/>
                    </div>
                </form>
                <div class="message_contact">
                	Thank you for your registration at senses.<br/>
					We'll contact you soon for a chat
                </div>
            </div>
            <footer>
                <div class="copyright">
                    &copy;senses.be - <a href="http://www.senses.be/corporate" target="_blank">click here</a> for our website
                </div>
            </footer>
        </div>
    </div>
</body>

</html>