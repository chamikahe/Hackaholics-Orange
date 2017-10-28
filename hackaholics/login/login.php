<?php
session_start();
$_SESSION['message']='';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>header</title>
    <!--custom style sheets-->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--style sheets-->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">



</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
</div>

<div class="container">
    <div class="topnav" id="topNav">
        <a href="#" onclick="openNav()"><i class="material-icons">account_circle</i></a>
        <a href="#"></a>
        <a href="../dashboard.php"><i class="material-icons" id="dashboard-icon">home</i></a>
        <a href="../types.html">Types sexual harrasements</a>
        <a href="../prevention.html">Prevention</a>
        <a href="../situation.html">How to face a situation</a>
        <a href="../contact.html">Contact phsycologist</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

    </div>

    <script src="../js/header.js"></script>
</div>
<div class="container" style="margin-top:30px">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
            <div class="panel-body">
                <form role="form"action="login_controller.php" autocomplete="on" method="post">
                    <div class="alert alert-dismissable"><?= $_SESSION['message']?></div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password <a href="forgot_password">(forgot password)</a></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-sm btn-default">Sign in</button>
                </form>
            </div>
        </div>
    </div>

<?php include "../footer.php"?>