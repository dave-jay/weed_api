<?php
$no_visible_elements = 1;
$urlArgs = _cg("url_vars");

$user_name = qs("SELECT * FROM tb_users WHERE email='{$urlArgs[0]}'");

$reset_error = '';

if ($_REQUEST['password'] != '') {
    $pass = $_REQUEST['password'];
    $re_pass = $_REQUEST['re-password'];

    if ($pass != $re_pass) {
        $reset_error = 1;
    } else {
        $fields['password'] = md5($_REQUEST['password']);

        qu("tb_users", $fields, "email='{$urlArgs[0]}'");
        ?>
        <section id="forgot-password">
            <!-- Background Bubbles -->
            <canvas id="bubble-canvas"></canvas>
            <!-- /Background Bubbles -->
            <!-- Reset Form -->

            <form>
                <div class="col s8 logo" style="text-align: left;">
        <!--                    <img src="<?php print _MEDIA_URL ?>/images/MasirApp.png" alt="">-->
                    <img src="<?php print _MEDIA_URL ?>/images/ks_labs-logo.png" style="height: 60px;width: 120px;" alt="">
                    <!--<span style="font-weight:bold;font-size:50px;color: #C71418;text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">Aber</span>-->
                </div>
                <div class="card-panel">
                    <div class="alert green lighten-5 blue-text text-darken-2">
                        <strong><i class="fa fa-css3"></i></strong>&nbsp; Hi,&nbsp;<?php echo $user_name['fname'] . ' ' . $user_name['lname']; ?>.<br>
                        <div style="font-size: 25px;font-weight: 400;margin: 15px 0 15px 20px;"><?php print _t('235', 'Congratulations! You have successfully changed your password'); ?></div>
                        <div style="">
                            <br><br><br>
                            <a href="<?php echo _U; ?>login" class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover"><?php print _t('236', 'Continue to Login'); ?></a>
                        </div>

                    </div>


                </div>
            </form>

            <!-- /Reset Form -->

        </section>
        <?php
    }
}
?>
