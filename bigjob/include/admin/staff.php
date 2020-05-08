<?php
echo"<div id='contA'>";
						echo"<h1>Le staff</h1>";
						$requete2="SELECT nom,prenom,rank FROM `utilisateurs` WHERE rank='admin' OR rank='modo'";
						$requete2Q=mysqli_query($connexion,$requete2);

										while($data2= mysqli_fetch_assoc($requete2Q))
								{
						
									$i=0;
									$nom=$data2['nom'];
									$prenom=$data2['prenom'];
									$rank=$data2['rank'];

	  	
									echo" <div class=\"ligneA\">";
		
										echo "&nbsp|&nbsp nom:&nbsp $nom &nbsp|&nbsp ";
										echo "&nbsp|&nbsp prenom :&nbsp $prenom &nbsp|&nbsp";
										echo "&nbsp|&nbsp rang :&nbsp $rank &nbsp |&nbsp";
									echo "</div>";
		
									$i++;



								}