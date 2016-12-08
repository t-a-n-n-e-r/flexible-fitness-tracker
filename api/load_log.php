<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
	die('Could not connect: ' . mysqli_error());
}

$query = "SELECT workout_id, Workout.exercise_id, name, date from Workout, Exercise WHERE Workout.exercise_id = Exercise.exercise_id AND Workout.user_id=" . $_SESSION['user_id'] . " ORDER BY date DESC";
$result = mysqli_query($conn, $query);

if(!$result) {
	die('failed to execute query: ' . $query);
}

while($row = mysqli_fetch_row($result)) {
	$workout_id = $row[0];
	$exercise_id = $row[1];
	$name = $row[2];
	$date = $row[3];

	$query2 = "SELECT name, value FROM ExerciseParameter, WorkoutParameter WHERE WorkoutParameter.workout_id="
	. $workout_id . " AND WorkoutParameter.exercise_parameter_id=ExerciseParameter.exercise_parameter_id";
	$result2 = mysqli_query($conn, $query2);

	$first = true;
	$params = "";
	while($row2 = mysqli_fetch_row($result2)) {
		$params .= ($first ? "" : ", ") . $row2[0] . ": " . $row2[1];
		$first = false;
	}

	echo $name . "\n";
	echo $date . "\n";
	echo $params . "\n";
}
?>
