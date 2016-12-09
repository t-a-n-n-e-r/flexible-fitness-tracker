<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Flexible Fitness Tracker - Manage exercises</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script src="js/exercises.js"></script>
</head>
<body>
   <div class="container">
      <br>
      <?php include './internal/navigation.php' ?>

      <h1 class="text-center">Manage exercises</h1>
      <br>
      <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
               <div class="panel-body">
                  <h3>Add exercise</h3>
                  <form id="add-form">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter exercise name">
                     </div>

                     <label for="parameters">Parameters</label>
                     <div id="parameters">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Enter parameter name">
                        </div>
                     </div>
                     <a id="add-parameter" href="#">+ add another</a>
                     <div class="text-center"><button type="submit" id="submit-button" class="btn btn-primary">Add exercise</button></div>
                  </form>
                  <br>
                  <div id="failedAlert" class="alert alert-danger collapse">
                     <strong>Failed to add exercise.</strong> <span id="failedAlertText"></span>
                  </div>
                  <div id="successAlert" class="alert alert-success collapse">
                     <strong>Successfully added exercise.</strong> It should be visible in the "Your exercises" table.
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
               <div class="panel-body">
                  <h3>Your exercises</h3>
                  <table class="table">
                     <thead>
                        <th>Name</th>
                        <th>Parameters</th>
                        <th>Actions</th>
                     </thead>
                     <tbody id="table-body">
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
