
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6 oldie" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html class="ie7 oldie" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie8 oldie" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <title>Senses</title>
	<base href="<?php echo get_bloginfo('template_url')?>/"></base>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,400,300,700,500,600' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/header.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive/width-767-1170.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive/width-0-767.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery.js?ver=1.11.1'></script>
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/countries.js"></script>
    <script type='text/javascript' src='js/class.siteMain.js'></script>
</head>
<body>
    <div class="wraper">
        <div class="container">
            <header>
                <a href="#" class="logo"><img src="images/logo.jpg"/></a>
                <h3 class="slogan">Let's catch up on your career! </h3>
                <img src="images/banner.jpg" class="banner"/>
            </header>
            <div class="arrowdown">
                <a href="javascript:void(0)" onclick="siteMain.scrolltoDiv('#staff')"></a>
            </div>
            <div class="staff" id="staff">
                <h4>
                    <span>We invite advertising and communication profiles</span>
                    <span>to sit with us and have a chat.</span>
                </h4>
                <ul>
                    <li>
                        <div class="imgbox">
                            <img src="images/staff01.jpg" />
                        </div>
                        <h3 class="name">Anne Sneyers</h3>
                        <span>+32 475 97 50 41</span>
                    </li>
                    <li>
                        <div class="imgbox">
                            <img src="images/staff02.jpg" />
                        </div>
                        <h3 class="name">Elke Koninckx</h3>
                        <span>+32 496 68 67 60</span>
                    </li>
                    <li class="last">
                        <div class="imgbox">
                            <img src="images/staff03.jpg" />
                        </div>
                        <h3 class="name">Kristien Smeyers</h3>
                        <span>+32 494 30 76 21</span>
                    </li>
                </ul>
            </div>
            <div class="arrowdown">
                <a href="javascript:void(0)" onclick="siteMain.scrolltoDiv('#contactForm')"></a>
            </div>
            <div class="contactForm" id="contactForm">
                <form action="" method="">
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
                            <input name="u_phone" type="text" value="" placeholder="Mobile phone" />
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
                            <input name="u_postalcode" type="text" value="" placeholder="Postal code" />
                        </div>
                        <div class="col col02">
                            <select name="u_country" id="countries">
                                <option value="0">Country</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="fileUpload ">
                            <span>UPLOAD YOUR CV</span>
                            <input type="file" class="upload" name="p_files">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="SUBMIT"/>
                    </div>
                </form>
            </div>
            <footer>
                <div class="copyright">
                    &copy;senses.be - <a href="http://www.senses.be/corporate"></a> for our website
                </div>
            </footer>
        </div>
    </div>
</body>

</html>