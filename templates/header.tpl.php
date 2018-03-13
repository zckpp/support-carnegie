<div class="header-wrapper clearfix ">
    <div class="header col-md-5 col-sm-5 col-xs-6">

        <a href="<?php global $base_url; print $base_url;?>"><img src="<?php print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_solid.png" /></a>

        <span>MyCarnegie</span>

        <a href="#" id="pull"></a>
    </div>

    <nav class="menu col-md-7 col-sm-7 col-xs-6">
        <?php if ($page['navigation']) :?>
            <?php print render($page['navigation']); ?>
        <?php else : ?>
            <div id="main-menu">
                <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>
            </div>
        <?php endif; ?>
    </nav>
</div>
