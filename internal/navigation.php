<nav class="navbar navbar-default">
   <div class="container-fluid">
      <div class="navbar-header">
         <a class="navbar-brand" href="./"><strong>Flexible Fitness Tracker</strong></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
            <?php if($_SESSION && $_SESSION['username']) : ?>
               <li><a href="log.php">View log</a></li>
               <li><a href="add_workout.php">Add workout</a></li>
               <li><a href="exercises.php">Manage exercises</a></li>
               <li><a href="profile.php">Profile</a></li>
               <li><a href="help.php">Help</a></li>
               <li><a href="logout.php">Log out</a></li>
            <?php else : ?>
               <li><a href="signup.php">Sign up</a></li>
               <li><a href="login.php">Log in</a></li>
            <?php endif; ?>
         </ul>
      </div>
   </div>
</nav>
