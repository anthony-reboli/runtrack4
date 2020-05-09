<?php

    session_start();

$connexion =  mysqli_connect("localhost","root","","bigjob");
?>
<html>
<?php 
if($_SESSION['rang']=='admin')
{


	?>

<head>
	<meta charset="UTF-8">
	<title>admin</title>

     <?php
    
     include("../include/link.php");
    ?>
</head>
<body>

		<header>
		<?php
		include("../include/header.php");
		?>
	</header>
<div id="cont" class="row justify-content-center">
	<?php
	include("../include/admin/user.php");
	include("../include/admin/modif.php");
	include("../include/admin/staff.php");

						

echo"</div>";




	?>
</div>
				<?php
		include("../include/footer.php");

}
else{
	header("location:index.php");
}
		?>

</body>
</html>