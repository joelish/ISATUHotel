<?php
require "auth-checker.php";
require "connection.php";

$id = $_POST["id"];
$state = $_POST["state"];
echo $state;
if($state == null) {
    echo "hatdog";
    $stmt = $conn->query("UPDATE `reservations` SET `cancelled_by` = '".$_SESSION["user_id"]."' WHERE `id` = '$id'");
}
else {
    $stmt = $conn->query("UPDATE `reservations` SET `cancelled_by` = NULL WHERE `id` = '$id'");
}
header("location:reservation.php");