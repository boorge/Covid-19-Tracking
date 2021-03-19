<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 Tracker</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/js.php'; ?>
	<?php include 'phpfile.php'; ?>
</head>
<body>

<!--====== Header Section Start ======-->              
	<header>
		<div class="logo">	
			<img src="img/logo.png" id="logo1">
		</div>
		<div class="logo2">	
			<img src="img/logo2.png" id="logo2">
		</div>
		<ul class="topnav" id="myTopnav">
			<li><a href="index.php" class="active"><i class="fa fa-home"></i></a></li>
			<li><a href="ys.php">Your Satus</a></li>
			<li><a href="cu.php">COVID Updates</a></li>
			<li><a href="vcc.php">Vaccination</a></li>
			<li><a href="media.php">Media</a></li>
			<li><a href="cw.php">CoWIN</a></li>
			<li> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    			<i class="fa fa-bars"></i>
  			 </li></a>
		</ul>
	</header>

<!-- *************************************************************************************************************** -->

	<section id="ban">
		<img src="img/bg.png">
<!-- 
		<div class="coani"> 
  			<img src="img/cv.png">
		<div> -->
	</section>

	 <!-- Corona animation container -->
  	<div class="animatediv"> 
  		<img src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
    </div>
    <div class="animatediv2"> 
  		<img src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
    </div>
    <div class="animatediv3"> 
  		<img src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
    </div>


	<!-- ******************************************************************************************* -->


<div class="container-fluid pre pt-5 pb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>Real Time Update</h1>
		</div>
	<div dir="ltr">

  <div class="mt-5 pl-5 pr-5">
    <ul class="stats">
      <li>
        <span>Confirmed</span>
        <span id="confirmed">-</span>
      </li>
      <li>
        <span>Active</span>
        <span id="active">-</span>
      </li>
      <li>
        <span>Recovered</span>
        <span id="recovered">-</span>
      </li>
      <li>
        <span>Deaths</span>
        <span id="deaths">-</span>
      </li>
      <li>
        <span>Country</span>
        <span id="country">INDIA</span>
      </li>
    </ul>
</div>



	<!-- **********************************ABout COVID******************************************************** -->

	<div class="container-fluid ab-sec pt-5 pb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>About COVID-19</h1>
		</div>

		<div class="row pt-2">
			<div class="col-lg-5 col-md-6 col-12 ml-5">
				<img src="img/c-about.jpg" class="img-c-about">
			</div>

			<div class="col-lg-6 col-md-6 col-12" id="txt-a">
				<h3> What is COVID-19 (Corona Virus)</h3>
				<p><span>Coronaviruses (CoV)</span> are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.</p>
				<p>The virus that cause <span>COVID-19</span> spreads primarily through droplets generated when an infected person coughs, sneezes or speaks. You can also become infected by touching a contaminated surface and then touching your eyes, nose or mouth before washing your hands.</p>
			</div>
		</div>
	</div>

	<!-- **********************************Covid-19 Symptoms******************************************** -->

	<div class="container-fluid ab-sec2 pt-5 pb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>COVID-19 SYMPTOMS</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
					<img src="img/s-1.png" class="im" width="120" height="120">
					<figcaption>Cough</figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
					<img src="img/s-2.png" class="im" width="120" height="120">
					<figcaption>Fever</figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
					<img src="img/s-3.png" class="im" width="120" height="120">
					<figcaption>Runny Nose</figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
					<img src="img/s-4.png" class="im" width="120" height="120">
					<figcaption>Cold</figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
					<img src="img/s-5.png" class="im" width="120" height="120">
					<figcaption>Tirdness</figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
					<img src="img/s-6.png" class="im" width="120" height="120">
					<figcaption>Difficulty Breathing</figcaption>
					</figure>
				</div>
			</div>
		</div>

<!-- *********************************Preventions******************************************************** -->

	<div class="container-fluid pre pt-5 pb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1> 6 Steps Preventio Against Coronavirus</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/p1.png" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> wash your hands rehularly for 20 seconds, with soap and water or alcohol-based rub</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/p2.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/p3.png" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/p4.png" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Stay jome and self-isolate from other in he household if you feel unwell</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/p5.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Stay informed by watching news  and follow the recomended practices</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/p6.png" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> If you have fever, cough and difficulty breathing, seek medical care early</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- *********************************Contact Us******************************************* -->

	<div class="container-fluid pre pt-5 pb-5" id="about">
		<div class="section-header text-center mb-5 mt-4">
			<h1>Contact Us</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<form action="phpfile.php" method="POST">
						<div class="form-group">
    						<label>Username</label>
   							<input type="text" class="form-control" name="username" placeholder="Name" value="" required>
  						</div>
  						<div class="form-group">
    						<label for="exampleFormControlInput1">Email</label>
   							<input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  						</div>
  						<div class="form-group mt-4">
    						<label>Mobile</label>
   							<input type="number" class="form-control" name="mobile" placeholder="Mobile" required>
  						</div>

  							<div class="form-group">
  							  	<label>Select Symptoms</label><br>
  							 </div>
							   <div class="form-group row ml-1 mt-2">

							      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
							        <input type="checkbox" class="custom-control-input" name="covid[]" id="customCheck1" value="cold" checked>
							        <label class="custom-control-label" for="customCheck1">Cold</label>
							      </div>
							      
							      <div class="custom-control custom-checkbox">
							        <input type="checkbox" class="custom-control-input" name="covid[]" id="customCheck2" value="fever">
							        <label class="custom-control-label ml-4" for="customCheck2">Fever</label>
							      </div>
							    
							      <div class="custom-control custom-checkbox">
							        <input type="checkbox" class="custom-control-input" name="covid[]" id="customCheck3" value="cough">
							        <label class="custom-control-label ml-4" for="customCheck3">Cough</label>
							      </div>

							      <div class="custom-control custom-checkbox">
							        <input type="checkbox" class="custom-control-input" name="covid[]" id="customCheck4" value="difficultybreathing">
							        <label class="custom-control-label ml-4" for="customCheck4">Difficulty Breathing</label>
							      </div>
							    </div>
							 
  						<div class="form-group mt-4">
   							 <label for="exampleFormControlTextarea1"> Message</label>
   							<textarea type="text" class="form-control" name="message" placeholder="Message" required></textarea>
  						</div>
  						<button type="submit" class="btn btn-primary mb-2" name="submit" style="background-color: #ff0011; border: 1px #ff0011;">Submit</button>

					</form>
				</div>
			</div>
		</div>
	</div>

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
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https://github.com/borgekiran/">Borgekiran</a></p>
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
	<div class="height">
    <h3 class="text-center scroll">Scroll down </h3>
	</div>


</body>
</html>

<!-- ***************************************************************************************************************** -->
<!-- ********************************************Real Time Api Updates************************************************
***************************************************************************************************************** -->

<script>
  fetch(`https://covid19.mathdro.id/api/countries/india`)
  .then(res => res.json())
  .then(({ confirmed, recovered, deaths }) => {
    document.getElementById("confirmed").innerText = val(confirmed);
    document.getElementById("recovered").innerText = val(recovered);
    document.getElementById("deaths").innerText = val(deaths);
    document.getElementById("active").innerText =
      val(confirmed) - val(recovered) - val(deaths);
  })
  .catch(err => console.log(err));

const val = item => item.value;</script>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

