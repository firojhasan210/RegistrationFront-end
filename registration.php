<?php
// session_start();
//  if(!isset($_SESSION["signup"]) || ($_SESSION["signup"] == true) ){
//   header("location: login.php");
//   exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php require 'navbar.php'?>
    <form action="regback.php" method="post">
    <section class="vh-100 gradient-custom">
        <div class="container py-1 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-4 text-center">

                  <div class="mb-md-4 mt-md-3 pb-3">

                    <h2 class="fw-bold mb-4 text-uppercase">Sign Up</h2>
                    <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->

                    <!-- enter name -->
                     <div class="d-flex flex-row align-items-center mb-3" >
                      <div class="col-2">  
                       <label    class="form-label "   for="form3Example1c"><i class="fa fa-user me-1"> Name</i> </label>                
                       </div>  
                       <div class="form-outline flex-fill mb-2 col-md-3">
                          <input type="text" id="form3Example1c" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="Name-addon" name="name" />
                        </div>
                      </div>
                      <!-- email -->
                      <div class="d-flex flex-row align-items-center mb-3 ">
                      <div class="col-2">
                        <label class="form-label " for="form3Example3c"><i class="fa fa-envelope  me-1 fa-fw"></i>E-mail</label>
                        </div>
                        <div class="form-outline flex-fill mb-2 ">
                          <input type="email" id="form3Example3c" class="form-control"  placeholder="E-mail" aria-label="email" aria-describedby="email-addon" name="email"  />
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-3">
                      <div class="col-2">  
                      <label    class="form-label"   for="phone"><i class="fa fa-phone me-1"> Mobile</i> </label>                
                       </div> 
                        <div class="form-outline flex-fill mb-2">
                          <input type="tel" id="phone" id="form3Example1c" class="form-control" placeholder="Mobile No" aria-label="Mobile" aria-describedby="Mobile-addon" name="phone" />
                          
                        </div>
                      </div>
                        <!-- Password -->
                        <div class="d-flex flex-row align-items-center mb-3">
                        <div class="col-2">  
                        <label    class="form-label " for="form3Example1c"><i class="fa fa-lock me-1"> Password</i> </label>                
                        </div> 
                            <!-- <i class="fa fa-lock fa-lg me-3 fa-fw"></i> -->
                        <div class="form-outline flex-fill mb-2">
                          <input type="password" id="form3Example4c" class="form-control"  placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" />
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-3">
                        <div class="col-2">  
                          <label class="form-label " for="form3Example1c"><i class="fa fa-lock me-1"> Confirm</i> </label>                
                        </div>
                            <!-- <i class="fa fa-key fa-lg me-3 fa-fw"></i> -->
                        <div class="form-outline flex-fill mb-2">
                          <input type="password" id="form3Example4cd" class="form-control"  placeholder="Re-enter password" aria-label="Re-enter password" aria-describedby="password-addon" name="repeat" />             
                        </div>
                      </div>
                        <!-- check -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                              I agree all statements in <a href="#!">Terms of service</a>
                            </label>
                        </div>
                        <!-- Register -->
                    <button class="btn btn-outline-primary btn-lg" type="submit">Register</button>

                    <p class="text-center text-muted mt-3 mb-0 " >Have already an account?
                        <a href="login.php" class="login" class=" text-white-50 fw-bold">Login here</a>
                    </p>
                    <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fa fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fa fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fa fa-google fa-lg"></i></a>
                    </div> -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
    <?php require 'footer.php'?>
</body>
</html>
