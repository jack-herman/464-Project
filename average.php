
<?php
session_start();

include("scripts/databaseconnect.php");

$query = "SELECT rating FROM feedback";

$ratings = mysqli_query($db, $query);

$array = mysqli_fetch_array($ratings);

$avgrating = array_sum($array)/sizeof($array);

echo (float)$avgrating;

mysqli_close($db);
?>
