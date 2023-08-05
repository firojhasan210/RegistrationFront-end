<?php
// import page
// require_once('checkreminder.php'); // import reminder checker
if($_SERVER['REQUEST_METHOD'] =='POST'){
			$dbHost = "localhost:3306";
			$dbUser = "root";
			$dbPass = "";
			$dbName = "db";

			//Connection to database
			$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

			if (!$conn) {
				die("Database connection failed!");
			}

			$reminder = $_POST['reminder'];
            $date = $_POST['date'];
            $time = $_POST['time'];
        

            function validate($data){

                $data = trim($data);

                $data = stripslashes($data);

                return $data;

            }

	$sql = "INSERT INTO `rem` (`reminder`, `date`, `time`) VALUES ('$reminder', '$date', '$time')";
	$result = mysqli_query($conn, $sql);
	
	if($result){
			echo" <script>
				alert('Reminder Set Successfully');
				window.location.href='set_reminder.php';
				</script>";

	}else{
	  echo "The record was not inserted Successfully because of this error---> ".mysqli_error($conn);
	}
}
  //submit these to database.


// if(isset($_REQUEST['submit']))
// {
// 	if(!empty($_REQUEST['reminder']) & !empty($_REQUEST['date']))
// 	{
// 		if($_REQUEST['date']<=date('Y-m-d')) // if selected is in future or not?
// 		{
// 		$flag = '0'; // if it is today or before, make it expired.
// 		$Status_message = "Reminder is set expired.";
// 		}
// 		else
// 		{
// 		$flag = '1'; 
// 		}
// 		$title = addslashes(ucwords($_REQUEST['reminder']));
// 		// $desc = addslashes(ucfirst($_REQUEST['description']));	
	
// 		$sql->dbQuery("insert into rem (rmeminder,date,flag)values('$reminder','$_REQUEST[date]','$flag')"); // add reminder
// 	}
// 	else
// 	{
// 	$Status_message = "Title or date missing, no reminder added";
// 	}
// }
// $Result = $sql->dbQuery("select * from rem order by id desc");
// $Reminder_Result = $sql->dbQuery("SELECT * FROM `rem` WHERE flag = '1' "); // select expired reminders
?>