
<?php
session_start();

if(!isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 0;
}

if (!empty($_GET['message']))
{
	$_SESSION['counter']++;
	$file = fopen("messages.txt", "a") or die("Unable to open file");
	fwrite($file, $_GET['message']);
	fwrite($file, "\n");
	fclose($file);
}

$last_line = " ";

$file = "messages.txt";
try {
$lines = file($file);
$last_line = trim(end($lines));
} catch (Exception $e) {
echo "Error: " . $e->getMessage();
}

$array = explode(',', $last_line);
$date = date('m/d/Y h:i:s a', time());

echo $_SESSION['counter'],":",$array[0],":",$array[1],":",$date;
?>
