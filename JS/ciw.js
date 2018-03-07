(function ($) {

    // one time animation when page load
    $(window).load(function() {
        $('ol.search-results div.col-md-4, ol.search-results div.col-md-8').addClass("fadein");
    });

    $( document ).ready(function() {
        // Add accordion for login form
        if ($("body").hasClass("page-user-login")) {

                $( ".saml_sp_drupal_login-links" ).insertBefore($("#user-login > div"));
                $( "<h3>Or</h3>" ).insertBefore($("#user-login > div"));

                $(".form-item-name, .form-item-pass, #edit-submit").addClass("collapse");
                $( '<button class="btn btn-info" type="button" data-toggle="collapse" data-target=".collapse" aria-expanded="false">Login As Admin</button>' ).insertAfter($( "#user-login > div" ));
        }

        //top nav people finder modal
        if ($('#peopleFinder')) {
            $('#peopleFinder').attr({"data-toggle":"modal", "data-target":"#myModal", "href":"javascript:void(0)"});
        }

        //click outside menu to close
        $('html').click(function () {
            var menu = $('ul.sf-menu');
            if (menu.hasClass('sf-expanded')) {
                menu.removeClass('sf-expanded');
                menu.addClass('sf-hidden');
            }
        });
        //if click on the menu or toggle button do not close, bind event to menu block instead of toggle button because it needs click to toggle
        $('div.block-superfish').click(function (e) {
            e.stopPropagation();
        //Can only bind one object at a time
        });
        $('ul.sf-menu a').click(function (e) {
            e.stopPropagation();
        });

        // click card to invoke link inside
        $('.latest-article .view-content .wrapper').click(function (e) {
            e.stopPropagation();
            $(this).children().last().find('a')[0].click();
        })

    });

}(jQuery));

