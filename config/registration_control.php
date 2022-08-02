<?php
    require_once '../includes/sessions.php';
    require_once 'db-connect.php';

    if (!isset($_POST['register'])) {
        $_SESSION['errormessage'] = "Please Log in or create an Account";
        header('Location: ../register');
    }
    else{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $role = 'user';
        $date = date('Y-m-d');

        $sql = "SELECT email FROM users WHERE email = '$email'";
        $query = mysqli_query($connection,$sql);
        if (mysqli_num_rows($query) > 1) {
            $_SESSION['errorMessage'] = "This email already exists";
            // header('Location: ../register');
        }
        // Check the password length
        elseif(strlen($password) < 8){
            $_SESSION['errorMessage'] = "Password must be greater than 8 characters ";
            header('Location: ../register');
        }
        // Confirm passsword
        elseif($password != $cpassword){
            $_SESSION['errorMessage'] = "Passwords do not match in confirm password";
            header('Location: ../register');
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(fname,lname,phone,gender,email,user_password,user_role,date_created) VALUES(?,?,?,?,?,?,?,?)";
            // Initialise Connection 
            $stmt = mysqli_stmt_init($connection);
            // Prepare Statement
            mysqli_stmt_prepare($stmt,$sql);
            // Bind Parameters
            var_dump($stmt);
            mysqli_stmt_bind_param($stmt,'ssssssss',$fname,$lname,$phone,$gender,$email,$password,$role,$date);
            // Execute Statement
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['successMessage'] = "Registration Successfull!";
                header('Location: ../register');
            }else{
                $_SESSION['errorMessage'] = "Something went wrong";
                // header('Location: ../register');
            }
        }
        
    }