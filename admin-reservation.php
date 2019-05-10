<?php
require "auth-checker.php";
require "connection.php";
if(mysqli_num_rows($conn->query("SELECT * FROM `reservations` WHERE ((`check_in` between '".$_SESSION["reservation"][0]."' AND '".$_SESSION["reservation"][1]."') OR (`check_out` between '".$_SESSION["reservation"][0]."' AND '".$_SESSION["reservation"][1]."')) AND `room_id` = '".$_SESSION["reservation"][5]->id."' AND `cancelled_by` IS NULL")) > 0) {
    echo "<script>alert('The room is already taken');location.href='index.php'</script>";
}
else {
    $stmt = $conn->query("INSERT INTO `reservations`(`room_id`,`check_in`,`check_out`,`rate_id`,`total_price`,`has_confirmed`,`has_additional_bed`) VALUES ('" . $_SESSION["reservation"][5]->id . "','" . $_SESSION["reservation"][0] . "','" . $_SESSION["reservation"][1] . "','".$_SESSION["reservation"][12]->id."','" . $_SESSION["reservation"][14] . "','1g','".$_SESSION["reservation"][13]."')");
    $id = $conn->insert_id;
    $stmt = $conn->query("INSERT INTO `reservation_info`(`reservation_id`,`first_name`,`last_name`,`email`,`phone_number`,`num_adult`,`num_child`,`package_id`) VALUES('$id', '" . $_SESSION["reservation"][6] . "','" . $_SESSION["reservation"][7] . "','" . $_SESSION["reservation"][8] . "','" . $_SESSION["reservation"][9] . "','" . $_SESSION["reservation"][2] . "','" . $_SESSION["reservation"][3] . "',NULL)");
    echo $conn->error;
    if(isset($_SESSION["user_id"])) {
        $stmt = $conn->query("INSERT INTO `payments`(`reservation_id`,`amount_paid`) VALUES('$id','".$_SESSION["reservation"][14]."')");
        echo $conn->error;
    }
    unset($_SESSION["reservation"]);
    echo "<script>
            location.href = 'reservation-landing-page.php';
            </script>";
}