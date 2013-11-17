<?php
    $host = "ec2-54-225-96-191.compute-1.amazonaws.com";
    $user = "gicninjrhsujub";
    $pass = "I8fSUwDxu4SYKEYUlpZIR-Wz9w";
    $db = "dan6gmpo4lnnvq";

    // $host = "localhost";
    // $user = "dsawyer";
    // $pass = "psql";
    // $db = "testdb";

    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not conect: " . pg_last_error());

    $name = pg_escape_string($_POST['name']);
    $attending = pg_escape_string($_POST['attending']);
    $other_guests = pg_escape_string($_POST['otherGuests']);


    $query = "insert into rsvp (name, attending, other_guests) values ('$name', '$attending', '$other_guests')";
    $result = pg_query($query);
    if ($result) {
        $response = array("status" => "200");
    } else {
        $response = array("status" => "500");
    }

    echo json_encode($response);

    pg_close($con);
?>

