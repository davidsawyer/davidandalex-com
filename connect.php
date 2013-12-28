<?php
    $host = getenv("WEDDING_HOST");
    $user = getenv("WEDDING_USER");
    $pass = getenv("WEDDING_PASS");
    $db = getenv("WEDDING_DB");

    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not conect: " . pg_last_error());

    $name = pg_escape_string($_POST['name']);
    $attending = pg_escape_string($_POST['attending']);
    $email = pg_escape_string($_POST['email']);
    $song_request = pg_escape_string($_POST['song']);
    $other_guests = pg_escape_string($_POST['otherGuests']);

    $query = "insert into rsvp2 (name, attending, email, song_request, other_guests) values ('$name', '$attending', '$email', '$song_request', '$other_guests')";
    $result = pg_query($query);
    if ($result) {
        $response = array("status" => "200");
    } else {
        $response = array("status" => "500");
    }

    echo json_encode($response);

    pg_close($con);
?>

