<script type="text/javascript">

window.addEventListener("scroll", function(){
	var header = document.querySelector("header");
	header.classList.toggle("sticky", window.scrollY > 0)
})

</script>
<script type="text/javascript">


$('.Count').each(function () {
  jQuery({ Counter: 0 }).animate({ Counter: $(this).text() }, {
    duration: 1000,
    easing: 'swing',
    step: function () {
      $(this).text(Math.ceil(this.Counter));
    }
  });
});
	
// World Map
google.charts.load("current", {
  packages: ["geochart"]
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
  fetch("https://api.covid19api.com/summary")
    .then((res) => res.json())
    .then((res) => {
      // Set number of cases
      setNumbers(res.Global);
      let cases = [];

      res.Countries.forEach((country) => {
        cases.push([country.CountryCode, country.TotalConfirmed]);
      });

      var data = google.visualization.arrayToDataTable([
        ["Country", "Number of cases"],
        ...cases
      ]);

      var options = {
        colorAxis: { colors: ["#3498db", "#ff7675", "#ff6b81", "#c0392b"] }
      };

      var chart = new google.visualization.GeoChart(
        document.querySelector(".world-map")
      );

      chart.draw(data, options);
    });
}

// Line charts
google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

// var countryName = 'india'; // Default country name

function drawChart(countryName = "india") {
  fetch(
    "https://api.covid19api.com/total/country/" +
      countryName +
      "/status/confirmed"
  )
    .then((res) => res.json())
    .then((res) => {
      let cases = [];
      if (res.length !== 0) {
        res.forEach((day) => {
          cases.push([day.Date.slice(0, 10), day.Cases]);
        });

        var data = google.visualization.arrayToDataTable([
          ["Date", "Cases"],
          ...cases
        ]);

        var options = {
          title: "Number of cases",
          legend: { position: "bottom" }
        };

        var chart = new google.visualization.LineChart(
          document.querySelector(".country-chart")
        );

        chart.draw(data, options);
      } else {
        document.querySelector(".country-chart").innerHTML = "No data";
      }
    });
}

/// scroll top...............................

$(document).ready(function() {
$(window).scroll(function() {
if ($(this).scrollTop() > 100) {
$('#toTopBtn').fadeIn();
} else {
$('#toTopBtn').fadeOut();
}
});

$('#toTopBtn').click(function() {
$("html, body").animate({
scrollTop: 0
}, 1000);
return false;
});
});

//******************************************************************************

$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
          
          //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
//******************************************************************************


//******************************************************************************


</script>