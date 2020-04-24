<?php

   $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cinema";


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) 
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  else
 {


?>

<!DOCTYPE html>
<html>
<head>
	<title>CineHunt</title>
	<link rel="icon" href="./img/logo.jpg">


	<!--Bootstrap 4 Headers-->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- Bootstrap 4 Headers End-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/navbar.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet">

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Rozha+One');
@import url('https://fonts.googleapis.com/css?family=Raleway|Rozha+One');


.transition {-webkit-transition: all .5s ease; -moz-transition: all .5s ease; -o-transition: all .5s ease;  transition: all .5s ease;}
body .container {width: 70%; margin: 0 auto;}
.fx1 .item, .fx2 .item, .fx3 .item, .fx4 .item, .fx5 .item {margin: 10px 0;}

/* active on focus for accessibility tab navigation */

.fx1 .item {padding: 0;}
.fx1 .item img {padding: 0 !important; display: block; max-width: 100%; height: auto;}
.fx1 a:hover .item img, .fx1 a:focus .item img {opacity: 0.5;}
.fx1 h3, .fx1 p {-webkit-transition: all .5s ease; -moz-transition: all .5s ease; -o-transition: all .5s ease;  transition: all .5s ease;} 
.fx1 a .item h3 {font-family: 'Raleway', sans-serif; font-size: 20px; position: absolute; color:#000; text-transform: uppercase; letter-spacing: 1px; position: absolute; top:42%; left:0; right:0; margin:0 auto; text-align: center; opacity: 0;}
.fx1 a:hover .item h3, .fx1 a:focus .item h3 {opacity: 1;}
.fx1 a .item p {font-family: 'Raleway', sans-serif; font-size: 8px; position: absolute; color:#fff; text-transform: uppercase; letter-spacing: 2px; position: absolute; top:52%; left:0; right:0; margin:0 auto; text-align: center; opacity: 0;}
.fx1 a:hover .item p, .fx1 a:focus .item p {opacity: 1;}

.social-card-header{
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 96px;
}
.social-card-header i {
    font-size: 32px;
    color:#FFF;
}
.bg-facebook {
    background-color:#3b5998;
}
.text-facebook {
    color:#3b5998;
}
.bg-google-plus{
    background-color:#dd4b39;
}
.text-google-plus {
    color:#dd4b39;
}
.bg-twitter {
    background-color:#1da1f2;
}
.text-twitter {
    color:#1da1f2;
}
.bg-pinterest {
    background-color:#bd081c;
}
.text-pinterest {
    color:#bd081c;
}
.share:hover {
        text-decoration: none;
    opacity: 0.8;
}

.ribbon {
  position: absolute;
  right: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  width: 100px;
  display: block;
  background: #79A70A;
  background: linear-gradient(#2989d8 0%, #1e5799 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px; right: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #1e5799;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #1e5799;
}
.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #1e5799;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #1e5799;
}



.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<!--navbar Start-->
		<span id="home"></span>
			<div class="navigation-wrap bg-light start-header start-style">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-expand-md navbar-light">
					
								<a class="navbar-brand" href="#home"><img class="nav_img" src="./images/logo.png" alt=""></a>	
								<h4  class="nav_name nav_heading"><span style="color: #049cde;font-size: 1.5em; font-family: 'Cinzel Decorative', cursive;"><strong>CINE</strong></span><span style="color:#049cde;font-size: 1.5em; font-family: 'Cinzel Decorative', cursive;">HUNT</span></h4>
								<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        							<span class="navbar-toggler-icon my-toggler"></span>
    							</button>
						
								<div class="collapse navbar-collapse nav_text" style="font-family: 'Oswald', sans-serif;"  id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto py-4 py-md-0">
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
											<a class="nav-link" href="index.php#home">Home</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="index.php#cat">Categories</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="index.php#picks">Top Picks</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="index.php#actors">Top Actors</a>
										</li>
										
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="index.php#req">Request</a>
										</li>
									</ul>
								</div>
							</nav>		
						</div>
					</div>
				</div>
			</div>
		<!-- Navbar End-->


    <div class="container" style="margin-top: 100px;">
      <h2 align="center" style=" font-family: 'Abril Fatface', cursive;">SPECIAL PICK ONLY FOR YOU</h2>
      <p align="center">Watch for Free</p>

      <br>
      <div class="row" >
        
        <?php
          $sql = "SELECT * FROM `english` ORDER BY RAND() LIMIT 1";
          $sth = mysqli_query($conn,$sql);

          while($result=mysqli_fetch_array($sth))
          {
            ?>
            <div class="col-sm-3">
              
            </div>
        <div class="col-sm-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <?php echo '<img style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);" class="card-img-right flex-auto  d-lg-block" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>' ?>
            <div class="card-body d-flex flex-column align-items-start" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
               <strong class="d-inline-block mb-2 text-primary"><?php echo $result['name']?></strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">- <?php echo $result['cast']?></a>
               </h6>
               <div class="mb-1 text-muted small"><?php echo $result['year']?></div>
               <p class="card-text mb-auto"><?php echo $result['content']?></p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="#">Watch Online</a>
            </div>
            <!-- <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="./img/dhevar.jpg" style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);"> -->
            
              <div class="box">
           <div class="ribbon"><span>₹ FREE</span></div>
        </div>
        </div>
      </div>

            <div class="col-sm-3">
              
            </div>
      <?php
        }
        
      ?>
      
      </div>
      
    </div>


    <div class="container" style="margin-top: 100px;">
      <h2 align="center" style=" font-family: 'Abril Fatface', cursive;">CHOOSE YOUR FAVOURITE</h2>
      <br>
      <div class="row" >
        
        <?php
          $sql = "SELECT * FROM `english` WHERE 1";
          $sth = mysqli_query($conn,$sql);

          while($result=mysqli_fetch_array($sth))
          {
            if(1)
            {
            ?>
        <div class="col-sm-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
          <?php echo '<img style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);" class="card-img-right flex-auto  d-lg-block" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>' ?>
            <div class="card-body d-flex flex-column align-items-start" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
               <strong class="d-inline-block mb-2 text-primary"><?php echo $result['name']?></strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">- <?php echo $result['cast']?></a>
               </h6>
               <div class="mb-1 text-muted small"><?php echo $result['year']?></div>
               <p class="card-text mb-auto"><?php echo $result['content']?></p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="./payment.php">Buy now</a>
            </div>
            <!-- <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="./img/dhevar.jpg" style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);"> -->
            
              <div class="box">
           <div class="ribbon"><span>₹ <?php echo $result['cost']?></span></div>
        </div>
        </div>
      </div>
      <?php
        }
        }
      ?>
      
      </div>
      
    </div>
</body></html>
<?php
}
?>

<footer class="page-footer font-small blue" style="background-color: #e6e2e2;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#home"><strong>CineHunt</strong> </a>
  </div>
  <!-- Copyright -->

</footer>