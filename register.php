<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
    SessionManager::init();
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="qwpage  no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="qwpage  no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="qwpage  no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="qwpage  no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="qwpage   js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="author" content="xxx">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <link rel="shortcut icon" href="https://www.onlinequizcreator.com/favicon.ico?v=1461143210">
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
    <script type="text/javascript" src="resources/js/modernizr-2.js"></script>
    <title>Register</title>
</head>

<body class="page_login page-centered page_content page_qsettings page-focus-form user_notloggedin">
    
    <div class="mm-page mm-slideout" id="mm-0">
        <!-- sub-navigation -->
        <?php
            include_once './template/home-sub-navigation.php';
        ?>
        <!-- /sub-navigation -->
        <div style="margin-top: 0px;" class="page-wrap">
            <div class="bgwrap">
                <div class="wrapper clearfix">
                    <div class="rowbox nocols top-offset-30">
                        <div class="row">
                            <div class="col12">
                                <div class="contentbox">
                                    <div class="contentbox header-contentbox">
                                        <div class="content-header">
                                            <h1>Create an account</h1>
                                        </div>
                                    </div>
                                    <form class="quizsettings" id="" action="controllers/UserSignUp.php" method="post">
                                        <fieldset>
                                            <div class="required">
                                                <label for="fullname" class="required">
                                                    Your full name&nbsp;
                                                    <span class="required">*</span>
                                                </label>
                                                <input placeholder="Your full name" id="fullname" name="fullname" type="text">
                                                <div class="errorMessage hide" id="fullname_err"></div>
                                            </div>
                                            <div class="required">
                                            <div style="margin-left: 340px;" class="errorMessage" id="username-err"></div>
                                                <label for="username" class="required">Your username&nbsp;
                                                    <span class="required">*</span>
                                                </label>
                                                <input placeholder="Your username" name="username" id="username" type="text" onkeyup="showUsernameCheck(this.value)">

                                            </div>
                                            <div class="required">
                                                <label for="password" class="required">Your password&nbsp;
                                                <span class="required">*</span></label>
                                                <input placeholder="Your password" id="password" name="password" type="password">
                                                <div class="errorMessage hide" id=""></div>
                                            </div>
                                            <div class="required">
                                                <label for="repassword" class="required">
                                                    Repeat your password&nbsp;
                                                    <span class="required">*</span>
                                                </label>
                                                <input placeholder="Repeat your password" id="repassword" name="" type="password">
                                                <div class="errorMessage hide" id=""></div>
                                            </div>
                                            <div class="checkboxfield required">
                                                <input id="checkbox" name="" value="1" type="checkbox">
                                                <label for="checkbox" class="required">I agree with the <a href="#">terms</a>&nbsp;
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="errorMessage hide" id=""></div>
                                            </div>
                                            <div class="button-container">
                                                <input class="afterpreview save" type="submit" name="" value="Save">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="resources/js/jquery_002.js"></script>
    <script type="text/javascript" src="resources/js/jquery.js"></script>
    <script type="text/javascript" src="resources/js/jquery_003.js"></script>
    <script type="text/javascript" src="resources/js/responsive-nav.js"></script>
    <div id="mm-blocker" class="mm-slideout"></div>
    <script type="text/javascript" src="resources/js/foundation.js"></script>
    <script type="text/javascript" src="resources/js/foundation_002.js"></script>
    <script type="text/javascript" src="resources/js/script.js"></script>
    <script type="text/javascript" src="resources/js/analytics_002.js"></script>

    <!-- checkUserName -->
    <script type="text/javascript">
        function showUsernameCheck(username) {
            if (username.length == 0) {
                document.getElementById("username-err").innerHTML = "";
            } else {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        document.getElementById("username-err").innerHTML = xmlHttp.responseText;
                    }
                };
                xmlHttp.open("GET", "./controllers/UserCheckUsername.php?u=" + username, true);
                xmlHttp.send();

            }
        }
    </script>
    <!-- /checkUserName -->
</body>

</html>