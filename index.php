<?php include("opener.php"); ?>
<section class="content">
    <div id="welcome">
        <div class="greeting">
            <blockquote>Welcome to our wedding website! This is where you can find out all of the details about our big day. We can't wait to celebrate with all of you! Check out our story, learn all about our awesome wedding party, read about the event details, and don't forget to RSVP! We could not be more excited to have you all by our side as we say I do!<br><span>-Alex and David</span></blockquote>
        </div>
    </div>
    <div id="slides" class="slides">
        <img src="/media/engagement/engagement01.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement02.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement03.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement04.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement05.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement06.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement07.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement08.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement09.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement10.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement11.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement12.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement13.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement14.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement15.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement16.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement17.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement18.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement19.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement20.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement21.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement22.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement23.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement24.jpg" height="600" width="900" alt="engagement">
        <img src="/media/engagement/engagement25.jpg" height="600" width="900" alt="engagement">
    </div>
</section>
<?php include("footer.php"); ?>
<script>
$(function(){
    $("#slides").slidesjs({
        width: 900,
        height: 600,
        play: {
            active: true
        },
        pagination: {
            active: false,
            effect: "slide"
        }
    });
});
</script>
<?php include("closer.php"); ?>
