	<div id='contadminuser' class='col-3'>"
	<h1>Page d'administration</h1>
	<?php
	$requete="SELECT nom,prenom,rank FROM utilisateurs";
	$requeteQ=mysqli_query($connexion,$requete);
					

					echo"<h1>Les utilisateurs</h1>";
					

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