<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$no_visible_elements = 1;

if ($_REQUEST['email'] != '') {

    $email = $_REQUEST['email'];
    $user_name = qs("SELECT * FROM tb_users WHERE email='{$email}'");

    $sendemail = _escape($user_name['email']);
    $subject = "Reset Password";

    ob_start();
    include _PATH . 'instance/front/tpl/password_formate.php';
    $content = ob_get_contents();
    ob_end_clean();
//    print $content;
    _mail($sendemail, $subject, $content);
//    die;
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
                <!--<span style="font-weight:bold;font-size:50px;color: #C71418;  text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">Aber</span>-->
            </div>
            <div class="card-panel">
                <div class="alert green lighten-5 blue-text text-darken-2">
                    <strong><i class="fa fa-css3"></i></strong>&nbsp; Hi,&nbsp;<?php echo $user_name['fname'] . ' ' . $user_name['lname']; ?>.<br><br>
                    <div style="font-size: 20px;font-weight: 400;"><?php print _t('230', 'Check your email'); ?></div>
                    <div style="font-size: 17px;font-weight: 300;"><?php print _t('231', 'We have sent an email to'); ?>&nbsp;<a href=""><?php echo $email ?></a>&nbsp; <?php print _t('232', 'Click the link in the email to reset password.'); ?> <br> <br><strong>OR</strong>
                        <br><br>
                        <a href="<?php echo _U; ?>forgot_password" style="" class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover"><?php print _t('233', 'Resend the Email'); ?></a>

                    </div>


                </div>


            </div>
        </form>

        <!-- /Reset Form -->

    </section>

    <?php
}
_cg("page_title", "Forgot Password");
?>

