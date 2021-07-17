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
@media screen and (max-width:800px) {
  .cont {
    font-size:1rem;
    padding:1.2rem;
    line-height:1.1;
  }
  .column img {
    width:100%;
    height: auto;
    position:relative;
  }
}
@media screen and (max-width:1017px) {
  .cont {
    font-size:1rem;
    line-height: 1.4;
    padding:1.4rem;
  }
}
</style>
<style>
.modal-login {
	width: 350px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;
	position: relative;
	justify-content: center;
}
.modal-login .close {
	position: absolute;
	top: -10px;
	right: -10px;
}
.modal-title {
	color: 	#32CD32;
	text-align: center;
	font-size: 26px;
	margin-top: 0;
}
.modal-login .modal-content {
	color: #708090;
	border-radius: 1px;
	margin-bottom: 15px;
	background: #fff;
	border: 1px solid #f3f3f3;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 25px;
}
.modal-login{
margin-bottom: 20px;
}
 .form-group {
   color:#32CD32;
	margin-bottom: 20px;
}
.modal-login label {
	font-weight: normal;
	font-size: 13px;
}
.modal-login .sform {
	min-height: 38px;
	padding-left: 5px;
	box-shadow: none !important;
	border-width: 0 0 1px 0;
	border-radius: 0;
}
.modal-login .form-control:focus {
	border-color: #ccc;
}
.modal-login .input-group-addon {
	max-width: 42px;
	text-align: center;
	background: none;
	border-bottom: 1px solid #e0e0e0;
	padding-right: 5px;
	border-radius: 0;
}
.modal-login .btn-lg, .modal-login .btn-lg:active {
	font-size: 16px;
	font-weight: bold;
	background: #32CD32; !important
	border-radius: 3px;
	border: none;
	min-width: 140px;
}
.modal-login .btn-lg:hover, .modal-login .btn-lg:focus {
	background: 	#32CD32; !important
}
.modal-login .hint-text {
	text-align: center;
	padding-top: 5px;
	font-size: 13px;
}
.modal-login .modal-footer {
	color: #999;
	border-color: #32CD32;
	text-align: center;
	margin: 0 -25px -25px;
	font-size: 13px;
	justify-content: center;
}
.modal-login a {
	color: #fff;
	text-decoration: underline;
}
.modal-login a:hover {
	text-decoration: none;
}
.modal-login a {
	color: 	#dda0dd;
	text-decoration: none;
}
.modal-login a:hover {
	text-decoration: underline;
}
.modal-login .fa {
	font-size: 21px;
	position: relative;
	top: 6px;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
.modalRegisterForm .fa-check {
	color: #fff;
	left: 9px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}

.page-footer {
   margin-left:15rem;
   text-align: center;
}

.copyw {
background-color:#d2b48c
}
</style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
         <a class="navbar-brand" href="logout.php"><span class="foodie">FOODIE</span><span class="hood">HOOD</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php" data-toggle="modal" data-target="#modalLRForm">Login</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="registerpage.php" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
                 </li>

            </ul>
          </div>
        </div>

      </nav>
<!--Carousel Wrapper-->
<div class="homerow1">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img src="pizza1.jpg" class="img-fluid" alt="First slide" width="500%" />
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <div class="indexhead">
        <span class="indexinfo1 w3-animate-opacity">Rain or shine, its time to dine!</span><br /><br />
          <span class="indexinfo2 w3-animate-opacity">Enjoy your experience</span><br /><br />
      </div>
    </div>
</div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="fr2.jpg" class="img-fluid" alt="Second slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="dumplings1.jpg" class="img-fluid" alt="Third slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="cake2.jpg" class="img-fluid" alt="Fourth slide" width="500%" />
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


      </div>
    </div>
    <div class="row iconr2 " id="features">
      <div class="col iconc2">
        <i class="fas fa-pizza-slice fa-6x"></i><br /><br />
        <h3 class="des">Variety of flavors</h3>
      </div>
      <div class="col iconc2">
        <i class="fas fa-concierge-bell fa-6x"></i><br /><br />
        <h3 class="des">Appetizing Food</h3>
      </div>
      <div class="col iconc2">
        <i class="fas fa-truck fa-6x"></i><br /><br />
        <h3 class="des">Fast delivery</h3>
      </div>
    </div>

    <div class="aboutrow" id="about">
   <div class="column picture">
     <img src="about1.jpg" class="restaurantpic" alt="restaurant" />
   </div>
   <div class="column cont">
     <h1 class="abouthead">Our story</h1>
    Foodie Hood was created in 2015 out of passion for delicious food with good quality and great service to our customers.We take great pleasure in improvising upon your favourite dishes in more creative ways. Here, we just don't make food, deliver it fast with a smile and make people happy. 
   </div>
 </div>


       <!--Section: contact-->
 <section id="contact" class="py-5" style="background-color:	#d2b48c;">

     <div class="container">

         <!-- Section heading -->
         <h1 class="h1-responsive font-weight-bold text-center mb-5 contacttitle" style="font-size:2.5rem;" style="color:	#8b4513;">How to reach us</h1>

         <!-- Grid row -->
         <div class="row contact">

             <!-- Grid column -->
             <div class="col-md-9 mb-md-0 mb-5">

              <form action="mailto:foodie_hood@gmail.com" method="post" enctype="text/plain">

                 <!-- Grid row -->
                 <div class="row contact">

                 <!-- Grid column -->
                 <div class="col-md-6">
                     <div class="md-form mb-0">
                        <label for="contact-name" class="name">Your name</label>
                     <input type="text" id="contact-name" class="form-control">

                     </div>
                 </div>
                 <!-- Grid column -->

                 <!-- Grid column -->
                 <div class="col-md-6">
                     <div class="md-form mb-0">
                          <label for="contact-email" class="email">Your email</label><br>
                     <input type="mail" id="contact-email" class="form-control">

                     </div>
                 </div>
                 <!-- Grid column -->

                 </div>
                 <!-- Grid row -->


                 <div class="row">

                 <!-- Grid column -->
                 <div class="col-md-12">
                     <div class="md-form">
                       <label for="contact-message" class="message">Your message</label>
                     <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>

                     </div>
                 </div>
                 <!-- Grid column -->

                 </div>
                 <!-- Grid row -->



             <div class="text-center text-md-center">
                  <button type="submit" class="btn btn-outline-light submit-1 w3-animate-opacity " value="Submit">Submit</button>
             </div>
   </form>
             </div>
             <!-- Grid column -->

             <!-- Grid column -->
             <div class="col-lg-3 text-center" >
             <ul class="list-unstyled mb-0 reach">
                 <li>
                 <i class="fas fa-map-marker-alt fa-2x"></i>
                 <p>#468, 8th cross , Jayanagar east, Bangalore-560078</p>
                 </li>
                 <li>
                 <i class="fas fa-phone fa-2x mt-4 "></i>
                 <p>9856432106</p>
                 </li>
                 <li>
                 <i class="fas fa-envelope fa-2x mt-4 "></i>
                 <p class="mb-0">foodie_hood@gmail.com</p>
                 </li>
             </ul>
             </div>
             <!-- Grid column -->

         </div>
         <!-- Grid row -->

     </div>
 
 </section>
 <!--Section: contact-->

 <!-- Footer -->
    <div class="col copyw" style="background-color:#d2b48c;">
<footer class="page-footer font-small">

  <!-- Copyright -->
  <div class="footer-copyright text-center" style="color:#636363;" style="font-size:1.4rem;">© 2021 Copyright:
    FoodieHood
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>

 <!-- Modal HTML -->
    <div id="modalLRForm" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control form-control-sm validate sform" name="login_email" placeholder="Your email" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control form-control-sm validate sform" name="login_pwd" placeholder="Your password" required="required">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>


    <div class="text-center">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#modalRegisterForm" class="trigger-btn" data-toggle="modal"></a>
    </div>

    <!-- Modal HTML -->
    <div id="modalRegisterForm" class="modal fade">
    <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hi,register here!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="register.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control form-control-sm validate sform" name="register_email" placeholder="Your email" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control form-control-sm validate sform" name="register_pwd" placeholder="Your password" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-lock"></i>

              </span>
              <input type="password" class="form-control form-control-sm validate sform" name="register_repwd" placeholder=" Confirm Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
          </div>
        </form>
      </div>
    </div>
    </div>
    </div>
    </body>
    </html>





<?php
    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['diffPwd'])) {
      $message = "Passwords do not match, try again!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['usedEmail'])) {
      $message = "Email is already used, try again!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['regex'])) {
      $message = "Enter email and password in proper format.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

?>
