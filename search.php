<!--Group 5, Wally, Kyle, & Sean-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="CT310 project 1">
		<meta name="keywords" content="CSU, CS, student, CT310">
		<meta name="author" content="Sean Mann, Kyle Kurth, Wally Deives">
		<link rel="stylesheet" type="text/css" href="styleSheet.css">
		<title>Welcome to our social media website</title>
	</head>
	<body>
		<?php
			print_r($_SERVER["REMOTE_ADDR"]);
			$ip = $_SERVER["REMOTE_ADDR"];
			$ipArray = explode(".", $ip);
			//print "This is our array";
			print_r($ipArray);
			if (($ipArray[0]==129 && $ipArray[1]==82)||($ipArray[0]==10 && $ipArray[1]==84));
			else exit("Invalid IP address");
		?>
		<?php include 'header.php';?>
		<p>You  may search either by first or last name</p> 
	    <form  method="post"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
		<?php include 'footer.php';?>
	</body>
</html>
