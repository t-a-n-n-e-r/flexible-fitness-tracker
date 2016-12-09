<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Flexible Fitness Tracker - Help</title>
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

      <div class="row text-center">
         <h2>Help</h2>
         <p>Select an operation below to view a brief tutorial.</p>
      </div>

      <div class="row col-md-10 col-md-offset-1" style="margin-top: 10px;">
         <ul class="nav nav-tabs text-center">
            <li><a data-toggle="tab" href="#workout">Adding a workout</a></li>
            <li><a data-toggle="tab" href="#exercise">Adding an exercise</a></li>
            <li><a data-toggle="tab" href="#profile">Editing your profile</a></li>
            <li><a data-toggle="tab" href="#log">Viewing your log</a></li>
         </ul>

         <div class="tab-content">
            <div id="workout" class="tab-pane fade" style="margin-top: 10px;">
               <p>First, visit the "Add workout" page via the navigation bar.</p>
               <img src="./image/workout-1.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>Next, select the exercise you performed, and enter the date.</p>
               <img src="./image/workout-2.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>Lastly, enter the parameters associated with this workout, and click "Submit".</p>
               <img src="./image/workout-3.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
            </div>
            <div id="exercise" class="tab-pane fade" style="margin-top: 10px;">
               <p>First, visit the "Manage exercises" page via the navigation bar.</p>
               <img src="./image/exercise-1.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>Next, enter a name for the exercise.</p>
               <img src="./image/exercise-2.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>Lastly, enter as many parameter names as you would like. You can add more than one by clicking "+ add another". Click "Add exercise".</p>
               <img src="./image/exercise-3.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
            </div>
            <div id="profile" class="tab-pane fade" style="margin-top: 10px;">
               <p>First, visit the "Profile" page via the navigation bar.</p>
               <img src="./image/profile-1.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>Next, click the "Edit profile" button at the bottom of the page.</p>
               <img src="./image/profile-2.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>Lastly, either edit the text or upload an image. If you are creating a profile for the first time, you are required to do both.</p>
               <img src="./image/profile-3.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
            </div>
            <div id="log" class="tab-pane fade" style="margin-top: 10px;">
               <p>First, visit the "Workout log" page via the navigation bar.</p>
               <img src="./image/log-1.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>If you would like to filter the result, you can optionally enter a starting date, ending date, or select a single exercise. After selecting a filter, click "Apply".</p>
               <img src="./image/log-2.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
               <p>To remove all filtering, click "Clear".</p>
               <img src="./image/log-3.png" style="margin-left: 20px; margin-bottom: 15px; border: 1px solid black;">
            </div>
         </div>
      </div>
   </div>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
