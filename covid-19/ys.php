<!DOCTYPE html>
<html>
<head>
	<title>Your Satus</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/js.php'; ?>

	<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Libre+Franklin:bold,medium');
		*{
			margin:0;
			padding:0;
		}
		img{
			width: 136%;
			height: 100%;
			margin-left: -18%;
		}
		.stats{
			margin-left: -6%;
		}
		.im{
			max-width: 250px;
		}
		#about img{
			margin-top: 70px;
			margin-left: -2%;
			width: 103.4%;
		}
		.im:hover{
			 box-shadow: 2px 2px 10px 2px #ff0011;
			 border-left: 5px solid #111;
			 border-radius: 20px;
		}
		.footer-section{
			margin-left: -12.2%;
		}
		.heading{
			margin-top: 60px;
		}

		h1{
		  font-family: 'Libre Franklin', sans-serif;   
		  text-align: center;
		  margin-bottom: 5px;
		  color: #283D4A;
		}

		.h1__underline{
		  margin-left: auto;
		  margin-right: auto;
		  width: 22%;
		  display: block;
		  margin-bottom: 50px;
		}
		#txt{
			font-size:30px;
			text-align: center;
			margin-left: 0px;
		}
		#txt a{
			text-decoration: none;
			color: #ff0011;
			list-style: none;
			font-size: 25px;
			font-weight: bold;
			text-align: center;
		}
		.tr{
			margin-top: -80px;
			margin-left: 100px;
		}
		/* MAIN CONTAINER */

		.articles{
		  width: 95%;
		  margin: 0 auto;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-around;
		}

		/* ARTICLE CARDS */

		.articles__article-card{
		height: 400px;
		width: 350px;
		cursor: pointer;
		margin-bottom: 40px;
		}

		.articles__article-card:hover{
		border-bottom: 5px solid #FC6C03;
		box-sizing: border-box;
		}

		/* ARTICLE CARDS - TOP */

		.articles__article-card__top{
		background-image: url("img/a1.png");
		background-size: cover;
		height: 60%;
		position: relative;
		}

		.articles__article-card__top--two{
		background-image: url("img/a6.png");
		}

		.articles__article-card__top--three{
		background-image: url("img/a3.png");
		}

		.articles__article-card__top--four{
		background-image: url("img/a4.png");
		}

		.articles__article-card__top--five{
		background-image: url("img/a5.png");
		}

		.articles__article-card__top--six{
		background-image: url("img/a2.png");
		}

		.articles__article-card__top__article-cat{
		background: white;
		padding: 5px 10px;
		border-radius: 6px;
		color: #FC6C03;
		position: absolute;
		top: 10px;
		right: 10px;  
		font-family: 'Libre Franklin', sans-serif;   
		font-weight: 200;    
		}

		/* ARTICLE CARDS - BOTTOM */

		.articles__article-card__bottom{
		background: rgba(234,239, 242, .7);
		height: 40%;
		}

		.articles__article-card__bottom__date-title{
		padding: 15px;
		}

		.articles__article-card__bottom__date-title__date{
		font-size: 13px;
		color: #99A7B0;
		font-family: 'Libre Franklin', sans-serif;   
		font-weight: 200;  
		}

		.articles__article-card__bottom__date-title__title{
		margin-top: 6px;
		font-family: 'Libre Franklin', sans-serif;
		 color: #283D4A; 
		}

		/* UTILITY CLASSES */

		.letter-spacing{
		letter-spacing: .05em;
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


		<section id="cmap">
				<div class="container-fluid pre pb-5 mt-5" id="about">
 					<a href="https://news.google.com/covid19/map?hl=en-IN&gl=IN&ceid=IN:en" target="_post"><img src="img/cmap.png"></a>
				</div>
		</section>

		<section class="tr">
			<div class="container-fluid pre pb-5" id="about">
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
			        <span id="country">World</span>
			      </li>
			    </ul>
			</div>
			</section>

<div class="container-fluid pre pt-2 pb-5" id="about">
		<div class="section-header text-center mb-5 mt-5">
			<h1> You are Safe</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/y1.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Maintain Social <br>Distance</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/y2.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Take Self<br> Assessment Test</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/y3.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> Check Website Regularly<br> for Update</p>
						</div>
					</div>
				</div>
			</div>



<div class="container-fluid pre pb-5 mt-5" id="about">

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/y4.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> 1. Greet witha Namaste instead <br>of a handshake</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/y5.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p> 2. Avoid Social Gathering</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="img/y6.jpg" class="im" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg8 col-md-8 col-12">
							<p>3.Keep a 6ft. distance people</p>
						</div>
					</div>
				</div>
			</div>



		<h1 class="heading letter-spacing" class="pt-5 mt-5">Articles</h1>
  <img class="h1__underline" src="https://i.imgur.com/nWZno3A.png">
  
  <section class="articles">
    
    <!--  ARTICLE #1  --> 
    <article class="articles__article-card">
      
      <!--  ARTICLE #1 TOP  -->  
      <div class="articles__article-card__top">
        <span class="articles__article-card__top__article-cat letter-spacing">covid</span>
      </div>
      
      <!--  ARTICLE #1 BOTTOM  -->
      <div class="articles__article-card__bottom">
        <div class="articles__article-card__bottom__date-title">
          <time class="articles__article-card__bottom__date-title__date letter-spacing" datetime="2019-02-02">FEBRUARY 2ND, 2021</time>
          <h2 class="articles__article-card__bottom__date-title__title" id="txt"><a href="https://www.bannerhealth.com/en/healthcareblog/advise-me/talking-to-your-kids-about-coronavirus" target="_post"> How to Talk to Your Kids About Coronavirus</a>
         </h2>
        </div>
      </div>
    </article>
    
    <!--  ARTICLE #2  --> 
    <article class="articles__article-card">
      
      <!--  ARTICLE #2 TOP --> 
      <div class="articles__article-card__top articles__article-card__top--two">
        <span class="articles__article-card__top__article-cat letter-spacing">covid</span>
      </div>
      
      <!--  ARTICLE #2 BOTTOM --> 
      <div class="articles__article-card__bottom">
        <div class="articles__article-card__bottom__date-title">
          <time class="articles__article-card__bottom__date-title__date letter-spacing" datetime="2019-23-01">JANUARY 23RD, 2019</time>
          <h2 class="articles__article-card__bottom__date-title__title" id="txt"><a href="https://www.bannerhealth.com/en/healthcareblog/advise-me/working-out-at-home" target="_post">Exercising at Home: Simple Ways to Stay Active</a>
          </h2>
        </div>
      </div>
    </article>
    
    <!--  ARTICLE #3  --> 
    <article class="articles__article-card">
      
      <!--  ARTICLE #3 TOP --> 
      <div class="articles__article-card__top articles__article-card__top--three">
        <span class="articles__article-card__top__article-cat letter-spacing">covid</span>
      </div>
      
      <!--  ARTICLE #3 BOTTOM -->    
      <div class="articles__article-card__bottom">
        <div class="articles__article-card__bottom__date-title">
          <time class="articles__article-card__bottom__date-title__date letter-spacing" datetime="2019-15-01">JANUARY 15TH, 2019</time>
          <h2 class="articles__article-card__bottom__date-title__title" id="txt"><a href="https://www.bannerhealth.com/en/healthcareblog/advise-me/working-from-home" target="_post">Working from Home: Tips for Staying Productive</a></h2>
        </div>
      </div>
    </article>
    
    <!--  ARTICLE #4  -->     
    <article class="articles__article-card">
      
      <!--  ARTICLE #4 TOP -->
      <div class="articles__article-card__top articles__article-card__top--four">
        <span class="articles__article-card__top__article-cat letter-spacing">covid</span>
      </div>
      
      <!--  ARTICLE #4 BOTTOM -->
      <div class="articles__article-card__bottom">
        <div class="articles__article-card__bottom__date-title">
          <time class="articles__article-card__bottom__date-title__date letter-spacing" datetime="2019-07-01">JANUARY 7TH, 2019</time>
          <h2 class="articles__article-card__bottom__date-title__title" id="txt"><a href="https://www.bannerhealth.com/en/healthcareblog/teach-me/how-to-properly-comply-with-social-distancing" target="_post">What Is Social Distancing and How Do I Do It?</a></h2>
        </div>
      </div>
    </article>
    
    <!--  ARTICLE #5  -->  
    <article class="articles__article-card">
      
      <!--  ARTICLE #5 TOP --> 
      <div class="articles__article-card__top articles__article-card__top--five">
        <span class="articles__article-card__top__article-cat letter-spacing">covid</span>
      </div>
      
      <!--  ARTICLE #5 BOTTOM --> 
      <div class="articles__article-card__bottom">
        <div class="articles__article-card__bottom__date-title">
          <time class="articles__article-card__bottom__date-title__date letter-spacing" datetime="2019-02-01">JANUARY 2ND, 2019</time>
          <h2 class="articles__article-card__bottom__date-title__title" id="txt"><a href="https://www.bannerhealth.com/en/healthcareblog/teach-me/why-handwashing-is-so-important" target="_post">Handwashing: One Of The Most Important Things You Can Do</a></h2>
        </div>
      </div>
    </article>
    
    <!--  ARTICLE #6  -->   
    <article class="articles__article-card">
      
      <!--  ARTICLE #6 TOP  --> 
      <div class="articles__article-card__top articles__article-card__top--six">
        <span class="articles__article-card__top__article-cat letter-spacing">covid</span>
      </div>
      
      <!--  ARTICLE #6 BOTTOM  --> 
      <div class="articles__article-card__bottom">
        <div class="articles__article-card__bottom__date-title">
          <time class="articles__article-card__bottom__date-title__date letter-spacing" datetime="2019-01-01">JANUARY 1ST, 2021</time>
          <h2 class="articles__article-card__bottom__date-title__title" id="txt"><a href="https://www.bannerhealth.com/en/healthcareblog/teach-me/how-you-can-boost-your-immune-system" target="_post">How You Can Boost Your Immune System</a>
          </h2>
        </div>
      </div>
    </article> 
    
  </section> <!-- closing "articles" tag -->



  
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


<script>
  fetch(`https://covid19.mathdro.id/api`)
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
