
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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
			<body>
			<div style="float: right;" class="mt-3 mr-3">
				<form action="adminlogin.php" method="post">
				<a href=""><button class="btn btn-primary">ADMIN</button></a>
				</form>
			</div>
					<div class="wrap">
						<h2>Log In</h2>
						<form action="" method="post">
							<input class="" type="email" name="uname" placeholder="Email" value="" required>
			
							<input class="" type="password" name="pass" placeholder="Password" value="" required>

							<input type="submit" name="login" value="Login" class="">

							<h6 class="pt-3">Don't have an Acccount? <a href="registration.php">Sign Up</a></h6>
				</form>
			</div>

		</div>
	</body>


	<?php

    session_start();

      	if (isset($_POST['login']))
  

		{
        include('php/db_connect.php');


        $email = $_POST['uname'];
    	$password = $_POST['pass'];

 		
        $sql = "SELECT personID from person where email = '{$email}' and password = '{$password}'";

        
        if (!empty($conn)) {

    		$run = mysqli_query($conn, $sql);
            $row_cnt = mysqli_num_rows($run);
            $row = mysqli_fetch_row($run);
            $custID = $row[0];
            $_SESSION['custID'] = $row[0];

        }


        if ($row_cnt > 0) {

        	?>
            <script>
                alert("Login Successful!");
            	window.open('cart.php','_self');
            </script>


    		<?php

        } else {

        	?>

        	<script>

            alert("Please enter valid credentials!");
        	window.open('login.php','_self');

        	</script>


        	<?php


        }


    }

	?>

</html>


