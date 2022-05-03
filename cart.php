
<?php 
    session_start();

    $cust = $_SESSION['custID'];
    
 ?>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Home Page | CS 503 Final Project</title>
    <link rel="stylesheet" href="cart.css">
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
</body>
<div style="text-align:right">
      <a href="myorders.php"> <input type="button" name="myorders" value="My Orders" class=""> </a>
</div>
<body>
  <form method="POST">
  <div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Cart
  </div>
 
  <!-- Burger -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="hamburger-shingle-japanese.png" width="100" height="100" alt="" />
    </div>
 
    <div class="description">
      <span> </span>
      <span>Burger</span>
      <span> </span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="+" />
      </button>
      <input type="text" name="burger" value="0">
      <button  id='element1' class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="-" />
      </button>
    </div>
 
    <div class="total-price">5.00</div>
  </div>

  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="https://assets.kraftfoods.com/recipe_images/opendeploy/116578_640x428.jpg" width="100" height="100" alt="" />
    </div>
 
    <div class="description">
      <span> </span>
      <span>Cheeseburger</span>
      <span> </span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="+" />
      </button>
      <input type="text" name="cheeseburger" value="0">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="-" />
      </button>
    </div>
 
    <div class="total-price">6.00</div>
  </div>

  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="100" height="100" alt="" />
    </div>
 
    <div class="description">
      <span> </span>
      <span>Double Cheeseburger</span>
      <span> </span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="+" />
      </button>
      <input type="text" name="double" value="0">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="-" />
      </button>
    </div>
 
    <div class="total-price">7.00</div>
  </div>


  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="https://hips.hearstapps.com/clv.h-cdn.co/assets/17/19/1494516296-recipes-old-bay-fries-0617.jpg?crop=1xw:0.99975xh;center,top&resize=980:*" width="100" height="100" alt="" />
    </div>
 
    <div class="description">
      <span> </span>
      <span>French Fries</span>
      <span> </span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="+" />
      </button>
      <input type="text" name="fries" value="0">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="-" />
      </button>
    </div>
 
    <div class="total-price">2.00</div>
  </div>

  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="https://www.evolvingtable.com/wp-content/uploads/2017/02/Baked-Parmesan-Garlic-Fries-2.jpg" width="100" height="100" alt="" />
    </div>
 
    <div class="description">
      <span> </span>
      <span>Garlic Parmesan Fries</span>
      <span> </span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="+" />
      </button>
      <input type="text" name="parmesan" value="0">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="-" />
      </button>
    </div>
 
    <div class="total-price">3.00</div>
  </div>


  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="https://www.queensleeappetit.com/wp-content/uploads/2020/10/classic-chocolate-milkshake-recipe-queensleeappetit.com_-1024x1536.jpg" width="100" height="100" alt="" />
    </div>
 
    <div class="description">
      <span> </span>
      <span>Chocolate Milkshake</span>
      <span> </span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="+" />
      </button>
      <input type="text" name="chocolate" value="0">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="-" />
      </button>
    </div>
 
    <div class="total-price">2.50</div>
  </div>


    <div style="text-align: center;">

      <input type="submit" name="submit" value="Order" class="">

       <!-- <button class="button1" name="order" type="button" onclick="alert('Ordered!')">Order!</button1>  -->

    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascriptcart.js"></script>
</body>


<?php
    
    date_default_timezone_set('America/Los_Angeles');

    if (isset($_POST['submit']))
      {

        
        include('php/db_connect.php');


        $cust = $_SESSION['custID'];
        $orderDate = date("Y-m-d H:i:s");

        # get total number of orders
        $burger = $_POST['burger'];
        $cheese = $_POST['cheeseburger'];
        $double = $_POST['double'];
        $fries = $_POST['fries'];
        $parm = $_POST['parmesan'];
        $choco = $_POST['chocolate'];
        $totalItems = $burger + $cheese + $double + $fries + $parm + $choco;

        # create order voucher
        $sql_orderinfo = "INSERT INTO `orderInfo` (`orderID`, `personID`,`orderDate`,`orderStatus`) 
        VALUES (NULL, '$cust', '$orderDate', 'In-progress');";


        $sql_orderID = "SELECT max(orderID), personID from orderInfo where personID = '{$cust}' group by personID;";

        if (!empty($conn)) 

        {
          # if total items greater than zero create order voucher
          if ($totalItems > 0) 
          {
            $run_conn = mysqli_query($conn, $sql_orderinfo);

            $run_orderinfo = mysqli_query($conn, $sql_orderID);

            $row_orderID = mysqli_fetch_row($run_orderinfo);
            $order_number = $row_orderID[0];

            printf("Order number %d",$order_number);

            # insert orders
            if ($burger > 0) {
              $sql_burger = "INSERT INTO `orderItem` (`menuID`, `orderID`,`quantity`) 
                VALUES (101, '$order_number', '$burger');";
              $run = mysqli_query($conn, $sql_burger);
            }

            if ($cheese > 0) {
              $sql_burger = "INSERT INTO `orderItem` (`menuID`, `orderID`,`quantity`) 
                VALUES (102, '$order_number', '$burger');";
              $run = mysqli_query($conn, $sql_burger);
            }


            if ($double > 0) {
              $sql_burger = "INSERT INTO `orderItem` (`menuID`, `orderID`,`quantity`) 
                VALUES (103, '$order_number', '$burger');";
              $run = mysqli_query($conn, $sql_burger);
            }

            if ($fries > 0) {
              $sql_burger = "INSERT INTO `orderItem` (`menuID`, `orderID`,`quantity`) 
                VALUES (104, '$order_number', '$burger');";
              $run = mysqli_query($conn, $sql_burger);
            }

            if ($parm > 0) {
              $sql_burger = "INSERT INTO `orderItem` (`menuID`, `orderID`,`quantity`) 
                VALUES (105, '$order_number', '$burger');";
              $run = mysqli_query($conn, $sql_burger);
            }

            if ($choco > 0) {
              $sql_burger = "INSERT INTO `orderItem` (`menuID`, `orderID`,`quantity`) 
                VALUES (106, '$order_number', '$burger');";
              $run = mysqli_query($conn, $sql_burger);
            }

            # add total to order     
            $sql_orderTotal = "SELECT SUM(m.price) FROM orderInfo info JOIN orderItem item on info.orderID = item.orderID JOIN menu m on item.menuID = m.menuID WHERE info.orderID = '{$order_number}';";  

            $run_total = mysqli_query($conn, $sql_orderTotal);
            $row_total = mysqli_fetch_row($run_total);
            $order_total = $row_total[0]; 

            $sql_update_total = "UPDATE `orderInfo` SET `total` = '{$order_total}' WHERE `orderInfo`.`orderID` = '{$order_number}';";

            $update_total = mysqli_query($conn, $sql_update_total);

          }
        }


        if ($update_total == true)
        {


            ?>
            <script>
                alert("Order Successful!");

                window.open('myorders.php','_self')
            </script>

        <?php

        }

        else

        {

          ?>
            <script>
                alert("Order Not Successful!");

                window.open('cart.php','_self')
            </script>

          <?php

        }

      }


  ?>



</html>