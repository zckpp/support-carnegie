(function ($) {
    // one time animation when page load
    $(window).load(function() {
        $('ol.search-results div.col-md-4, ol.search-results div.col-md-8').addClass("fadein");
    });

    $( document ).ready(function() {
        // Add accordion for login form
        if ($('body').hasClass("page-user-login")) {
            $( ".saml_sp_drupal_login-links" ).insertBefore($("#user-login--2 > div"));
            $( ".saml_sp_drupal_login-links a" ).text("");
            $(".form-item-name, .form-item-pass, #edit-actions--2").addClass("collapse");
        }

        // change search page language
        if ($("body").hasClass("page-ldap-search")) {
            $('<img src="/sites/all/themes/startupgrowth_ciw/image/icon-search.png" class="icon" />').insertAfter('.content h1');
            $('#edit-keys-2').attr("placeholder","Enter name or key words");

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

        //convert relative image url to absolute for hq feeds news
        var image = ".node-type-event .content .field-name-body img";
        if ($(image)) {
            $(image).each(function () {
                var rUrl = $(this).attr('src');
                // if url is relative, change it to absolute
                if (rUrl.indexOf("http") < 0) {
                    rUrl = "https://carnegiescience.edu" + rUrl;
                }
                $(this).attr('src',rUrl);
            })
        }

        //tooltip function
        $('.tooltip').tooltip();

        //disable click button
        $('.isDisabled').attr("href","javascript: void(0)");

        // Accordion
        const lists = $(".project-list");
        function down (el) {
            el.next().slideDown();
            el.addClass('active');
        }
        function up (el) {
            el.next().slideUp();
            el.removeClass('active');
        }
        lists.click(function () {
            return ($(this).hasClass('active')) ? up($(this)) : down($(this));
        });
        // Open accordion based on url query string parameter
        var urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('action')) {
            var list_id = "#" + urlParams.get('action');
            down($(list_id));
            $('html, body').animate({
                scrollTop: $(list_id).offset().top
            }, 1000);
        }
    });
}(jQuery));


