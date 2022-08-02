<?php
  $title = 'Driving | safe driving';
  require_once 'includes/headers.php';
  
?>

<body class="bg-gradient-primary">
    

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card shadow-lg my-5 mx-auto" style="width: 600px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <form action="config/login_control.php" method="post">
                                        <div class="form-group mb-4">
                                            <input required type="email" class="form-control p-2 rounded-pill ps-3"
                                            id="exampleInputPassword" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group mb-1">
                                            <input required type="password" class="form-control p-2 rounded-pill ps-3"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button name="login" class="btn btn-outline-primary mx-auto px-5 rounded-pill">
                                                Login
                                            </button>
                                        </div>
                                    </form>

                                        <hr>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-success p-2 px-3 w-100 rounded-pill me-2">
                                                <i class="fab fa-google fa-fw"></i> Register with Google
                                            </a>
                                            <a href="#" class="btn btn-primary p-2 px-3 w-100 rounded-pill">
                                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                            </a>
                                        </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<!-- FOOTER -->
<?php include_once 'includes/footer.php' ?>