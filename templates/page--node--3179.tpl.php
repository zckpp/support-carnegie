<!-- #page-container -->
<div id="page-container">


<!-- #header -->
<img class="top-bg" src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/top-bg.png" />
<div class="header">

    <a href="/"><img src="<?php global $base_url; print $base_url;?>/sites/all/themes/startupgrowth_ciw/image/logo_solid.png" /></a>
    <a href="#" id="pull"></a>
    <span>Today's agenda</span>
    <span>1st Floor Conference Room <div class="circle"></div></span>
    <span>3rd Floor Conference Room <div class="circle color"></div></span>
</div>

<div class="dash-wrapper container">
        <ul class="list-group">
            <?php
            //get event json
            $json = file_get_contents("http://dev-people.carnegiescience.edu/calendar-php/array.json");
            $events = json_decode($json);
            $now = time();
            $tomorrow = strtotime('tomorrow');
            $result = null;
            foreach ($events as $key => $event) {
                $title = $event->sum;
                $time = $event->time;
                $end = $event->end;
                $loc = $event->loc;
                $room = $event->room;
                $timestamp = strtotime($time);
                $timestampEnd = strtotime($end);
                $time = date('h:i A', $timestamp);
                $end = date('h:i A', $timestampEnd);
                //only show today's current events
                if ($now < $timestamp && $timestamp < $tomorrow) {
                    //1st floor conference room
                    if (1 == $room) {
                        $result = '<li class="first list-group-item"><h1>' . $time . ' to ' . $end . '&nbsp&nbsp&nbsp' . $title . '</h1><p>' . $loc . '</p></li>';
                        print $result;
                    } else {
                        $result = '<li class="list-group-item"><h1>' . $time . ' to ' . $end . '&nbsp&nbsp&nbsp' . $title . '</h1><p>' . $loc . '</p></li>';
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
    setInterval(function() {
        window.location.reload();
    }, 5*60000);
</script>
<!-- EOF:#page-container -->
