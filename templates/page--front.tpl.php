<!-- #page-container -->
<?php include 'includes/homepage.inc'; ?>
<div id="page-container">

    <?php if (theme_get_setting('scrolltop_display')): ?>
        <div id="toTop"><i class="fa fa-angle-up"></i></div>
    <?php endif; ?>

    <!-- #header -->
    <?php include 'header.tpl.php'; ?>

    <!--front page slideshow-->
    <?php $block = module_invoke('md_slider', 'block_view', 'md-slider-5ac4dfbb3f6b9'); if (!empty($block['content'])) {print render($block['content']);}  ?>
    <div class="landingBanner">
        <h1>Welcome to My Carnegie Portal</h1>
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

        <!--    link section    -->
        <br>

        <section class="container">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h1>STAFF DIRECTORY</h1>
                <div class="bell">
                    <a href="/ldap-search" target="_blank"><img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/icon-carnegie1.png" /></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fastLinks clearfix">
                    <h1>UPCOMING EVENTS</h1>
                    <ul>
                        <?php $block = module_invoke('views', 'block_view', 'calendar-block');  if (!empty($block['content'])) {print render($block['content']);}?>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fastLinks clearfix">
                    <h1>I WANT TO...</h1>
                    <ul class="clearfix">
                        <a class="link" href="/legal-form"><li class="faa-parent animated-hover">Submit a contract for review<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href="/policy/authorization-matrix"><li class="faa-parent animated-hover">View "New" Authorization Matrix<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
<!--                        <a class="link" href=""><li class="faa-parent animated-hover">Submit grant for review<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>-->
<!--                        <a class="link" href=""><li class="faa-parent animated-hover">Ask HR a question<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>-->
<!--                        <a class="link" href=""><li class="faa-parent animated-hover">Request a wire transfer<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>-->
                        <a class="link" href="<?php print $imageEditLink;?>"><li class="faa-parent animated-hover">Update profile photo and Bio<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href="https://password.carnegiescience.edu/PMUser/" target="_blank"><li class="faa-parent animated-hover">Change my password<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>

                    </ul>

                </div>
            </div>
        </section>
        <!--link section ends-->

        <!--Latest Article section-->
        <section class="latest-article">
            <div class="container">
                <h1 style="padding-left: 10px;">INSIDE CARNEGIE</h1>
                <div class="row">
                    <?php $block = module_invoke('views', 'block_view', 'latest_article-block'); if (!empty($block['content'])) {print render($block['content']); } ?>
                </div>
            </div>
        </section>

        <br>
        <!--Latest Article section ends-->




    </div>

</div>
<!-- EOF:#page-container -->

<?php include 'footer.tpl.php'; ?>

