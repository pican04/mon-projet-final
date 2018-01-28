<?php
    //Connection Ã  la BD db_boutique
    include('connexion.php');
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="C'est une appication pour les cv en ligne">
    <link rel="stylesheet" type="text/css" href="">
    <meta rel="icon" content="cv codeuse">
    <title>DASHBOARD</title>
    <!--LiÃ© Bootstrap
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SheisthecodeCv</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">BIENVENUE
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inscription.php">S'inscrire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Se connecter</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br>
    <div class="container">
    <section >
        <div class="row">
            <div class="col-md-3">
                    <br>
                    <div class="left1" style="padding-left: 20px;" style="padding-bottom: 30px;">
                    <p><a href="profil.php">Modifier profil</a></p>
                    <p><a href="cv.php">Creer CV</a></p>
                    <p><a href="#">Afficher votre CV</a></p>
                    <p class="nav-item active"><a href="experience.php">Ajouter experience</a></p>
                    <p><a href="diplome.php">Ajouter diplome</a></p>
                    <p><a href="interet.php">Ajouter centre d'interet</a></p>
                    </div>
                </div>
            <div class="col-md-2">
             <br>
             <div><p>IPOTE Nadia</p>
                  <p>né le 10/10/1978</p>
                  <p>email</p>
                  <p>tel</p>
                  <p>adresse</p>
             </div>


            </div>
            <div class="col-md-4">
                <br>
                <div><h1>Resume</h1> <p align="center">Vous avez besoin de pertinence, de notoriété et de visibilité sur les moteurs de recherche. Je connais vos problématiques et je souhaite vous apportez les bonnes réponses dans la bonne humeur et l'efficacité</p></div>
            </div>
            <div class="col-md-3">
                <br>
                <div class="col-md-2" style="padding-bottom: 50px," style="padding-left: 50px;">
            <img src="img/nadia.jpg" class="img-circle"  align="center">
            <br>
            <p align="center">Nadia IPOTE</p></div>
            <img src="img/téléchargement.png" style="width: 20px; height: 20px;">
            <img src="img/téléchargement 2.png" style="width: 20px; height: 20px;">
            <img src="img/téléchargement1.jpg" style="width: 20px; height: 20px;">


            </div>
        </div>
    </section>
            <div class="">

            <section class="solution">
                <h1 align="center">Mes experiences</h1>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-3"><p>10/10/2012-02/03/2013</p></div>  
                
                
                <div class="col-md-3"><p>Developpeur junior</p></div>

                <div class="col-md-4"><p align="center">Vous avez besoin de pertinence, de notoriété et de visibilité sur les moteurs de recherche. Je connais vos problématiques et je souhaite vous apportez les bonnes réponses dans la bonne humeur et l'efficacité</p></div>

                <div class="col-md-2"><p>Akendewa</p></div>
            </div>
            </section>
            </div>
             <div class="">

            <section class="solution">
                <h1 align="center">Mes diplomes</h1>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-3"><p>2015</p></div>  
                
                
                <div class="col-md-3"><p>Developpeur junior</p></div>

                <div class="col-md-4"><p align="center">Vous avez besoin de pertinence, de notoriété et de visibilité sur les moteurs de recherche. Je connais vos problématiques et je souhaite vous apportez les bonnes réponses dans la bonne humeur et l'efficacité</p></div>
                
            </div>
            </section>
            </div>


               
</body>
</html>
