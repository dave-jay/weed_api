<!--
    Top Navbar
      Options:
        .navbar-dark - dark color scheme
        .navbar-static - static navbar
        .navbar-under - under sidebar
-->
<!--<nav class="navbar-top navbar-under">-->
<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>js/typeahead/src/jquery.typeahead.css">

<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<!--script src="../dist/jquery.typeahead.min.js"></script-->
<script type="text/javascript" src="<?php print _MEDIA_URL ?>js/typeahead/src/jquery.typeahead.js"></script>
<nav class="navbar-top">
    <div class="nav-wrapper ">

        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle hide" id='toggleSideBar' >
            <div class="burg1"></div>
            <div class="burg2"></div>
            <div class="burg3"></div>
        </a>

        <!-- Sidebar toggle -->

        <!-- Logo -->
        <!--        <a href="#" class="brand-logo">
                    <img style="height: 27px;" src="<?php print _MEDIA_URL ?>images/LifeZaverLogoSmall.png" alt="Con">
                    <img style="height:27px;" src="<?php print _MEDIA_URL ?>images/lifezaver_text.png" alt="Con">
                </a>-->



        <!-- Sidebar toggle -->
        <!--            <a href="#" class="yay-toggle">
                        <div class="burg1"></div>
                        <div class="burg2"></div>
                        <div class="burg3"></div>
                    </a>-->
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <div class="content">


            <div class="navbar navbar-brand" style="float: left;min-width: 10%;">
                <a href="#" class="logo" >
                    <!--<img style="height: 62px;" src="<?php print _MEDIA_URL ?>images/AberLogo2.jpg" alt="Con">-->
                    <img style="height: 42px;" class="logoset" src="<?php print _MEDIA_URL ?>images/ks_labs-logo.png" alt="Con">
<!--                    <span style="font-weight:bold;font-size:39px;color: #C71418; margin-left: 2%; text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                          #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;">KS Lab</span>-->

                </a>
            </div>

            <div class="navbar topNav  " id="topNav" style="width: 70%; margin-left: 2%; font-size: 14px;">

                <a href="<?php l('wm_api') ?>" class=" col l2 m12 s12 <?= (_cg('current_page') == 'wm_api' ? 'active_menu' : ''); ?>" >Add Content </a>
                <a href="<?php l('view_wm_api') ?>" class=" col l2 m12 s12 <?= (_cg('current_page') == 'view_wm_api' ? 'active_menu' : ''); ?>" >View Content </a>
                <!--<a href="" class=" dropdown-button col l2 m12 s12 <?= (_cg('current_page') == 'Demo2' ? 'active_menu' : ''); ?>" data-activates="employees-dropdown"> Demo2</a>-->
<!--                <a href=""  class=" dropdown-button col l2 m12 s12 <?= (_cg('current_page') == 'Demo3' ? 'active_menu' : ''); ?>" data-activates="driver-dropdown"> Demo3</a>
                <a href="" class="dropdown-button col l2 m12 s12 <?= (_cg('current_page') == 'Demo4' ? 'active_menu' : ''); ?>" data-activates="vehicle-dropdown"> Demo4</a>
                <a href="" class="dropdown-button col l2 m12 s12 <?= (_cg('current_page') == 'Demo5' ? 'active_menu' : ''); ?>" data-activates="report-dropdown">Demo5</a>
                <a href="" class="dropdown-button col l2 m12 s12 <?= (_cg('current_page') == 'Demo6' ? 'active_menu' : ''); ?>" data-activates="office-dropdown">Demo6</a>-->
            </div>




            <!-- /Logo -->
            <!--Search Panel-->




            <!-- /Logo -->


            <!-- Menu -->
    <!--        <script>
                function toggle() {
    //                $("#main-panel").slideToggle();
    //                $("#mainSearch").slideToggle();
                    if (document.getElementById("mainSearch").style.display == 'none') {
                        $("#main-panel").slideDown();
                        $("#mainSearch").slideDown();
    
    //                    document.getElementById("mainSearch").style.display = 'block'; // set to table-row instead of an empty string
    //                    document.getElementById("main-panel").style.display = 'block'; // set to table-row instead of an empty string
    //                    $("#main-panel").slideToggle();// set to table-row instead of an empty string
                        document.getElementById("searchbtn").style.backgroundColor = 'lightgrey'; // set to table-row instead of an empty string
    
                    } else {
                        $("#main-panel").slideUp();
                        $("#mainSearch").slideUp();
    //                    document.getElementById("mainSearch").style.display = 'none';
    //                    document.getElementById("main-panel").style.display = 'none';
                        document.getElementById("searchbtn").style.backgroundColor = ''; // set to table-row instead of an empty string
    
                    }
    
                }
            </script>-->
            <ul style="" >
                <!--            <li>
                                <a  class="" onclick="toggle()" id='searchbtn'>
                                    <i class="mdi-action-search"></i>
                                </a>
                            </li>-->


                <li class="user">
                    <a class="dropdown-button" data-activates="user-dropdown" href="#" style="min-width: 165px;">
                        <span class="hide-on-small-and-down"> <?php print $_SESSION['user']['fname'] . " " . $_SESSION['user']['lname'] ?></span> <i class="mdi-navigation-expand-more right"></i>
                    </a>

                    <ul id="user-dropdown" class="dropdown-content" style="margin-top:5%;">
                        <li class="hide-on-med-and-up"><span class="" style="text-transform: capitalize;text-align: center; font-weight: bolder;font-size: 16px;"> <?php print $_SESSION['user']['fname'] . " " . $_SESSION['user']['lname'] ?></span> </li>
                        <li class="divider hide-on-med-and-up"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-search"></i>  Search  
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i> Change Password 
                            </a>
                        </li>

                        <!--                    <li>
                                                <a href="">
                                                    <i class="fa fa-cogs"></i> Billing
                                                </a>
                                            </li>-->
                        <li>
                            <!--                            <a href="javascript:void(0);" onclick="openLangBar();">
                                                            <i class="mdi-action-translate"></i>Change language
                                                        </a>-->
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo _U ?>?logout=1">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Menu -->

        </div>
        <!--Search Panel Result-->



</nav>
<!-- /Top Navbar -->

<!--<nav id="lang_bar" class="navbar-top navbar-under">
    <div class="nav-wrapper">
        <div class="lang_content">
            <span class="input-field">
                <input name="rd_lang" class="rd-lang" type="radio" id="rd-lang-en" value="en" <?= ((!isset($_SESSION['selected_lang']) || $_SESSION['selected_lang'] == 'en') ? 'checked' : ''); ?> />
                <label for="rd-lang-en">English</label>
                <input name="rd_lang" class="rd-lang" type="radio" id="rd-lang-fa" value="fa" <?= ((isset($_SESSION['selected_lang']) && $_SESSION['selected_lang'] == 'fa') ? 'checked' : ''); ?>/>
                <label for="rd-lang-fa">فارسی</label>
            </span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>
                <button class="btn green waves-effect" id="btn_lang_submit">Submit</button>
            </span>
            <div class="lang_close"><i class="fa fa-times"></i></div>
        </div>
    </div>
</nav>-->