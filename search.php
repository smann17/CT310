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
		<?php include 'header.php';?>
		<div class="contents">
			<p>You  may search either by first or last name</p> 
			   <form  method="post"  id="searchform"> 
			     <input  type="text" name="name"> 
			      <input  type="submit" name="submit" value="Search"> 
			    </form> 
		</div>
		<?php include 'footer.php';?>
	</body>
</html>
