<?php
	$filename = "header.txt";
	$file = file_get_contents( $filename );
	echo "$file";
?>
<title>Awesome Inc | Technology, Creativity, Startups</title>
<!--start Java slideshow settings-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/fadeslideshow.js">
		
		/***********************************************
		* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
		***********************************************/
		//settings: http://www.dynamicdrive.com/dynamicindex14/fadeinslideshow.htm
		</script>
		<script type="text/javascript" src="./scripts/fadeslidesettings.js"></script>
<!--end Java slideshow settings-->
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
				<h2>Growing high tech, creative, and entrepreneurial companies and communities.</h2>
				<div id="scroller">
					<!-- <img src="./images/scroller/coworking.jpg" alt="Coworking at Awesome Inc"/> -->
				</div>
			</div>
			<!-- end feature -->
			<!-- start blog -->
			<div id="blog">
				<h2>Our Blog</h2>
				<div class="blog_post">
					<img src="./images/blog/IN2LEXlogo.png" />
					<h3><a href="http://awesomeinc.org/2011/04/05/april-is-highlights-events-in-lexington/">April Is highlights events in Lexington</a></h3>
					<h4>By Jessica Powers</h4>
				</div>
				<div class="blog_post">
					<img src="./images/blog/film-reel.png"  alt="Highbridge film reel"/>
					<h3><a href="http://awesomeinc.org/2011/03/25/the-best-of-highbridge-night-to-celebrate-the-arts-and-film/">The Best of Highbridge Night to celebrate the arts and film</a></h3>
					<h4>By Molly Philips</h4>
				</div>
				<div class="blog_post">
					<img src="./images/blog/mobilex1.png" alt="MobileX Conference logo" />
					<h3><a href="http://awesomeinc.org/2011/03/17/mobilex-2011/">MobileX 2011</a></h3>
					<h4>By Jessica Powers</h4>
				</div>
				<p>Want to write for us? Fill out <a href="#" >this form</a>.</p>
			</div>
			<!-- end blog -->
			<!-- start cal & map -->
			<div>
				<div style="width: 460px; float: left; background: #444;">
				<h2>Spotlight</h2>
				<img src="" width="300" height="300"/>
				<p>Here is some sample text about some member of our team we can spotlight. ACox just walked in, so let's pretend it's a picture of him.</p>
				</div>
				<iframe src="https://www.google.com/calendar/embed?title=Events%20at%20Awesome%20Inc&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=1&amp;showTz=0&amp;mode=DAY&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=j79e57kuj23s5mpdj65mhnrdmg%40group.calendar.google.com&amp;color=%234A716C&amp;src=av1rspu9cnsotu0tcdncocqseg%40group.calendar.google.com&amp;color=%23B1440E&amp;src=kutcskq8ddq9e1o4afv93fbu04%40group.calendar.google.com&amp;color=%235229A3&amp;src=cncjdce95kq34nl1opt6m94ifc%40group.calendar.google.com&amp;color=%237A367A&amp;src=admin%40awesomeinc.org&amp;color=%23A32929&amp;ctz=America%2FNew_York" style=" border-width:0; float: left; " width="460" height="400" frameborder="0" scrolling="no"></iframe>
				<p style="clear: both;"><a href="#">Submit an event...</a></p>
			</div>
			<!-- end cal & map -->
		</div>
	<!-- end main -->

<?php
	$filename = "footer.txt";
	$file = file_get_contents( $filename );
	echo "$file";
?>