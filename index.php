<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main Webpage=Today</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="https://firstscaffold.herokuapp.com/">Tomorrow</a>
				</div>
				<nav>
					<a href="https://firstscaffold.herokuapp.com/">Home</a> <a href="#covid">About</a> <a href="#source">Sources</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2>Covid-19 Vaccine</h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
				<h2 id="covid">ABOUT THE VACCINE</h2>
				<p>
Vaccines save millions of lives each year. Vaccines work by training and preparing the body’s natural defences --- the immune system--- to recognize and fight off the viruses and bacteria they target. After vaccination, if the body is later exposed to those disease-causing germs, the body is immediately ready to destroy them, preventing illness.
</p>
<p>
As of 18 February 2021, at least seven different vaccines across three platforms have been rolled out in countries. Vulnerable populations in all countries are the highest priority for vaccination.
</p>
<p>
At the same time, more than 200 additional vaccine candidates are in development, of which more than 60 are in clinical development. COVAX is part of the ACT Accelerator, which WHO launched with partners in 2020. COVAX, the vaccines pillar of ACT Accelerator, convened by CEPI, Gavi and WHO, aims to end the acute phase of the COVID-19 pandemic by:
</p>
<p>
Speeding up the development of safe and effective vaccines against COVID-19;
supporting the building of manufacturing capabilities; and
working with governments and manufacturers to ensure fair and equitable allocation of the vaccines for all countries – the only global initiative to do so.
</p>
<p>

Vaccines are a critical new tool in the battle against COVID-19 and it is hugely encouraging to see so many vaccines proving successful and going into development. Working as quickly as they can, scientists from across the world are collaborating and innovating to bring us tests, treatments and vaccines that will collectively save lives and end this pandemic.    
</p>
<p>
Safe and effective vaccines will be a gamechanger but for the foreseeable future we must continue wearing masks, physically distancing and avoiding crowds. Being vaccinated does not mean that we can throw caution to the wind and put ourselves and others at risk, particularly because it is still not clear the degree to which the vaccines can protect not only against disease but also against infection and transmission.</p>

<br>
<h2>
	Message of Hope
</h1>
<video controls>
		<source width="1280" height="720" src="MATH PT.mp4" type="video/mp4">
	</video>
<h2 id="source">
	Source
</h2>
<a href="https://www.who.int/health-topics/coronavirus#tab=tab_2"><p>
	https://www.who.int/health-topics/coronavirus#tab=tab_2
</p></a>
			</div>
		</div>
	</div>
	
	<style>
		* {
	margin: 0;
	padding: 0;
}
body {
	text-align: center;
}
.wrapper {
	width: 1170px;
	margin: 0 auto;
}
header {
	height: 100px;
	background: #262626;
	width: 100%;
	z-index: 10;
	position: fixed;
}
.logo {
	width: 30%;
	float: left;
	line-height: 100px;
}
.logo a {
	text-decoration: none;
	font-size: 30px;
	font-family: poppins;
	color: #fff;
	letter-spacing: 5px;
}
nav {
	float: right;
	line-height: 100px;
}
nav a {
	text-decoration: none;
	font-family: poppins;
	letter-spacing: 4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}
.banner-area {
	width: 100%;
	height: 500px;
	position: fixed;
	top: 100px;
	background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("covid vaccine.jpg");
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.banner-area h2 {
	padding-top: 8%;
	font-size: 70px;
	font-family: poppins;
	text-transform: uppercase;
	color: #fff;
}
.content-area {
	width: 150%;
	position: relative;
	top: 450px;
	background: #ebebeb;
	height: 1700px;
}
.content-area h2 {
	font-family: poppins;
	letter-spacing: 4px;
	padding-top: 30px;
	font-size: 40px;
	margin: 0;
}
.content-area p {
	padding: 2% 0px;
	font-family: poppins;
	line-height: 30px;
}
</style>
</body>
</html>
