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
					<a href="https://firstscaffold.herokuapp.com/">Home</a> <a href="#">About</a> <a href="#">Sources</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2>this is banner</h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
				<h2>ehe</h2>
				<p>ehe?</p>
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
	background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("6th image.jpg");
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
	width: 100%;
	position: relative;
	top: 450px;
	background: #ebebeb;
	height: 1500px;
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
