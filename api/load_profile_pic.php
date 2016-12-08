<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
	die('Could not connect: ' . mysqli_error());
}

$query = "SELECT image from Profile WHERE Profile.user_id=" . $_SESSION['user_id'];
$result = mysqli_query($conn, $query);

if(!$result) {
	die('failed to execute query: ' . $query);
}

$row = mysqli_fetch_row($result);

header("Content-type: image/jpeg");
echo $row[0];

?>
