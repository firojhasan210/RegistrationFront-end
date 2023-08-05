<?php
    $_SERVER = "localhost";
    $_username = "root";
    $password = "";
    $dbname = "db";

    // create a connection
    $conn = mysqli_connect($_SERVER, $_username, $password,$dbname);
    
    //Die if connection was not successfu
    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());

    }
    $sql = " SELECT * FROM `reg`";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo $num;
    echo "  Numbers of record are inserted <br>";
    $no=1;
    if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $no . ".  " . $row['name'] . "  " . $row['email'] . "  " . $row['number'];
            echo "<br>";
            $no+=1;
        }
    }
?>