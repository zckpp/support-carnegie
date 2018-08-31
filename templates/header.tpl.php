<div class="header-wrapper clearfix ">
    <div class="container">
        <div class="header col-md-3 col-sm-3 col-xs-8">
            <a href="<?php global $base_url; print $base_url;?>"><img src="<?php print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_my.png" /></a>
        </div>

        <nav class="menu col-md-9 col-sm-9 col-xs-4">
            <?php if ($page['navigation']) :?>
                <?php print render($page['navigation']); ?>
            <?php else : ?>
                <div id="main-menu">
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>
                </div>
            <?php endif; ?>
        </nav>

        <!--user avatar-->
        <a title="Edit Profile" class="link" href="<?php if (!empty($imageEditLink)) print $imageEditLink?>"><img src="<?php if (!empty($photoURL)) print $photoURL ?>" class="profilePhoto"></a>
    </div>
</div>