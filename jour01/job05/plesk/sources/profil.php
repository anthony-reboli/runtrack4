<?php
session_start();
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="../plesk.css">
    <link rel="stylesheet" href="../responsive/profil.css">
</head>


<body id="bodprof">
    <header>

    </div>
      <nav class="menu">
      <ol>
        <li class="menu-item"><a href="../index.php">Home</a></li>
        <li class="menu-item"><a href="sources/profil.php">Profil</a></li>
        <li class="menu-item"><a href="sources/contact.php">contact</a></li>

     
      </ol>
    </nav>
</header>



                
    <main id="mainprof">
    <div id="case1">
        <div id="perso">
            <h1>Ma carriere</h1>
            <p>J'ai debutée le developement web grace à la formation LaPlateforme qui a debuté en septembre 2019</p>
            <br>
            <p>Ancien interimaire j'ai dessider de changer de voix.Pationer par l'informatique, je me suis lancer a creer mes premiere pages</p>
        </div>

        <div id="moi1">
            <h1>Il faut savoir sur moi :</h1>
            <p>Je suis née le 17 septembre 1997</p>
            <p>J'aime le travail en equipes</p>
            <p>Je suis debrouillard et je m'investi a 100% sur les projets.</p>
            <p>ayant travailler en interim je suis ressorti avec des regles de rigeur et de securiter optimiser</p>
        </div>
    </div>

    <div id="case2">
        <div id="comp1">
            <h1>Mes competence notée sur 5☆</h1>
    <div>
            <ul>
                <li>HTML   ☆☆☆☆</li>
                <li>CSS    ☆☆
                <li>PHP   ☆☆☆</li>
                <li>SQL   ☆☆☆</li>
                <li>JS    ☆(en apprentissage)</li>   
                <li>Création   ☆☆☆</li>
                <li>Rénovation   ☆☆☆</li>
            </ul>
    </div>
        </div>
    </div>


  
    </main>
<?php include("../include/footer.php"); ?>
</body>

</html>