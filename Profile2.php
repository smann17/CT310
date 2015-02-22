<!--Group 5, Wally, Kyle, & Sean-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Project 1 profile page">
	<meta name="keywords" content="social networking, CS, web design">
	<meta name="author" content="Kyle Kurth">
	<link rel="stylesheet" type="text/css" href="styleSheet.css">
	<title>Profile2</title>
</head>

<body>

	<?php include 'header.php';?>
	<div class="contents">
		<h2>Profile 2</h2>
		<img id="profile picture" src="DastardlySean.jpg" alt="Profile Picture">
		<div id= "clear"></div>
		<h3>Summary and Interests:</h3>
		<?php
		$myfile = fopen("ProfileInfo2.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("ProfileInfo2.txt"));
		fclose($myfile);
		?> 
		<form method="POST" action="ProfileEdit2.php">
			<input type="submit" value="Edit">
		</form>
	</div>
	<?php include 'footer.php';?>
</body>


</html>
