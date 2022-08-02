<?php  
    require_once '../includes/sessions.php';
    require_once 'db-connect.php';
    $id = $_SESSION['id'];


    if (isset($_POST['update'])) {

        $fname = $_POST['fname'];
        if (!empty($fname)) {
           $sql = "UPDATE users SET fname = '$fname' WHERE id = '$id'";
           $query = mysqli_query($connection,$sql);
           if ($query) {
            $_SESSION['successMessage'] = "Update Successful";
            // header('Location: ../portal/profile');
           }else{
            $_SESSION['errorMessage'] = "Something went wrong";
            // header('Location: ../portal/profile');
           }
        }else{
            // header('Location:../portal/profile');
        }

        $lname = $_POST['lname'];
        if (!empty($lastName)) {
           $sql = "UPDATE users SET lname = '$lname' WHERE id = '$id'";
           $query = mysqli_query($connection,$sql);
           if ($query) {
            $_SESSION['successMessage'] = "Update Successful";
            header('Location: ../portal/profile');
           }else{
            $_SESSION['errorMessage'] = "Something went wrong";
            header('Location: ../portal/profile');
           }
        }else{
            header('Location:../portal/profile');
        }

        $gender = $_POST['gender'];
        if (!empty($gender)) {
           $sql = "UPDATE users SET gender = '$gender' WHERE id = '$id'";
           $query = mysqli_query($connection,$sql);
           if ($query) {
            $_SESSION['successMessage'] = "Update Successful";
            header('Location: ../portal/profile');
           }else{
            $_SESSION['errorMessage'] = "Something went wrong";
            header('Location: ../portal/profile');
           }
        }else{
            header('Location:../portal/profile');
        }
        $phone = $_POST['phone'];
        if (!empty($phone)) {
            $sql = "UPDATE users SET phone = '$phone' WHERE id = '$id'";
            $query = mysqli_query($connection,$sql);
            if ($query) {
             $_SESSION['successMessage'] = "Update Successful";
             header('Location: ../portal/profile');
            }else{
             $_SESSION['errorMessage'] = "Something went wrong";
             header('Location: ../portal/profile');
            }
        }else{
             header('Location:../../portal/profile');
        }

    }
    elseif (isset($_POST['changeImg'])) {
        $image = $_FILES['file'];

        $fileName = $image['name'];
        $fileTempName = $image['tmp_name'];
        $fileError = $image['error'];
        $fileSize = $image['size'];

        $allowedFiles = array('jpg','png','jpeg');

        $fileName = explode('.',$fileName);
        $fileName = end($fileName);
        $fileName = strtolower($fileName);

        if (in_array($fileName,$allowedFiles)) {
           if ($fileError < 1) {
               if ($fileSize < 1000000) {
                //   Create a location to where file will be stored
                $location = '../img/profile_pic/';
                $fileNewName = 'profile'.$id.'.'.$fileName;
                if (file_exists($location.$fileNewName)) {
                    unlink($location.$fileNewName);
                    // Move file to correct file location
                    $move = move_uploaded_file($fileTempName,$location.$fileNewName);
                    if ($move) {
                        $sql = "UPDATE users SET prof_pic ='$fileNewName' WHERE id = '$id'";
                        $query = mysqli_query($connection,$sql);
                        if ($query) {
                            $_SESSION['successMessage'] = "Picture Updated Successfully";
                             header('Location: ../portal/profile');
                        }else{
                            $_SESSION['errorMessage'] = "Something went wrong";
                            header('Location: ../portal/profile');
                        }
                    }else{
                        $_SESSION['errorMessage'] = "Something went wrong";
                        header('Location: ../portal/profile');
                    }
                    
                }else{
                    $move = move_uploaded_file($fileTempName,$location.$fileNewName);
                    if ($move) {
                        $sql = "UPDATE users SET prof_pic ='$fileNewName' WHERE id = '$id'";
                        $query = mysqli_query($connection,$sql);
                        if ($query) {
                            $_SESSION['successMessage'] = "Profile Picture Updated Successfully";
                            header('Location: ../portal/profile');
                        }else{
                            $_SESSION['errorMessage'] = "Something went wrong";
                             header('Location: ../portal/profile');
                        }
                    }else{
                        $_SESSION['errorMessage'] = "Something went wrong";
                        header('Location: ../portal/profile');
                    }
                }
               }else{
                $_SESSION['errorMessage'] = "File too large, maximum 1mb";
                header('Location: ../portal/profile');
            }  
           }else{
                $_SESSION['errorMessage'] = "File Error, Please Upload a new File";
                header('Location: ../portal/profile');
           }
        }else{
            $_SESSION['errorMessage'] = "Please uploade either a jpg, png or jpeg file";
            header('Location:   ../portal/profile');
        }
    }

    else{
        header('Location:../index');
    }