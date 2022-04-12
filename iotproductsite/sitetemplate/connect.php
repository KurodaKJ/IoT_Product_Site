<?php

$firstname = $_POST["firstName"];
$surname = $_POST["surName"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$conn = mysqli_connect("localhost", "root", "","contactform") or die("connection failed");
$sql = "INSERT INTO contact_info(Firstname, Surname, Email, Subject, Message) VALUES ('{$firstname}','{$surname}','{$email}','{$subject}','{$message}')";

$result = mysqli_query($conn, $sql) or die ("Query Failed!");

header('Location: redirect.php');
exit;
?>
