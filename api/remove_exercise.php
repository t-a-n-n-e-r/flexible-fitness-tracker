<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
	die('Could not connect: ' . mysqli_error());
}

$query = "DELETE FROM Exercise WHERE exercise_id=" . mysql_real_escape_string($_GET['exercise']);
$result = mysqli_query($conn, $query);

if(!$result) {
	die('failed to execute query: ' . $query);
}

?>
