<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Live coronavirus dashboard tracker. See data, maps, social media trends, and learn about prevention measures." />
  <meta name="keywords" content="coronavirus, covid-19, tracker, dashboard, preperation, prevention, trends, statistics, data" />

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://ncov2019.live/">
  <meta property="og:title" content="Coronavirus Dashboard">
  <meta property="og:description" content="Live coronavirus dashboard tracker. See data, maps, social media trends, and learn about prevention measures.">
  <meta property="og:image" content="https://ncov2019.live/images/thumbnailcorona.jpg">

  <meta name="twitter:title" content="ncov2019.live - Coronavirus Tracker">
  <meta name="twitter:description" content="Live coronavirus dashboard. See data, maps, social media trends, and learn about prevention measures.">
  <meta name="twitter:image" content="https://ncov2019.live/images/thumbnailcorona.jpg">
  <meta name="twitter:creator" content="@thedanielconlon">
  <meta name="twitter:card" content="summary_large_image"/>
	<title>COVID-19 UPDATES</title>
	<link rel="icon" href="img/icon.png" type="image/icon type">
	<?php include('links/links.php') ;?>
	<?php include('css/style.php') ;?>
	
	<script src="https://kit.fontawesome.com/cf96b46730.js" crossorigin="anonymous"></script>
	
</head>
<body onload="fetch()">
	
	
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler nav_style" style="color:white"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  Menu</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5" >
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="county-wise.php">COUNTRY WISE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="india.php">INDIA (STATE WISE)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.mohfw.gov.in/" target="_blank">HELP</a>
      </li>
      
      
      
      
    </ul>
    
  </div>
</nav>


<div class="main_header">


<div class="row w-100 h-100">
	
	
	<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
		<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
			<img src="img/bg1.jpg" width="300" height="300" alt="">
		</div>
	</div>
	
	<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
		<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
			<h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img src="img/corona2.jpg" width="50" height="50" alt=""></span> na Virus</h1>
		</div>
	</div>
</div>
<!--corona updates------->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">COVID-19 UPDATES LIVE</h3>
	</div>
	
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center " id="tbval">
			<tr>
				<th>Country</th>
				<th>New Confirmed</th>
				<th>TotalConfirmed</th>
				<th>NewDeaths</th>
				<th>TotalDeaths</th>
				<th>NewRecovered</th>
				<th>TotalRecovered</th>
				<th>Date</th>
			</tr>
		</table>
	</div>
	
	
</section>

<!-----****about section****------->

<div class="container-fluid sub_section pt-5 pb-5 "id="aboutid" >
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="img/about-corona.jpg"  class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.

Coronaviruses are zoonotic, meaning they are transmitted between animals and people. Detailed investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from dromedary camels to humans. Several known coronaviruses are circulating in animals that have not yet infected humans.</p>
		
			<p>Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.</p>
		</div>
	</div>
</div>

<!-----****about section****------->



<div class="container-fluid  pt-5 pb-5 id=aboutid" >
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="img/cough1" alt="" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="img/nose.jpg" alt="" class="img-fluid" width="120" height="120">
				<figcaption>Runny Nose</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="img/fever.jpg" alt="" class="img-fluid" width="120" height="120">
				<figcaption>Fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="img/cold.jpg" alt="" class="img-fluid" width="120" height="120">
				<figcaption>Cold</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="img/tired.jpg" alt="" class="img-fluid" width="120" height="120">
				<figcaption>Tiredness</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="img/breath.jpg" alt="" class="img-fluid" width="120" height="120">
				<figcaption>Difficulty In Breathing</figcaption>
				</figure>
			</div>
		</div>
	</div>
	
	</div>
	
	<div class="container-fluid sub_section  pt-5 pb-5 id=aboutid" >
	<div class="section_header text-center mb-5 mt-4">
		<h1>Prevention Against CoronaVirus</h1>
	</div>
	
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
				<img src="img/wash.jpg" alt="" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Wash your hands frequently.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
				<img src="img/elbow.jpeg" alt="" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Cough and sneez into elbow.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
				<img src="img/handshake.jpg" alt="" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Avoid contact with others.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
				<img src="img/crowd.png" alt="" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Avoid crowd and public gathering.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
				<img src="img/travel.png" alt="" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Avoid non-essential travel</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
				<img src="img/home.jpg" alt="" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay home & do work from home.</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	</div>
	
	
	
	


<footer class="mt-5">
	<div class="footer_style  text-center container-fluid" style="color:black">
		<p>copyright by @HACKZEX &nbsp;<a href="https://www.instagram.com/07_._rahul_._07" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/in/rahul-deokate-42257b14b" target="_blank"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;&nbsp;<a href="#" target="_blank"><i class="fab fa-github"></i></a></p>
		

	</div>
	
</footer>




</div>


<script type="text/javascript">	
	
	$('.count').counterUp({
		delay:10,
		time:3000
		
	})
	
function fetch(){
	$.get("https://api.covid19api.com/summary",
		 
		 function(data){
		//console.log(data['Countries'].length);
		
		var tbval = document.getElementById('tbval');
		
		for(var i=1; i<(data['Countries'].length);i++){
			var x =tbval.insertRow();
			x.insertCell(0);
			
			tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
			tbval.rows[i].cells[0].style.background = '#7a4a91';
			tbval.rows[i].cells[0].style.color = '#fff';
			
			x.insertCell(1);
			tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['NewConfirmed'];
			tbval.rows[i].cells[1].style.background = '#4bb7d8';
			
			x.insertCell(2);
			tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
			tbval.rows[i].cells[2].style.background = '#4bb7d8';
			
			x.insertCell(3);
			tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['NewDeaths'];
			tbval.rows[i].cells[3].style.background = '#4bb7d8';
			
			x.insertCell(4);
			tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
			tbval.rows[i].cells[4].style.background = '#4bb7d8';
			
			x.insertCell(5);
			tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
			tbval.rows[i].cells[5].style.background = '#4bb7d8';
			
			x.insertCell(6);
			tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['TotalRecovered'];
			tbval.rows[i].cells[6].style.background = '#4bb7d8';
			
			x.insertCell(7);
			tbval.rows[i].cells[7].innerHTML = data['Countries'][i-1]['Date'];
			tbval.rows[i].cells[7].style.background = '#4bb7d8';
		}
	}
		 
		 );
}	
	
	</script>

</body>
</html>




















