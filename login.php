<?php
  //  session_start();
//   if(!isset($_SESSION['email'])){
//     echo "<script> alert('Please signin first');
//      window.location.href='login.php';</script>";
//    }
  // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  //   header("location: login.php");
  //   exit;
  //   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- font font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>     
<body>
  <?php require 'navbar.php'?>
  
    <form action="loginback.php" method ="post">
    <section class="vh-100 gradient-custom">
        <div class="container py-4 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-4 text-center">
      
                  <div class="mb-md-4 mt-md-3 pb-3">
      
                    <h2 class="fw-bold mb-4 me-3 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-4">Please enter your login Id and password!</p>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="col-3">  
                          <label class="form-label " for="form3Example1c"><i class="fa fa-user me-1"> UserId</i> </label>                
                      </div>
                      <div class="form-outline flex-fill mb-2">
                      <input type="email" id="typeEmailX" class="form-control "  placeholder="UserId & Email" name="email"/>
                      </div>
                    </div>
      
                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="col-3">  
                          <label class="form-label " for="form3Example1c"><i class="fa fa-key me-1"> Password</i> </label>                
                      </div>
                      <div class="form-outline flex-fill">
                        <input type="password" id="form3Example3c" class="form-control"  placeholder="Password" aria-label="password" aria-describedby="password-addon" name="password"  />
                      </div>
                    </div>
      
                    <p class="small mb-2 pb-lg-2"><a class="text-white-50" href="forgot.html">Forgot password?</a></p>
      
                    <button class="btn btn-outline-light btn-lg px-3" type="submit">Login</button>

      
                  </div>
      
                  <div>
                    <p class="mb-0">Don't have an account? <a href="registration.php" class="sign" class="text-white-50 fw-bold">Sign Up</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
</body>
</html>