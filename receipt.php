<?php
require "connection.php";
$reservationId = $_GET["reservationId"];
echo $reservationId;
$stmt = $conn->query("SELECT * FROM `reservations` INNER JOIN `reservation_info` INNER JOIN `rooms` INNER JOIN `hotels`  WHERE `reservation_info`.`reservation_id` = `reservations`.`id` AND  `rooms`.`id` = `reservations`.`room_id` AND `hotels`.`id` = `rooms`.`hotel_id` AND `reservations`.`id` = '".$reservationId."' AND `reservations`.`cancelled_by` IS NULL");
$printableObject = null;
while ($row = $stmt->fetch_object()) {
    $printableObject = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Receipt</title>
    <link rel="stylesheet" type="text/css" href="CSS/Style4.css">
    <link rel="stylesheet" type="text/css" href="MaterializeCSS/materialize/css/materialize.min.css">
    <style type="text/css" media="print">
        page {
            size: A4;   /* auto is the initial value */
            height: auto;
            margin: 0;  /* this affects the margin in the printer settings */
            page-break-after {
                display: none;
            }
        }
    </style>
</head>
<body>


<page size="A4">
    <div style="margin-left: 3%; margin-right: 3%; padding-top: 5%;text-align:center;">
            <h1><?= $printableObject->hotel_name?></h1>
        <h3>Room: <?= $printableObject->room_type.' '.$printableObject->room_name?></h3><br>
        <br>
        <br>
        <div style="float: left; display: inline-block;margin-left: 20px; text-align: left">
            <span>Check In : <?= date('M d Y',strtotime($printableObject->check_in)) ?></span><br>
            <span>Check Out : <?= date('M d Y',strtotime($printableObject->check_out)) ?></span><br>
            <br>
            <span>Reservation #: <?= $printableObject->reservation_id?></span>
            <br>
            <span>Name: <?= $printableObject->first_name.' '.$printableObject->last_name?></span>
            <br>
            <span>Number of Adult: <?= $printableObject->num_adult ?></span>
            <br>
            <span>Number of Children: <?= $printableObject->num_child ?></span>
            <br>
            <br>

            <span>Total Price: <?= $printableObject->total_price?></span>
        </div>
    </div>
</page>

</body>
</html>