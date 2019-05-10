<script src="js/jquery.min.js"></script>
<script>
    function sendMail(email, subject, id){
        $.ajax({
            url: "https://iloilo-mailing.000webhostapp.com/mail.php",
            type: "GET",
            data: {email: email,
                subject: subject,
                id: id},
            dataType: "Text",
            success: function () {
                location.href='reservation-landing-page.php'
            }
        });
    }
</script>
<?php
require "connection.php";
session_start();
if(!isset($_SESSION["reservation"])) {
    header("location:index.php");
}
else{
    $str = "";
    if(mysqli_num_rows($conn->query("SELECT * FROM `reservations` WHERE ((`check_in` between '".$_SESSION["reservation"][1]['checkIn']."' AND '".$_SESSION["reservation"][1]['checkOut']."') OR (`check_out` between '".$_SESSION["reservation"][1]['checkIn']."' AND '".$_SESSION["reservation"][1]['checkOut']."')) AND `room_id` = '".$_SESSION["reservation"]['reservationInfo']['room']->id."' AND `cancelled_by` IS NULL")) > 0) {
        echo "<script>alert('The room is already taken');location.href='index.php'</script>";
    }
    else {
            $stmt = $conn->query("INSERT INTO `reservations`(`room_id`,`check_in`,`check_out`,`rate_id`,`total_price`,`has_confirmed`,`has_additional_bed`) VALUES ('" . $_SESSION["reservation"]["reservationInfo"]["room"]->id . "','" . $_SESSION["reservation"][1]['checkIn'] . "','" . $_SESSION["reservation"][1]['checkOut'] . "','".$_SESSION["reservation"]["reservationInfo"]['choice']->id."','" . $_SESSION["reservation"]["reservationInfo"]['totalPrice'] . "','0','".$_SESSION["reservation"]["reservationInfo"]['additionalBed']."')");
            $id = $conn->insert_id;
            if(isset($_SESSION["reservation"]["reservationInfo"]["package"]->id )) {
                $stmt = $conn->query("INSERT INTO `reservation_info`(`reservation_id`,`first_name`,`last_name`,`email`,`phone_number`,`num_adult`,`num_child`,`package_id`) VALUES('$id', '" . $_SESSION["reservation"]["reservationInfo"]["fname"] . "','" . $_SESSION["reservation"]["reservationInfo"]["lname"] . "','" . $_SESSION["reservation"]["reservationInfo"]["email"] . "','" . $_SESSION["reservation"]["reservationInfo"]["phone"] . "','" . $_SESSION["reservation"][1]["numAdult"] . "','" . $_SESSION["reservation"][1]["numChild"] . "','" . $_SESSION["reservation"]["reservationInfo"]["package"]->id . "')");

            }
            else{
                $stmt = $conn->query("INSERT INTO `reservation_info`(`reservation_id`,`first_name`,`last_name`,`email`,`phone_number`,`num_adult`,`num_child`) VALUES('$id', '" . $_SESSION["reservation"]["reservationInfo"]["fname"] . "','" . $_SESSION["reservation"]["reservationInfo"]["lname"] . "','" . $_SESSION["reservation"]["reservationInfo"]["email"] . "','" . $_SESSION["reservation"]["reservationInfo"]["phone"] . "','" . $_SESSION["reservation"][1]["numAdult"] . "','" . $_SESSION["reservation"][1]["numChild"] . "')");

            }
            if(isset($_SESSION["user_id"])) {
            $stmt = $conn->query("INSERT INTO `payments`(`reservation_id`,`amount_paid`) VALUES('$id','".$_SESSION["reservation"]["reservationInfo"]['totalPrice']."')");
            }
            else {
                $to = $_SESSION["reservation"]["reservationInfo"]["email"];
                $subject = "Thank you for your reservation";

                $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
                echo "<script>sendMail('".$to."','".$subject."','".$id."')</script>";
            }
            unset($_SESSION["reservation"]);
            echo "<script>
            location.href = 'reservation-landing-page.php';
            </script>";
    }
}