<?php
   include('connexion.php');
    $msg="";
    if(isset($_GET['id'])){
        $update="SELECT * FROM cv WHERE id=".$_GET['id'];
        $reponse=mysqli_query($link, $update);
        $data= mysqli_fetch_array($reponse);        
    }
    if(isset($_GET['sup'])){
        $delete="DELETE FROM cv WHERE id=".$_GET['sup'];
        $rep= mysqli_query($link, $delete);
    }
    if (isset($_POST['btnValider'])){
    if (isset($_GET['id'])){
            $sql="UPDATE cv SET";
             }
             else {


        //pour isserer mes données de mon formulaire a ma base de donnée
        $sql= "INSERT INTO cv (facebook,twitter,github, id_codeuse) VALUES 
        ('".$_POST['facebook']."',
        '".$_POST['twitter']."',
        '".$_POST['github']."',
        '".$_POST['id_codeuse']."')";
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
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="C'est une appication pour les cv en ligne">
    <link rel="stylesheet" type="text/css" href="">
    <meta rel="icon" content="cv codeuse">
    <title>Votre cv</title>
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
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">User</a>
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
                    <p><a href="profil.php">Modifier profil</a></p>
                    <p class="nav-item active"><a href="cv.php">Creer CV</a></p>
                    <p><a href="#">Afficher votre CV</a></p>
                    <p><a href="experience.php">Ajouter experience</a></p>
                    <p><a href="diplome.php">Ajouter diplome</a></p>
                    <p><a href="interet.php">Ajouter centre d'interet</a></p>
                    </div>
                </div>
            <div class="col-md-8">
               <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend><h1>Votre cv</h1></legend>
                        <span> <?php echo $msg; ?> </span>
                        <div>
                            <label for="">Id_codeuse</label>
                            <select name="Id_codeuse" class="form-control">
                            <?php
                            /*code sql pour communiquer avec la base de donnée de categorie*/
                            $sqlcv="SELECT id FROM codeuse";
                            //execute la requte et on la stock dans $repcategorie
                            $repcv=mysqli_query($link,$sqlcv);
                            //mysqli-fetch-array permet de transformer le resultat $repcategorie en variable de type tableau $datacat
                            //la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
                            while ($datacat=mysqli_fetch_array($repcv)) {
                                ?>
                            <option value="<?php echo $datacat['id'];?>">
                                <?php echo $datacat['id']; ?>
                             </option>
                             <?php
                        }
                        ?>
                        </select>   
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input name="facebook" type="text" class="form-control" id="" placeholder="SheisthecodeCv@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="">Twitter</label>
                            <input name="twitter" type="text" class="form-control" id="" placeholder="SheisthecodeCv@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="">Github</label>
                            <input name="github" type="text" class="form-control" id="" placeholder="SheisthecodeCv@gmail.com">
                        </div>  
                    --  <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
                    </form>
            </div>
            
        </div>

    </div>
 </section>
 </div>   
</body>
</html>
