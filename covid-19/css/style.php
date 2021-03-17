<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppons', sans-serif;
}
html,body
{
   min-height: 200vh;
   margin:0;
   padding:0;
   scroll-behavior: smooth;
}
header
{
  position: fixed;
  top:0;
  left: 0;
  z-index: 10000;
  width: 100%;
  background: #000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.6s;
  padding: 20px 100px;
}
header .logo img
{
  max-width: 200%;
  position: relative;
  margin: -40px;
  background-repeat: no-repeat;
}
header .logo2 img{
  display: none;
}
header ul
{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
header ul li
{
  position: relative;
  list-style: none;
}
header ul li a
{
  position: relative;
  margin: 0 15px;
  font-size: 18px;
  text-decoration: none;
  color: #fff;
  letter-spacing: 2px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.5s;
  text-transform: uppercase;
}
header ul li a:hover
{
  color: #d60250;
  text-decoration: none;
}
.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
    font-size: 30px;
    margin-left: 150px;
    padding: 0;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    font-size: 20px;

  }
}
.active
{
  color: #d60250;
  font-size: 30px;
}
#ban img
{
  width: 102%;
  height: 100%;
  padding-top: 55px;
  background-repeat: no-repeat;
  background-attachment: fixed; 
}
header.sticky
{
  background: #fff;
  color: #111;
}
header.sticky ul li a
{
  color: #111;
}
header.sticky ul li a:hover
{
  color:  #d60250;
}
header.sticky .active
{
  color: #d60250;
}


/* .............................................................. */

/* CoronaVirus Animation
Default speed is: 10s
MoveUpDown is a keyFrames that define the position*/
.animatediv{
  animation: MoveLeft 10s linear infinite;
  position: absolute;
  bottom: 330px;
  margin-left: 26%;
  }
  .animatediv img{
    max-width: 100px;
  }
/* position of corona animation */
@keyframes MoveLeft {
  0%, 100% {
    left: 150px;
  }
  50% {
    left: 250px;
  }
}

.animatediv2{
  animation: MoveUpDown 4s linear infinite;
  position: absolute;
  margin-left: 36%;
  margin-top: 30px;
  }
  .animatediv2 img{
    max-width: 130px;
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

.animatediv3{
  animation: MoveRight 5s linear infinite;
  position: absolute;
  bottom: 230px;
  margin-left: 0%;
  }
  .animatediv3 img{
    max-width: 70px;
  }
/* position of corona animation */
@keyframes MoveRight {
  0%,100%{
    left: 150px;
  }
  50% {
    left: 250px;
  }
}

}*/

.TopImage{

  position:relative;
  z-index:2;
  width:600px;
  margin-bottom:-2px;
}

h1 span
{
  padding-top: 2px;
  animation-name: cl;
  animation: cl 5s linear infinite;
}


@keyframes cl {
  from{
    color:#ff0011; 
  }
  to{
    color: green;
  }
  to{
    color: yellow;
  }

}


h2{
  margin-top: 30px;
  text-align:left;
  font-size:3em;
  color:#007E30;
  margin-left:120px;
  margin-bottom:-5px; 
}

.messagebox{
  width:80%;
  height:150px;
  top: 30px;
  overflow: auto;
  background-color:white;
  position:relative;
  left:120px;
  line-height: 1.5em;
  padding:25px;
  margin-bottom: 50px;
  border-left:5px solid #ff0011;
}



/* Text boxes style in hover */

.messagebox:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  border-left:15px solid #ff0011;
}

.messagebox label{
  font-size: 20px;
  color: #737874;
}

.messagebox label:hover{
  color: #000;
}

/*************************************************************/
/*************************************************************/
/*************************************************************/


@import url("https://fonts.googleapis.com/css?family=Amiri:400,700|Roboto:400,900&display=swap");
body {
  font-family: Roboto, 'Amiri', sans-serif;
  min-height: 100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  font-size: 20px;
}
.stats {
  display: grid;
  grid-template-columns: repeat(5, minmax(200px, 1fr));
  grid-gap: 20px;
}
.stats li {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06);
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
}
.stats li span:first-child {
  margin-bottom: 16px;
  font-size: 16px;
}
.stats li span:last-child {
  font-weight: 900;
}
#confirmed {
  color: #f56565;
}
#active {
  color: #ed8936;
}
#recovered {
  color: #48bb78;
}
#deaths {
  color: #a0aec0;
}
#country {
  color: #ff0011;
}

/*********************************************************************************************/

.img-c-about{
  max-width: 100%;
}
#txt-a p span{
  color: #ff0011;
  font-weight: bold;
}
.section-header h1{
  font-family: 'Archivo Black', sans-serif;
  transition: 0.5s;
}
.section-header h1:hover{
  color: #ff0011;
}

/*************/

.ab-sec2{
  background-color: #fbfdfb;
}

/*************/


.pre{
  background-color: #fff;
}


/****** footer *******/

ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: absolute;
  width: 100%;
  margin-left: -2.2%;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 400px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
  color: #7e7e7e;
  line-height: 28px;
}
.footer-text p span{
  color: #fff;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}

/*********************************/

.scroll {
    color: #fff;
    margin-top: 100px;
}

#toTopBtn {
    position: fixed;
    bottom: 26px;
    right: 39px;
    z-index: 98;
    padding: 21px;
    background-color: hsla(5, 76%, 62%, .8);
    transition:0.5s;
}
#toTopBtn:hover{
  background-color: #ff0011;
}

.js .cd-top--fade-out {
    opacity: .5
}

.js .cd-top--is-visible {
    visibility: visible;
    opacity: 1
}

.js .cd-top {
    visibility: hidden;
    opacity: 0;
    transition: opacity .3s, visibility .3s, background-color .3s
}
.cd-top {
    position: fixed;
    bottom: 20px;
    bottom: var(--cd-back-to-top-margin);
    right: 20px;
    right: var(--cd-back-to-top-margin);
    display: inline-block;
    height: 40px;
    height: var(--cd-back-to-top-size);
    width: 40px;
    width: var(--cd-back-to-top-size);
    box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
    background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
    background-color: hsla(5, 76%, 62%, .8);
    border-radius: 30px;
    background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
}

.height {
    height: 600px
}

/*******************************************************Responsive*****************************************************/
/*********************************************************************************************************************
*********************************************************************************************************************/

/* Extra small devices (phones, 600px and down) */
/*@media only screen and (max-width: 600px) {
    header ul li a{
      font-size: 10px;
      margin-left: -70%;
      padding:15px;
      display: none;
    }
    #ban img{
      width: 105%;
    }
    .c-updates{
      width: 104%;
    }
    .count{
      background: none;
    }
    #txt-a p{
      padding-left: 8%;
    }
}*/

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
 

}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {

  
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  

} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {

  
}

</style>