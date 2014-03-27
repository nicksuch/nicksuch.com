<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<style>
  #header { text-align: center;}
  #main { padding: 20px; }
  body { background-color: white ; font-family: Arial, sans-serif; font-size: 16px; }
  input, select, textarea { font-size: 18px; }
  table {background-color: white;}
  .helptext {font-size: 9px;}
</style>

</head>
<body>

<!-- Create list of files in photos directory. To control Flash video, update settings.xml based on photo folder contents. -->
<p>Photo &amp; Video Interface</p>
<table cellpadding="5" cellspacing="0" border="1">
<tr><th>Photo</th></tr>

<?php 

$dir = "noc";
$photo1 = '<tr><td><a href="';
$photo2 = '"><img src="';
$photo3 = '" border="1" height="96"></a></td></tr>';

//Create table with user uploaded photos
if($handle = opendir($dir)) 
{ 
    while($file = readdir($handle)) 
    { 
        clearstatcache();	
        if(is_file($dir.'/'.$file) )
            {	
			echo "$photo1$dir/$file$photo2$dir/$file$photo3";
			// NSuch: uncomment this if files won't delete
			//chmod("$dir$file", 0777);
			}			
    } 
    closedir($handle);
}
?>
</table>
</body>
</html>