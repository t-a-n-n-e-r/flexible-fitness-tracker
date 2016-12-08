<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
	die('Could not connect: ' . mysqli_error());
}

if(!$_POST['exercise']) {
	http_response_code(400);
	die("An exercise must be specified.");
} else if(!$_POST['date']) {
	http_response_code(400);
	die("A date must be specified.");
}

mysqli_autocommit($conn, FALSE);

mysqli_query($conn, "INSERT INTO Workout (user_id, exercise_id, date) VALUES (" . $_SESSION['user_id'] . ", " . mysql_real_escape_string($_POST['exercise']) . ", '" . mysql_real_escape_string($_POST['date']) . "'); ");
mysqli_query($conn, "SET @workout_id = (SELECT LAST_INSERT_ID()); ");

$parameters = 0;
foreach ($_POST as $param_name => $param_val) {
	if(!preg_match('#^p\d+#', $param_name))
		continue;
	if(!$param_val) {
		http_response_code(400);
		die("All parameters must have a value.");
	}
	$param_num = substr($param_name, 1);
	mysqli_query($conn, "INSERT INTO WorkoutParameter (workout_id, exercise_parameter_id, value) VALUES (@workout_id, " . mysql_real_escape_string($param_num) . ", '" . mysql_real_escape_string($param_val) . "'); ");
	$parameters++;
}

if(!$parameters) {
	http_response_code(400);
	die("A workout must have at least one parameter.");
}

mysqli_commit($conn);

if(mysqli_errno($conn)) {
	die('failed to execute query');
}

echo "success";
?>
