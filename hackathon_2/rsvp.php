<?php

include 'connectDB.php';

if(!isset($_POST['rsvp'])){
    header('Location: event.php');
}

$event_id = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$institution = $_POST['institution'];

$sql = "INSERT INTO h2_rsvp (event_id, email, name, institution, date) VALUES (".$event_id.", '".$email."', '".$name."', '".$institution."', CURRENT_DATE() )";
mysqli_query($conn, $sql);

header('Location: rsvp-success.html');