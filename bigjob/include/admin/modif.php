echo"<div id='contB'>";
						echo"<h1>Modification de grade</h1>";
							?>
							<form method="post">
								<input name="search"type="text" placeholder="Recherche par nom" id="searchBox">
								<div id="response"></div>
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
									$nameF=$_POST['search'];
									$requete3="UPDATE utilisateurs SET rank='$rang1' WHERE nom='$nameF'";
									$requete3Q=mysqli_query($connexion,$requete3);
									header("refresh:0");
								}
						echo"</div>";