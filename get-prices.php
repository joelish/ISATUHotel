<?php
require "connection.php";
require "auth-checker.php";
$output = "<option selected>Choice</option>";
$stmt = $conn->query("SELECT * FROM `room_rates` WHERE `room_id` = '".$_POST["room_id"]."'");
while ($row = $stmt->fetch_object()) {
    $output .= "<option value='" . $row->id . "' selected>" . $row->rate_description.'-'. $row->rate. "</option>";
}
echo $output;