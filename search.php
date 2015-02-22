<!--Group 5, Wally, Kyle, & Sean-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="CT310 project 1">
		<meta name="keywords" content="CSU, CS, student, CT310">
		<meta name="author" content="Sean Mann, Kyle Kurth, Wally Deives">
		<link rel="stylesheet" type="text/css" href="styleSheet.css">
		<title>Search Page</title>
	</head>
	<body>
	<?php include 'header.php';?>
	<div class="leftandright">
		<div class="left">
			<p>You  may search either by first or last name</p> 
			   <form  method="post"  id="searchform"> 
			     <input  type="text" name="name"> 
			      <input  type="submit" name="submit" value="Search"> 
			    </form> 
		</div>
		<div class="right">
			<h2>Users</h2>
			<ul style="list-style: none">
				<li><a href="Profile1.php"><img src="Sean.jpg" alt="Picture of Sean Mann"></a>     Profile 1</li>
				<li><a href="Profile2.php"><img src="DastardlySean.jpg" alt="Picture of Dastardly Sean Mann"></a>     Profile 2</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
		<?php include 'footer.php';?>
	</body>
</html>
