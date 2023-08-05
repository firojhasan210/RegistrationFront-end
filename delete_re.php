<?php
session_start();
 if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true) ){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Delete Reminders</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
	<?php require 'navbar.php'?>
	
	<h1>Delete Reminders</h1><br>
	<form>
		<div class="container-fluid">
		<label for="date">Date</label>
		<input type="date" id="date" name="date">
		<label for="time">Time</label>
		<input type="time" id="time" name="time">
		<button type="button" class="btn btn-danger" onclick="deleteReminder()">Delete Reminder</button>
		</div>
	</form>
	<script src="javascripts/delete.js"></script>
</body>
</html>
