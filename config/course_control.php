<?php
    require_once '../includes/sessions.php';
    require_once 'db-connect.php';

    if (!isset($_POST['create'])) {
        $_SESSION['errormessage'] = "Please Log in or create an Account";
        header('Location: ../portal/course');
    }
    else{
        $cname = $_POST['cname'];
        $discription = $_POST['discription'];
        $class = $_POST['class'];
        $duration = $_POST['duration'];
        $amount = $_POST['amount'];
        $pic = $_FILES['pic'];
        $date = date('Y-m-d');

        $fileName = $pic['name'];
        $fileTempName = $pic['tmp_name'];
        $fileError = $pic['error'];
        $fileSize = $pic['size'];

        $allowedFiles = array('jpg','png','jpeg');

        $fileName = explode('.',$fileName);
        $fileName = end($fileName);
        $fileName = strtolower($fileName);

        if (in_array($fileName,$allowedFiles)) {
            if ($fileError < 1) {
                if ($fileSize < 4000000) {
                    //   Create a location to where file will be stored
                    $location = '../img/cpics/';
                    $fileNewName = 'course'.rand(1000000,9999999).'.'.$fileName;
                    
                    $move = move_uploaded_file($fileTempName,$location.$fileNewName);
                    if ($move) {
                        $sql = "INSERT INTO courses(cname,discription,class,duration,amount,pic,date_create) VALUES(?,?,?,?,?,?,?)";
                        $stmt = mysqli_stmt_init($connection);
                        mysqli_stmt_prepare($stmt,$sql);
                        mysqli_stmt_bind_param($stmt,'sssssss',$cname,$discription,$class,$duration,$amount,$fileNewName,$date);
                        if (mysqli_stmt_execute($stmt)) {
                                $_SESSION['successMessage'] = "Course creates Successfull!";
                                header('Location: ../portal/course');
                        }else{
                            $_SESSION['errorMessage'] = "Something went wrong";
                            header('Location: ../portal/course');
                        }
                    }else{
                        $_SESSION['errorMessage'] = "Something went Wrong, Please Try again";
                        header("Location: ../../portal/course");
                    }
                }else{
                    $_SESSION['errorMessage'] = "File too large, maximum 4mb";
                    header("Location: ../../portal/course");
            }  
            }else{
                $_SESSION['errorMessage'] = "File Error, Please Upload a new File";
                header("Location: ../../portal/course");
            }
        }else{
            $_SESSION['errorMessage'] = "Please uploade either a jpg, png or jpeg file";
            header("Location: ../../portal/course");
        }
    }