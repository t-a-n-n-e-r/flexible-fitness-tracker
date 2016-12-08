<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Workout log</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script src="js/log.js"></script>
</head>
<body>
   <div class="container">
      <br>
      <?php include './internal/navigation.php' ?>

      <h1 class="text-center">Workout Log</h1>
      <br>
      <div class="col-md-2">
         <h3 class="text-center">Filters</h3>
         <form>
            <div class="form-group">
               <input type="text" class="form-control" id="start" placeholder="Start date">
            </div>
            <div class="form-group">
               <input type="text" class="form-control" id="end" placeholder="End date">
            </div>
            <div class="form-group">
               <select class="form-control" id="exercises">
               </select>
            </div>
            <div class="text-center">
               <button type="submit" class="btn btn-primary" id="apply-button">Apply</button>
               <button type="submit" class="btn btn-primary" id="clear-button">Clear</button>
            </div>
         </form>
      </div>

      <div class="col-md-10">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Exercise</th>
                  <th>Date</th>
                  <th>Parameters</th>
               </tr>
            </thead>
            <tbody id="table-body">
            </tbody>
         </table>
      </div>
   </div>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
