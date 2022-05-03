<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Home Page | CS 503 Final Project</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div id="wrapper">
    <header>
        <h1>Burger Paradise</h1>
    </header>
    <nav>
        <ul class="main_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="ordernow.html">Menu</a></li>
            <li><a href="login.php">Order Now</a></li>
            <li><a href="registration.php">Registration</a></li>
    </nav>
		
    <div class="wrap">
        <h2>Registration</h2>
        <form action="registration.php" method="POST">
            <input class="" type="text" name="name" value="" placeholder="First Name" required>

            <input class="" type="text" name="lastname" value="" placeholder="Last Name" required>

            <input class="" type="number" name="mobile" value="" placeholder="Mobile Number" required>

            <input class="" type="email" name="email" value="" placeholder="Email" required>

            <input class="" type="password" name="pwd" value="" placeholder="Password" required>

            <input class="" type="password" name="cpwd" value="" placeholder="Confirm Password" required>

            <input type="submit" name="submit" value="Register" class="">

            <h6 class="pt-3">Have an Acccount? <a href="login.php">Login</a></h6>
        </form>
    </div>
</div>



<?php

    session_start();

    if (isset($_POST['submit']))

    {
        include('php/db_connect.php');

        $email = $_POST['email'];
        $name = $_POST['name'];
        $last_name = $_POST['lastname'];
        $mobile = $_POST['mobile'];
        $password = $_POST['pwd'];
        $password_copy = $_POST['cpwd'];



        if (strlen($password) < 8) {
            ?>
            <script type="text/javascript">
                alert("Password needs to be more than 8 characters!");
            </script>
            <?php
            die();

        }

        elseif ($password !== $password_copy) {
            die('Passwords do not match');

        } else {

            $sql = "INSERT INTO `person` (`personID`, `name`,`lastname`,`email`,`password`,`phone`,`userGroupID`)

            VALUES (NULL, '$name', '$last_name', '$email', '$password', '$mobile', 4000);";



        }

        if (!empty($conn)) {

            $run = mysqli_query($conn, $sql);


            $sql_custID = "SELECT personID from person where email = '{$email}' and password = '{$password}'";

            $run_custID = mysqli_query($conn, $sql_custID);
            $row = mysqli_fetch_row($run_custID);
            $custID = $row[0];
            $_SESSION['custID'] = $row[0];



        }


        if ($run == true)
        {


            ?>
            <script>
                alert("User Registration Successfully !");

                window.open('cart.php','_self')
            </script>

        <?php
        }
        else
        {
        echo "ERROR: $sql. " . mysqli_error($conn);
        }

        }

?>

</body>
