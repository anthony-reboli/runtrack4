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
    include("../include/bar-nav.php");
    ?>
  </header>

  <?php

  if (!isset($_SESSION["id"])) {
    ?>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" pattern=".+@laplateforme.io" name="mail" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="envoiconnexion" class="btn btn-primary">Submit</button>
</form>
              <?php
        include("../include/footer.php");
        ?>
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



                        
                 if (password_verify($_POST['password'], $retour[0][3]))
                 {
                 
                  $_SESSION['id']=$retour[0][0];
                  $_SESSION['rang']=$retour[0][6];
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
                              header("location:index.php");

                              
                            }

 

?>