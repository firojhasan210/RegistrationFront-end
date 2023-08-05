<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'database.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
        $sql = "SELECT * FROM reg WHERE email ='$email' && password = '$password' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            echo
            header("location: index.php");

        
    }echo" <script>
    alert('password or email do not match');
    window.location.href='login.php';
    </script>";
}
if($login){
    echo '<div class="alert alert-success alert dismissible fade show" role=" alert">
    <strong>Success!</strong> You are logged in
    <button type="button" class="close" data-dismiss = "alert" aria-label = "close">
        <span aria-hidden = "true"></span>
    </button>
    </div>';
}
if($showError){
    echo '<div class="alert alert-danger alert dismissible fade show" role=" alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="close" data-dismiss = "alert" aria-label = "close">
        <span aria-hidden = "true"></span>
    </button>
    </div>';
}
?>