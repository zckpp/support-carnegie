<!-- #page-container -->
<div id="page-container">

    <!-- #header -->
    <div class="header-wrapper clearfix ">
        <div class="container">
            <div class="header col-md-4 col-sm-4 col-xs-6">
                <a href="<?php global $base_url; print $base_url;?>"><img src="<?php print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_my.png" /></a>
            </div>
        </div>
    </div>
    <!-- EOF: #header -->

    <!-- #page -->
    <div id="page" class="clearfix">

        <!-- #messages-console -->
        <?php if ($messages):?>
        <div id="messages-console" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php print $messages; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- EOF: #messages-console -->

        <!-- #main-content -->
        <div id="main-content">
            <div class="logIn">

                <h1>Sign In</h1>
                <?php $form = drupal_get_form('user_login'); print drupal_render($form); ?>
                <button class="btn" type="button" style="margin-top: 25px;background: white;" data-toggle="collapse" data-target=".collapse" aria-expanded="false">Sign in As Admin</button>


            </div>
        </div>
        <!-- EOF:#main-content -->

    </div>
    <!-- EOF: #page -->
    
</div>

