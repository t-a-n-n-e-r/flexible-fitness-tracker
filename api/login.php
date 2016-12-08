<?php
session_start();

include '../internal/connectvarsEECS.php';

if($_POST && $_POST['username'] && $_POST['password']) {

   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
   if(!$conn) {
      die('Could not connect: ' . mysqli_error());
   }

   $query = "SELECT user_id, username, name, last_workout from User where";
   $query .= " username='" . mysql_real_escape_string($_POST['username']) . "'";
   $query .= " and password='" . mysql_real_escape_string($_POST['password']) . "'";
   $result = mysqli_query($conn, $query);

   if(!$result) {
      die('failed to execute query: ' . $query);
   }

   if($row = mysqli_fetch_row($result)) {
      $_SESSION['user_id'] = $row[0];
      $_SESSION['username'] = $row[1];
      $_SESSION['name'] = $row[2];
      $_SESSION['last_workout'] = $row[3];
   } else {
      http_response_code(401);
      die('invalid username or password');
   }
}

?>
