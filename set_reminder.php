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
    <title>Set Reminder</title>
    <link rel="stylesheet" href="styles.css">
    <script src="sremider.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</head>
<body>
<?php require 'sreminderback.php'?>
<?php require 'navbar.php'?>


    <section id="reminderbt">
    <form action="set_reminder.php" method="post">
        <div class="remind">
        <section id="card">
         <div class="row">
            <div class=" col-md-8 ">

                <div class="card">
                <div class="card-header bg-secondary text-white">
                <h3 class="card-text">Set Reminders</h3>
                </div>
                <div class="card-body text-center">
                <label for="reminder">Reminder:</label>
                <input type="text" id="reminder" name="reminder" required /><br /><br />
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required /><br /><br />
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required /><br /><br />
                <a href="set_reminder.php"><button type="submit" class="btn btn-primary" onclick="setReminder()">Set Reminder</button></a>
                </div>
                </div>
             </div>
            </div>
        </div>
    </section>
    </form>
    </section>
</body>
</html>