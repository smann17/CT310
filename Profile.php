<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Project 1 profile page">
	<meta name="keywords" content="social networking, CS, web design">
	<meta name="author" content="Kyle Kurth">
	<title>Profile</title>
</head>
	
<body>
	<div class="header">
	
	</div>

	<div class="contents">
		<img id="profile picture">
		<p>Summary and Interests:</p>
		<?php
		$myfile = fopen("Profile1.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("Profile1.txt"));
		fclose($myfile);
		?> 


	

	</div>
	
	<div class="footer">
	
	</div>
</body>


</html>
