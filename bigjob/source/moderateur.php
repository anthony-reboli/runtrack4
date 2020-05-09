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
	<?php
	if($_SESSION['rang']=='admin' or $_SESSION['rang']=='modo' )
	{
		?>
	<header>
		<?php
		include("../include/bar-nav.php");

		?>
	</header>

	<div id="containmodo"class="row">
		
		<?php
		include("../include/moderateur/reserv.php");
		include("../include/moderateur/accepter.php");

		?>

	</div>

			<?php
		include("../include/footer.php");
	}
	else
	{
		header("location:index.php");
	}
		?>
	
</body>
	
</html>