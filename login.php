<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Flexible Fitness Tracker - Login</title>
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

      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div id="failedAlert" class="alert alert-danger collapse">
               <strong>Login failed!</strong> Invalid username or password. Please try again.
            </div>
         </div>
      </div>

      <div class="row">
         <h1 class="text-center">Log in</h1>
      </div>

      <div class="row">
         <div class="col-md-4 col-md-offset-4">
            <form>
               <div class="form-group">
                  <label for="username">Username</label><br>
                  <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
               </div>
               <div class="form-group">
                  <label for="password">Password</label><br>
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
               </div>
               <div class="text-center"><button type="submit" id="submit-button" class="btn btn-primary">Submit</button></div>
            </form>
         </div>
      </div>
   </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
