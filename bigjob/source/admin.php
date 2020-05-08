<?php

    session_start();

$connexion =  mysqli_connect("localhost","root","","bigjob");
?>
<html>

<head>
	<meta charset="UTF-8">
	<title>admin</title>
	    <link rel="stylesheet" href="../styles/bigjob.css">
    <?php
    include("../include/link.php");
    ?>
</head>
<body>
<div id="cont">
	<h1>Page d'administration</h1>
	<?php
	$requete="SELECT nom,prenom,rank FROM utilisateurs";
	$requeteQ=mysqli_query($connexion,$requete);
	
					echo"<h1>Les utilisateurs</h1>";
					echo "<div id='contA'>";

					while($data= mysqli_fetch_assoc($requeteQ))
					{
						
						$i=0;
								$nom=$data['nom'];
								$prenom=$data['prenom'];
								$rank=$data['rank'];

	  	//echo"<section class=\"thep\">";
						echo" <div class=\"ligneA\">";
		// echo "<h1>{<a href =\"produit.php?id=$did\">$data['nomproduit']}</h1></a>";
						echo "&nbsp|&nbsp nom:&nbsp $nom &nbsp|&nbsp ";
						echo "&nbsp|&nbsp prenom :&nbsp $prenom &nbsp|&nbsp";
						echo "&nbsp|&nbsp rang :&nbsp $rank &nbsp |&nbsp";
						echo "</div>";
		//echo"</section>";
						$i++;



					}
					echo "</div>";
						echo"<div id='contB'>";
						echo"<h1>Modification de grade</h1>";
							?>
							<form method="post">
								<input type=text name="name" placeholder="Pseudo">
								<select id="cars" name="rang1">
  									<option value="">Choisir LE RANG</option>
  									<option value="modo">Modérateur</option>
  									<option value="user">Utilisateur</option>
  									<option value="admin">Admin</option>
								</select>
								<input type="submit" name="modifier">
							</form>

						
							<?php
								if(isset($_POST['modifier']))
								{
									$rang1=$_POST['rang1'];
									$nameF=$_POST['name'];
									$requete3="UPDATE utilisateurs SET rank='$rang1' WHERE nom='$nameF'";
									$requete3Q=mysqli_query($connexion,$requete3);
									header("refresh:0");
								}
						echo"</div>";

					echo"<div id='contC'>";
						echo"<h1>Le staff</h1>";
						$requete2="SELECT nom,prenom,rank FROM `utilisateurs` WHERE rank='admin' OR rank='modo'";
						$requete2Q=mysqli_query($connexion,$requete2);

										while($data2= mysqli_fetch_assoc($requete2Q))
								{
						
									$i=0;
									$nom=$data2['nom'];
									$prenom=$data2['prenom'];
									$rank=$data2['rank'];

	  	
									echo" <div class=\"ligneC\">";
		
										echo "&nbsp|&nbsp nom:&nbsp $nom &nbsp|&nbsp ";
										echo "&nbsp|&nbsp prenom :&nbsp $prenom &nbsp|&nbsp";
										echo "&nbsp|&nbsp rang :&nbsp $rank &nbsp |&nbsp";
									echo "</div>";
		
									$i++;



								}

					echo"</div>";




	?>
</div>
	
</body>
</html>