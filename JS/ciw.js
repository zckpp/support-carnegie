(function ($) {
    // change search button to find
    // $( document ).ready(function () {
    //     $('#edit-submit').val('Find');
    // })

    // one time animation when page load
    $(window).load(function() {
        $('ol.search-results div.col-md-4, ol.search-results div.col-md-8').addClass("fadein");
    });


}(jQuery));

