<?php
session_start();
 if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true) ){
  header("location: login.php");
  exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder Application </title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="modify_reminder.html">
    <link rel="stylesheet" href="view_reminder.html">
    <link rel="stylesheet" href="setreminder.html">
    <link rel="stylesheet" href="enable_reminder.html">
    <link rel="stylesheet" href="disable_reminder.html">
    <link rel="stylesheet" href="delete_reminder.html">
   -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    
        <!-- new -->
            <!-- <div class="container-fluid"> -->
              <!-- <button class="navbar-toggler rounded-pill mb-2"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </form> -->
            <?php require 'navbar.php'?>

        <h1 class="py-2">Welcome to the Reminder Application</h1>
        
        <div class="t-time me-2" class="text-center align">
          <span id ="time"></span>
      </div>
      <script>
        setInterval(updateTime, 1000);
        function updateTime(){
          time.innerHTML = new Date();
          
        }
      </script>
      <!-- application button -->
      <section id="feature">
        <div class="row">
          <div class="feature-box mb-5 my-4 col-lg-4">
            <a href="set_reminder.php"><button class="btn btn-primary rounded-pill">Set Reminders</button></a>
          </div>
          <div class="feature-box mb-5 my-4 col-lg-4">
           <a href="modify_re.php"><button type="button" class="btn btn-success rounded-pill ">Modify Reminder</button></a> 
          </div>
          <div class="feature-box mb-5 my-4 col-lg-4">
           <a href="disable_re.php"><button type="button" class="btn btn-warning rounded-pill">Disable Reminder</button></a>
          </div>
          <div class="feature-box mb-5 my-4 col-lg-4">
           <a href="delete_re.php"><button type="button" class="btn btn-danger rounded-pill">Delete Reminder</button></a>
          </div>
          <div class="feature-box mb-5 my-4 col-lg-4">
           <a href="enable_re.php"><button type="button" class="btn btn-secondary rounded-pill">Enable Reminder</button></a>
          </div>
          <div class="feature-box mb-5 my-4 col-lg-4 py-2">
          <a href="view_re.php"><button type="button" class="btn btn-info rounded-pill">View Your Reminder</button></a> 
     </section>
</div>
<?php require 'footer.php'?>
</body>
</html>
        
