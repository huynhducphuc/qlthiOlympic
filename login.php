<?php
    define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic');
    require_once ROOT_PATH.'/core/SessionManager.php';
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
    <meta name="title" content="Login">
    <meta name="description" content="Login">
    <link rel="shortcut icon" href="./resources/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
    <script type="text/javascript" src="resources/js/modernizr-2.js"></script>
    <title>Login</title>
</head>

<body class="page_login page-centered page_content page_qsettings page-focus-form user_notloggedin">
    <!-- mobile-navigation -->
    <?php
        include_once ROOT_PATH.'/template/home-mobile-navigation.php';
    ?>
    <!-- /mobile-navigation -->
    <div class="mm-page mm-slideout" id="mm-0">
        <!-- sub-navigation -->
        <?php
            include_once ROOT_PATH.'/template/home-sub-navigation.php';
        ?>
        <!-- /sub-navigation -->
        <div style="margin-top: 0px;" class="page-wrap">
            <div class="bgwrap">
                <div class="wrapper clearfix">
                    <div class="rowbox managecontainer nocols top-offset-30">
                        <div class="row">
                            <div class="col12">
                                <div class="contentbox">
                                    <div class="contentbox header-contentbox">
                                        <div class="content-header">
                                            <h1>Login</h1></div>
                                    </div>
                                    <a href="#" class="facebbutton alignleft button">Facebook login</a>
                                    <form id="loginformmodel" action="controllers/UserCheckLogin.php" method="post">
                                        <h2>Regular login</h2>
                                        <fieldset>
                                            <div class="required">
                                                <label for="" class="required">
                                                    Email address&nbsp;
                                                    <span class="required">*</span>
                                                </label>
                                                <input placeholder="Email address" id="" name="username" type="text">
                                                <div class="errorMessage hide" id=""></div>
                                            </div>
                                            <div class="required">
                                                <label for="LoginFormModel_password" class="required">
                                                    Password&nbsp;
                                                    <span class="required">*</span>
                                                </label>
                                                <input placeholder="Password" id="" name="password" type="password">
                                                <div class="errorMessage hide" id=""></div>
                                            </div>
                                        </fieldset>
                                        <p class="fpwlink"><a href="#" id="forgotpw">Oh no! I forgot my password!</a></p><input class="button" name="" value="Login" type="submit"></form>
                                    <div id="forgotpwcontainer" class="hidden">
                                        <div>
                                            <h2>Forgot password</h2>
                                            <form id="forgotpasswordformmodel" action="#" method="post">
                                                <fieldset>
                                                    <div class="required">
                                                        <label for="" class="required">
                                                            Email address&nbsp;
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input id="" name="" type="email">
                                                        <div class="errorMessage hide" id=""></div>
                                                    </div><input class="button" name="" value="Send new password" type="submit">
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
</body>

</html>