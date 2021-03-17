<!DOCTYPE html>
<html>
<head>
	<title>Cowin</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/js.php'; ?>

	<style type="text/css">
        @import url('http://getbootstrap.com/dist/css/bootstrap.css');

       .footer-section{
            margin-top: 10%;
            margin-left: -9%;
        }
        #ban img{
            margin-top: 50px;
        }
        h1{
            font-size: 30px;
        }
        p{
            color: grey;
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

  <section id="ban">
    <img src="img/cowinm.png">
  </section>

  <div class="container">
    <div class="row">
        <div class="col-md-12 pt-5 cw">
            <img style='float:left;width:400px; height: 280px;' src="img/cowin.png" />
            <div class="txt" style="margin-left: 50%;">
            <h1 id="txt">What is-<span>CoWIN<span></h1>
            <p  class="mt-5" id="txtt">Co-WIN is a platform for the citizens of India to Register for COVID-19 vaccination and schedule their vaccination slots at the nearest vaccination centers.</p>
        </div>
        </div>
    </div>

<div class="card text-center mt-5">
  <div class="card-header">
   Vaccination
  </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 30px; color: #ff0011;">Self Registration for Vaccination</h5>
    <a href="https://selfregistration.cowin.gov.in/" target="_post" class="btn btn-primary">Register Yourself</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

  <section id="ban">
    <img src="img/cowinh.png" style="width: 125%; margin-left: -10.8%;">
  </section>


<!--  *******************************footer***************************************    -->
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
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
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
                                <li><a href="#">Home</a></li>
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