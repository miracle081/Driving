<?php
    require_once 'includes/sessions.php';
  $title = 'Driving | safe driving';
  require_once 'includes/headers.php';
?>

<body>
    <div class="container">
        <div class="card shadow-lg my-5 mx-auto" style="border-radius: 20px; width: 800px;">
            <?php 
                echo successMessage(); 
                echo errorMessage();
            ?>
            <div class="card-body">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="mb-4">Create an Account!</h1>
                            </div>
                            <form action="config/registration_control.php" method="POST" class="">
                                <div class="form-group row mb-4">
                                    <div class="col-sm-6 mb-sm-0">
                                        <input required type="text" class="form-control p-2 rounded-pill ps-3" id="exampleFirstName" placeholder="First Name" name="fname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input required type="text" class="form-control p-2 rounded-pill ps-3" id="exampleLastName" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <div class="col-sm-6 mb-sm-0">
                                        <input required type="text" class="form-control p-2 rounded-pill ps-3" placeholder="Phone: 08166811676" name="phone">
                                    </div>
                                    <div class="col-sm-6">
                                          <select required class="form-control p-2 rounded-pill ps-3 bg-white" name="gender" id="">
                                            <option selected disabled>Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <input required type="email" class="form-control p-2 rounded-pill ps-3" id="exampleInputEmail" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group row mb-4">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input required type="password" class="form-control p-2 rounded-pill ps-3"
                                        id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input required type="password" class="form-control p-2 rounded-pill ps-3"
                                            id="exampleRepeatPassword" placeholder="Confirm Password" name="cpassword">
                                    </div>
                                </div>
                                <div class="d-flex text-center">
                                    <button name="register" class="btn btn-outline-primary mx-auto w-50 rounded-pill">
                                        Register Account
                                    </button>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-success p-2 px-3 w-100 rounded-pill me-2">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="#" class="btn btn-primary p-2 px-3 w-100 rounded-pill">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once 'includes/footer.php' ?>