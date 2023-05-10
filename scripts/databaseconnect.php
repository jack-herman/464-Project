<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'feedback';
$db_port = 3306;

$db = mysqli_connect(
	$db_host,
	$db_user,
	$db_password,
	$db_db
);

if (mysqli_connect_errno() || $db == null) {
	printf("Database connection failed: %s<br>
		Connection script now terminating.",
		mysqli_connect_error());
	exit(0);
}
?>
