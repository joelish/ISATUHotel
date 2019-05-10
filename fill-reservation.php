<?php
require "auth-checker.php";
require "connection.php";
$dateToday = strtotime(date('Y-m-d'));
if(strtotime($_POST["checkIn"]) >= strtotime($_POST["checkOut"]) || strtotime($_POST["checkIn"]) < $dateToday || strtotime($_POST["checkOut"]) < $dateToday) {
   $_SESSION["fail"] = true;
    echo "<script>
        window.history.back();
</script>";
} else {
    $reservationInfo = array();
    array_push($reservationInfo, $_POST["checkIn"]); //0
    array_push($reservationInfo, $_POST["checkOut"]); //1
    array_push($reservationInfo, $_POST["numAdult"]); //2
    array_push($reservationInfo, $_POST["numChild"]); //3
    array_push($reservationInfo, $_POST["hotel"]); //4
    $_SESSION["reservation"] = $reservationInfo;
    header("location:finalize-reservation.php");
}