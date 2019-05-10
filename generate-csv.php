<?php
require "auth-checker.php";
header('Content-type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=reports.csv');

$output = fopen("php://output","w");
fputcsv($output, array('Month Number','Month','Total Amount','Forecast Amount'));
foreach ($_SESSION["dataPoints"] as $dataPoint) {
    fputcsv($output, array($dataPoint["monthNumber"],$dataPoint["label"],$dataPoint["y"],$dataPoint["forecastAmount"]));
}
fclose($output);