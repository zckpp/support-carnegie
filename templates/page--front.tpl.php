<!-- #page-container -->

<div id="page-container">


<!-- #header -->
<div class="header-wrapper clearfix ">
    <div class="header col-md-6">

        <a href="<?php global $base_url; print $base_url;?>"><img src="<?php print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_solid.png" /></a>

        <span>MyCarnegie</span>

        <a href="#" id="pull"></a>
    </div>

    <nav class="menu col-md-6">
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
        <img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/people.png" />

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


<!--                <ul>-->
<!--                    <li>-->
<!--                        <a target="_blank" href="https://carnegiescience.freshservice.com/support/home">-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Support.png"></div>-->
<!--                            <p>IT Help Desk</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a>-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Contract Review.png"></div>-->
<!--                            <p>Contract<br> Review</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a>-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/New hire onboarding.png"></div>-->
<!--                            <p>New hire <br>onboarding</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a>-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Fix Request.png"></div>-->
<!--                            <p>Fix Request</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a>-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Wire request form.png"></div>-->
<!--                            <p>Wire request<br> form</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a>-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Grants Form.png"></div>-->
<!--                            <p>Grants Form</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a>-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Ask HR.png"></div>-->
<!--                            <p>Ask HR</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a data-toggle="modal" data-target="#myModal">-->
<!--                            <div><img src="--><?php //global $base_url; print $base_url;?><!--/sites/all/themes/startupgrowth_ciw/image/Ask Ap.png"></div>-->
<!--                            <p>People Finder</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->

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
                    <iframe src="<?php global $base_url; print $base_url;?>/dbsearch" style="border:none;" height="600" width="570"></iframe>
                    <!--Search section end-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

<!--link section ends        -->



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
                                <i class="fa fa-linkedin fa-fw" aria-hidden="true"></i><a>Linkedin</a>
                            </li>
                            <li>
                                <i class="fa fa-facebook fa-fw" aria-hidden="true"></i><a>Facebook</a>
                            </li>
                            <li>
                                <i class="fa fa-twitter fa-fw" aria-hidden="true"></i><a>Twitter</a>
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



</div>
<!-- EOF:#page-container -->
