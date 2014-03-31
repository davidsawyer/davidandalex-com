    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alex Auger and David Sawyer Are Getting Married!">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="text/javascript" src="/js/min/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/js/min/menuBar.min.js"></script>
    <?php if ($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/our-story") { ?>
    <script type="text/javascript" src="/js/min/jquery.slides.min.js"></script>
    <?php }
    if ($_SERVER["REQUEST_URI"] == "/rsvp") { ?>
    <script type="text/javascript" src="/js/min/rsvp.min.js"></script>
    <?php } ?>
    <script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="/js/min/mixpanel-2.2.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("3102296f7d156c397a7fa6151b1d8661");</script>
    <?php if ($_SERVER["REQUEST_URI"] == "/wedding-party") { ?>
    <script type="text/javascript">
    $(function() {
        var selector = '.headshot > img';
        $('body')
            .on('mouseover', selector, function() { if ($(window).width() > 768) $(this).addClass('seeThrough'); })
            .on('mouseout', selector, function() { if ($(window).width() > 768) $(this).removeClass('seeThrough'); })
            .on('click', selector, function() { if ($(window).width() <= 768) $(this).toggleClass('seeThrough'); });
    });
    </script>
    <?php } ?>
