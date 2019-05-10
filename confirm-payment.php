<?php
require "auth-checker.php";
require "connection.php";
$id = $_POST["id"];
$price = $_POST["amount"];
$conn->query("INSERT INTO `payments`(`reservation_id`,`amount_paid`) VALUES('$id','$price')");
header("location:reservation.php");