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
    <title>View Reminders</title>
    <script src="view.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </head>
  <body>
  <?php require 'navbar.php'?>
  <?php
    $_SERVER = "localhost";
    $_username = "root";
    $password = "";
    $dbname = "db";
  
    // create a connection
    $conn = mysqli_connect($_SERVER, $_username, $password,$dbname);
    if(!$conn){
      die("Sorry we failed to connect: ".mysqli_connect_error());

   }
    
   $sql = " SELECT * FROM `rem`";
      // $prepared = $conn->prepare($query);
      // $prepared->execute();
      $result =  mysqli_query($conn, $sql);
    ?>
    
      <div class="container-fluid">
      <h1>View Reminders</h1><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Reminder Subject</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
        </tr>
      </thead>
      <!-- <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody> -->
      <?php
    if (mysqli_num_rows($result) > 0) {
      $sn=1;
      while($data = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $sn; ?> </td>
      <td><?php echo $data['reminder']; ?> </td>
      <td><?php echo $data['date']; ?> </td>
      <td><?php echo $data['time']; ?> </td>
    <tr>
    <?php
      $sn++;}
    }
      ?>
  </table>
        </div>
        <?php require 'footer.php'?>
  </body>
</html>
