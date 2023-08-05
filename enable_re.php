<!DOCTYPE html>
<?php
session_start();
 if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true) ){
  header("location: login.php");
  exit;
}
?>
<html>
  <head>
    <title>Enable Reminder</title>
    <link rel="stylesheet" href="styles.css">
    <script src="enable.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require 'navbar.php'?>
   
    <div class="container-fluid">
      <h1>Enable Reminder</h1>
      <form>
        <label for="reminder-id">Reminder ID:</label>
        <input type="text" id="reminder-id" name="reminder-id" required>

        <button type="submit" class="btn btn-primary">Enable</button>
      </form>
      <p id="status-message"></p>
    </div>
    <script src="javascripts/enable.js"></script>
  </body>
</html>
