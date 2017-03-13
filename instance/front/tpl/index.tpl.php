<?php if (!file_exists(_PATH . "instance/front/tpl/" . $modulePage)): ?>
    <?php include _PATH . "instance/front/tpl/404.php"; ?>
    <?php header("HTTP/1.0 404 Not Found"); ?>
    <?php die; ?>
<?php endif; ?>
<?php $rtl = ($_SESSION['selected_lang'] == 'fa') ? 'rtl' : ''; ?>
<!DOCTYPE html>
<html lang="en" class="<?= $rtl; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="_nK">
        <link rel="icon" href="<?php print _MEDIA_URL ?>images/MasirApp.png">
        <!--<link rel="icon" href="<?php print _MEDIA_URL ?>images/aber-logo.png">-->


        <title>KS Lab | <?php print _cg("page_title"); ?></title>

        <!--<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,500,700,900' rel='stylesheet' type='text/css'>-->
        <!--<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">--> 
        <!-- Clockpicker -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/clockpicker/dist/jquery-clockpicker.min.css" />
        <!-- MarkItUp -->
<!--        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/markitup-1x/markitup/sets/default/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/markitup-1x/markitup/skins/simple/style.css" />
        -->
        <!-- nanoScroller -->
        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/nanoscroller/bin/css/nanoscroller.css" />-->

        <!-- FontAwesome -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/fontawesome/css/font-awesome.min.css" />

        <!-- Materialt" type="text/css" href="<?php print _MEDIA_URL ?>bower_components Design Icons -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/material-design-icons/css/material-design-icons.min.css" />

        <!-- IonIcons -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/ionicons/css/ionicons.min.css" />

        <!-- WeatherIcons -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/weather-icons/css/weather-icons.min.css" />

        <!-- Rickshaw -->
        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/rickshaw/rickshaw.min.css" />-->

        <!-- nvd3 -->
        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>bower_components/nvd3/build/nv.d3.min.css" />-->

        <!-- jvectormap -->
        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/jquery-jvectormap/jquery-jvectormap.css" />-->
        <!-- select2-->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/_con/select2/select2.min.css" />

        <!-- Main -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/_con/css/con-base.css?t=<?php print rand() ?>" />
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>css/lz.css?t=<?php print rand() ?>" />
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/jquery-ui-1.12.1/jquery-ui.min.css">

        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>css/persian-datepicker.css" />-->
        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>css/persian-datepicker-blue.css" />-->

        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/_con/css/con-green.css" />


        <!-- Squire -->
        <!--<link href="<?php print _MEDIA_URL ?>assets/_con/squire/squire-ui.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>/css/custom.css" />
        <style>
            html {
                font-family: tahoma;
                /*font-weight: 400;*/
                /*color:#388e3c;*/
            }
        </style>

        <?php if ($_SESSION['selected_lang'] == 'fa'): ?>
            <!--<link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">--> 
            <link href="<?php print _MEDIA_URL ?>fonts/fonts.css" rel="stylesheet"> 
            <style>
                html {
                    font-family: 'Iranian Sans', serif;
                    /*font-weight: 400;*/
                    color:#388e3c;
                }

            </style>    
        <?php endif; ?>

        <!--[if lt IE 9]>
            <script src="<?php print _MEDIA_URL ?>bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <![endif]-->
        <!--<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />-->

        <style type="text/css">
            .active_menu{
                background-color: #C71418;    
                /*background-color: #49A9F5;*/    
                color: white !important;
                border-radius: 30px;

            }
            /*            .card-panel, .collapsible-header, select,.card{
                            background-color: <?php print isset($_REQUEST['user_type']) && $_REQUEST['user_type'] == '2' ? " #fbe9e7" : "#f1f8e9"  ?>; 
                        }*/
        </style>
    </head>
    <!--
      Body
        Options:
          .boxed - boxed layout for content
    -->

    <body>
        <?php /* if (!_isLocalMachine()): ?>
          <script type="text/javascript" src="https://hubmost.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/ct4jhl/100016/c/1000.0.10/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=bcb25529"></script>
          <?php endif; */ ?>
        <?php if ($no_visible_elements != 1) { ?>


            <?php include _PATH . 'instance/front/tpl/nav.php'; ?>

            <?php
            if ($_REQUEST['q'] == 'station5') {
                include _PATH . 'instance/front/tpl/left.php';
            } else {
                
            }
            ?>
            <!-- Main Content -->
            <section class="content-wrap">
                <?php //include _PATH . 'instance/front/tpl/breadcrumb.php';  ?>

                <?php
                if (!include _PATH . 'instance/front/tpl/' . $modulePage) {
                    include _PATH . 'instance/front/tpl/404.php';
                }
                ?>

            </section>
            <!-- /Main Content -->
        <?php } else { ?>
            <?php include _PATH . 'instance/front/tpl/' . $modulePage ?>
        <?php } ?>

        <!-- Search Bar -->
        <div class="search-bar">
            <div class="layer-overlay"></div>
            <div class="layer-content">
                <form action="#!">
                    Header 
                    <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>
                        <?php include 'search_quote.php'; ?>
                </form>
            </div>
        </div>
        <!-- /Search Bar -->

        <!--        <footer>
        <?php print date("Y") ?> <strong>LifeZaver</strong>. All rights reserved.
                </footer>-->

        <!-- CKeditor -->
<!--        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/ckeditor/adapters/jquery.js"></script>-->

        <!-- MarkItUp -->
<!--        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/markitup-1x/markitup/jquery.markitup.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/markitup-1x/markitup/sets/default/set.js"></script>-->

        <!-- jQuery -->

        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/jquery/dist/jquery.min.js"></script>
        <!--<script src="js/jquery-ui-1.10.3.custom.min.js"></script>-->
        <!-- jQuery RAF (improved animation performance) -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js"></script>-->
        <!-- Clockpicker -->
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
        <!--persian calander-->

<!--        <script type="text/javascript" src="<?php print _MEDIA_URL ?>/js/persian-date.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/mousewheel.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/plugin.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/constant.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/config.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/template.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/base-class.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/compat-class.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/helper.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/monthgrid.js"></script>
        <script type="text/javascript"  src="<?php print _MEDIA_URL ?>js/js/monthgrid-view.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/datepicker-view.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/datepicker.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/navigator.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/daypicker.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/monthpicker.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/yearpicker.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/toolbox.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/timepicker.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/state.js"></script>-->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/jalaali-js-master/bench.js"></script>-->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/jalaali-js-master/test.js"></script>-->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>js/js/jalaali-js-master/index.js"></script>-->

        <!-- nanoScroller -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>-->

        <!-- Materialize -->
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/materialize/bin/materialize.js"></script>

        <!-- Simple Weather -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>-->

        <!-- Sparkline -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/jquery.sparkline/dist/jquery.sparkline.min.js"></script>-->

        <!-- Flot -->
<!--        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/flot/jquery.flot.time.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/flot/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>-->

        <!-- d3 -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/d3/d3.min.js"></script>-->

        <!-- nvd3 -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/nvd3/build/nv.d3.min.js"></script>-->

        <!-- Rickshaw -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/rickshaw/rickshaw.min.js"></script>-->

        <!-- jvectormap -->
<!--        <script type="text/javascript" src="<?php print _MEDIA_URL ?>assets/jquery-jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>assets/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>assets/jquery-jvectormap/gdp-data.js"></script>-->

        <!-- Sortable -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/Sortable/Sortable.min.js"></script>-->

        <!-- Main -->
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>assets/_con/js/_con.js"></script>

        <!-- Google Prettify -->
        <!--<script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/code-prettify/src/prettify.js"></script>-->
        <!-- Squire -->
<!--        <script src="<?php print _MEDIA_URL ?>bower_components/squire/build/squire.js" type="text/javascript"></script>
        <script src="<?php print _MEDIA_URL ?>assets/_con/squire/squire-ui.js" type="text/javascript"></script>-->


        <!-- Parsley (validation) -->
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/parsleyjs/dist/parsley.min.js"></script>
        <!-- Drop Zone -->



        <!-- Data Tables -->
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/datatables-scroller/js/dataTables.scroller.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>assets/_con/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>bower_components/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

        <script type="text/javascript" src="<?php print _MEDIA_URL ?>assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>



        <?php // generic script   ?>
        <?php include _PATH . 'instance/front/tpl/scripts.php'; ?>

        <!-- Custom JS-->
        <?php @include _PATH . 'instance/front/tpl/' . $jsInclude; ?>


        <script>
            $(document).ready(function () {
<?php if (!isset($_SESSION['selected_lang']) || (IS_DEV_ENV && !isset($_SESSION['selected_lang_dev']))): ?>
                    setTimeout(openLangBar, 4000);
<?php endif; ?>
            });
            function openLangBar() {
                $("#lang_bar").slideDown();
            }
            $("#btn_lang_submit").click(function e() {
                setSelectedLanguage();
            });
            $(".lang_close i").click(function e() {
                closeLanguageBar();
            });
            function setSelectedLanguage() {
                $("#lang_bar").slideUp();
                var set_lang = $(".rd-lang:checked").val();
                $.ajax({url: '<?= _U . "lang_setting"; ?>',
                    data: {setLanguage: 1, set_lang: set_lang},
                    type: 'POST',
                    dataType: 'json',
                    success: function (r) {
                        if (r.is_change == '1') {
                            location.reload();
                        }
                    }
                });
            }
            function closeLanguageBar() {
                $("#lang_bar").slideUp();
                $.ajax({
                    url: '<?= _U . "lang_setting"; ?>',
                    data: {closeLanguageBar: 1},
                    type: 'POST',
                    success: function (r) {
                        console.log(r);
                    }
                });
            }
            //             Compare Parsian Date in Server  side for Expiry Dates
            function _compareDate(dateString) {
                var selectedDate = new Date(dateString);
                gm =<?= $p_Month ?>;
                gd =<?= $p_Day ?>;
                gy =<?= $p_Year ?>;
                var SysdateString = gm + "/" + gd + "/" + gy;
                //        var now = new Date();
                var sDate = new Date(SysdateString);
                //        alert("Selected date= " + selectedDate + "Now  Sys Date =" + sDate);
                //        jalaali.toJalaali(2016, 4, 11);
                //        var now = new Date("4/5/1400");
                var d1 = Date.parse(selectedDate);
                sDate.setHours(0, 0, 0, 0);
                sDate.setDate(sDate.getDate() + 1);

                var d2 = Date.parse(sDate);
                console.log(d1 / 1000);
                console.log(d2 / 1000);

                //        selectedDate1 = d1 / 1000;
                //        now1 = d2 / 1000;
                //        var now_date = now.toISOString();
                if (selectedDate < sDate) {

                    return false;
                } else {

                    return true;
                }
            }
            function _compareDate2(dateString) {
                var selectedDate = new Date(dateString);
                gm =<?= $p_Month ?>;
                gd =<?= $p_Day ?>;
                gy =<?= $p_Year ?>;
                var SysdateString = gm + "/" + gd + "/" + gy;
//        var now = new Date();
                var sDate = new Date(SysdateString);
//                var now = new Date();
//        var now = new Date("4/5/1390");
//                now.setHours(0, 0, 0, 0);
                //                now.setDate(now.getDate() - 1);
                var sDate = new Date(SysdateString);
                //        alert("Selected date= " + selectedDate + "Now  Sys Date =" + sDate);
                //        jalaali.toJalaali(2016, 4, 11);
                //        var now = new Date("4/5/1400");
                var d1 = Date.parse(selectedDate);
                sDate.setHours(0, 0, 0, 0);
                sDate.setDate(sDate.getDate() - 1);

                var d2 = Date.parse(sDate);
                console.log(d1 / 1000);
                console.log(d2 / 1000);

                if (selectedDate > sDate) {

                    return false;
                } else {

                    return true;
                }
            }

        </script>
        <?php /* if (!isset($_SESSION['user']) || !in_array('Cs-Agent', $_SESSION['user']['roles'])): ?>
          <script type="text/javascript" src="https://aber-app.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/kci0br/100023/c/1000.0.11/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=c68d0fcf"></script>
          <?php else: ?>
          <script type="text/javascript" src="https://aber-app.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/kci0br/100023/c/1000.0.11/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=514df791"></script>
          <?php endif; */ ?>


    </body>

</html>