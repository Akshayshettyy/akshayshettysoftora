<?php
if(isset($_POST["quantity"])){
  $food_quantity = $_POST['quantity'];
  $_SESSION["food_quantity"]=$food_quantity;

  }

  header("location:./menu.php");

?>
