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

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
        echo successMessage();
        echo errorMessage();
    ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 p-2" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <?php echo $row['user_role'] ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['fname'] ?></div>
                        </div>
                        <div class="col-auto bg-gradient-primary shadow text-center p-2" style="border-radius: 10px;">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 p-2" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Email Address</div>
                            <div class="h5 mb-0 text-gray-800"><?php if (strlen($row['email']) > 14) {
                                echo substr($row['email'], 0 ,14)."...";
                            }else{ echo $row['email'];} ?></div>
                        </div>
                        <div class="col-auto bg-gradient-info shadow text-center p-2" style="border-radius: 10px;">
                            <i class="fas fa-at fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 p-2" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Phone</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['phone'] ?></div>
                        </div>
                        <div class="col-auto bg-gradient-success shadow text-center p-2" style="border-radius: 10px;">
                            <i class="fas fa-phone fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($_SESSION['role'] === 'admin'){ ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 p-2" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                        </div>
                        <div class="col-auto bg-gradient-warning shadow text-center p-2" style="border-radius: 10px;">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="row" style="border-radius: 20px;">
        <?php
            $sql2 = "SELECT * FROM courses";
            $query2 = mysqli_query($connection,$sql2); 
            while($row2 = mysqli_fetch_assoc($query2)){ 
        ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp mb-3" data-wow-delay="0.5s">
            <div class="courses-item d-flex flex-column bg-white shadow">
                <div class="position-relative mt-0">
                    <img class="w-100" src="../img/cpics/<?php echo $row2['pic']; ?>" alt="" height="300">
                </div>
                <div class="text-center p-3 pt-2">
                    <h5 class="mb-3 fw-bold" style="text-transform: capitalize;"><?php echo $row2['cname']; ?></h5>
                    <p><?php echo $row2['discription']; ?></p>
                    <ol class="breadcrumb justify-content-center mb-0 p-1">
                        <li class="breadcrumb-item small">
                            <i class="fa fa-signal text-primary me-1"></i>
                            <?php echo $row2['class']; ?>
                        </li>
                        <li class="breadcrumb-item small">
                            <i class="fa fa-calendar-alt text-primary me-1"></i>
                            <?php echo $row2['duration']; ?>
                        </li>
                        <li class="breadcrumb-item small">
                            <span class="fw-bold"><?php echo "₦".number_format($row2['amount'],2,'.',','); ?></span>
                        </li>
                    </ol>
                    <a href="#" class="btn btn-outline-primary rounded-pill w-50 fw-bold mt-2">Enroll</a>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>


</div>

</div>

<!-- FOOTER -->
<?php require_once '../includes/portal_footer.php';?>