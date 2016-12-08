<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
	die('Could not connect: ' . mysqli_error());
}

mysqli_autocommit($conn, FALSE);

if(!$_POST['name']) {
   http_response_code(400);
   die("Exercises must have a name.");
}

mysqli_query($conn, "INSERT INTO Exercise (user_id, name, description) VALUES (" . $_SESSION['user_id'] . ", '" . mysql_real_escape_string($_POST['name']) . "', '" . mysql_real_escape_string($_POST['description']) . "'); ");
mysqli_query($conn, "SET @exercise_id = (SELECT LAST_INSERT_ID()); ");

$parameters = 0;
foreach ($_POST as $param_name => $param_val) {
	if(!preg_match('#^p\d+#', $param_name))
	  continue;
	if(!$param_val) {
      http_response_code(400);
      die("Parameters must have a name.");
   }
	mysqli_query($conn, "INSERT INTO ExerciseParameter (exercise_id, name) VALUES (@exercise_id, '" . mysql_real_escape_string($param_val) . "'); ");
   $parameters++;
}

if(!$parameters) {
   http_response_code(400);
   die("You must specify at least one parameter.");
}

mysqli_commit($conn);

if(mysqli_errno($conn)) {
	die('failed to execute query');
}

echo "success";
?>
