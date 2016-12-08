<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
	die('Could not connect: ' . mysqli_error());
}

$query = "SELECT exercise_parameter_id, name from ExerciseParameter";
$query .= " WHERE exercise_id=" .  mysql_real_escape_string ($_GET['exercise']);
$result = mysqli_query($conn, $query);

if(!$result) {
	die('failed to execute query: ' . $query);
}

while($row = mysqli_fetch_row($result)) {
	foreach($row as $element) {
		echo "$element\n";
	}
}
?>
