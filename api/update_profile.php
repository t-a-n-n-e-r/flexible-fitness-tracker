<?php
session_start();

include '../internal/connectvarsEECS.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn) {
   die('Could not connect: ' . mysqli_error());
}

$query = "SELECT bio from Profile WHERE Profile.user_id=" . $_SESSION['user_id'];
$result = mysqli_query($conn, $query);

if(!$result) {
	die('failed to execute query: ' . $query);
}

if($_FILES['file'] && $_FILES['file']['size'] > 2 * 1024 * 1024) {
   http_response_code(401);
   die("Image file is too large. Max of 2MB.");
}

if(!$_FILES['file'] && !$_POST['bio']) {
   die("No updates required.");
}

$has_profile = mysqli_num_rows($result);

if(!$has_profile) {
   if(!$_POST['bio'] || !$_FILES['file']) {
      http_response_code(401);
      die("To create a profile, you must specify both a profile picture and a bio.");
   }

   $query = "INSERT INTO Profile (user_id, bio, image) VALUES (";
   $query .= $_SESSION['user_id'] . ", ";
   $query .= "'" . mysql_real_escape_string($_POST['bio']) . "', ";
   $query .= "'" . mysql_real_escape_string(file_get_contents($_FILES['file']['tmp_name'])) . "'";
   $query .= ")";

   $result = mysqli_query($conn, $query);

   if(mysqli_errno($conn)) {
     die('failed to execute query: ' . $query);
   }

   echo "Created profile.";
} else {
   if($_POST['bio']) {
      $query = "UPDATE Profile SET bio='" . mysql_real_escape_string($_POST['bio']) . "' WHERE Profile.user_id=" . $_SESSION['user_id'];
      $result = mysqli_query($conn, $query);

      if(!$result) {
        die('failed to execute query: ' . $query);
      }
      echo "Updated bio. ";
   }

   if($_FILES['file']) {
      $query = "UPDATE Profile SET image='" . mysql_real_escape_string(file_get_contents($_FILES['file']['tmp_name'])) . "' WHERE Profile.user_id=" . $_SESSION['user_id'];
      $result = mysqli_query($conn, $query);

      if(!$result) {
        die('failed to execute query: ' . $query);
      }
      echo "Updated profile picture.";
   }
}

?>
