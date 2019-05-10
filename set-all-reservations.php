<?php
require "auth-checker.php";
require "connection.php";
$room = $_POST["room"];
$stmt = $conn->query("SELECT * FROM `rooms` WHERE `id`='$room'");
while ($row = $stmt->fetch_object()){
    $room = $row;
}
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$choice = $_POST["choice"];
$stmt = $conn->query("SELECT * FROM `room_rates` WHERE `id` = '$choice'");
while ($row = $stmt->fetch_object()) {
    $choice = $row;
}
$additionalBed = $_POST["additionalBed"];
array_push($_SESSION["reservation"],$room); //5
array_push($_SESSION["reservation"],$fname); //6
array_push($_SESSION["reservation"],$lname); //7
array_push($_SESSION["reservation"],$email); //8
array_push($_SESSION["reservation"],$phone); //9
array_push($_SESSION["reservation"],$address); //10
array_push($_SESSION["reservation"],0); //11
array_push($_SESSION["reservation"],$choice); //12
array_push($_SESSION["reservation"],$additionalBed); //13
$numdays = date_diff(date_create($_SESSION["reservation"][1]),date_create($_SESSION["reservation"][0]))->format("%a");
$totalPrice = ($choice->rate * $numdays) + ($package->price * $numdays) + (($additionalBed * 300) *$numdays);
array_push($_SESSION["reservation"], $totalPrice); //14
header("location: admin-cash-payment.php");