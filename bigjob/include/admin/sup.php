
						<form method="post">
						<input type="hidden" name="id2" value="<?php echo $data['id'];?>" />
						<input name='sup3' value='Supprime' type='submit' class="btn btn-danger">
						</form>

<?php
												 if(isset($_POST['id2']))
						 {
						 	if(isset($_POST['sup3']))
						 	{
						 		$pid=$_POST['id2'];
						 		$requete2S="DELETE FROM utilisateurs where id = $pid";
						 		$requete2SQ=mysqli_query($connexion,$requete2S);
						 		var_dump($requete2S);
						 		header("refresh:0");
						 	}


						 }

						 ?>