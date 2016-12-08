<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Flexible Fitness Tracker</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script src="./js/login.js"></script>
</head>
<body>
   <div class="container">
      <br>
      <?php include './internal/navigation.php' ?>

      <?php if($_SESSION && $_SESSION['username']) : ?>
         <div class="jumbotron">
            <h1>Hello, <?php echo $_SESSION['name']; ?>!</h1>
            <p>Welcome to Flexible Fitness Tracker, the all-in-one solution for tracking your daily workouts.</p>
         </div>
         <div class="row">
            <div class="col-sm-6 col-md-4">
               <h3>Workout log</h3>
               <p>To view your previous workouts, visit your Workout Log.</p>
               <p><a href="./log.php" class="btn btn-default" role="button">View my log</a></p>
            </div>
            <div class="col-sm-6 col-md-4">
               <h3>Add workout</h3>
               <p>To track a new workout, visit the Add Workout page.</p>
               <p><a href="./add_workout.php" class="btn btn-default" role="button">Add a workout</a></p>
            </div>
            <div class="col-sm-6 col-md-4">
               <h3>Profile</h3>
               <p>Who doesn't like profile pages? Create a bio and upload an image.</p>
               <p><a href="./profile.php" class="btn btn-default" role="button">View my profile</a></p>
            </div>
         </div>
      <?php else : ?>
         <div class="jumbotron">
            <h1>Welcome!</h1>
            <p>Welcome to Flexible Fitness Tracker, the all-in-one solution for tracking your daily workouts.</p>
            <p>
               <a class="btn btn-primary btn-lg" href="./login.php" role="button">Log in</a>
               <a class="btn btn-primary btn-lg" href="./signup.php" role="button">Sign up</a>
            </p>
         </div>
      <?php endif; ?>
   </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
