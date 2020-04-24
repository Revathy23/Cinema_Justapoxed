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
											<a class="nav-link" href="#home">Home</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="#cat">Categories</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="#picks">Top Picks</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="#actors">Top Actors</a>
										</li>
										
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="#req">Request</a>
										</li>
									</ul>
								</div>
							</nav>		
						</div>
					</div>
				</div>
			</div>
		<!-- Navbar End-->

<main>
	<br>
	<div class="container-fluid" style="margin-top: 60px;">
		<div class="carousel slide" id="main-carousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
				<li data-target="#main-carousel" data-slide-to="4"></li>
				<li data-target="#main-carousel" data-slide-to="5"></li>
				<li data-target="#main-carousel" data-slide-to="6"></li>
			</ol><!-- /.carousel-indicators -->
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block img-fluid" width="100%" style="height: 600px;" src="./img/bg1.jpg" alt="">

					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>

				<div class="carousel-item ">
					<img class="d-block img-fluid" width="100%" style="height: 600px;" src="./img/kamal.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">

						
					</div>
				</div>
				<div class="carousel-item ">
					<img class="d-block img-fluid" width="100%" style="height: 600px;" src="./img/mgr.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item ">
					<img class="d-block img-fluid" width="100%" style="height: 600px;" src="./img/ajith.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" width="100%" style="height: 600px;" src="./img/shivaji.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" width="100%" style="height: 600px;" src="./img/karthi.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<img src="./img/vijay.jpg" alt="" width="100%" style="height: 600px;" class="d-block img-fluid">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
			</div><!-- /.carousel-inner -->
			
			<a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				<span class="sr-only" aria-hidden="true">Prev</span>
			</a>
			<a href="#main-carousel" class="carousel-control-next" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="sr-only" aria-hidden="true">Next</span>
			</a>
		</div><!-- /.carousel -->
	</div><!-- /.container -->

</main>

<!--Slider End-->
<span id="cat"></span>
<br><br><br><br>
<div class="container">
	<h2 align="center" style=" font-family: 'Abril Fatface', cursive;">CATEGORIES</h2>
	<div class="row">

		<div class="col-md-6" align="center">

			  <div class="fx1">

            	<a href="tamil.php">
                <div class="item col4">
                    <img class="transition img-responsive" width="80%" src="./img/tamil2.jpg" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
                    <h3><b>தமிழ் திரைப்படங்கள்</b></h3>
                    <p></p>
                </div>
            </a>
      
			</div>		
		</div>
		<div class="col-md-6" align="center">
			
			  <div class="fx1">

            	<a href="english.php">
                <div class="item col4">
                    <img class="transition img-responsive" width="80%" src="./img/eng.jpg" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
                    <h3 ><b>English movies</b></h3>
                    <p></p>
                </div>
            </a>
      
			</div>

		</div>
	</div>
	
</div>
<!--Categories over-->
<!--Top Picks-->
<span id="picks"></span><br><br><br><br>
<!-- <div class="container">
	<div class="row">
		<div class="col-sm-4" align="center">
			<div class="card" >
			    <img class="card-img-top" src="./img/dhevar.jpg" alt="Card image" style="width:100%">
			    <div class="card-body">
			      <h4 class="card-title">Thevar Magan - 1992</h4>
			      <p class="card-text">London-educated Saktivelu returns to India and wants to open a chain of restaurants in Chennai. His father, however, wishes that he would stay back and help the villagers.</p>
			      <a href="#" class="btn btn-primary stretched-link">Buy now</a>
			    </div>
			  </div>
			</div>
			
		
		<div class="col-sm-4">
			<div class="card" >
			    <img class="card-img-top" src="./img/gilli.jfif" alt="Card image" style="width:100%">
			    <div class="card-body">
			      <h4 class="card-title">Thevar Magan - 1992</h4>
			      <p class="card-text">London-educated Saktivelu returns to India and wants to open a chain of restaurants in Chennai. His father, however, wishes that he would stay back and help the villagers.</p>
			      <a href="#" class="btn btn-primary stretched-link">Buy now</a>
			    </div>
			  </div>
			</div>
			
		</div>
		<div class="col-sm-4">
			
		</div>
		
	</div>

 -->
<div class="container-fluid jumbotron">
	<h2 align="center" style=" font-family: 'Abril Fatface', cursive;">TOP PICKS - This Week</h2>
<br>

	

 <div class="container ">
	 
   <div class="row">
      <div class="col-sm-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="card-img-right flex-auto d-lg-block" alt="Thumbnail [200x250]" src="./img/dhevar.jpg" style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
            <div class="card-body d-flex flex-column align-items-start" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
               <strong class="d-inline-block mb-2 text-primary">தேவர் மகன்</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">- Bharathan, KamalHaasan, Revathi</a>
               </h6>
               <div class="mb-1 text-muted small">1992</div>
               <p class="card-text mb-auto">London-educated Saktivelu returns to India. His father, however, wishes that he would stay back and help the villagers.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="./payment.php">Buy now</a>
            </div>
            
            	<div class="box">
				   <div class="ribbon"><span>₹ 10.00</span></div>
				</div>
		    </div>
      </div>
      <div class="col-sm-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="card-img-right flex-auto  d-lg-block" alt="Thumbnail [200x250]" src="./img/gilli1.jpg" style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
            <div class="card-body d-flex flex-column align-items-start" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
               <strong class="d-inline-block mb-2 text-primary">கில்லி</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">- Dharani, Vijay, Trisha</a>
               </h6>
               <div class="mb-1 text-muted small">2004</div>
               <p class="card-text mb-auto">Velu, an aspiring Kabaddi player, is in Madurai to participate in one of the matches when he rescues Dhanalakshmi from Muthupandi.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="./payment.php">Buy now</a>
            </div>
            
            	<div class="box">
				   <div class="ribbon" ><span style="background-color: #79A70A !important;">₹ 5.00</span></div>
				</div>
		    </div>
      </div>
   </div>

   <div class="row">
      <div class="col-sm-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="card-img-right flex-auto  d-lg-block" alt="Thumbnail [200x250]" src="./img/evp.jpg" style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
            <div class="card-body d-flex flex-column align-items-start" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
               <strong class="d-inline-block mb-2 text-primary">எங்க வீட்டு பிள்ளை</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">- Tapi Chanakya, MGR</a>
               </h6>
               <div class="mb-1 text-muted small">1965</div>
               <p class="card-text mb-auto">Ramu is an innocent son of a rich landlord who is afraid of his brother-in-law Narendran and his whiplash. To escape from his punishments, Ramu leaves his house and his look-alike replaces him.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="./payment.php">Buy now</a>
            </div>
            
            	<div class="box">
				   <div class="ribbon"><span><strong>Free</strong></span></div>
				</div>
		    </div>
      </div>
      <div class="col-sm-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="card-img-right flex-auto d-lg-block" alt="Thumbnail [200x250]" src="./img/iron.jpg" style="width: 200px; height: 300px; box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
            <div class="card-body d-flex flex-column align-items-start" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
               <strong class="d-inline-block mb-2 text-primary">Iron Man</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">- Jon Favreau, 	Robert Downey Jr.</a>
               </h6>
               <div class="mb-1 text-muted small">2008</div>
               <p class="card-text mb-auto">When Tony Stark, an industrialist, is captured, he constructs a high-tech armoured suit to escape. Once he manages to escape, he decides to use his suit to fight against evil forces to save the world.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="./payment.php">Buy now</a>
            </div>
            
            	<div class="box">
				   <div class="ribbon" ><span style="background-color: #79A70A !important;">₹ 10.00</span></div>
				</div>
		    </div>
      </div>
   </div>
</div>
</div>
<!--Top Picks End-->
<!--Top actors-->
<span id="actors"></span>
<br><br><br><br>
<h2 align="center" style=" font-family: 'Abril Fatface', cursive;">TOP ACTORS </h2><br>
<div class="container">

	<div class="row">
		<div class="col-md-3">

			<div class="card" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);" >
			    <img class="card-img-top" src="./img/rajini1.jpg" alt="Card image" style="width:100%; height: 300px;">
			    <div class="card-body">
			      <h4 class="card-title">Super Star Rajinikanth</h4>
			      <p class="card-text"></p>
			      <a href="./rajini.php" class="btn btn-success stretched-link">View Movies</a>
			    </div>
			  </div>
			
		</div>
		<div class="col-md-3">
			<div class="card" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
			    <img class="card-img-top" src="./img/kaml1.jpg" alt="Card image" style="width:100%; height: 300px;">
			    <div class="card-body">
			      <h4 class="card-title">Ulaga Nayagan Kamal Haasan</h4>
			      <p class="card-text"></p>
			      <a href="./kamal.php" class="btn btn-success stretched-link">View Movies</a>
			    </div>
			  </div>
			</div>
			
	
		<div class="col-md-3" >
			<div class="card" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
			    <img class="card-img-top" src="./img/ajith1.jpg" alt="Card image" style="width:100%; height: 300px;">
			    <div class="card-body">
			      <h4 class="card-title">Thala Ajith</h4><br>
			      <p class="card-text"></p>
			      <a href="./ajith.php" class="btn btn-success stretched-link">View Movies</a>
			    </div>
			  </div>
			</div>
		

		<div class="col-md-3">
			<div class="card" style="box-shadow: 0px 16px 16px 0px rgba(0, 0, 0, 0.6);">
			    <img class="card-img-top" src="./img/vijay1.jpg" alt="Card image" style="width:100%; height: 300px;">
			    <div class="card-body">
			      <h4 class="card-title">Ilaya Thalapathy Vijay</h4>
			      <p class="card-text"></p>
			      <a href="./vijay.php" class="btn btn-success stretched-link">View Movies</a>
			    </div>
			  </div>
			</div>
		</div>
		
	</div>
	
</div>
<!--Top actors End-->
<br><br><br>
<span id="req"></span>
<div class="container-fluid" style="background: -webkit-linear-gradient(left, #0072ff, #00c6ff);">
<div class="container contact-form" style="background: -webkit-linear-gradient(left, #0072ff, #00c6ff);">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="POST" action="query_store.php">
                <h3>Want to add new movies. Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="em" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="ph" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="ms" placeholder="Movie Name *" style="width: 100%; height: 150px;" />
                        </div>

                                                <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="Send Message" />
                        </div>


                    </div>
                </div>
            </form>
</div>
</div>
<!--Req end-->
<footer class="page-footer font-small blue" style="background-color: #e6e2e2;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#home"><strong>CineHunt</strong> </a>
  </div>
  <!-- Copyright -->

</footer>


</body>
</html>