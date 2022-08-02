<?php
    $title = "Dashboard | Driving";
    require_once '../config/db-connect.php';

    require_once '../includes/sessions.php';
    auth();
    $id =  $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $query = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($query);
    require_once '../includes/portal_header.php';
?>

<div id="layoutSidenav_content">
    <!-- Main Content goes here -->
    <main>
        <div class="bg-white m-5 p-3 shadow">
            <?php
                        echo successMessage();
                        echo errorMessage();
                    ?>
            <form action="../config/password_reset.php" method="POST">
                <div class="d-flex justify-content-around">
                    <div>
                        <p class="ps-5">Password must be of 8 characters</p>
                        <div class="mb-3 form-floating d-flex">
                            <i class="fa fa-unlock-alt mt-4 text-primary" aria-hidden="true"></i>
                            <input required type="password" class="form-control ms-2 border-primary" id="floatingPassword"
                                placeholder="Password" name="password">
                            <label for="floatingPassword " class="ps-5" id="fifthy">Old Password</label>
                        </div>
                        <div class="mb-3 form-floating d-flex">
                            <i class="fa fa-lock mt-4 text-warning" aria-hidden="true"></i>
                            <input required type="password" class="form-control ms-2 border-warning" id="floatingPassword"
                                placeholder="Password" name="password">
                            <label for="floatingPassword " class="ps-5" id="fifthy">New Password</label>
                        </div>

                        <div class="mb-3 form-floating d-flex">
                            <i class="fa fa-lock mt-4 text-success" aria-hidden="true"></i>
                            <input required type="password" class="form-control ms-2 border-success" id="floatingPassword"
                                placeholder="Password" name="cpassword">
                            <label for="floatingPassword " class="ps-5" id="fifthy">Confirm Password</label>
                        </div><br>
                        <div class="text-center">
                            <button class="btn btn-primary mb-5" name="updatePassword" type="submit"
                                id="btn">Change Password</button>
                        </div>
                    </div>
                    <div>
                        <img src="../img/profile_pic/<?php
                                $img = $row['prof_pic'];

                                if (!empty($img)) {
                                echo "$img?".mt_rand();
                                }else{
                                echo 'user.png';
                                }
                            ?>" alt="" class="" width="400" height="400">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- ========= MAIN END ======== -->

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-center small">
                <div class="text-muted visually-hidden">Copyright &copy; Your Website 2022</div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/scripts.js"></script>
</body>

</html>