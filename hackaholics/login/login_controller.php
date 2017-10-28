<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 10/28/2017
 * Time: 12:19 PM
 */
include '../database.php';
session_start();
//user login process, check if user exists and password is correct.
//escape username to protect against SQL injections.
if(isset($_POST['username']) && isset($_POST['password'])){

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $mysqli->escape_string($_POST['username']);
        $result = $mysqli->query("SELECT * FROM users WHERE email = '$username'");

        if($mysqli->connect_errno){
            printf("connect failed:%s\n",$mysqli->connect_error);
            exit();
        }
        else {
            if($result->num_rows == 0){ //user doesn't exist
                $_SESSION['message'] = "User with that username doesn't exist";
                header('location:login.php');
            }
            else{ //user exists
                $user = $result->fetch_assoc();

                $password = md5($_POST['password']);
                if($password == $user['password']){

                    $_SESSION['firstname'] = $user['firstname'];
                    $_SESSION['lastname'] = $user['lastname'];
                    $_SESSION['address'] = $user['address'];
                    $_SESSION['city'] = $user['city'];
                    $_SESSION['state'] = $user['state'];
                    $_SESSION['zip'] = $user['zip'];
                    $_SESSION['telnumber'] = $user['telnumber'];

                    //this is how we will know the user is logged in
                    $_SESSION['logged_in'] = true;
                    $_SESSION['message'] = 'you have logged in successfully';
                    header('location:login.php');
                }
                else{
                    $_SESSION['message'] = 'you have entered wrong password';





                }
            }


        }
    }
}
else{
    printf("connect failed:%s\n",$mysqli->error);
}
?>