<?php
$requete="SELECT reservations.id,debut,fin,nom,prenom FROM reservations INNER JOIN utilisateurs ON utilisateurs.id = reservations.id_user where valide is NULL";
	$requeteQ=mysqli_query($connexion,$requete);
	
	

	while($data= mysqli_fetch_assoc($requeteQ))
					{
						var_dump($data);
						$i=0;
								$reservationid=$data['id'];
								$nom=$data['nom'];
								$prenom=$data['prenom'];
								$debut=$data['debut'];
								$fin=$data['fin'];

						echo" <div class=\"ligneA\">";

						echo "&nbsp|&nbsp nom:&nbsp $nom &nbsp|&nbsp ";
						echo "&nbsp|&nbsp prenom :&nbsp $prenom &nbsp|&nbsp";
						echo "&nbsp|&nbsp debut :&nbsp $debut &nbsp |&nbsp";
						echo "&nbsp|&nbsp debut :&nbsp $fin &nbsp |&nbsp";
						?>
						<form method="post">
						<input type="hidden" name="id" value="<?php echo $data['id'];?>" />
						<input name='sup' value='Supprime' type='submit'>
						<input name='yes' value='oui' type='submit'>
						<input name='no' value='non' type='submit'>
					
					</form>
					<?php

						if(isset($_POST['id']))
						{
							if(isset($_POST['sup']))
							{
								$pid=$_POST['id'];
								$requete2="DELETE FROM reservations where id = $pid";
								$requete2Q=mysqli_query($connexion,$requete2);
								var_dump($requete2);
								header("location:moderateur.php");
							}

							elseif(isset($_POST['yes']))
							{
								$pid=$_POST['id'];
								$requete3="UPDATE reservations SET valide= 'oui' where id = $pid";

								$requete3Q=mysqli_query($connexion,$requete3);
								var_dump($requete3);
								header("location:moderateur.php");
							}

							elseif(isset($_POST['no']))
							{
								$pid=$_POST['id'];
								$requete2="UPDATE reservations SET valide = 'non' where id = $pid";
								$requete2Q=mysqli_query($connexion,$requete2);
								var_dump($requete2);
								header("location:moderateur.php");
							}
						}



						echo "</div>";

						$i++;



					}