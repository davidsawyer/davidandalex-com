    <div class="logoWrapper">
        <img class="logo" src="/media/AD.png" height="200" width="200" alt="A+D">
    </div>
    <footer>
        <span class="countdown">See you in <?php
            $date = strtotime("June 21, 2014 5:00 PM");
            $remaining = $date - time();
            $days = floor($remaining / 86400);
            echo $days; ?> days!</span>
        <span class="madeBy"><i class="tools"></i><span class="whom">Site built by David Sawyer. Branding by <a href="http://kimberlyoldenburg.com/">Kimmie Oldenburg</a>.</span></span>
    </footer>
    <script>
        mixpanel.track('page viewed', {
            'page name' : document.title,
            'url' : window.location.pathname
        });
    </script>
