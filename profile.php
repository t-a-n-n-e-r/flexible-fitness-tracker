<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Flexible Fitness Tracker - Your profile</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script src="js/profile.js"></script>
</head>
<body>
   <div class="container">
      <br>
      <?php include './internal/navigation.php' ?>

      <h1 class="text-center">Your Profile</h1>
      <br>
      <div class="col-md-8 col-md-offset-2">
         <div id="failedAlert" class="alert alert-danger collapse">
            <strong>Failed to update profile.</strong> <span id="failedAlertText"></span>
         </div>
         <div id="successAlert" class="alert alert-success collapse">
            <strong>Success.</strong> <span id="successAlertText"></span>
         </div>
      </div>
      <div class="row col-md-4 col-md-offset-4 text-center">
         <h3>Profile picture</h3>
         <img id="profile-pic" src="" style="max-width: 200px; max-height: 200px;"></img>
      </div>
      <div class="row col-md-4 col-md-offset-4 text-center">
         <h3 class="text-center">Bio</h3>
         <p id="bio"></p>
      </div>
      <div class="row col-md-4 col-md-offset-4 text-center">
         <button id="edit-profile-btn" class="btn btn-secondary" style="margin-top: 30px;">Edit profile</button>
      </div>
      <div class="collapse" id="edit-form">
         <div class="row col-md-4 col-md-offset-4 text-center">
            <div class="panel panel-default" style="margin-top: 10px;">
               <div class="panel-body">
                  <form id="edit-form" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" name="file" class="form-control" id="image-input">
                     </div>
                     <div class="form-group">
                        <label for="name">Bio</label>
                        <input type="text" name="bio" class="form-control" id="bio-input" placeholder="Enter bio">
                     </div>
                     <button type="submit" id="submit-button" class="btn btn-primary">Save</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
