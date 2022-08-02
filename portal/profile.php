<?php
$title = "Profile | Driving";
require_once '../config/db-connect.php';

require_once '../includes/sessions.php';
auth();
$id =  $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);
require_once '../includes/portal_header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    echo successMessage();
    echo errorMessage();
    ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>

    <!-- Content Row -->
    <div class="d-flex">
        <div class="bg-white shadow rounded p-4 w-50">
            <h4>Update Profile Picture</h4>
            <div class="position-relative imgDiv">
                <img src="../img/profile_pic/<?php
                    $img = $row['prof_pic'];

                    if (!empty($img)) {
                        echo "$img?" . mt_rand();
                    } else {
                        echo 'user.png';
                    }
                    ?>" alt="pro" class="prof_pic d-block mx-auto">
                <label for="img">
                    <a class="pic-btn"><i class="fas fa-camera"></i></a>
                </label>
                <p>Click on the image to select a photo</p>
            </div>
            <form action="../config/update_control.php" id="imgForm" class="d-flex justify-ciontent-around" method="POST" enctype="multipart/form-data">

                <input type="file" name="file" id="img" onchange="sub()" class="w-25 d-none">
                <input type="hidden" name="changeImg" class="btn btn-outline-danger btn-sm px-4">
            </form>

            <script>
                function sub() {
                    document.querySelector('#imgForm').submit()
                }
            </script>
            <style>
                .imgDiv {
                    height: 250px;
                    overflow-y: hidden;
                }

                .prof_pic {
                    width: 200px;
                    height: 250px;
                    transition: 0.45s;
                }

                .pic-btn {
                    position: absolute;
                    width: 200px;
                    height: 100px;
                    background-color: rgba(0, 0, 0, 0.8);
                    text-align: center;
                    color: white;
                    font-size: 40px;
                    padding-top: 10px;
                    border-bottom-left-radius: 50%;
                    border-bottom-right-radius: 50%;
                    bottom: -100px;
                    right: 14.5%;
                    transition: 0.45s;
                }

                .imgDiv:hover .prof_pic {
                    border-bottom-left-radius: 32% !important;
                    border-bottom-right-radius: 32% !important;
                }

                .imgDiv:hover .pic-btn {
                    bottom: -5px;
                }
            </style>

        </div>

        <div class="bg-white shadow rounded border-top-info p-4 w-100 ms-3">
            <h4>Profile Information</h4>
            <form action="../config/update_control.php" method="POST" class="">
                <div class="form-group row mb-4">
                    <div class="col-sm-6 mb-sm-0">
                        <input type="text" class="form-control p-2 rounded-pill ps-3" id="exampleFirstName" placeholder="<?php echo $row['fname'] ?>" name="fname">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control p-2 rounded-pill ps-3" id="exampleLastName" name="lname" placeholder="<?php echo $row['lname'] ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <div class="col-sm-6 mb-sm-0">
                        <input type="text" class="form-control p-2 rounded-pill ps-3" placeholder="<?php echo $row['phone'] ?>" name="phone">
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control p-2 rounded-pill ps-3 bg-white" name="gender" id="">
                            <option selected disabled>Gender: <?php echo $row['gender'] ?></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <input type="email" class="form-control p-2 rounded-pill ps-3" id="exampleInputEmail" name="email" placeholder="<?php echo $row['email'] ?>" readonly>
                </div>
                <div class="d-flex text-center">
                    <button name="update" class="btn btn-outline-primary mx-auto w-50 rounded-pill">
                        <i class="fa fa-upload"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- FOOTER -->
<?php require_once '../includes/portal_footer.php'; ?>