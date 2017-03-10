<section id="forgot-password">
    <!-- Background Bubbles -->
    <!--<canvas id="bubble-canvas"></canvas>-->
    <!-- /Background Bubbles -->
    <!-- Reset Form -->
    <form action="" method="post" id="resetpassword">
        <div class="col s8 logo" style="text-align: left;">
    <!--                    <img src="<?php print _MEDIA_URL ?>/images/MasirApp.png" alt="">-->
            <img src="<?php print _MEDIA_URL ?>/images/ks_labs-logo.png" style="height: 60px;width: 120px;" alt="">
            <!--<span style="font-weight:bold;font-size:50px;color: #C71418;text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">Aber</span>-->
        </div>
        <div class="card-panel">

            <div class="alert blue lighten-5 blue-text text-darken-2">
                <strong><i class="fa fa-css3"></i></strong>&nbsp;<?php print _t('234', 'We will reset password for this email.'); ?> 
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    if ($reset_error != '') {
                        ?>
                        <div class="" style="padding:5px;">
                            <div style="float:right;"><img src="<?php print _MEDIA_URL ?>img/login-erroe.png" width="28" height="26" alt=" " /></div>
                            <div style="margin-left:42px;color:red;"><?php _t('237', 'Password not match'); ?></div>
                            <div style="clear:both;"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col m12 s12">
                    <div class="input-field">
                        <i class="fa fa-unlock-alt prefix"></i>
                        <input id="password" type="password" name="password">
                        <label for="password"><?php print _t('189', 'Password') ?></label>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-unlock-alt prefix"></i>
                        <input id="re-password" type="password" name="re-password">
                        <label for="re-password">Re-Enter Password</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class=" col m4 s12">
                    <button type="submit" name="submit" class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover"><?php print _t('225', 'reset'); ?></button>
                </div>
            </div>

        </div>
    </form>
    <!-- /Reset Form -->

</section>