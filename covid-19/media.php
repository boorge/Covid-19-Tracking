<!DOCTYPE html>
<html>
<head>
	<title>Media</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/js.php'; ?>

	<style type="text/css">

.footer-section{
	margin-left: -2.2%;
}

.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  margin-top: 5%;
  justify-content: space-around;
  flex-wrap: wrap;
}
.cad{
	margin-left: 38%;
	align-items: center;
	justify-content: center;
	padding-right: 30%;
	font-size: 50px;
	text-decoration:underline #d32843;
}
.card {
  margin: 30px auto;
  width: 400px;
  height: 200px;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}
.cardlist .card 1{
  margin-top: 20%;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}
.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


	</style>

</head>
<body>

<!--====== Header Section Start ======-->
	<header>
		<div class="logo">	
			<a href="index.php"><img src="img/logo.png"></a>	
		</div>
		<ul>
			<li><a href="index.php" class="active"><i class="fa fa-home"></i></a></li>
			<li><a href="ys.php">Your Satus</a></li>
			<li><a href="cu.php">COVID Updates</a></li>
			<li><a href="vcc.php">Vaccination</a></li>
			<li><a href="media.php">Media</a></li>
			<li><a href="cw.php">CoWIN</a></li>
		</ul>
	</header>
		
		

	<div class="container-fluid ab-sec pb-5 mb-5" id="about">
		<div class="section-header text-center mb-5 mt-5">
			<h1>TRENDING NOW</h1>
		</div>

			<div class="cards-list">
			  	
			 <a href="https://www.youtube.com/watch?v=wDdyn4Kbffs" target="_post">
			<div class="card 1">
			    <div class="card_image">
			  	<img src="img/m1.png" /></div>
			  <div class="card_title title-white">
			    <p style="color:#111;margin-top: 40%;">Donald Trump</p>
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=yZCBEZMmsTg" target="_post">
			<div class="card 2">
			  <div class="card_image"> <img src="img/m2.png" /> </div>
			  <div class="card_title title-white">
			    <p style="color: #111; margin-top: 40%;"> COrona Outbreks</p>
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=6i-7kRT29TM" target="_post">
			<div class="card 3">
			  <div class="card_image"> <img src="img/m3.png" /> </div>
			  <div class="card_title title-white">
			    <p style="color: #111;margin-top: 40%;">WHO HQ</p>
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=SzD6MvuMse4" target="_post">
			<div class="card 4">
			  <div class="card_image"> <img src="img/m4.png" /> </div>
			  <div class="card_title title-white">
			    <p style="color: #111;margin-top: 40%;">India Bettle Covid-19</p>
			  </div>
			</div></a>

		</div>
			


			<section>

	<div class="container-fluid ab-sec pb-5 mb-5 pt-5" id="about">
		<div class="section-header text-center mb-5 mt-5">
			<h1>TRENDING NOW</h1>
		</div>

			<div class="cards-list">
			  	
			 <a href="https://www.youtube.com/watch?v=EdnA6Ngo1EE" target="_post">
			<div class="card 1">
			    <div class="card_image">
			  	<img src="img/t1.png" /></div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=oU7bYfNQ2tM" target="_post">
			<div class="card 2">
			  <div class="card_image"> <img src="img/t2.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=phc1UAQQ81s" target="_post">
			<div class="card 3">
			  <div class="card_image"> <img src="img/t3.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=QNo5ZDvKuHg" target="_post">
			<div class="card 4">
			  <div class="card_image"> <img src="img/t4.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>

		</div>
			</section>

<hr>

			<section>

	<div class="container-fluid ab-sec pb-5 mb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>ADVICE FROM DOCTOR</h1>
		</div>

			<div class="cards-list">
			  	
			 <a href="https://www.youtube.com/watch?v=hHs15riB8Aw" target="_post">
			<div class="card 1">
			    <div class="card_image">
			  	<img src="img/d1.png" /></div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=mLV-cagYego" target="_post">
			<div class="card 2">
			  <div class="card_image"> <img src="img/d2.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=E8-UoeWewFI" target="_post">
			<div class="card 3">
			  <div class="card_image"> <img src="img/d3.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=FzjY6OXmuO8	" target="_post">
			<div class="card 4">
			  <div class="card_image"> <img src="img/d4.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>

		</div>
			</section>
<hr>


	<div class="container-fluid ab-sec pb-5 mb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>HOW TO BOOST IMMUNITY </h1>
		</div>

			<div class="cards-list">
			  	
			 <a href="https://www.youtube.com/watch?v=yQrY2v5B4gw" target="_post">
			<div class="card 1">
			    <div class="card_image">
			  	<img src="img/i1.png" /></div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=vN30emwcNS4" target="_post">
			<div class="card 2">
			  <div class="card_image"> <img src="img/i2.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=cQ1bWxjCl4o" target="_post">
			<div class="card 3">
			  <div class="card_image"> <img src="img/i3.png" />  </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=2-JmbQ9Dlco" target="_post">
			<div class="card 4">
			  <div class="card_image"> <img src="img/i4.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>

		</div>
			</section>
<hr>


		<section>

	<div class="container-fluid ab-sec pb-5 mb-5 pt-5" id="about">
		<div class="section-header text-center mb-5 mt-5">
			<h1>VACCINATION INFO</h1>
		</div>

			<div class="cards-list">
			  	
			 <a href="https://www.youtube.com/watch?v=UPkVbZ9X_jQ" target="_post">
			<div class="card 1">
			    <div class="card_image">
			  	<img src="img/v1.png" /></div>
			  <div class="card_title title-white">
			    
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=YungjMIZMT4" target="_post">
			<div class="card 2">
			  <div class="card_image"> <img src="img/v2.png" /> </div>
			  <div class="card_title title-white">
			  
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=wLLCpn2xaq8" target="_post">
			<div class="card 3">
			  <div class="card_image"> <img src="img/v3.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=jqkzA0Wy1T4" target="_post">
			<div class="card 4">
			  <div class="card_image"> <img src="img/v4.png" /> </div>
			  <div class="card_title title-white">
			  </div>
			</div></a>

		</div>
			</section>

<hr>


		<section>

	<div class="container-fluid ab-sec pb-5 mb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>CORONA SOLDIERS</h1>
		</div>

			<div class="cards-list">
			  	
			 <a href="https://www.youtube.com/watch?v=BkZI-IzwPnY" target="_post">
			<div class="card 1">
			    <div class="card_image">
			  	<img src="img/s1.png" /></div>
			  <div class="card_title title-white">
			 
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=wjQkjgV-69U" target="_post">
			<div class="card 2">
			  <div class="card_image"> <img src="img/s2.png" /> </div>
			  <div class="card_title title-white">
		
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=ENJIwat8S1U" target="_post">
			<div class="card 3">
			  <div class="card_image"> <img src="img/s3.png" /> </div>
			  <div class="card_title title-white">
			 
			  </div>
			</div></a>
			<a href="https://www.youtube.com/watch?v=JVFLZvt-B4Y" target="_post">
			<div class="card 4">
			  <div class="card_image"> <img src="img/s4.png" /> </div>
			  <div class="card_title title-white">
			
			  </div>
			</div></a>

		</div>
			</section>


			
<!-- 	*******************************footer***************************************    -->
<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-map-marker"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 thane, sw 421201, Maharastra</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span> +91 8828684328</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="img/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>The virus that cause <span>COVID-19</span> spreads primarily through droplets generated when an infected person coughs, sneezes or speaks. You can also become infected by touching a contaminated surface and then touching your eyes, nose or mouth before washing your hands.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fa fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="index.php">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="media.php">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fa fa-telegram"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2018, All Right Reserved <a href="https://github.com/borgekiran/">Borgekiran</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


	     <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>


</body>
</html>