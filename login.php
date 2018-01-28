<?php
  //on fait appel au fichier de connexion 
  include('connexion.php');
  // on initialise une variable $msg qui va recevoir les messages insertion reussie ou les messages d'erreurs
  $msg="";
  //on verifie si l'utilisateur a bien cliquer sur le button valider
  if (isset($_POST['btnValider'])){
    // on insert les donnees provenant du formulaire dans la table categories 
    $sql= "INSERT INTO codeuse (email,mdp) VALUES ('".$_POST['email']."','".$_POST['mdp']."')";
    $result=mysqli_query($link  ,$sql);
    if ($result) {
      $msg='Insertion reussie';
    }else{
      $msg=mysqli_error($link);
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=" c'est une application pour les cv en ligne">
  <meta name="author" content="cv codeuse">
  <title> login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css1/sb-admin.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SheisthecodeCv</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
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
    <hr>
    <br>
    <br>
  <div class="container">
    <section class="webmaster">
    <div class="card card-login mx-auto md-3">
      <div class="card-header">LOGIN</div>
      <div class="card-body">
        <form action="accueil.php" method="post" role="form">
          <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input class="form-control" id="email" type="email" placeholder="Enter votre email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input class="form-control" id="mdp" type="password" placeholder="Entrer votre mdp" name="mdp">
          </div>
           <button class="btn btn-primary btn-block" href="articles.php" name="btnValider" type="submit">Validez</button>
          <?php
          //en cliquant sur le bouton validez qui a pour nom btnValider il nous ramene toutes les infos de notre base de donnée user identifies en bas.
          if (isset($_POST['btnValider'])){
            $sql= "SELECT * FROM codeuse WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'
            AND mdp='".mysqli_real_escape_string($link, md5($_POST['mdp']))."'";
            $req= mysqli_query($link,$sql); die($link);
            if (mysqli_num_rows($req)>0) {
                $data=mysqli_fetch_array($req);
                $_SESSION['variable']=$data['id'];
                header('location: dashboard.php');
              
            }else{
              echo "indentifiant incorrecte";
            }
            }
            

           ?>
           }
        </form>
      </div>
    </div>
    </section>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
