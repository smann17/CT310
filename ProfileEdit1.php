<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Project 1 profile page">
	<meta name="keywords" content="social networking, CS, web design">
	<meta name="author" content="Kyle Kurth">
	<link rel="stylesheet" type="text/css" href="styleSheet.css">
	<title>Profile</title>
</head>
	
<body>
	<?php include 'header.php';?>
	<div class="contents">
		<img id="profile picture" src="Sean.jpg" alt="Profile Picture">
		<h3>Summary and Interests:</h3>
		
		<form method="POST" action="<?php
			if(isset($_POST['button'])) { 
				if($_POST['content']==""){
				$_POST['content']="Put your summary and interests here.";
				}
				$a = $_POST['content'];
				$filtered = filter_var($a, FILTER_SANITIZE_STRING);
				$trimmed = trim($filtered);
				$myFile = "ProfileInfo1.txt";
				$fh = fopen($myFile, 'w') or die("can't open file");
				fwrite($fh, $trimmed);
				fclose($fh);
			}
		?>">
		<textarea name="content" rows="5" cols="40"><?php
		$myfile = fopen("ProfileInfo1.txt", "r") or die("Unable to open file!");
		if(filesize("ProfileInfo2.txt")>0){
			echo fread($myfile,filesize("ProfileInfo1.txt"));
		}
		fclose($myfile);
		?> </textarea><br/>
	
		<input name="button" type="submit" value="Save Changes">
	
		</form>
		
		<form method="POST" action="Profile1.php">
			<input type="submit" value="Return to Profile">
		</form>

	</div>
	<?php include 'footer.php';?>

</body>


</html>
