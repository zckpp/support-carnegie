<!-- #page-container -->
<div id="page-container">
<!-- #header -->
<img class="top-bg" src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/top-bg.png" />
<div class="header">

    <a href="/"><img style="max-width: 240px" src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_solid.png" /></a>
    <a href="#" id="pull"></a>
    <span>Today's agenda</span>
    <span>1st Floor Conference Room <div class="circle"></div></span>
    <span>3rd Floor Conference Room <div class="circle color"></div></span>
    <span>EventBooking <div class="circle blue"></div></span>
</div>

<div class="dash-wrapper container">
        <ul class="list-group">
            <?php
            //get event json
            $json = file_get_contents("https://dev-people.carnegiescience.edu/calendar-php/array.json");
            //decode json
            $events = json_decode($json);
            //get time of now and tomorrow
            $now = time();
            $tomorrow = strtotime('tomorrow');
            $result = null;

            foreach ($events as $key => $event) {
                $title = $event->sum;
                $time = $event->time;
                $end = $event->end;
                $loc = $event->loc;
                $room = $event->room;
                //get time stamp for filter
                $timestamp = strtotime($time);
                $timestampEnd = strtotime($end);
                //format time for display
                $time = date('h:i A', $timestamp);
                $end = date('h:i A', $timestampEnd);
                //get organizer
                $person = $event->organizer;
                //if people set display name
                if (!empty($person->displayName)) {
                    $organizer = $person->displayName;
                    $organizer = "Organizer: " . $organizer;
                }
                elseif (!empty($person->email)) {
                    $organizer = $person->email;
                    $organizer = "Organizer: " . $organizer;
                }
                else {
                    $organizer = '';
                }

                //only show today's current events
                if ($now < $timestamp && $timestamp < $tomorrow) {

                    //1st floor conference room
                    if (1 == $room) {
                        $result = '<li class="first list-group-item"><h1>' . $time . ' to ' . $end . '&nbsp&nbsp&nbsp' . $title . '</h1><p>Location: ' . $loc . ' <br><strong>' . $organizer . '</strong></p></li>';
                        print $result;
                    } elseif (2 == $room) {//3rd fl events
                        $result = '<li class="first list-group-item"><h1>' . $time . ' to ' . $end . '&nbsp&nbsp&nbsp' . $title . '</h1><p>Location: ' . $loc . ' <br><strong>' . $organizer . '</strong></p></li>';
                        print $result;
                    } else {
                        //eventBooking calendar
                        $result = '<li class="eb list-group-item"><h1>' . $time . ' to ' . $end . '&nbsp&nbsp&nbsp' . $title . '</h1><p>EventBooking</p></li>';
                        print $result;
                    }
                }
            }
            if (empty($result)) {
                $result = '<h1>We got nothing today!</h1>';
                print $result;
            }

            ?>
        <ul>
</div>

</div>
<script>
//    refresh page every 5min
setInterval(function() {
    window.location.reload();
}, 5*60000);

(function ($) {
    var body = document.body,
        html = document.documentElement;

    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );

    if ($(document).height() > $(window).height() ) {
        setInterval(function(){

            //time to scroll to bottom
            setTimeout(function() {
                $("html, body").animate({ scrollTop: $(document).height() - $(window).height() }, 15000);
            },1000);

            //scroll to top
            $('html, body').animate({scrollTop:0}, 2000);

        },1000);
    }

})(jQuery);
</script>
<!-- EOF:#page-container -->