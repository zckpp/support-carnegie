(function ($) {
    // change search button to find
    // $( document ).ready(function () {
    //     $('#edit-submit').val('Find');
    // })

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

    });

}(jQuery));

