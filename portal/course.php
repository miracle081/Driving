<?php
    $title = "Course | Driving";
    require_once '../config/db-connect.php';

    require_once '../includes/sessions.php';
    auth();
    $id =  $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $query = mysqli_query($connection,$sql);
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
        <h1 class="h3 mb-0 text-gray-800">Create Course</h1>
    </div>

    <form action="../config/course_control.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="cname" class="form-control p-4 border-warning w-50 mb-3 p-4 border-warning w-50" placeholder="Course Name">
        <input type="text" name="discription" class="form-control p-4 border-warning w-50 mb-3" placeholder="Course Discription">
        <input type="text" name="class" class="form-control p-4 border-warning w-50 mb-3" placeholder="Class">
        <input type="text" name="duration" class="form-control p-4 border-warning w-50 mb-3" placeholder="Duration">
        <input type="text" name="amount" class="form-control p-4 border-warning w-50 mb-3" placeholder="amount">
        <label class="text-danger fw-bold">Course Picture</label>
        <input type="file" name="pic"  class="form-control p-4 w-50 mb-3">
        <button name="create" class="btn btn-outline-primary">Create Course</button>
    </form>

</div>

</div>

<!-- FOOTER -->
<?php require_once '../includes/portal_footer.php';?>