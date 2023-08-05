<?php
        require 'database.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $password = $_POST['password'];
            $password2 = $_POST['repeat'];

            function validate($data){

                $data = trim($data);

                $data = stripslashes($data);

                return $data;

            }

            $email = validate($email);
            $password = validate($password);
            $password2 = validate($password2);
            $check_user = "SELECT * FROM reg WHERE email='$email' ";
            $obj = mysqli_query($conn, $check_user);
            $row = mysqli_num_rows($obj);
            if($row > 0){
                echo "<script>
                alert('email already exists');
            </script>";
            exit();
            }
            if($password==$password2){
                $sql = "INSERT INTO `reg` (`name`, `email`, `number`, `password`, `password2`) VALUES ( '$name', '$email', '$number', '$password', '$password2')";
                
                if(!mysqli_query($conn, $sql)){
                        echo "<script>
                        alert('Server Error');
                        window.location.href='registrtion.php';
                        </script>";

                    exit();
                }
                else{
                    echo "<script>
                        alert('Account Created');
                         window.location.href='login.php';
                        </script>";

                    exit();
                }
            }
            else{
                echo "<script>
                        alert('Password Not Matches');
                        window.location.href='registration.php';
                     </script>";
                exit();
            }
        mysqli_close($conn);

?>
