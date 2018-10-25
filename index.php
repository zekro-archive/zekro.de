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
   <link rel="stylesheet" href="css/mainpage.css"/>
   <link rel="manifest" href="manifest.json"/>
   <script type="application/javascript">
document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js ';
   </script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128101744-1"></script>
   <script>
		 window.dataLayer = window.dataLayer || [];
		 function gtag(){dataLayer.push(arguments);}
		 gtag('js', new Date());

		 gtag('config', 'UA-128101744-1');
   </script>
</head>
<body>
   <div class="noscript">PLEASE ENABLE JAVA SCRIPT IN YOUR BROWSER FOR BEST EXPERIENCE!</div>

   <!-- SM BANNER -->
   <!--<div class="sm_banner">
	   <a rel="nofollow noopener" href="https://signaltransmitter.de/ref/1f6r1028r25ef6550" target="_blank"><img src="https://signaltransmitter.de/st-img/linkus/linkus_275x40.png" alt="SIGNALTRANSMITTER.de Hosting"/></a>
   </div>-->

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

   <section>
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
				   <li><p style="margin: 10px 0px 0px;">Â© 2018 zekro Development</p></li>
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

</body>

</html>
