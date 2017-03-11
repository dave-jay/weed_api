<section id="forgot-password">
    <!-- Background Bubbles -->
    <!--<canvas id="bubble-canvas"></canvas>-->
    <!-- /Background Bubbles -->
    <!-- Reset Form -->
    <form action="" method="post">
        <div class="col s8 logo" style="text-align: left;">
<!--                    <img src="<?php print _MEDIA_URL ?>/images/MasirApp.png" alt="">-->
            <img src="<?php print _MEDIA_URL ?>/images/ks_labs-logo.png" style="height: 60px;width: 120px;" alt="">
            <!--<span style="font-weight:bold;font-size:50px;color: #C71418;  text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">Weed_API</span>-->
        </div>
        <div class="card-panel">
            <div class="alert blue lighten-5 blue-text text-darken-2">
                <strong><i class="fa fa-css3"></i></strong>&nbsp;We will send instructions to reset your password to your email.
            </div>

            <div class = "row">
                <div class = "col m9 s12">
                    <div class = "input-field">
                        <i class = "fa fa-envelope prefix"></i>
                        <input id = "input_email" type = "email" name = "email" placeholder="E-Mail">                        
                    </div>
                </div>
                <div class = "col m3 s12">
                    <button type = "submit" name = "submit" class = "waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">reset</button>
                </div>
            </div>

        </div>
    </form>
    <!--/Reset Form -->

</section>
<style>
    .input-field .prefix ~ input,
    .input-field .prefix ~ textarea {
        width: calc(100% - 4rem); }
    ::-webkit-input-placeholder {
        color: #4d4d4d; }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #4d4d4d; }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #4d4d4d; }

    :-ms-input-placeholder {
        color: #4d4d4d; }</style>