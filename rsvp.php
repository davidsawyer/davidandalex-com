<?php include("opener.php"); ?>
<section class="content">
    <div>
        <form novalidate>
            <p id="errorMsg" class="hidden"></p>
            <p>
                <span class="prompt">full name</span>
                <br>
                <input type="text" id="name" name="name" placeholder="Robert MacDonell" maxlength="50">
            </p>
            <p class="prompt">Will you be attending?</p>
            <p class="attending">
                <label><input type="radio" name="attending" value="t">can't wait!</label>
                <br>
                <label><input type="radio" name="attending" value="f">will celebrate from afar</label>
            </p>
            <div id="details" class="notAttending">
                <p>
                    <span class="prompt">email address</span>
                    <br>
                    <input type="email" id="email" name="email" placeholder="hairydawg@uga.edu" maxlength="100">
                </p>
                <p>
                    <span class="prompt">any song requests? (optional)</span>
                    <br>
                    <input type="text" id="song" name="song" placeholder="anything but..." maxlength="100">
                </p>
                <p id="anyOthers">
                    <span class="prompt">Will you be bringing your significant other or family?</span>
                </p>
                <p class="sigOthers">
                    <label><input type="radio" name="others" value="t">yes</label>
                    <br>
                    <label><input type="radio" name="others" value="f">no</label>
                </p>
                <div id="otherGuests" class="noOthers">
                    <span class="otherGuest">
                        <input type="text" name="otherGuest" maxlength="50" placeholder="Guest 2">
                    </span>
                    <span>
                        <input id="addGuest" class="plusMinus" type="button" value="+">
                        <input id="removeGuest" class="plusMinus" type="button" value="-">
                    </span>
                </div>
            </div>
            <p><input type="submit" value="RSVP"></p>
        </form>
    </div>
    <div class="thankyou">
        <span>thank you!</span>
    </div>
</section>
<?php include("footer.php"); ?>
<?php include("closer.php"); ?>
