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
			/*print_r($_SERVER["REMOTE_ADDR"]);*/
			$ip = $_SERVER["REMOTE_ADDR"];
			$ipArray = explode(".", $ip);
			//print "This is our array";
			//print_r($ipArray);
			if ($ipArray[0]==129 && $ipArray[1]==82){}
		?>
			<header>
				<a class="#">Home</a>
				<a class="#">Profile 1</a>
			</header>
			<div class="left">
				<h1>Description</h1>
				<p> 
					This is a description of our social network web page. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nunc orci augue, scelerisque vitae nisi vitae, tempus rhoncus odio. 
					Aenean mauris ligula, elementum id scelerisque vel, vestibulum eget dui. 
					Cras velit felis, scelerisque sit amet nisi in, eleifend consectetur est. 
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per 
					inceptos himenaeos. 
					Aenean at mauris lobortis, maximus diam in, varius diam. Nulla accumsan est 
					lectus, volutpat suscipit nulla vestibulum non. Praesent ac tellus non odio 
					dignissim tincidunt accumsan eu arcu. Aliquam erat volutpat. Integer posuere 
					lacus ut diam tristique tincidunt. Integer volutpat est vel erat 
					condimentum, 
					at gravida purus venenatis. Donec tristique metus ac urna rhoncus, at 
					accumsan magna blandit. Integer nec urna urna. Morbi sem leo, ornare sit 
					amet neque id, pulvinar eleifend felis. In et congue augue.
				</p>
			</div>
			<div class="right">
				<h2>Users</h2>
				<ul>
					<li>Profile 1</li>
					<li>Profile 2</li>
				</ul>
			</div>
			<div class="clear"></div>
			<footer>
				<p>Group 5: Kyle, Wally, and Sean</p>
			</footer>
		
	</body>

</html>