
<?php 
    session_start();

    date_default_timezone_set('America/Los_Angeles');

    include('php/db_connect.php');


    // $sql = "SELECT * from orderInfo where orderStatus = 'In-progress';";

    $sql = "SELECT i.*, concat(p.name,' ',p.lastname) as 'Customer' from orderInfo i join person p on i.personID = p.personID WHERE orderStatus = 'In-progress' and userGroupId = 4000;";
    
    $run = mysqli_query($conn, $sql);

    $sql2 = "SELECT i.*, concat(p.name,' ',p.lastname) as 'Customer' from orderInfo i join person p on i.personID = p.personID WHERE orderStatus = 'Complete' and userGroupId = 4000;";

    $run2 = mysqli_query($conn, $sql2);

    
 ?>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Home Page | CS 503 Final Project</title>
    <link rel="stylesheet" href="cart.css" type="text/css">
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

<h4 style="text-align:center;">Orders In-Progress</h4>
<table width=100% class="center">
<thead>
  <tr>
    <th>Order Number</th>
    <th>Customer</th>
    <th>Order Date</th>
    <th>Order Total</th>
    <th>Order Status</th>
    <th>Items</th>

  </tr>
</thead>


<tbody>
<?php 
    if (mysqli_num_rows($run) > 0) {
       while($row = mysqli_fetch_assoc($run)) {
          $sql_items = "SELECT m.item, i.quantity from orderItem i join menu m on i.menuID = m.menuID WHERE orderID = '{$row["orderID"]}';";
          $run_items = mysqli_query($conn, $sql_items);
          $item_string = '';
          while($row_item = mysqli_fetch_assoc($run_items)) {
            $item_string .= '<li>' . $row_item["item"] . ' - ' . $row_item["quantity"] . '</li>';
            }
           echo '<td>' .  $row["orderID"] .'</td>';
           echo '<td>' .  $row["Customer"] .'</td>';
           echo '<td>' .  $row["orderDate"] .'</td>';
           echo '<td>' .  $row["total"] .'</td>';
           echo '<td>' .  $row["orderStatus"] .'</td>';
           echo '<td><ul>' . $item_string . '</ul></td>';
           echo '</tr>';
       }
    }
?>
</tbody>
</table>
<form action="adminorders.php", method="POST">
  <label for="update">Order Number to complete:</label>
  <input type="text" name="order" value="">
  <input type="submit" name=submit value="Submit">
</form>


<h4 style="text-align: center;">Completed Orders </h4>
<style>
  table,
  tr,
  td,
  th{
    padding: 10px;
    border: 1px solid #818181;
    border-collapse: collapse;
    text-align: left;
    font-size: 12px;

  }
</style>
<table width=100% class="center">
<thead>
  <tr>
    <th>Order Number</th>
    <th>Customer</th>
    <th>Order Date</th>
    <th>Order Total</th>
    <th>Order Status</th>
  </tr>
</thead>
<tbody>
<?php 
    if (mysqli_num_rows($run2) > 0) {
       while($row = mysqli_fetch_assoc($run2)) {
          $sql_items = "SELECT m.item, i.quantity from orderItem i join menu m on i.menuID = m.menuID WHERE orderID = '{$row["orderID"]}';";
          $run_items = mysqli_query($conn, $sql_items);
          $item_string = '';
          while($row_item = mysqli_fetch_assoc($run_items)) {
            $item_string .= '<li>' . $row_item["item"] . ' - ' . $row_item["quantity"] . '</li>';
            }
           echo '<td>' .  $row["orderID"] .'</td>';
           echo '<td>' .  $row["Customer"] .'</td>';
           echo '<td>' .  $row["orderDate"] .'</td>';
           echo '<td>' .  $row["total"] .'</td>';
           echo '<td>' .  $row["orderStatus"] .'</td>';
           echo '<td><ul>' . $item_string . '</ul></td>';
           echo '</tr>';
       }
    }
?>
</tbody>
</table>

<?php

  if (isset($_POST['submit'])) {

      $order_number = (int) $_POST['order'];


      $sql_update_status = "UPDATE `orderInfo` SET `orderStatus` = 'Complete' WHERE `orderInfo`.`orderID` = '{$order_number}';";


      $run = mysqli_query($conn, $sql_update_status);


      if ($run == true) {
            ?>
            <script>
                window.open('adminorders.php','_self')

            </script>

        <?php
        }

        else
        {

          ?>
            <script>
                alert("Please enter a valid orderID");
                window.open('adminorders.php','_self')
            </script>

          <?php


        }

  }




?>




</html>




