<?php 

header("Content-Type: course/octet-stream"); 

$file = $_GET["file"] . "course.pdf"; 

header("Content-Disposition: attachment; filename=" . urlencode($file)); 
header("Content-Type: course/download"); 
header("Content-Description: File Transfer");			 
header("Content-Length: " . filesize($file)); 

flush(); 

$fp = fopen($file, "r"); 
while (!feof($fp)) { 
	echo fread($fp, 65536); 
	flush(); 
} 

fclose($fp); 
?> 

<!DOCTYPE html> 
<html> 

<head> 
	<title>Download PDF </title> 
</head> 

<body> 
	<center> 
		<h2 style="color:green;">Welcome </h2> 
		<p><b>Click below to download PDF</b> 
		</p> 
		<a href="course.php?file=BANKING">Download PDF Now</a> 
	</center> 
</body> 

</html> 
