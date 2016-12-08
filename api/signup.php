<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
   die('Could not connect: ' . mysqli_error());
}

if(!$_POST['username']) {
   http_response_code(401);
   die("You must specify a username.");
} else if(!$_POST['password']) {
   http_response_code(401);
   die("You must specify a password.");
} else if(!$_POST['name']) {
   http_response_code(401);
   die("You must specify a display name.");
}

$query = "INSERT INTO User (username, password, name) VALUES (";
$query .= "'" . mysql_real_escape_string($_POST['username']) . "', ";
$query .= "'" . mysql_real_escape_string($_POST['password']) . "', ";
$query .= "'" . mysql_real_escape_string($_POST['name']) . "')";
$result = mysqli_query($conn, $query);

if(mysqli_errno($conn)) {
   http_response_code(401);
   die('Username already exists.');
}

?>
