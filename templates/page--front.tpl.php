<!-- #page-container -->
<?php include 'includes/homepage.inc'; ?>
<div id="page-container">


    <!-- #header -->
    <?php include 'header.tpl.php'; ?>
    <?php $block = module_invoke('md_slider', 'block_view', 'front-page'); print render($block['content']); ?>
    <div class="landingBanner">
        <h1>Welcome to MyCarnegie Portal</h1>
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

            <div class="col-md-4 col-sm-12">
                <h1>PEOPLE FINDER</h1>
                <div class="bell">
                    <a data-toggle="modal" data-target="#myModal" href="javascript:void(0)"><img src="data:image/png;base64,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" />
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="fastLinks clearfix">
                    <h1>CALENDAR</h1>
                    <ul>
                        <?php $block = module_invoke('views', 'block_view', 'calendar-block'); print render($block['content']); ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="fastLinks clearfix">
                    <h1>I WANT TO...</h1>
                    <ul class="clearfix">
<!--                        <a class="link" data-toggle="modal" data-target="#myModal" href="javascript:void(0)"><li class="faa-parent animated-hover">Search PeopleFinder<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>-->
                        <a class="link" href=""><li class="faa-parent animated-hover">Submit contract for review<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Submit grant for review<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Ask HR a question<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Request a wire transfer<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href="<?php print $imageEditLink;?>"><li class="faa-parent animated-hover">Change my profile photo<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                    </ul>

                </div>
            </div>
        </section>

        <br>
        <br>

        <section class="latest-article">
            <div class="container">
                <h1 style="padding-left: 10px;">LATEST ARTICLE</h1>
                <div class="row">
                    <?php $block = module_invoke('views', 'block_view', 'latest_article-block'); print render($block['content']); ?>
                </div>
            </div>
        </section>

        <br>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">People Finder</h4>
                    </div>
                    <div class="modal-body">
                        <!--Search section-->
                        <iframe src="<?php global $base_url; print $base_url;?>/ldap-search" style="border:none;" height="600" width="570"></iframe>
                        <!--Search section end-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!--link section ends-->

    </div>

</div>
<!-- EOF:#page-container -->

<?php include 'footer.tpl.php'; ?>

