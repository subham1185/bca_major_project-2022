<?php
    // authorizatiom
    // check if the user is logged in or not
    if(!isset($_SESSION['user']))// if user session is not set 
    {
        //user is not logged in
        //redirect to login page with message
        $_SESSION['no-login-message']="<div class ='error text-center'> please login to acces admin panel</div>";
        // redirecting
        header("location:".SITEURL.'admin/login.php');
    }

?>