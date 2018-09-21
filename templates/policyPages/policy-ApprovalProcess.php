<style>
    /*
        Colorbox Core Style:
        The following CSS is consistent between example themes and should not be altered.
    */
    #colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
    #cboxOverlay{position:fixed; width:100%; height:100%;}
    #cboxMiddleLeft, #cboxBottomLeft{clear:left;}
    #cboxContent{position:relative;}
    #cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
    #cboxTitle{margin:0;}
    #cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
    #cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
    .cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
    .cboxIframe{width:100%; height:100%; display:block; border:0;}
    #colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}

    /*
        User Style:
        Change the following styles to modify the appearance of Colorbox.  They are
        ordered & tabbed in a way that represents the nesting of the generated HTML.
    */
    #cboxOverlay{background:#fff;}
    #colorbox{outline:0;}
    #cboxContent{margin-top:32px; overflow:visible; background:#000;}
    .cboxIframe{background:#fff;}
    #cboxError{padding:50px; border:1px solid #ccc;}
    #cboxLoadedContent{background:#000; padding:1px;}
    #cboxLoadingOverlay{background:#000;}
    #cboxTitle{position:absolute; top:-22px; left:0; color:#000;}
    #cboxCurrent{position:absolute; top:-22px; right:205px; text-indent:-9999px;}

    /* these elements are buttons, and may need to have additional styles reset to avoid unwanted base styles */
    #cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; text-indent:-9999px; width:20px; height:20px; position:absolute; top:-20px;}

    /* avoid outlines on :active (mouseclick), but preserve outlines on :focus (tabbed navigating) */
    #cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}

    #cboxPrevious{background-position:0px 0px; right:44px;}
    #cboxPrevious:hover{background-position:0px -25px;}
    #cboxNext{background-position:-25px 0px; right:22px;}
    #cboxNext:hover{background-position:-25px -25px;}
    #cboxClose{background-position:-50px 0px; right:0;}
    #cboxClose:hover{background-position:-50px -25px;}
    .cboxSlideshow_on #cboxPrevious, .cboxSlideshow_off #cboxPrevious{right:66px;}
    .cboxSlideshow_on #cboxSlideshow{background-position:-75px -25px; right:44px;}
    .cboxSlideshow_on #cboxSlideshow:hover{background-position:-100px -25px;}
    .cboxSlideshow_off #cboxSlideshow{background-position:-100px 0px; right:44px;}
    .cboxSlideshow_off #cboxSlideshow:hover{background-position:-75px -25px;}
</style>


<div class="project-list"><h2>FINANCIAL</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Financial.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Financial.png"></a></div>
<div class="project-list"><h2>OFFICE OF SPONSORED PROGRAMS</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Grants1.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Grants1.png"></a></div>
<div class="project-list"><h2>LEGAL</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Legal1.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Legal1.png"></a></div>
<div class="project-list"><h2>HUMAN RESOURCES</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Human Resources.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Human Resources.png"></a></div>
<div class="project-list"><h2>DEVELOPMENT</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Development.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Development.png"></a></div>
<div class="project-list"><h2>OTHER</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Other.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Other.png"></a></div>
<div class="project-list"><h2>ENDOWMENT</h2></div><div class="project-list-content"><a href="/sites/all/themes/startupgrowth_ciw/image/matrix/Endowment.png"><img src="/sites/all/themes/startupgrowth_ciw/image/matrix/Endowment.png"></a></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
