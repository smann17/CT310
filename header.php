<?php
			//print_r($_SERVER["REMOTE_ADDR"]);
			$ip = $_SERVER["REMOTE_ADDR"];
			$ipArray = explode(".", $ip);
			//print "This is our array";
			//print_r($ipArray);
			if (($ipArray[0]==129 && $ipArray[1]==82)||($ipArray[0]==10 && $ipArray[1]==84));
			else exit("Invalid IP address");
?>
<header>
		<a href="home.php">Home</a>
		<a href="search.php">Search</a>
</header>
