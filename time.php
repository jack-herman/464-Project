<?php
session_start();
if (!isset($_SESSION['timezone']))
{
  $_SESSION['timezone'] = 'America/Chicago';
}

date_default_timezone_set($_SESSION['timezone']);

$date = date("l, F jS");
$time = date('g:ia');

echo $date." ".$time;

$_SESSION['timedateRefreshCount'] += 1;


?>
