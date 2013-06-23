<?php
    $host = "localhost";
    $user = "dsawyer";
    $pass = "psql";
    $db = "testdb";

    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not conect: " . pg_last_error());

    $name = pg_escape_string($_POST['name']);
    $email = pg_escape_string($_POST['email']);
    $phone = pg_escape_string($_POST['phone']);
    $plus_ones_name = pg_escape_string($_POST['plusOnesName']);
    if(!($plus_one = pg_escape_string($_POST['plusOne']))) {
        $plus_one = 'off';
    }

    $query = "insert into rsvp (name, email, phone, plus_one, plus_ones_name) values ('$name', '$email', '$phone', '$plus_one', '$plus_ones_name')";
    $result = pg_query($query);
    if ($result) {
        $response = array("status" => "1");
    } else {
        $response = array("status" => "0");
    }
    
    echo json_encode($response);
    
    pg_close($con);
?>

