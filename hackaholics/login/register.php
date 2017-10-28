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

<div class="container">
    <h1 class="well">Registration Form</h1>
    <div class="col-lg-12 well">
        <div class="row">

            <form action="register_controller.php" autocomplete="on" method="post">
                <div class="alert alert-dismissable"><?= $_SESSION['message']?></div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name Here.." class="form-control" name="fname" required="required">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name Here.." class="form-control" name="lname" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address" required="required"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>City</label>
                            <input type="text" placeholder="Enter City Name Here.." class="form-control" name="city" required="required">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>State</label>
                            <input type="text" placeholder="Enter State Name Here.." class="form-control" name="state" required="required">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Zip</label>
                            <input type="text" placeholder="Enter Zip Code Here.." class="form-control" name="zip" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="number" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address Here.." class="form-control" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password Here.." class="form-control" name="password" required="required">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" placeholder="Confirm Password Here.." class="form-control" name="cpassword" required="required">
                    </div>

                    <button type="submit" class="btn btn-lg btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "../footer.php"?>