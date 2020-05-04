<?php
session_start();
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="plesk.css">
    <link rel="stylesheet" href="responsive/index.css">
</head>
<header id="headerindex">

    </div>
      <nav class="menu">
      <ol>
        <li class="menu-item"><a href="index.php">Home</a></li>
        <li class="menu-item"><a href="sources/profil.php">Profil</a></li>
        <li class="menu-item"><a href="sources/contact.php">contact</a></li>

     
      </ol>
    </nav>
</header>

<body id="bodind">



                
                        <div class="titreII">
                            
                            <p class="text">Bonjour, bienvenue sur mon site.</p>
                            <p class="text">Ce site a été crée pour vous montrer mes projets HTML/SQL/PHP</p>
                            <p class="text">Chaque projet me permet d'evoluer pour avoir le diplome RNCP.</p>
                            
                        </div>
                        
    
    <main id="mainindex">
        
    
    <h1 class="titre"> Presentation des projets</h1><br>

        <section id="conttexte">
                <h1 class="titre2">Evolution depuis septembre 2019 (php/sql)</h1>
            <section id="PHP">
                
                            <div id="photorec">
                                <div class="div1">
                                    <a href=""><img class="imgind" src="upload/boutique.png"/></a>
                                    <a href=""><img class="imgind" src="upload/reservation.png"/></a>
                                </div>
                                <div class="div1">
                                    <a href=""><img class="imgind" src="upload/camp.png"/></a>
                                    <a href=""><img class="imgind" src="upload/mdc.png"/></a>
                                </div>
                            </div>
            </section>
<h1 class="titre2">HTML/css septembre 2019</h1>
            <section id="HTML">

                
                <div id="photorec">
                        <div class="div1">
                                <a href=""><img class="imgind" src="upload/work.png"/></a>
                                <a href=""><img class="imgind" src="upload/404.png"/></a>
                        </div>
                            <div class="div1">
                                <a href=""><img class="imgind" src="upload/apli.png"/></a>
                                <a href=""><img class="imgind" src="upload/ide.png"/></a>
                            </div>
                        </div>
                          <div class="titre3">
                            <h1 class="titre">Liens utiles</h1>
                        </div>
            </section>
            <br>
            
        
  
    </main>
<?php include("include/footer.php"); ?>
</body>

</html>