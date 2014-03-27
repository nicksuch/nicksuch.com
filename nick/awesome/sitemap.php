<?php
	$filename = "header.txt";
	$file = file_get_contents( $filename );
	echo "$file";
?>

		<!-- start main -->
		<div id="main">
			<!-- start feature -->
			<div id="feature">
				<h2>Sitemap</h2>
				<h3>Co-working</h3>
				<ul>
					<li>View our current co-working companies (have logos of all companies that just sends a direct link to their co website)</li>
					<li>Apply to become a tenant (opens up tenant application)</li>
					<li>More information about space (lists rent price, amenities included, address, etc)</li>
					<li>Click to view flythrough of space (we recreate a video of the space, also a new version of sketch-up)</li>
				</ul>
				<h3>Events</h3>
				<ul>
					<li>View our calendar of upcoming events (goes to large calendar)</li>
					<li>event form application (goes to event application)</li>
					<li>more info on events (this is sales prices, etc (sales promo, our venue ad))</li>
					<li>brands (brands of ainc that hold events like 5 Across, mobileX, etc)</li>
				</ul>
				<h3>Labs ( if it doesn't go to site)</h3>
				<ul>
					<li>information (what screens have been created and for whom)</li>
					<li>locate touch screens (map of local Atouch screens)</li>
					<li>learn about the team (team member profiles</li>
					<li>other projects</li>
				</ul>
				<h3>Media</h3>
				<ul>
					<li>press releases</li>
					<li>blogs</li>
					<li>twitter</li>
					<li>flickr stream</li>
					<li>youtube</li>
					<li>Facebook</li>
					<li>Media Kit</li>
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