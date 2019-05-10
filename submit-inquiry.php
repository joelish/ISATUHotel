<?php
require "connection.php";
$name = $_POST["fname"].' '.$_POST["lname"];
$email = $_POST["email"];
$question = $_POST["question"];
$stmt = $conn->query("INSERT INTO `inquiry`(`sender_name`,`email`,`question`,`date_inquired`) VALUES('$name','$email','$question','".date('Y-m-d')."') ");
