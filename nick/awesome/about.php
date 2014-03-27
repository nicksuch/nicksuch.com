<?php
	$filename = "header.txt";
	$file = file_get_contents( $filename );
	echo "$file";
?>

<title>Awesome Inc | About</title>
</head>
<body>
<!-- start twitter_bar -->
<div id="twitter_bar">
		  <ul id="twitter_update_list"></ul>
	   </div>

<!-- end twitter_bar -->
<!-- start outer_container -->
<div id="outer_container">
<!-- start inner_container -->
	<div id="inner_container">
		<!-- start header -->
		<div id="header">
			<a href="./"><img src="./images/awesomeinc_logo6.png" /></a>
			<!-- These links should be a horizontal list -->
			<p><a href="">Coworking</a> | <a href="">Events</a> | <a href="about.php">About</a> | <a href="">Contact</a></p>
			<img src="./images/social_icons.png" />
			<img src="./images/searchbar.png" />
		</div>
		<!-- end header -->
		<!-- start main -->
		<div id="main">
			<!-- start feature -->
			<div id="feature">
				<h2>About</h2>
				<p>Founded in 2009, Awesome Inc is an epicenter for the communities of technology, creativity, and startups.</p> 
				<p>By day, Awesome Inc serves as a co-working space for creative and technical professionals. We currently have 15 early-stage companies who utilize this shared office space.</p> 
				<p>By night, the space is transformed into a dance studio, art gallery, event venue, and creative laboratory.</p> 
				<p>Awesome Inc is also involved in the following initiatives:</p> 
				<ul>
					<li><a href="http://awesometouch.org" target="_blank">AwesomeTouch</a></li>
					<li><a href="http://awesomelabs.org" target="_blank">Awesome Labs</a></li>
					<li><a href="http://awesomegallery.wordpress.com/" target="_blank">Awesome Art Gallery</a></li>
					<li><a href="http://nextington.com" target="_blank">Nextington</a></li>
					<li>Rock Star Association</li>
					<li><a href="http://entrepreneurhof.com" target="_blank">Entrepreneur Hall of Fame</a></li>
					<li><a href="http://younges.org" target="_blank">Young Entrepreneurs of Lexington</a></li>
					<li><a href="http://mobilexconference.com" target="_blank">MobileX Conference</a></li>
					<li><a href="http://www.dsa.awesomeinc.org/" target="_blank">DSA</a></li>
					<li>AwesomeCamp</li>
					<li><a href="http://5across.org" target="_blank">5Across</a></li>
				</ul>
				<h3>Founders</h3>
				<p>Would you like one of our innovative founders to speak at your event? Check us out on <a href="http://speakergram.com/awesomeinc" target="_blank">SpeakerGram</a>.</p>
				<h4>Topics</h4>
				<ul>
					<li>Building a tech startup community outside Silicon Valley</li>
					<li>Harnessing the power of interns</li>
					<li>Hosting successful conferences on the cheap</li>
					<li>Business Model design</li>
					<li>Following your passion</li>
					<li>Effective use of social media marketing</li>
					<li>Trends in mobile software</li>
					<li>Large-format interactive touchscreen technology</li>
					<li>Experiential entrepreneurship education for engineering students</li>
				</ul>
			</div>
			<!-- end feature -->
		</div>
	<!-- end main -->

<?php
	$filename = "footer.txt";
	$file = file_get_contents( $filename );
	echo "$file";
?>