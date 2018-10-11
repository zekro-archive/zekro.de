<!DOCTYPE html>
 
<!--   
	ZEKRO.DE
	2017 RINGO HOFFMANN
	CONTACT: zekroyt@gmail.com / twitter.com/zekrotja / Discord: zekro#9131 
	Tested with Lighthouse
-->

<html dir="ltr" lang="en" class="no-js">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<!-- ensures IE compat -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<?php
	include "php/main.php";
	include "php/screenshots.php";

	function getAge($then) {
		$then_ts = strtotime($then);
		$then_year = date('Y', $then_ts);
		$age = date('Y') - $then_year;
		if (strtotime('+' . $age . ' years', $then_ts) > time()) $age--;
		return $age;
	}
?>
	<title>zekro Development</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keywords" content="Tutorials, Youtube, Discord, Python, Java"/>
	<meta name="description" content="Zekro's Homepage"/>
	<meta name="theme-color" content="#1E1E1E"/>
	<link rel="shortcut icon" type="image/png" href="src/favicon.png"/>
	<!-- TODO: enhance manifest -->
	<link rel="manifest" href="manifest.json"/>
	<style type="text/css">
@import 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400';
/* ----------------------- */
*, ::before, ::after {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
html, body {
	margin: 0;
	height: 100%;
}
body {
	display: flex;
	flex-direction: column;
	min-height: 100vh;
	-moz-tab-size: 4;
	-o-tab-size: 4;
	tab-size: 4;
	background: #1E1E1E;
	color: white;
	font-family: "Montserrat", serif;
	font-weight: 200;
}
header, section, footer, main, nav, aside {
	display: block;
	margin: 0 auto;
	max-width: 960px;
	text-align: center;
}
img, p, a, h1, h2, h3 {
	-webkit-user-drag: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
a {
	color: #4DD0E1;
}
html.js .noscript {
	display: none;
}
html.no-js .noscript {
	display: initial;
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	text-align: center;
	padding: 5px 0;
	background: rgba(102, 0, 0, 0.95);
	animation: noscript 1s;
}
header.header {
	margin: 200px auto 260px auto;
}
header, section {
	display: flex;
	flex-direction: column;
	width: 100%;
	min-height: 40vh !important;
	/* padding: 200px 48px; */
	/* margin: 200px auto; */
	align-items: center;
	/* justify-content: center; */
}
h1.top_logo {
	font-family: "Montserrat", serif;
	font-weight: 400;
	font-size: 30px;
	padding-top: 20px;
}
hr.top_logo {
	width: 60%;
	opacity: .5;
	height: 0px;
	margin: 10px auto 20px auto;
}
.container {
	display: block;
	margin: auto !important;
	min-width: 13em;
	max-width: 52em;
}
.flex_container {
	display: flex;
	justify-content: center;
	flex-flow: row wrap;
}
.logo_content {
	margin-top: 7em;
	max-width: 400px;
	opacity: .8;
	animation: logo_infade 1s cubic-bezier(0, 0, 0, 1);
	transition: all 0.25s ease-in-out;
}
.logo_content:hover {
	transform: scale(1.02);
	opacity: 1;
}
.logo_content img {
	width: 200px;
	height: 200px;
}
h2 {
	padding: 15px 0;
	border-bottom: 2px solid #383838;
	width: 100%;
	font-family: "Montserrat", serif;
	font-weight: 200;
	font-size: 30px;
	padding-top: 20px;
}
h2 span {
	position: relative;
	bottom: -11px;
	color: white;
	display: inline-block;
	padding: 0.4rem 0;
	border-bottom: 4px solid #D5BA5E;
	outline: 0;
}
iframe {
	max-width: 100%;
	width: 600px;
	height: 340px;
	border: 0;
}
.sm_banner {
	position: absolute;
	margin: 10px 0 0 10px;
}
.github_banner {
	width: 300px;
	height: 130px;
	background-color: #37474F;
	border-radius: 5px;
	text-decoration: none;
	transition: all .25s ease-in-out; 
}
.github_banner:hover {
	transform: scale(1.05)
}
.github_banner h1 {
	font-family: "Montserrat", serif;
	font-weight: 400;
	font-size: 22px;
	margin: 0px 0px;
	padding: 20px 25px 0px 25px;
	text-align: left;
	color: white;
	text-decoration: none;
}
.github_banner p {
	font-family: "Montserrat", serif;
	font-weight: 200;
	font-size: 12px;
	margin: 0px 0px;
	padding: 5px 25px;
	text-align: left;
	color: white;
	text-decoration: none;
}
.github_banner div.langdot {
	margin: 10px 25px;
	background-color: red;
	border-radius: 50%;
	width: 12px;
	height: 12px;
}
.github_banner div.langdot p {
	font-family: "Montserrat", serif;
	text-align: left;
	padding: 0px 0px 0px 20px;
    font-size: 12px;
}
.footer {
	position: relative;
	bottom: 0;
	width: 100%;
}
.footer div {
	display: flex;
  	justify-content: center;
	height: 100px;
	text-align: center;
	background-color: #263238;
}

/* ANIMATION KEYFRAMES */
@keyframes logo_infade {
	from {opacity: 0; transform: scale(.8) translateY(40px);}
	to   {opacity: .8; transform: scale(1) translateY(0);}
}
@keyframes noscript {
	from {top: -30px;}
	to   {top: 0px;}
}
	</style>
	<script type="application/javascript">
document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js ';
	</script>
</head>
<body>
	<div class="noscript">PLEASE ENABLE JAVA SCRIPT IN YOUR BROWSER FOR BEST EXPERIENCE!</div>

	<!-- -->
	<header class="header">
		<div class="container">
			<!-- LOGO -->
			<div class="logo_content">
				<img alt="zekro's Logo" src="src/logo.png"/>
				<h1 class="top_logo">zekro Development</h1>
				<hr class="top_logo"/>
				<p>Professional full stack and application developer.</p>
			</div>
		</div>
	</header>

	<!-- ABOUT ME SECTION -->
	<section>
		<h2>ABOUT ME</h2>
		<div>
			<p>
				Hey, my name is Ringo.
				<br><br>
				I am <?php print(getAge("1998-12-12")); ?> years old and a coder since over <?php print(getAge("2013-6-1")); ?> years. My experience, 
				I have collected over this time, mainly relates to front and back end as well as application and web development.
				<br><br>
				Currently, I am an apprentice at a software security and communication company in germany. Mainly, I am working with C# and .NET (Framework and Core), 
				as well as with Go, Node.Js and Java as back end techniques.
				<br><br>
				I have much experiences working with JavaScript <i>(front end web development, nodejs, express, electron)</i>, Go <i>(back end API and Websocket development, mostly with gorilla webkit)</i> and C++ <i>(mostly application development with Qt/QML)</i>.
				<br>
				Also, I am practiced in working with database techniques like MySql, Cassandra,  Postgres and SQLite. Generally, I am working a lot with Linux servers (mostly Debian and some Ubuntu and Arch based distros), so I have also some practice in permission managing of Linux servers, working with container deployment (i.e. Docker) and typical development envoirements like CI or coverage testing.
			</p>
		<div>
	</section>

	<section style="margin-bottom: 350px;">
		<h2>MY PROJECTS</h2>
		<div class="flex_container">
			<a class="github_banner" style="margin-right: 50px; margin-top: 25px;" href="https://github.com/zekroTJA/zekroBot2" target="_blank">
				<h1>zekroBot2</h1>
				<p>Multi universal, multi functional discord bot created with discord.js.</p>
				<div class="langdot" style="background-color: #FFEB3B"><p>JAVASCRIPT</p></div>
			</a>
			<a class="github_banner" style="margin-top: 25px;" href="https://github.com/zekroTJA/tokenToolsR" target="_blank">
				<h1>discordTokenToolsR</h1>
				<p>A web app to check the validity of discord tokens and get information about them.</p>
				<div class="langdot" style="background-color: #039BE5"><p>GO</p></div>
			</a>
			<a class="github_banner" style="margin-top: 50px; margin-right: 50px;" href="https://github.com/zekroTJA/goChat" target="_blank">
				<h1>goChat</h1>
				<p>A simple chat platform with Go websocket backend.</p>
				<div class="langdot" style="background-color: #039BE5"><p>GO</p></div>
			</a>
			<a class="github_banner" style="margin-top: 50px;" href="https://github.com/zekroTJA/yuri" target="_blank">
				<h1>yuri</h1>
				<p>A discord soundboard bot with interactive web interface, API and hotkey client.</p>
				<div class="langdot" style="background-color: #FFEB3B"><p>JAVASCRIPT</p></div>
			</a>
			<a class="github_banner" style="margin-top: 50px; margin-right: 50px;" href="https://github.com/zekrotja/discordjs-cmds" target="_blank">
				<h1>discordjs-cmds</h1>
				<p>Powerfull discord.js commands extension with >5k npm downloads.</p>
				<div class="langdot" style="background-color: #FFEB3B"><p>JAVASCRIPT</p></div>
			</a>
			<a class="github_banner" style="margin-top: 50px;" href="https://github.com/zekroTJA/meautosd" target="_blank">
				<h1>meautosd</h1>
				<p>One of my older projects: A tool to shut down after Adobe Media Encoder queue.</p>
				<div class="langdot" style="background-color: #43A047"><p>C#</p></div>
			</a>
		<div>
	</section>

	<!-- LATEST VIDEO SECTION -->
	<section>
		<h2>LATEST VIDEO</h2>
		<div>
			<iframe title="My last Youtube videos" src="https://www.youtube.com/embed?max-results=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;listType=user_uploads&amp;list=zekrommaster110" allowfullscreen></iframe>
		</div>
	</section>
	
	<section>
	</section>
	<div class="footer">
		<div>
			<div style="margin-right: 50px;">
				<ul style="list-style-type: none; text-align: left;">
					<li><h4 style="margin: 0px;">Info</h4></li>
					<li><p style="margin: 10px 0px 0px;">© 2018 zekro Development</p></li>
					<li><p style="margin: 5px 0px 0px;">All rights reserved.</p></li>
				</ul>
			</div>
			<div style="margin-right: 50px;">
				<ul style="list-style-type: none; text-align: left;">
					<li><h4 style="margin: 0px;">Impress</h4></li>
					<li><p style="margin: 10px 0px 0px;"><a href="https://zekro.de/impress">Impress / Legal Notice</a></p></li>
				</ul>
			</div>
			<div>
				<ul style="list-style-type: none; text-align: left;">
					<li><h4 style="margin: 0px;">Contact</h4></li>
					<li><p style="margin: 10px 0px 0px;">contact@zekro.de</p></li>
					<li><p style="margin: 5px 0px 0px;"><a href="https://zekro.de/discord">Discord (zekro#9131)</a></p></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- LINK BAR CONTAINER -->
	<!-- <div class="bottom-bar">
		<a title="GitHub" href="http://github.com/zekrotja" target="_blank" class="lnk_btn" rel="noopener">
			<img class="lnk_img" alt="github" src="src/lnk_github.svg"/>
		</a>
		<a title="Blog" href="/blog/" target="_blank" class="lnk_btn">
			<img class="lnk_img" alt="blog" src="src/lnk_tumblr.svg"/>
		</a>
		<a title="YouTube" href="https://youtube.com/zekrommaster110" target="_blank" class="lnk_btn">
			<img class="lnk_img" alt="youtube" src="src/lnk_youtube.svg"/>
		</a>
		<a title="Discord" href="/discord/" target="_blank" class="lnk_btn">
			<img class="lnk_img" alt="discord" src="src/lnk_discord.png"/>
		</a>
		<a title="Donation" href="/support/" target="_blank" class="lnk_btn">
			<img class="lnk_img" alt="support" src="src/lnk_doni.svg"/>
		</a>
		<a title="Contact" href="/contact/" target="_blank" class="lnk_btn">
			<img class="lnk_img" alt="contact" src="src/lnk_contact.svg"/>
		</a>
	</div> -->
</body>
</html>
