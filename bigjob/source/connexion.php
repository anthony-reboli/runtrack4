<html>
<head>
  <meta charset="UTF-8">
  <title>connexion</title>
      <link rel="stylesheet" href="../bigjob/styles/bigjob.css">
    <?php
    session_start();
    include("../include/link.php");
    ?>
</head>
<body>
    <header>
    <?php
    include("../include/header.php");
    ?>
  </header>
  <?php
  if (!isset($_SESSION["id"])) {
    ?>
  <form method="post">

          <input pattern=".+@laplateforme.io" type="email" class="form-control" id="inputEmail4" name="mail">
          <input type="password" name="password">
          <input type="submit" name="envoiconnexion">

  </form>
  
</body>
</html>
<?php




  $connexion=mysqli_connect("localhost","root","","bigjob");
if (isset($_POST['envoiconnexion']))
{
        if (!empty($_POST['mail']) && !empty($_POST['password']))
          {
           
            $mail=htmlspecialchars($_POST['mail']);
           
            $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));


            //REQUETTE VERIFICATION
            $requete=("SELECT * FROM utilisateurs  where email = '$mail' ");
            $sql=mysqli_query($connexion,$requete);
            $retour=mysqli_fetch_all($sql);  
            var_dump($retour);


                        
                 if (password_verify($_POST['password'], $retour[0][3]))
                 {
                 
                  $_SESSION['id']=$retour[0][0];
                  echo "connecté";
                 
                  //header("location: index.php");
                }
            else
            {
              echo "le mot de passe ou le login ne correspond pas !";
            }
          }
   else
   {
    echo "remplissez tous les champs !";
   }
}
                            }
                            else{
                              header("location:inscription.php");

                              echo"cococo";
                            }

 

?>