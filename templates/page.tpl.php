<!-- #page-container -->
<div id="page-container">

    <?php if (theme_get_setting('scrolltop_display')): ?>
    <div id="toTop"><i class="fa fa-angle-up"></i></div>
    <?php endif; ?>

    <!-- #header -->
    <div class="header-wrapper clearfix ">
        <div class="header col-md-6 col-sm-6 col-xs-6">

            <a href="<?php global $base_url; print $base_url;?>"><img src="<?php print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_solid.png" /></a>

            <span>MyCarnegie</span>

            <a href="#" id="pull"></a>
        </div>

        <nav class="menu col-md-6 col-sm-6 col-xs-6">
            <?php if ($page['navigation']) :?>
                <?php print render($page['navigation']); ?>
            <?php else : ?>
                <div id="main-menu">
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>
                </div>
            <?php endif; ?>
        </nav>
    </div>
    <!-- EOF: #header -->

    <?php if ($page['banner']) : ?>
    <!-- #banner -->
    <div id="banner" class="clearfix">

        <!-- #banner-inside -->
        <div id="banner-inside" class="clearfix">
            <div class="banner-area">
            <?php print render($page['banner']); ?>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
    <!-- EOF:#banner -->
    <?php endif; ?>

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

        <?php if ($page['top_content']):?>
        <!-- #top-content -->
        <div id="top-content" class="clearfix">
            <div class="container">

                <!-- #top-content-inside -->
                <div id="top-content-inside" class="clearfix">
                    <div class="row">
                        <div class="col-md-12">
                        <?php print render($page['top_content']); ?>
                        </div>
                    </div>
                </div>
                <!-- EOF:#top-content-inside -->

            </div>
        </div>
        <!-- EOF: #top-content -->
        <?php endif; ?>

        <?php if ($page['highlighted']):?>
        <!-- #highlighted -->
        <div id="highlighted">
            <div class="container">

                <!-- #highlighted-inside -->
                <div id="highlighted-inside" class="clearfix">
                    <div class="row">
                        <div class="col-md-12">
                        <?php print render($page['highlighted']); ?>
                        </div>
                    </div>
                </div>
                <!-- EOF:#highlighted-inside -->

            </div>
        </div>
        <!-- EOF: #highlighted -->
        <?php endif; ?>

        <!-- #main-content -->
        <div id="main-content">
            <div class="container">

                <div class="row">

                    <?php if ($page['sidebar_first']):?>
                    <aside class="<?php print $sidebar_grid_class; ?>">
                        <!--#sidebar-->
                        <section id="sidebar-first" class="sidebar clearfix">
                        <?php print render($page['sidebar_first']); ?>
                        </section>
                        <!--EOF:#sidebar-->
                    </aside>
                    <?php endif; ?>

                    <section class="<?php print $main_grid_class; ?>">

                        <!-- #main -->
                        <div id="main" class="clearfix">

                            <?php print render($title_prefix); ?>
                            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                            <?php print render($title_suffix); ?>

                            <!-- #tabs -->
                            <?php if ($tabs):?>
                                <div class="tabs">
                                <?php print render($tabs); ?>
                                </div>
                            <?php endif; ?>
                            <!-- EOF: #tabs -->

                            <?php print render($page['help']); ?>

                            <!-- #action links -->
                            <?php if ($action_links):?>
                                <ul class="action-links">
                                <?php print render($action_links); ?>
                                </ul>
                            <?php endif; ?>
                            <!-- EOF: #action links -->

                            <?php if (theme_get_setting('frontpage_content_print') || !drupal_is_front_page()):?> 
                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>
                            <?php endif; ?>

                        </div>
                        <!-- EOF:#main -->

                    </section>

                    <?php if ($page['sidebar_second']):?>
                    <aside class="<?php print $sidebar_grid_class; ?>">
                        <!--#sidebar-->
                        <section id="sidebar-second" class="sidebar clearfix">
                        <?php print render($page['sidebar_second']); ?>
                        </section>
                        <!--EOF:#sidebar-->
                    </aside>
                    <?php endif; ?>

                </div>

            </div>
        </div>
        <!-- EOF:#main-content -->

    </div>
    <!-- EOF: #page -->

    <?php if ($page['highlighted_bottom_left'] || $page['highlighted_bottom_right']):?>
    <!-- #highlighted-bottom -->
    <div id="highlighted-bottom">
        <div id="highlighted-bottom-transparent-bg"></div>

            <div class="container">

                <!-- #highlighted-bottom-inside -->
                <div id="highlighted-bottom-inside" class="clearfix">
                    <div class="row">
                        <?php if ($page['highlighted_bottom_left']):?>
                        <div class="<?php print $highlighted_bottom_left_grid_class?>">
                            <div id="highlighted-bottom-left">
                                <?php print render($page['highlighted_bottom_left']); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($page['highlighted_bottom_right']):?>
                        <div class="<?php print $highlighted_bottom_right_grid_class?>">
                            <div id="highlighted-bottom-right">                        
                            <?php print render($page['highlighted_bottom_right']); ?>
                            </div>
                        </div>
                        <?php endif; ?>                    
                    </div>
                </div>
                <!-- EOF:#highlighted-bottom-inside -->

            </div>

    </div>
    <!-- EOF: #highlighted-bottom -->
    <?php endif; ?>

    <?php if ($page['bottom_content']):?>
    <!-- #bottom-content -->
    <div id="bottom-content" class="clearfix">
        <div class="container">

            <!-- #bottom-content-inside -->
            <div id="bottom-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print render($page['bottom_content']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    <?php endif; ?>

    <?php if ($page['footer_top']):?>
    <!-- #footer-top -->
    <div id="footer-top" class="clearfix">
        <div class="container">

            <!-- #footer-top-inside -->
            <div id="footer-top-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print render($page['footer_top']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF:#footer-top-inside -->

        </div>
    </div>
    <!-- EOF: #footer-top -->
    <?php endif; ?>    





    
</div>
<!-- EOF:#page-container -->
<!-- #footer -->
<footer class="footer">
    <div class="container Footer">
        <div class="row">
            <div class="footer-image col-md-5 col-sm-3">
                <a href="<?php print $base_url;?>"><img src="<?php print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_solid.png" /></a>

                <span>MyCarnegie</span></div>

            <div class="footer-list col-md-2 col-sm-4 col-xs-4">
                <ul class="footer-menu">
                    <li>
                        <strong>MENU</strong>
                    </li>
                    <li>
                        <a>About us</a>
                    </li>
                    <li>
                        <a>Term of Service</a>
                    </li>
                    <li>
                        <a>Private Policy</a>
                    </li>
                    <li>
                        <a>Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-list col-md-2 col-sm-4 col-xs-4">
                <ul class="footer-menu">
                    <li>
                        <strong>FOLLOW US</strong>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/carnegiescience"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i>Instagram</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/carnegiescience/"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i>Facebook</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/carnegiescience"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i>Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="footer-list col-md-3 col-sm-4 col-xs-4">
                <ul class="footer-menu">
                    <li>
                        <strong>GET IN TOUCH</strong>
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw" aria-hidden="true"></i><a>phone number</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i><a>Email</a>
                    </li>
                    <li>
                        <i class="fa fa-location-arrow fa-fw" aria-hidden="true"></i><a>Address</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</footer>
<!-- EOF #footer -->
