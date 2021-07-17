<?php

include "connect.php";
include "validateuser.php";
include "user.php";


$food_quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);

$login_email = $_SESSION["loggedin_user"];
$sql0 =  "SELECT * FROM users WHERE email='".$login_email."'";
$result0 = $conn->query($sql0);
$row0 = $result0->fetch_assoc();

$_SESSION["usid"]=$row0["id"];
$food_id = $_REQUEST['id'];

$sql1 =  "SELECT * FROM menuinfo WHERE id='".$food_id."'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

$sql2 =  "SELECT * FROM cart";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

$food_name=$row1["fname"];
$food_price=$row1["price"];
$user_id=$_SESSION["usid"];
$total_price=$food_price*$food_quantity;


 //echo "qty".$food_quantity;
 //echo "id".$food_id;
//echo "name".$food_name;
 //echo "price".$food_price;
 //echo "usid".$user_id;

$sql3 =  "INSERT INTO cart VALUES ('$food_id', '$food_name', $food_quantity, '$food_price', '$user_id' , '$total_price')";

if (($conn->query($sql3) === TRUE))
{
          $err_no = 0;
          die(header("location:./menu.php#mcart"));
}

else
{
    $sql4 = "UPDATE cart SET food_quantity = food_quantity + '".$food_quantity."' where food_id = '".$food_id."'";
    if (($conn->query($sql4) === TRUE))
    {
              $err_no = 0;
              die(header("location:./menu.php#mcart"));
    }

}

?>
