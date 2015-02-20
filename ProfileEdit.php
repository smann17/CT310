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
		
		<form method="POST" action="<?php
			if(isset($_POST['button'])) { 
				$a = $_POST['content'];
				$myFile = "Profile1.txt";
				$fh = fopen($myFile, 'w') or die("can't open file");
				fwrite($fh, $a);
				fclose($fh);
			}
		?>">
		<textarea name="content" rows="5" cols="40"><?php
		$myfile = fopen("Profile1.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("Profile1.txt"));
		fclose($myfile);
		?> </textarea><br/>
	
		<input name="button" type="submit" value="Save Changes">
	
		</form>
		
		<form method="POST" action="Profile.php">
			<input type="submit" value="Return to Profile">
		</form>

	</div>
	
	<div class="footer">
	
	</div>
</body>


</html>
