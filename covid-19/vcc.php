<!DOCTYPE html>
<html>
<head>
	<title>Vaccination</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/js.php'; ?>

	<style type="text/css">



        body{
          overflow: auto;
          background: #fff;
          font-family:Tahoma;
          font-size:15px;
        }
        .footer-section{
            margin-left: -15px;
            margin-top: 5%;
        }
        .card{
            width: 60%;
        }

        .card-header{
            font-weight: bold;
            color: #ff0011;
        }
        .card-title{
            font-size: 30px;
            color: #000;
            font-weight: bold;
        }
        .btn{
            background-color: #ff0011;
            border:none;
            border-radius: 40px;
            transition: 0.5s;
                }
        /* Headers Style */
        h1{
          text-align:center;
          font-size:3em;
          color:#000;
          text-shadow: 0px 1px 2px #000;
        }

        h2{
          text-align:left;
          font-size:3em;
          color:#000;
          margin-left:100px;
          margin-bottom:-5px;
          transition: 0.5s;
          font-family: 'Archivo Black', sans-serif;
          
        }
        h2:hover{
          color: #ff0011;
        }

        h3{
          text-align:left;
          font-size:2em;
          color:#fff;
          background:#007E30;
          padding-left:120px;
          
        }

        /* Image top of the menu */
       
        .TopImage{
            max-width: 40%;
            padding: 0;
            margin-top: -40px;
            margin-left:-40%;
        }

        /* Text boxes style */
        .messagebox{
          width:80%;
          height:200px;
          background-color:white;
          position:relative;
          left:40px;
          line-height: 1.5em;
          padding:25px;
          margin-bottom: 50px;
          border-left:5px solid #ff0011;
        }

        /* Text boxes style in hover */
        .messagebox:hover {
          box-shadow: 0 14px 28px #007E30 ;
        }

        /* Default shadow style */
        .shadow{
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
          transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }

        /* CoronaVirus Animation
        Default speed is: 10s
        MoveUpDown is a keyFrames that define the position*/
        .animatediv{
          animation: MoveUpDown 10s linear infinite;
          position: absolute;
          right: 300px;
          }
          .animatediv img{
           max-width: 230px;
           margin-top: 120%;
          }
        /* position of corona animation */
        @keyframes MoveUpDown {
          0%, 100% {
            top: 150px;
          }
          50% {
            top: 250px;
          }
        }

        /*Main Menu Style*/
          ul.menu {
            position:absolute;
            left:120px;
            background:#fff;
            width:300px;
            z-index:3;
            margin-top: -170%;
            margin-left: 50%;
            padding:0px;
            list-style: none;
            overflow:hidden;
          }

        .menu li a {
            width:300px;
            padding-left:15px;
            height:40px;
            line-height:40px;
            display:block;
            overflow:hidden;
            position:relative;
            text-decoration:none;
            font-size:15px;
            color:#686868;      
          }

          .menu li a:hover {
            background:#efefef;
            border-left:5px solid #ff0011;
          }

        /*Table Container Style*/
        #TblCon{
          background:#efefef;
        }

        /*Table Style*/
        .Tbl{
        width:70%;
        margin-left: auto;
        margin-right: auto;
        text-align:center;
        font-size:10px;  
        }

        /* Final Tite (Wash Your Hands) */
        #WashHandsTxt{
           color:lightgrey;
           font-size:8em;
           text-align:center;
        }

        .card1{
          margin-top: 200%;
          padding-top: 0%;
        }
        .card2{
          width: 100%;
        }
        #vw{
          margin-top: 0%;
          margin-left: -8px;
        }
/*.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.*/
/*.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.*/

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

<div class="container-fluid pre pt-5 pb-5 mt-5" id="about">
                <div class="section-header text-center mb-5 mt-5">
                    <h1>Vaccination Location and Statistics</h1>
                </div>
       <section id="vw" class="pb-5 mb-5">
          <a href="https://news.google.com/covid19/map?hl=en-IN&state=6&gl=IN&ceid=IN%3Aen"><img src="img/vw.png" id="vw"></a>
        </section>
</div>

            
       
        <!-- Corona animation container -->
        <div class="animatediv"> 
        <img src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
          </div>
        
        <!-- Image on top of the Main menu container -->
        <img src="img/c-about.jpg" class="TopImage">
        
        <!-- Main Menu Start -->
        <ul class="menu shadow">
          
          <li>
            <a href="#CleanYourHand">Clean your hands often</a>
          </li>
          
          <li>
            <a href="#AvoidCloseContact">Avoid close contact</a>
          </li>
              
          <li>
            <a href="#StayHome">Stay home if you’re sick</a>
          </li>
          
          <li>
            <a href="#CoverCoughs">Cover coughs and sneezes</a>
         </li>
          
          <li>
           <a href="#WearAFacemask">Wear a facemask if you are sick</a>
          </li>
          
          <li>
            <a href="#CleanAndDisinfect">Clean and Disinfect </a>
          </li>
        </ul>
        <!-- Main Menu End -->


        <div class="container-fluid pre pt-5 pb-5 mt-5" id="about">
                <div class="section-header text-center mb-5 mt-5">
                    <h1>VACCINATION INFORMATION</h1>
                </div>
        <div class="card">
          <div class="card-header">
            VACCINATION
          </div>
          <div class="card-body">
            <h5 class="card-title">Vaccines definition</h5>
            <p class="card-text">The body’s immune system helps protect against pathogens that cause infection. Most of the time, it’s an efficient system. It either keeps microorganisms out or tracks them down and gets rid of them.
<br><br>
            However, some pathogens can overwhelm the immune system. When this happens, it can cause serious illness.<br><br>

            The pathogens most likely to cause problems are the ones the body doesn’t recognize. Vaccination is a way to “teach” the immune system how to recognize and eliminate an organism. That way, your body is prepared if you’re ever exposed.<br><br>

            Vaccinations are an important form of primary prevention. That means they can protect people from getting sick. Vaccinations have allowed us to control diseases that once threatened many lives, such as:<br><br>

            measles
            polio
            tetanus
            whooping cough<br><br>
            It’s important that as many people as possible get vaccinated. Vaccinations don’t just protect individuals. When enough people are vaccinated, it helps protect society.<br><br>

            This occurs through herd immunity. Widespread vaccinations make it less likely that a susceptible person will come into contact with someone who has a particular disease.


</p>
          </div>
        </div>

        <div class="card mt-2">
          <div class="card-header">
            VACCINATION
          </div>
          <div class="card-body">
            <h5 class="card-title">How does vaccination work?</h5>
            <p class="card-text">A healthy immune system defends against invaders. The immune system is composed of several types of cells. These cells defend against and remove harmful pathogens. However, they have to recognize that an invader is dangerous.<br><br>

            Vaccination teaches the body to recognize new diseases. It stimulates the body to make antibodies against antigens of pathogens. It also primes immune cells to remember the types of antigens that cause infection. That allows for a faster response to the disease in the future.<br><br>

            Vaccines work by exposing you to a safe version of a disease. This can take the form of:<br><br>

            a protein or sugar from the makeup of a pathogen
            a dead or inactivated form of a pathogen
            a toxoid containing toxin made by a pathogen
            a weakened pathogen
            When the body responds to the vaccine, it builds an adaptive immune response. This helps equip the body to fight off an actual infection.<br><br>

            Vaccines are usually given by injection. Most vaccines contain two parts. The first is the antigen. This is the piece of the disease your body must learn to recognize. The second is the adjuvant.<br><br>

            The adjuvant sends a danger signal to your body. It helps your immune system to respond more strongly against the antigen as an infection. This helps you develop immunity.</p>
          </div>
        </div>

        <div class="card mt-2">
          <div class="card-header">
            VACCINATION
          </div>
          <div class="card-body">
            <h5 class="card-title">Vaccinations are safe</h5>
            <p class="card-text">Vaccines are considered to be safe. They’re rigorously tested and go through many rounds of study, examination, and research before they’re used with the general public.<br><br>

            The overwhelming bulk of research and evidence shows that vaccines are safe and that side effects are rare. Side effects that do occur are typically mild.<br><br>

            Indeed, the greatest risk for most individuals will come if you choose not to get a vaccine and potentially get sick after exposure to a disease. The illness may be far worse than the potential side effects of the vaccine. It could even be deadly.<br><br>

            You may have more questions about the safety of vaccines. This guide to vaccine safety can help.</p>
          </div>
        </div>

        <div class="card mt-2">
          <div class="card-header">
            VACCINATION
          </div>
          <div class="card-body">
            <h5 class="card-title">Vaccination side effects</h5>
            <p class="card-text">Most side effects from a vaccine injection are mild. Some people will experience no side effects at all.<br><br>

            When they do occur, side effects, some rarer than others, may include:<br><br>

            pain, redness, or swelling at the injection site
            joint pain near the injection site
            muscle weakness
            low-grade to high fever
            sleep disturbances
            fatigue
            memory loss
            complete muscle paralysis on a particular area of the body
            hearing or vision loss
            seizures
            Some risk factors do increase your risk for experiencing side effects from a vaccination. These risk factors include:<br><br>

            having a weak or suppressed immune system
            being sick at the time you receive a vaccine
            having a family or personal history of vaccine reactions
            Serious or life-threatening side effects or reactions from vaccines are rare. Indeed, most people are at a higher risk of becoming ill from diseases if they’re not vaccinated.<br><br>

            That’s the case with influenza, commonly referred to as the flu. Know what to expect with the flu vaccine before you get one, including what side effects might be possible.</p>
          </div>
        </div>

    
        <div class="container-fluid pre pt-5 pb-5 mt-5" id="about">
                <div class="section-header text-center mb-5 mt-5">
                    <h1> Other Vaccination Information</h1>
                </div>

  <div class="card1 text-center mt-5 pd-5">
  <div class="card-header">
   Vaccination
  </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 30px; color: #ff0011;">Vaccine doses by location</h5>
    <a href="https://g.co/kgs/wN4jdL" target="_post" class="btn btn-primary">Statistcs <i class="fa fa-arrow-right"></i></a>
  </div>
    <div class="card-footer text-muted">
    2 days ago
  </div>

  </div>


  <div class="card2 text-center mt-5 pd-5">
  <div class="card-header">
   Vaccination
  </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 30px; color: #ff0011;">Vaccinations Country Data</h5>
    <a href="https://github.com/owid/covid-19-data/blob/master/public/data/vaccinations/country_data/India.csv" target="_post" class="btn btn-primary">See Here <i class="fa fa-arrow-right"></i></a>
  </div>
    <div class="card-footer text-muted">
    2 days ago
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

<script type="text/javascript">
    /* Kristuff.WebUI.SideMenu */
(function (window, undefined) {
    'use strict';
    // responsive pinnable sidemenu component
    var sideMenu = function (el) {
        var htmlSideMenu = el, htmlSideMenuPinTrigger = {}, htmlSideMenuPinTriggerImage = {}, htmlOverlay = {};
        var init = function () {
            htmlSideMenuPinTrigger = el.querySelector('.wui-side-menu-pin-trigger');
            htmlSideMenuPinTriggerImage = htmlSideMenuPinTrigger.querySelector('i.fa');
            htmlOverlay = document.querySelector('.wui-overlay');
            Array.prototype.forEach.call(document.querySelectorAll('.wui-side-menu-trigger'), function (elmt, i) {
                elmt.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleMenuState();
                }, false);
            });
            htmlSideMenuPinTrigger.addEventListener('click', function (e) {
                e.preventDefault();
                toggleMenuPinState();
            }, false);
            htmlOverlay.addEventListener("click", function (e) {
                htmlSideMenu.classList.remove('open');
            }, false);
            window.addEventListener("resize", checkIfNeedToCloseMenu, false);
            checkIfNeedToCloseMenu();
        };
        var toggleMenuState = function () {
            htmlSideMenu.classList.toggle('open');
            menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
        };
        var toggleMenuPinState = function () {
            htmlSideMenu.classList.toggle('pinned');
            htmlSideMenuPinTriggerImage.classList.toggle('fa-rotate-90');
            if (htmlSideMenu.classList.contains('pinned') !== true) {
                htmlSideMenu.classList.remove('open');
            }
            menuPinStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('pinned'));
        };
        var checkIfNeedToCloseMenu = function () {
            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if (width <= 767 && htmlSideMenu.classList.contains('open') === true) {
                htmlSideMenu.classList.remove('open');
                menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
            }
            if (width > 767 && htmlSideMenu.classList.contains('pinned') === false) {
                htmlSideMenu.classList.remove('open');
                menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
            }
        };
        var menuStateChanged = function (element, state) {
            var evt = new CustomEvent('menuStateChanged', { detail: { open: state} });
            element.dispatchEvent(evt);
        };
        var menuPinStateChanged = function (element, state) {
            var evt = new CustomEvent('menuPinStateChanged', { detail: { pinned: state} });
            element.dispatchEvent(evt);
        };
        init();
        return {
            htmlElement: htmlSideMenu,
            toggleMenuState: toggleMenuState,
            toggleMenuPinState: toggleMenuPinState
        };
    };
    
    window.SideMenu = sideMenu;
})(window);


var documentReady = function (fn) {
  if (document.readyState != 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
};

documentReady(function() {
  var sample = new SideMenu(document.querySelector('.wui-side-menu'))
  sample.htmlElement.addEventListener('menuPinStateChanged', function(e) {
    document.querySelector('#events').innerHTML += 'menuPinStateChanged , menu pinned? => ' 
      + e.detail.pinned + '<br>'; 
  }, false);
  sample.htmlElement.addEventListener('menuStateChanged', function(e) {
    document.querySelector('#events').innerHTML += 'menuStateChanged , menu open? => ' 
      + e.detail.open + '<br>'; 
  }, false);
});


</script>