<!DOCTYPE html>
<html>
<head>
	<title>Covid Updates</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'JavaScript/js.php'; ?>

	<style type="text/css">
*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Nunito',sans-serif;
}
body{
 background: #111;
 width: 0;
 padding: 0;
}
.wrapper{
    width: 100%;
    position: absolute;
    left: 50%;
    top:-1px;
    transform: translateX(-50%);
}
.statistic{
    width: auto;
    padding-top: 8%;
}

.total_case_box{
    background-color:#fff;
  -webkit-box-shadow: 0px 0px 4px 2px #000000; 
   box-shadow: 0px 0px 4px 2px #000000;
   border : 2px groove 	#ff0011;
   border-radius: 10px;
    margin: 10px 15px;
    padding: 15px 0;
    color: #000;
    text-align: center;
    text-transform: uppercase;
}
.total_case_box h2{
	color: #000;
	font-size:40px;
	padding-right: 8%;
	text-align: center;
	font-family: 'Archivo Black', sans-serif;
}
.total_case_box p{
    font-size: 3rem;
    color: #ff0011;
    font-family: 'Archivo Black', sans-serif;
}
.Designed_by_box{
    background-color: #800000;
  -webkit-box-shadow: 0px 0px 3px 1px #FF0000; 
	box-shadow: 0px 0px 3px 1px #FF0000;
   border-radius:100px;
   color:white;
    margin: 1px 1px;
    padding: 5px 0;
    text-align: center;
    text-transform: uppercase;
}
.Designed_by_box p{
    font-size: 3rem;
}
.wrapper .box_wrapper{
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
}

.box_wrapper .box{
    background-color: #fff;
   -webkit-box-shadow: 0px 0px 4px 2px #000000; 
   box-shadow: 0px 0px 4px 2px #000000;
   border : 2px groove 	#ff0011;
  	border-radius: 80px;
    margin: 10px 15px;
    width:23%;
    max-height: 120px;
    padding-left: 12px;
    text-align: center;
    padding: 10px 0;
    border-radius: 8px;
    text-transform: uppercase;
}
.box_wrapper .box h2{
	color: #000;
	text-align: center;
	font-size: 12px;
}
.box_wrapper .box p{
    font-size: 2.5rem;
}
.bw h2{
	width: 100%;
	color: #fff;
	font-size: 30px;
	margin-left: 110px;
	font-family: 'Archivo Black', sans-serif;
}
.bw p{
	color: #ff0011;
	margin-top: 40px;
	margin-left: 100px;
	font-size: 20px;
	justify-content: center;
	font-family: 'Archivo Black', sans-serif;
	text-align: center;
}


/*Styiling the table*/
table{-webkit-box-shadow: 0px 0px 10px 2px #000000; 
box-shadow: 0px 0px 10px 2px #000000;
    width: 100%;
    padding: 15px 10px;
    margin: 10px 0;
    text-align: center;
    border-spacing: 0;
}
tr:first-child{
    background-color: #37474f;
    color: #fafafa;
    text-transform: uppercase;
}
th{
    padding: 15px 0;
    border: none;
    border-spacing: 0;
    
}
tr:nth-child(even){
    background-color: #fafafa;
    
    
}
tr:nth-child(odd){
    background-color: #ff0011;
    color: #fafafa;
}
tr td{
    padding: 15px 0;
    
    
}

.counter{
	background-color: #fff;
	color: #000;
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

	<section>
	
			<div class="wrapper">
		        <div class="statistic">
		          <div class="total_case_box">
		                <h2>Total Cases in the world</h2>
		                <p id="total_cases"></p>
		            </div>
		           <div class="box_wrapper">
		                <div class="bw">
		                    <h2>Total Death</h2>
		                    <p id="total_death"> </p>
		                </div>

		                <div class="bw">
		                    <h2>Total Recovery</h2>
		                    <p id="total_recovered"> </p>
		                </div>

		                <div class="bw">
		                    <h2>New case</h2>
		                    <p id="new_case"> </p>
		                </div>

		                <div class="bw">
		                    <h2>New Death</h2>
		                    <p id="new_death"> </p>
		                </div>
		           </div> 

		           <table id="countries_stat">
		               <tr>
		                   <th>Country</th>
		                   <th>Cases</th>
		                   <th>Deaths</th>
		                   <th>serious critical</th>
		                   <th>total recovered</th>
		               </tr>
		           </table>
		        </div>
		    </div>

     <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
</body>
</html>

<script type="text/javascript">//Decalring the Different Variable and Objects
let new_cases = document.getElementById("new_case");
let new_death = document.getElementById("new_death");
let total_death = document.getElementById("total_death");
let total_recovered = document.getElementById("total_recovered");
let total_cases = document.getElementById("total_cases");
let table = document.getElementById('countries_stat')
// Fetching the Data from the server

//Fetching the World Data
fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/worldstat.php", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
        "x-rapidapi-key": "f93ff5e3afmsh1c47b09be99cc61p1ca087jsnbd673fdc9881"
    }
})
.then(response => response.json().then( data => {
    console.log(data);
    total_cases.innerHTML = data.total_cases;
    new_cases.innerHTML = data.new_cases;
    new_death.innerHTML = data.new_deaths;
    total_death.innerHTML = data.total_deaths;
    total_recovered.innerHTML = data.total_recovered;

})).catch(err => {
    console.log(err);
});

//Fetching The Case by Country Data
fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
        "x-rapidapi-key": "f93ff5e3afmsh1c47b09be99cc61p1ca087jsnbd673fdc9881"
    }
})
.then(response => response.json().then(data =>{
    console.log(data)
    let countries_stat = data.countries_stat;
//Getting all the country statistic using a loop
    for(let i = 0; i<countries_stat.length;i++){
        console.log(countries_stat[i]);
        //we will start by inserting the new rows inside our table
        let row = table.insertRow(i+1);
        let country_name = row.insertCell(0);
        let cases = row.insertCell(1);
        let deaths = row.insertCell(2);
        let serious_critical = row.insertCell(3);
        let recovered_per_country = row.insertCell(4);
        country_name.innerHTML = countries_stat[i].country_name;
        cases.innerHTML = countries_stat[i].cases;
        deaths.innerHTML = countries_stat[i].deaths;
        serious_critical.innerHTML = countries_stat[i].serious_critical;
        recovered_per_country.innerHTML = countries_stat[i].total_recovered;

    }
}))
.catch(err => {
    console.log(err);
});</script>

</body>
</html>