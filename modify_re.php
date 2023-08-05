<!DOCTYPE html>
<html>
  <head>
    <title>Modify Reminders</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </head>
<?php
session_start();
 if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true) ){
  header("location: login.php");
  exit;
}
?>
  <body>
    <?php require 'navbar.php'?>
    
    <h1>Modify Reminders</h1>
    <form>
      <div class="container-fluid">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>
        <br>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea>
        <br>
        <button type="submit" class="btn btn-outline-primary" onclick="modifyReminder()">Modify Reminder</button>
    </div>
    </form>
  </body>
</html>
