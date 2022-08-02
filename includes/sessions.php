<?php 
    session_start();

    function errorMessage(){
        if(isset($_SESSION['errorMessage'])){
            $message = "<div class=\"alert alert-danger fw-bold text-center alert-dismissible fade show\" role=\"alert\">";
            $message .= htmlentities($_SESSION['errorMessage']);
            $message .= "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>";
            $message .= "</div>";
            $_SESSION['errorMessage'] = null;
            return $message;
        }
    }

    function successMessage(){
        if(isset($_SESSION['successMessage'])){
            $message = "<div class=\"alert alert-success fw-bold text-center alert-dismissible fade show\" role=\"alert\">";
            $message .= htmlentities($_SESSION['successMessage']);
            $message .= "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>";
            $message .= "</div>";
            $_SESSION['successMessage'] = null;
            return $message;
        }
    }

    function auth(){
        if (!isset($_SESSION['id'])) {
            header('Location:../login');
        }
    }

    function adminAuth(){
        if ($_SESSION['role'] !== 'admin') {
            header('Location: dashboard');
        }
    }