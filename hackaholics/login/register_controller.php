<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 10/28/2017
 * Time: 11:36 AM
 */
include "../database.php";
session_start();
$_SESSION['message'] = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
//two passwords are equal to each other
    if ($_POST['password'] == $_POST['cpassword']) {
        //print_r($_FILES);
        //assigning variables
        $fname = $mysqli->real_escape_string($_POST['fname']);
        $lname = $mysqli->real_escape_string($_POST['lname']);
        $address = $mysqli->real_escape_string($_POST['address']);
        $city = $mysqli->real_escape_string($_POST['city']);
        $state = $mysqli->real_escape_string($_POST['state']);
        $zip = $mysqli->real_escape_string($_POST['zip']);
        $num = $mysqli->real_escape_string($_POST['number']);
        $email = $mysqli->real_escape_string($_POST['email']);

        $password = md5($_POST['password']);


        //check whether the email already exists

        $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'") or die($mysqli->error());

        if($result->num_rows > 0){
            $_SESSION['message'] = 'User with this email already exists!';

        }
        else{ //proceeed


                    $sql = "INSERT INTO users (firstname,lastname,address,city,state,zip,telnumber,email,password)"
                        . "VALUES ('$fname','$lname','$address','$city','$state','$zip','$num','$email','$password')";

                    if ($mysqli->connect_errno) {
                        printf("connect failed:%s\n", $mysqli->connect_error);
                        exit();
                    }
                    else {
                        ////if the query is succesful, send a mail to the email
                        if ($mysqli->query($sql) == true) {
                            $_SESSION['message'] = "registration successful";
                            header('location:register.php');

                            }
                            else{
                                //$_SESSION['message']="there was an error";
                                $errorMessage = error_get_last()['message'];
                                $_SESSION['message'] = "user couldn't added to the database";
                                printf("Errormessage: %s\n", $mysqli->error);
                            }
                            //header('location:profile.php');
                        }

                    }
                }
                else{
                    $_SESSION['message'] = "two password didn't match";
                    header('location:../errors/error.php');
                }

}


?>


