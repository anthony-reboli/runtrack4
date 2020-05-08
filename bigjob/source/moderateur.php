<html>
<head>
	<meta charset="UTF-8">
	<title>moderateur</title>
	<?php
	include("../include/link.php");
	    session_start();

		$connexion =  mysqli_connect("localhost","root","","bigjob");
	?>
</head>
<body>
	<h1>reservation</h1>
	<?php
	include("../include/moderateur/reserv.php");
	?>
	
</body>
</html>