<html>
<head>
<title>Playing with the FB Places API</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
</head>
<h1>Playing with the FB Places API</h1>
<p>The 5 W's plus H</p>
<p>Please </p>
<img src="http://graph.facebook.com/awesomeincorporated/picture" />

<?php

$json = file_get_contents("http://graph.facebook.com/awesomeincorporated",0);
// print $json;

echo '<hr />';

$obj = json_decode($json);
echo 'Checkins ';
$checkins =  $obj->{'checkins'};
print $checkins; // Number of Facebook Checkins
echo '<br /> Likes ';
$likes = $obj->{'likes'};
print $likes; // Number of Facebook Place Page Likes
echo '<br /> Score ';
$score = $checkins + $likes;
print $score; // Sum of Checkins and Likes
?>

<div>
<p>Testing with JSON</p>
<div id="last-tweet">

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	// get the last tweet
	var url='http://www.bikeky.org/bike-parker/api.php?action=allRacks'; // make the url
	var json=[
	
	{"id":"1","lat":"38.042076","lng":"-84.49234","racks":"1","desc":"One Green rack in front of Awesome Inc.","confirmed":"1","addedBy":"chris","confirmedBy":""},
	{"id":"2","lat":"38.044388","lng":"-84.494926","racks":"3","desc":"Three racks near the Kentucky Theatre","confirmed":"1","addedBy":"chris","confirmedBy":""},
	{"id":"3","lat":"38.044693","lng":"-84.495308","racks":"3","desc":"Three racks near the LFUCG building","confirmed":"1","addedBy":"chris","confirmedBy":""}
	];
	$("#last-tweet").append('<p>'+json[1].lng+'</p>'); // get the second rack in the response and place it inside the div
	$.getJSON("http://www.bikeky.org/bike-parker/api.php?action=allRacks", function(json) {
   alert("JSON Data: " + json.users[3].name);
 });
	$.getJSON(url,function(json2){ // get the tweets
			$("#last-tweet").append('<p>'+json2[0].lat+'</p>'); // get the first rack in the response and place it inside the div
	});
});
</script>

</div>


<p><a href="../">Home</a></p>
</html>