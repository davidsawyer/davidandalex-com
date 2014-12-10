    <div class="logoWrapper">
        <img class="logo" src="/media/AD.png" height="200" width="200" alt="A+D">
    </div>
    <footer>
        <span class="countdown"><?php
            $date = strtotime("June 21, 2014 11:59 PM");
            $remaining = $date - time();
            $days = floor($remaining / 86400);
            if ($days > 1) {
                echo "See you in " . $days . " days!";
            } else if ($days == 1) {
                echo "See you tomorrow!";
            } else if ($days == 0) {
                echo "Today's the day!";
            } else {
                echo "Thanks for coming!";
            }
            ?></span>
        <span class="madeBy"><i class="tools"></i><span class="whom">Site built by <a href="https://github.com/davidsawyer">David Sawyer</a>. Branding by <a href="http://kimberlyoldenburg.com/">Kimmie Oldenburg</a>.</span></span>
    </footer>
    <script>
        mixpanel.track('page viewed', {
            'page name' : document.title,
            'url' : window.location.pathname
        });
    </script>
