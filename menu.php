<?php

    include "validateuser.php";
	  include "user.php";

	  $login_email = $_SESSION["loggedin_user"];
    $sql0 =  "SELECT * FROM users WHERE email='".$login_email."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $sql1 =  "SELECT * FROM menu";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $sum=0;

    $pos=strpos($login_email,"@");
    $username=substr($login_email, 0, $pos);


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Foodie Hood</title>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <!-- W3Schools -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- CSS -->
  <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet" />

  <!-- Google Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>


<style>

.video-background-holder {
  position: relative;
  background-color: white;
  height: calc(100vh - 72px);
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

.video-background-holder video {
  position: absolute;
  top: 50%;
  left: 50%;

  min-width: 100%;
  min-height: 100%;
  width: 100%;
  height: 870px;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

.video-background-content {
  position: relative;
  z-index: 2;
}

.video-background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;

  opacity: 0.5;
  z-index: 1;
}

.display-4 {
  font-weight: bold;
  color:		#ffa500;
}

.mb-0 {

  color:		#ff8c00;
}


@media screen and (min-width:1132px) {
  .video-background-holder video {
    top: 18%;
    left: 50%;

  min-width:100%;
  min-height: 100%;
  width: 1200px;
  height: 1200px;
}
}

@media screen and (max-width:1132px) {
  .video-background-holder video {
    top: 18%;
    left: 50%;

  min-width:100%;
  min-height: 100%;
  width: 1200px;
  height: 1200px;
}
}

@media screen and (min-width:1040px) {
  .display-4 {
    margin-top:18rem;
    font-size:3rem;

  }
}


@media screen and (max-width:1040px) {
  .display-4 {
    margin-top: 4.5rem;
    font-size:1.5rem;

  }
  .mb-0 {

    font-size:1rem;

  }
}
</style>
<style>
.callout {
  color:black;
  position: relative;
  top:30px;
  bottom: 25px;
  right: 30px;
  margin-left: 25px;
  max-width: 400px;
  max-height: 250px;
}

.callout-container {
  top:30px;
  bottom: 25px;
  right: 45px;
  margin-left: 15px;
  padding: 0px;
  color: black;
}

.closebtn {
  position: absolute;
  top: 10px;
  left:500px;
  right: 0px;
  color: black;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: grey;
}

.welcome {
  color: white;
  font-size: 1rem;
  padding:1rem;
  margin-left: auto;
}
@media (min-width:531px) {

  .welcome {
    order:0;
  }
  .navbar-toggler {
    order:1;
    margin-left:15px;
    margin-right:0;
  }

  .navbar > .collapse {
    margin-top:2rem;
  }

}
</style>


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="logout.php"><span class="foodie">FOODIE</span><span class="hood">HOOD</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">My cart</a>
        </li>
          <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    <span class="navbar-text welcome">
    Welcome, <?php echo $username; ?>!
    </span>
  </div>
</div>
</nav>

      <!-- Background video -->
  <div class="video-background-holder">
    <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="video.mp4" type="video/mp4">
      </video>
    <div class="video-background-content container">
      <div class=" text-center align-items-center">
        <div class="text-white">
          <h1 class="display-4">Half way to heaven</h1>
          <p class="lead mb-0">What can we get you?</p>


        </div>
      </div>
    </div>
  </div>
  <!-- End -->

  <div class="menurow2">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 20.5rem;">
            <img src="maggie5.jpg" class="card-img-top" style="width:20.5rem;height:20.5rem;" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title"><b>CHINESE FOOD</b></h5>
              <p class="card-text">Chinese food staples such as rice, soy sauce, noodles, tofu and so on. Color, smell, and taste are the three traditional aspects used to describe Chinese food. </p>
              <div class="col value">
                <button type="button" class="add btn btn" onclick="window.location.href='#chi'" data-field="">
                  View our menu
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 20.5rem;">
            <img src="pizza2.jpg" class="card-img-top" style="width:20.5rem;height:20.5rem;" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title"><b>PIZZA</b></h5>
              <p class="card-text">Pizza is an Italian dish flattened base of leavened wheat-based dough topped cheese, and  other ingredients.A slice on your plate is a smile on your face.</p>
              <div class="col value">
                <button type="button" class="add btn btn" onclick="window.location.href='#pi'" data-field="">
                  View our menu
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 20.5rem;">
            <img src="dessert5.jpg" class="card-img-top" style="width:20.5rem;height:20.5rem;" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title"><b>DESSERTS</b></h5>
              <p class="card-text"> Happiness is knowing that there’s cake on my plate.Follow me to the dessert table. </p>
              <div class="col value">
                <button type="button" class="addde btn btn" onclick="window.location.href='#de'" data-field="">
                  View our menu
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
     <div class="row">
       <div class="col-lg-7 menucol">
         <div class="menurow3">
           <div class="row menucatrow1" id="chi">
             <span class="menuheadchi" >CHINESE FOOD</span><br/>

             <?php
             $sql2 =  "SELECT * FROM menuinfo WHERE cat_id=1";
             $result2  = $conn->query($sql2);
             $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
               for ($i=1; $i <= count($arr_all); ) { ?>
                 	<?php for ($j=1; $j <= 3; $j++) { ?>
                     <?php if ($i+$j-2 == count($arr_all)) {
                       break;
                     }  ?>

               <span class="menucontent">
                 <form action="cartaction.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                 <div class="row menudetailsrow">
                     <div class="col-7" id="menufetch">
                       <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                       <span class="menuprice"> Rs.<?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                     </div>
                       <div class="col-3">
                         <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                       </div>
                       <div class="col-2">
                         <button type="submit" class="btn  menuaddchi">ADD</button>
                       </div>
                 </div>
                 </form>
               </span>

                   <?php } ?>
                 <?php $i = $i + 3; ?>
               <?php } ?>

           </div>

           <div class="row menucatrow2" id="pi">
             <span class="menuheadpi" >PIZZA</span><br />

             <?php
             $sql2 =  "SELECT * FROM menuinfo WHERE cat_id=2";
             $result2  = $conn->query($sql2);
             $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
               for ($i=1; $i <= count($arr_all); ) { ?>
                   <?php for ($j=1; $j <= 3; $j++) { ?>
                     <?php if ($i+$j-2 == count($arr_all)) {
                       break;
                     }  ?>

               <span class="menucontent">
                 <form action="cartaction.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                 <div class="row menudetailsrow">
                     <div class="col-7" id="menufetch">
                       <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                       <span class="menuprice">Rs.<?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                     </div>
                       <div class="col-3">
                         <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                       </div>
                       <div class="col-2">
                         <button type="submit" class="btn menuaddpi">ADD</button>
                       </div>
                 </div>
                 </form>
               </span>

                   <?php } ?>
                 <?php $i = $i + 3; ?>
               <?php } ?>

           </div>




         <div class="row menucatrow3" id="de">
           <span class="menuheadde">DESSERTS</span><br />

           <?php
           $sql2 =  "SELECT * FROM menuinfo WHERE cat_id=3";
           $result2  = $conn->query($sql2);
           $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
             for ($i=1; $i <= count($arr_all); ) { ?>
                 <?php for ($j=1; $j <= 3; $j++) { ?>
                   <?php if ($i+$j-2 == count($arr_all)) {
                     break;
                   }  ?>

             <span class="menucontent">
               <form action="cartaction.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
               <div class="row menudetailsrow">
                   <div class="col-7" id="menufetch">
                     <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                     <span class="menuprice">Rs.<?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                   </div>
                     <div class="col-3">
                       <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                     </div>
                     <div class="col-2">
                       <button type="submit" class="btn  menuaddde">ADD</button>
                     </div>

               </div>
               </form>
             </span>

                 <?php } ?>
               <?php $i = $i + 3; ?>
             <?php } ?>

         </div>

       </div>
     </div>

     <div class="callout">
   <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
   <div class="callout-container">
     <div class="col cartcol" id="mcart">
         <div class="menucart">
           <div class="menucarthead" style="margin-left:1.5rem;">
             <h1><b>Cart</b></h1>
           </div>

           <?php
           $sql3 =  "SELECT * FROM cart";
           $result3 = $conn->query($sql3);
           if ($result3->num_rows > 0)
           {
             $sum=0;
     				// output data of each row

     				while($row3 = $result3->fetch_assoc()) {

               $sum+=$row3["total_price"];

               ?>

               <div class="row menucartrow">

          				<div class="col-10">

                    <span class="menuna" style="color:black;"><b><?php echo $row3["food_name"]; ?></b> </span><br />
        					 <span class="menupri" style="color:black;"> Rs.<?php echo $row3["food_price"]; ?> </span>
                   <span class="menucaqty" style="color:black;"> &nbspx <?php echo $row3["food_quantity"]; ?> </span>
          				</div>
                  <div class="col-2" class="trash">

                    <a href="trash.php?id=<?php echo $row3["food_id"]; ?>"><i class="fas fa-trash-alt"></i></a>
                  </div>

                </div>

              <?php	} ?>

           <div class="row menucartfoot">
             <div class="col-5" style="margin-top:auto; margin-bottom:auto;">
               <span>
                 <h5><b>Rs. <?php echo $sum; ?></b></h5></span></div>
                   <div class="col-7 menucartcheckout">
                     <form action="cart.php#userdetails">
                       <button type="submit" class="btn menucheckout">CHECKOUT&nbsp<i class="fas fa-long-arrow-alt-right"></i></button>
                     </form>
                   </div>
     			<?php }

           else { ?>

               <h3 style="padding:2.5rem; padding-top:0; text-align:center;">Your cart is empty!</h3>

           <?php } ?>

           </div>
         </div>
       </div>
     </div>


   </div>
 </div>
</body>

</html>
