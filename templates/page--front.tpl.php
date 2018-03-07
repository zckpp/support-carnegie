<!-- #page-container -->

<div id="page-container">


    <!-- #header -->
    <?php include 'header.tpl.php'; ?>
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

            <div class="slide-homepage">
                <img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/mycarnegie.jpg" />
                <img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/mycarnegie2.jpg" />
                <img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/mycarnegie3.jpg" />
                <img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/mycarnegie4.jpg" />
            </div>

            <div class="col-md-4 col-sm-12">
                <img class="bell" src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/bell.jpg" />
            </div>
            <div class="col-md-4 col-sm-12">
                <h2 style="color: #153571">Welcome to <strong>MyCarnegie</strong> Portal</h2>
                <h3>How may we <strong>help you?</strong></h3>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="fastLinks clearfix">
                    <h1>I WANT TO...</h1>
                    <ul class="clearfix">
                        <a class="link" data-toggle="modal" data-target="#myModal" href="javascript:void(0)"><li class="faa-parent animated-hover">Search PeopleFinder<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Submit contract for review<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Submit grant for review<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Ask HR a question<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                        <a class="link" href=""><li class="faa-parent animated-hover">Request a wire transfer<i class="fa fa-arrow-circle-right faa-passing animated-hover" aria-hidden="true"></i></li></a>
                    </ul>

                </div>
            </div>
        </section>

        <br>
        <br>

        <section class="latest-article">
            <div class="container">
                <?php $block = module_invoke('views', 'block_view', 'latest_article-block'); print render($block['content']); ?>
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
                        <iframe src="<?php global $base_url; print $base_url;?>/dbsearch" style="border:none;" height="600" width="570"></iframe>
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

<script>
    (function ($) {
        if ($('.slide-homepage').length != 0){
            $('.slide-homepage').slick({
                arrows: false,
                infinite: true,
                speed: 500,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToShow: 1,
            });
        }
    }(jQuery));
</script>

