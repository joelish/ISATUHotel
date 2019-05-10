<?php
require "connection.php";
session_start();
if(!isset($_SESSION["reservation"])){
    header("location:index.php");
}
else {
    $room = $_POST["room"];
    $stmt = $conn->query("SELECT * FROM `rooms` WHERE `id`='$room'");
    while ($row = $stmt->fetch_object()) {
        $room = $row;
    }
    $numdays = date_diff(date_create($_SESSION["reservation"][1]["checkOut"]),date_create($_SESSION["reservation"][1]["checkIn"]))->format("%a");
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $package = $_POST["package"];
    $stmt = $conn->query("SELECT * FROM `packages` WHERE `id`='$package'");
    while ($row = $stmt->fetch_object()) {
        $package = $row;
    }
    $choice = $_POST["choice"];
    $additionalBed = $_POST["additionalBed"];
    $stmt = $conn->query("SELECT * FROM `room_rates` WHERE `id`='$choice'");
    while ($row = $stmt->fetch_object()) {
        $choice = $row;
    }
    $additionalBedPrice = 300 * $additionalBed;
    $totalPrice = ($choice->rate * $numdays) + ($package->price * $numdays) + ($numdays * $additionalBedPrice);
    $phone = $_POST["phone"];
    $reservationInfo = array();
    $reservationInfo['fname'] = $fname;
    $reservationInfo['room'] = $room;
    $reservationInfo['lname'] = $lname;
    $reservationInfo['address'] = $address;
    $reservationInfo['email'] = $email;
    $reservationInfo['package'] = $package;
    $reservationInfo['phone'] = $phone;
    $reservationInfo['choice'] = $choice;
    $reservationInfo['additionalBed'] = $_POST["additionalBed"];
    $reservationInfo['totalPrice'] = $totalPrice;
    $_SESSION["reservation"]["reservationInfo"] = $reservationInfo;
    header("location: cash-payment.php");
}