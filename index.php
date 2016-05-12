<!DOCTYPE html>
<!-- saved from url=(0034)# -->
<html class="qwpage   js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="author" content="IS">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="shortcut icon" href="./resources/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./resources/css/styles.css">
    <script type="text/javascript" src="./resources/js/modernizr-2.0.6.min.js"></script>

    <title>Challenge your brain !</title>
    <style></style>
</head>

<body class="page_home site-quiz user_notloggedin">
    <!-- navigation -->
    <?php
        include_once './template/home-mobile-navigation.php';
    ?>
    <!-- /navigation -->
    <div id="mm-0" class="mm-page mm-slideout">
        <div class="navbar mainnavbar fixednav">
            <div class="wrapper clearfix">
                <a class="qwlogo" href="index.php">
                    <img src="./resources/images/quizworkslogo.png" alt="Quizworks">
                    <span>It's time to challenge your brain</span>
                </a>
                <nav class="langswitch">
                    <button data-dropdown="language-select" aria-controls="language-select" aria-expanded="false" class="dropdown">
				<img src="./resources/images/en.gif" alt="en"> English			</button>
                    <div id="language-select" data-dropdown-content="" class="f-dropdown" aria-hidden="true">
                        <ul id="languageSwitch">
                            <li id="languageSwitch_en" class="default active">
                                <a title="English" href="#"><img src="./resources/images/en.gif" alt="en"> English</a>
                            </li>
                            <li id="languageSwitch_nl" class="">
                                <a title="Dutch" href="#nl/"><img src="./resources/images/nl.gif" alt="nl"> Dutch</a>
                            </li>
                            <li id="languageSwitch_fr" class="">
                                <a title="French" href="#fr/"><img src="./resources/images/fr.gif" alt="fr"> French</a>
                            </li>
                            <li id="languageSwitch_it" class="">
                                <a title="Italian" href="#it/"><img src="./resources/images/it.gif" alt="it"> Italian</a>
                            </li>
                            <li id="languageSwitch_de" class="">
                                <a title="German" href="#de/"><img src="./resources/images/de.gif" alt="de"> German</a>
                            </li>
                            <li id="languageSwitch_es" class="">
                                <a title="Spanish" href="#es/"><img src="./resources/images/es.gif" alt="es"> Spanish</a>
                            </li>
                            <li id="languageSwitch_fi" class="">
                                <a title="Finnish" href="#fi/"><img src="./resources/images/fi.gif" alt="fi"> Finnish</a>
                            </li>
                            <li id="languageSwitch_pt" class="">
                                <a title="Portuguese" href="#pt/"><img src="./resources/images/pt.gif" alt="pt"> Portuguese</a>
                            </li>
                            <li id="languageSwitch_da" class="">
                                <a title="Danish" href="#da/"><img src="./resources/images/da.gif" alt="da"> Danish</a>
                            </li>
                            <li id="languageSwitch_no" class="">
                                <a title="Norwegian" href="#no/"><img src="./resources/images/no.gif" alt="no"> Norwegian</a>
                            </li>
                            <li id="languageSwitch_ja" class="">
                                <a title="Japanese" href="#ja/"><img src="./resources/images/ja.gif" alt="ja"> Japanese</a>
                            </li>
                            <li id="languageSwitch_zh" class="">
                                <a title="Chinese" href="#zh/"><img src="./resources/images/zh.gif" alt="zh"> Chinese</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <a class="navlink" id="show-main-navigation" href="#"></a>
                <div class="mainnav navigation clearfix">
                    <nav>
                        <ul class="menu">
                            <li class="hier"><a href="#">Home</a></li>
                            <li><a href="#">Quizzes</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="admin/login.php">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="navbar menubar" style="position: fixed; top: 0px; left: 0px;">
            <div class="wrapper clearfix">
                <div class="row">
                    <div class="col8">
                    </div>
                    <div class="col4 last">
                        <div class="accountbar loginregister alignright">
                            <p>
                                Become a quizmaster today! <a href="register.php">Register</a>
                                <span class="seperator">|</span>
                                <a href="login.php">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrap" style="margin-top: 50px;">
            <div id="clouds">
                <div class="cloud x1"></div>
                <!-- Time for multiple clouds to dance around -->
                <div class="cloud x2"></div>
                <div class="cloud x3"></div>
                <div class="cloud x4"></div>
                <div class="cloud x5"></div>
            </div>
            <div class="bgwrap">

                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col12">
                                <div class="intro">
                                    <p><span>It's time to challenge your brain !</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix introbar">
                            <div class="col7">
                                <h1>Playing and enjoying quizzes</h1>
                                <div class="pageintro">
                                    <p>Always wanted to make a quiz, but couldn't find an easy quiz creator to help you out? With our online quiz creator it’s easy to make a quiz in less than five minutes. Just follow these simple steps to create online quizzes with our quiz maker.</p>
                                </div>
                                <p class="createyourown handwritten">Ready to challenge your brain?</p>
                            </div>
                            <div class="col5">
                                <div class="contentbox createquiz">
                                    <h2>Login</h2>
                                    <p>It's time to challenge your brain. You'll have people playing in no time!</p>
                                    <form action="controllers/UserCheckLogin.php" method="post">
                                        <fieldset>
                                            <div class="required">
                                                <label for="" class="required">Username&nbsp;<span class="required">*</span></label>
                                                <input placeholder="Username" id="" name="username" type="text">
                                                <div class="errorMessage hide" id="NewQuizFormModel_title_em_"></div>
                                            </div>
                                            <div class="required">
                                                <label for="" class="required">Password&nbsp;<span class="required">*</span></label>
                                                <input placeholder="Password" id="" name="password" type="password">
                                                <div class="errorMessage hide" id=""></div>
                                            </div>
                                            <input class="liftoff" type="submit" name="yt0" value="Takeoff!!">
                                        </fieldset>
                                    </form>
                                    <p class="text-center registerfirst">Want to register first instead? <a href="register.php">Register</a></p>
                                    <div class="owly active" title="I&#39;ve played toooo many quizzes, they are so much fun, i just can&#39;t stop!"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="./resources/js/jquery.min.js"></script>
        <script type="text/javascript" src="./resources/js/jquery.yiiactiveform.js"></script>
        <script type="text/javascript" src="./resources/js/jquery.mmenu.min.all.js"></script>
        <script type="text/javascript" src="./resources/js/responsive-nav.js"></script>
        <div id="mm-blocker" class="mm-slideout"></div>
        <script type="text/javascript" src="./resources/js/foundation.js"></script>
        <script type="text/javascript" src="./resources/js/foundation.dropdown.js"></script>
        <script type="text/javascript" src="./resources/js/script.js"></script>
        <script type="text/javascript" src="./resources/js/analytics(1).js"></script>

</body>

</html>