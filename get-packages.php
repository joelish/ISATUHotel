<?php
require "connection.php";
require "auth-checker.php";
$output = "<option selected disabled>Package</option>";
$stmt = $conn->query("SELECT * FROM `packages` WHERE `room_id` = '".$_POST["room_id"]."' AND `date_deleted` IS NULL");
while ($row = $stmt->fetch_object()) {
    $output .= "<option value='" . $row->id . "' selected>" . $row->package_title . "</option>";
}
echo $output;