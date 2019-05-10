<?php
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 04/11/2018
 * Time: 2:55 PM
 */
session_start();
require "connection.php";
$roomId = $_POST["roomId"];
$package = $_POST["package"];
$roomObject;
$stmt = $conn->query("SELECT * FROM `rooms` WHERE `id` = '$roomId'");
while ($row = $stmt->fetch_object()) {
    $roomObject = $row;
}
$numdays = date_diff(date_create($_SESSION["reservationInfo"][1]),date_create($_SESSION["reservationInfo"][0]))->format("%a");

$totalPrice = $roomObject->rate * $numdays;
$stmt = $conn->query("SELECT * FROM `packages` WHERE `id` = '$package' AND `date_deleted` IS NULL ");
while ($row = $stmt->fetch_object()) {
    $totalPrice+=$row->price;
}
$id = $conn->insert_id;
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$bookingInfo = array();
array_push($bookingInfo,$roomObject);
array_push($bookingInfo,$numdays);
array_push($bookingInfo,$totalPrice);
array_push($bookingInfo,$fname);
array_push($bookingInfo,$lname);
array_push($bookingInfo,$email);
array_push($bookingInfo,$phone);
array_push($bookingInfo,$address);
array_push($bookingInfo, $_SESSION["reservationInfo"][0]);
array_push($bookingInfo, $_SESSION["reservationInfo"][1]);
array_push($bookingInfo, $_SESSION["reservationInfo"][2]);
array_push($bookingInfo, $_SESSION["reservationInfo"][3]);
array_push($bookingInfo,$package);
$_SESSION["bookingInfo"] = $bookingInfo;
if($_POST["paymentMethod"] == "cash") {
    header("location:cash-payment.php");
}else {
    header("location:credit-payment.php");
}