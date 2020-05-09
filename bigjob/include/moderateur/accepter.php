<div id="contreserv2" class="col-6 justify-content-center">
	<h1>reservation valider</h1>
<?php
$requete="SELECT reservations.id,debut,fin,nom,prenom FROM reservations INNER JOIN utilisateurs ON utilisateurs.id = reservations.id_user where valide ='oui'";
	$requeteQ=mysqli_query($connexion,$requete);
	
	


	while($data = mysqli_fetch_assoc($requeteQ))
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
						<input type="hidden" onclick="history.go(0)" name="id" value="<?php echo $data['id'];?>" />
						<input name='sup2' value='Supprime' type='submit' class="btn btn-danger">
						</form>
					<?php





						echo "</div>";

						$i++;

												 if(isset($_POST['id']))
						 {
						 	if(isset($_POST['sup2']))
						 	{
						 		$pid=$_POST['id'];
						 		$requete2="DELETE FROM reservations where id = $pid";
						 		$requete2Q=mysqli_query($connexion,$requete2);

						 	
						 	}


						 }



					}

?>
</div>