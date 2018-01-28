<!--inserrer le code connexion.php-->
<?php include('connexion.php');
  $msg="";
  //pour faire la mise a jour des valeurs deja enregistrées dans mon (formulaire /tableau) en vu d'une modification
  if (isset($_GET['id'])){
    $update="SELECT * FROM codeuse WHERE id=".$_GET['id'];
  $res=mysqli_query($link,$update);
  $data=mysql_fetch_array($res);}
  //bouton valider
  if (isset($_POST['btnValider'])){
    //pour afficher tous les post qui ont été fait
    /*echo '<pre>';
    print_r($_FILES['image']);
    die();*/
    //pour inserrer une image dans mon formulaire
        if (move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$_FILES['image']['name'])){
          echo "image uploader";

        }
        if (isset($_GET['id'])){
          $sql="UPDATE articles SET";
           }
           else {


        //pour isserer mes données de mon formulaire a ma base de donnée
    $sql= "INSERT INTO codeuse (nom,prenom,datenaissance,resume,email,telephone,mdp,image) VALUES 
    ('".$_POST['nom']."',
    '".$_POST['prenom']."',
    '".$_POST['datenaissance']."',
    '".$_POST['resume']."',
    '".$_POST['email']."',
    '".$_POST['telephone']."',
    '".$_POST['mdp']."',
    '".$_FILES['image']['name']."')";
    }
    $result=mysqli_query($link  ,$sql);
    if ($result) {
      $msg='Insertion reussie';
    }else{
      $msg=mysqli_error($link);
    }
  }
 ?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="css/bootstrap.css" >-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <li class="nav-item active">
              <a class="nav-link" href="#">BIENVENUE
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">A propos</a>
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
      <div class="row">
        <div class="col-md-4">
          <br>
          <div class="left1" style="padding-left: 20px;" style="padding-bottom: 30px;">
          <p><a href="#">Modifier profil</a></p>
          <p><a href="cv.php">Creer CV</a></p>
          <p><a href="dashboard.php">Afficher votre CV</a></p>
          <p><a href="experience.php">Ajouter experience</a></p>
          <p><a href="diplome.php">Ajouter diplome</a></p>
          <p><a href="interet.php">Ajouter centre d'interet</a></p>
          </div>
        </div>
        <div class="col-md-6">

          <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Inscrivez vous</legend>
            <span> <?php echo $msg; ?> </span>
          
            <div class="form-group">
              <label for="">Nom</label>
              <input name="nom" type="text" class="form-control" id="" placeholder="Entrer le nom">
            </div>

            <div class="form-group">
              <label for="">Prenom</label>
              <input name="prenom" type="text" class="form-control" id="" placeholder="Entrer le prenom">
            </div>

            <div class="form-group">
              <label for="">Date de naissance</label>
              <input name="datenaissance" type="date" class="form-control" id="" placeholder="Entrer la date ">
            </div>
            <div class="form-group">
              <label for="">Resume</label>
              <textarea type="text" class="form-control" id="" placeholder="Entrer votre resume"  name="resume"></textarea> 
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input name="email" type="email" class="form-control" id="" placeholder="Entrer votre email">
            </div>
            <div class="form-group">
              <label for="">Telephone</label>
              <input name="telephone" type="telephone" class="form-control" id="" placeholder="Entrer votre numero">
            </div>
            <div class="form-group">
              <label for="">Mot de passe</label>
              <input name="mdp" type="password" class="form-control" id="" placeholder="Entrer votre mot de passe">
            </div>
            <div class="form-group">
              <label for="">Photo</label>
              <input name="image" type="file" class="form-control" id="" placeholder="Entrer votre photo">
            </div>
            

            
              
          --  <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Modifier</button>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>
<br>

    </section>  

    </div>
    

    <!-- jQuery -->
    <script src=""></script>
    <!-- Bootstrap JavaScript -->
    <script src=""></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  </body>
</html>