<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Flexible Fitness Tracker - Add workout</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script src="js/add.js"></script>
</head>
<body>
   <div class="container">
      <br>
      <?php include './internal/navigation.php' ?>

      <h1 class="text-center">Add workout</h1>
      <br>
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div id="failedAlert" class="alert alert-danger collapse">
               <strong>Failed to add workout.</strong> <span id="failedAlertText"></span>
            </div>
            <div id="successAlert" class="alert alert-success collapse">
               <strong>Successfully added workout.</strong> It should be visible in your log.
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-md-offset-4">

            <form id="add-form">
               <div class="form-group">
                  <label for="exercises">Exercises</label> - <a href="./exercises.php">Want to define a new exercise?</a>
                  <select class="form-control" id="exercises"></select>
               </div>
               <div class="form-group">
                  <label for="date">Date</label>
                  <input type="text" class="form-control" id="date-input" placeholder="Enter date as YYYY-MM-DD">
               </div>
               <div id="parameters">
               </div>
               <div class="text-center"><button type="submit" id="submit-button" class="btn btn-primary">Submit</button></div>
            </form>
         </div>
      </div>
   </div>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
