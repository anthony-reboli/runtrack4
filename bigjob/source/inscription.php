<?php

    session_start();

$connexion =  mysqli_connect("localhost","root","","bigjob");
if (!isset($_SESSION["id"])) {
    

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title> Inscription</title>
    <link rel="stylesheet" href="../bigjob/styles/bigjob.css">
    <?php
    include("../include/link.php");
    ?>
    
</head>

<body id="inscriptionbod">
    <header>
    	<?php
	include("../include/bar-nav.php");

	?>
    </header>
    <main id="inscriptionmain">
    

    <h1 id="h1ins"> Inscription pour les eléves de la Plateforme</h1>
        <section>
        


            <?php
            include("..\include\inscription/form1.php");

        if (isset($_POST['inscription']))
       {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mdp= password_hash($_POST["mdp1"], PASSWORD_DEFAULT, array('cost' => 12));
        

            if ($_POST['mdp1']==$_POST['mdp2'])
            {
            $requet="SELECT* FROM utilisateurs WHERE email='".$email."'";
            $query2=mysqli_query($connexion,$requet);
            $resultat=mysqli_fetch_all($query2);
            $trouve=false;
            foreach ($resultat as $key => $value) 
            {
            if ($resultat[0][4]==$_POST['email'])
            {
               $trouve=true;
               echo "<p class='erreur'><b>email déja existant!!</b></p>";
            }
           }
           if ($trouve==false)
           {
            $sql = "INSERT INTO utilisateurs (nom,prenom,password,email,rank)
                VALUES ('$nom','$prenom','$mdp','$email','user')";
            $query=mysqli_query($connexion,$sql);
            // header('location:connexion.php');
            echo "Inscription reussite";
            }
           }
           else
           {
              echo "<p class='erreur'><b>Les mots de passe doivent être identique!</b></p>";
           }
        }

    ?>
        
        </form>
    </div>
        
    </section>
    <?php
    }
    else 
    {
        header("location:index.php");
    }
    ?>
        </form>
    </section>


   </main>
            <?php
        include("../include/footer.php");
        ?>

</body>

</html>