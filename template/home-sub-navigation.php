<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
?>
<div class="navbar mainnavbar">
    <div class="wrapper clearfix">
        <a class="qwlogo" href="https://www.onlinequizcreator.com/">
            <img src="resources/images/quizworkslogo.png" alt="Quizworks">
            <span>Online Quiz Creator</span>
        </a>
        <nav class="langswitch">
            <button data-dropdown="language-select" aria-controls="language-select" aria-expanded="false" class="dropdown">
                <img src="resources/images/en.gif" alt="en"> English
            </button>
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
        <a class="navlink" id="show-main-navigation" href="https://www.onlinequizcreator.com/log-in/item114#"></a>
        <div class="mainnav navigation clearfix">
            <nav>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Quizzes</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="admin/login.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div style="position: relative;" class="navbar menubar">
    <div class="wrapper clearfix">
        <div class="row">
            <div class="col8">
            </div>
            <div class="col4 last">
                <?php
                    SessionManager::init();
                    $isLoggedIn = SessionManager::isLoggedIn();
                    if ($isLoggedIn == FALSE) {
                ?>
                <div class="accountbar loginregister alignright">
                    <p>
                        Become a quizmaster today! 
                        <a href="register.php">Register</a>
                        <span class="seperator">|</span>
                        <a href="login.php">Login</a>
                    </p>
                </div>
                <?php
                    } else {
                    $user = SessionManager::get('user');
                ?>
                <div class="accountbar">
                    <div class="loggedinas floatright dropdownify alignright">
                        <strong class="dropdowntitle">
                            <img alt="" class="gravatar" src=""><?php echo $user['tendangnhap']; ?></strong>
                    <ul class="dropdownblock hide">
                        <li><a href="#">My account</a></li>
                        <li><a class="logout" href="./controllers/UserLogOut.php">Logout</a></li>
                    </ul>
    
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>