<?php include("opener.php"); ?>
<section class="content">
    <div id="welcome">
        <div class="greeting">
            <blockquote>Welcome to our wedding website! This is where you can find out all of the details about our big day. We can't wait to celebrate with all of you! Check out our story, learn all about our awesome wedding party, read about the event details, and don't forget to RSVP! We could not be more excited to have you all by our side as we say I do!<br><span>-Alex and David</span></blockquote>
        </div>
    </div>
    <div id="slides" class="slides">
        <?php for ($i = 1; $i <= 25; $i++) {
            if ($i < 10) {
                $num = '0'.$i;
            } else {
                $num = $i;
            }
            echo '<img src="/media/engagement/engagement'.$num.'.jpg" height="600" width="900" alt="engagement">'."\n";
        } ?>
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
