
<div id="contreserv1" class="col-6 justify-content-center">
	<h1>reservation</h1>

<?php

$requete="SELECT reservations.id,debut,fin,nom,prenom FROM reservations INNER JOIN utilisateurs ON utilisateurs.id = reservations.id_user where valide is NULL";
	$requeteQ=mysqli_query($connexion,$requete);
	
	

	
	

	while($data= mysqli_fetch_assoc($requeteQ))
					{
						
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
						<input name='sup' onclick="history.go(0)" value='Supprime' type='submit' class="btn btn-danger">
						<input name='yes'onclick="history.go(0)" value='oui' type='submit' class="btn btn-success">
						
					
					</form>
					<?php

						if(isset($_POST['id']))
						{
							if(isset($_POST['sup']))
							{
								$pid=$_POST['id'];
								$requete2="DELETE FROM reservations where id = $pid";
								$requete2Q=mysqli_query($connexion,$requete2);
								
														 		

							}

							elseif(isset($_POST['yes']))
							{
								$pid=$_POST['id'];
								$requete3="UPDATE reservations SET valide= 'oui' where id = $pid";

								$requete3Q=mysqli_query($connexion,$requete3);
								
								
							}


						}



						echo "</div>";

						$i++;



					}
					?>
					</div>