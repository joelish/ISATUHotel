<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Jeremiah
 * Date: 02/11/2018
 * Time: 6:12 PM
 */
require "connection.php";
if(isset($_GET["numChild"])){
    $numChild = $_GET["numChild"];
    $numAdult = $_GET["numAdult"];
    $checkIn = $_GET["checkIn"];
    $checkOut = $_GET["checkOut"];
    $numRooms = $_GET["numRooms"];
    $checkIn =  date('Y-m-d',strtotime($checkIn));
    $checkOut = date('Y-m-d',strtotime($checkOut));
    $totalGuest = $numChild + $numAdult;

    $reservationInfo = array();
    array_push($reservationInfo, $checkIn);
    array_push($reservationInfo, $checkOut);
    array_push($reservationInfo, $numAdult);
    array_push($reservationInfo, $numChild);
    $_SESSION["reservationInfo"] = $reservationInfo;

    $roomsArray = array();
    $stmt = $conn->query("SELECT * FROM `rooms` WHERE `max_guest` >= '$totalGuest' AND `num_rooms` >= '$numRooms'");
    while ($row = $stmt->fetch_object())
    {
        array_push($roomsArray,$row);
    }
    $i=0;
    $highestPrice = 0;
    //removing used rooms
    foreach ($roomsArray as $room) {
            if(mysqli_num_rows($conn->query("SELECT * FROM `reservations` WHERE ((`check_in` between '$checkIn' AND '$checkOut') OR (`check_out` between '$checkIn' AND '$checkOut')) AND `room_id` = '$room->id' AND `cancelled_by` IS NULL")) > 0) {
                echo json_encode($roomsArray[$i]);
                array_splice($roomsArray,$i,1);
                continue;
        }
        $i++;
    }
    //finding highest price
    $i = 0;
    $currentIndex=0;
    $highestIndex = 0;
    foreach ($roomsArray as $room) {
            if($room->rate > $i) {
                $i = $room->rate;
                $highestIndex = $currentIndex;
            }
            $currentIndex++;
    }
    $currentRoomId = $roomsArray[$highestIndex]->hotel_id;
    //removing other hotel rooms
    $i = 0;
    $_SESSION["rooms"] = $roomsArray;


    if($currentRoomId == 1) {
        header("location:hotel-hrsc.php");
    } elseif($currentRoomId  == 2){
        header("location:hotel-tlsc.php");
    }
    else {
        echo "<script>
                   alert('No hotel rooms found');
                   window.history.back();
               </script>";
    }
} else {
    header("location:index.php");
}

