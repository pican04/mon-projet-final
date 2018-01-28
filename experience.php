<?php
   include('connexion.php');
    $msg="";
    if(isset($_GET['id'])){
        $update="SELECT * FROM experiences WHERE id=".$_GET['id'];
        $reponse=mysqli_query($link, $update);
        $data= mysqli_fetch_array($reponse);        
    }
    if(isset($_GET['sup'])){
        $delete="DELETE FROM experiences WHERE id=".$_GET['sup'];
        $rep= mysqli_query($link, $delete);
    }
    if (isset($_POST['btnValider'])){
    if (isset($_GET['id'])){
            $sql="UPDATE experiences SET";
             }
             else {


        //pour isserer mes données de mon formulaire a ma base de donnée
        $sql= "INSERT INTO experiences (titreposte,datedebut,datefin,description,entreprise) VALUES 
        ('".$_POST['titreposte']."',
        '".$_POST['datedebut']."',
        '".$_POST['datefin']."',
        '".$_POST['description']."',
        '".$_POST['entreprise']."')";
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
    <title>Votre experiences</title>
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
                    <p><a href="cv.php">Creer CV</a></p>
                    <p><a href="dashboard.php">Afficher votre CV</a></p>
                    <p><a href="#">Ajouter experience</a></p>
                    <p><a href="diplome.php">Ajouter diplome</a></p>
                    <p><a href="interet.php">Ajouter centre d'interet</a></p>
                    </div>
                </div>
            <div class="col-md-8">
                <form action="#" method="post" role="form" enctype="multipart/form-data">
                   <hr>
                    <br>
                    <br>
                    <legend>Formulaire d'experience</legend>
                    <span><?php echo $msg; ?></span>
                    <div class="form-group">
                        <label for="">Organisation</label>
                        <input type="text"  value="<?php if(isset($_GET['id'])) echo $data['entreprise']; ?>" class="form-control" id="" name="entreprise" placeholder="ex:akendewa">
                    </div>
                    <div class="form-group">
                        <label for="">Poste occupé</label>
                        <input type="text"  value="<?php if(isset($_GET['id'])) echo $data['titreposte']; ?>" class="form-control" id="" name="titreposte" placeholder="ex:developpeur">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text"  value="<?php if(isset($_GET['id'])) echo $data['description']; ?>" class="form-control" id="" name="description" placeholder="ex:developper c'est mon metier">
                    </div>
                    <div class="form-group">
                        <label for="">date de debut</label>
                        <input type="date"  value="<?php if(isset($_GET['id'])) echo $data['datedebut']; ?>" class="form-control" id="" name="datedebut">
                    </div>
                    <div class="form-group">
                        <label for="">date de fin</label>
                        <input type="date"  value="<?php if(isset($_GET['id'])) echo $data['datefin']; ?>" class="form-control" id="" name="datefin">
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnValider" value="valider">Valider</button>

                </form>
            </div>
            
        </div>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <td>Numero</td>
                    <td>Organisation</td>
                    <td>Titre du poste</td>
                    <td>Description</td>
                    <td>date de debut</td>
                    <td>date de fin</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $n=1;
                    $list="SELECT * FROM experiences";
                    $res=mysqli_query($link, $list);
                    while ($data = mysqli_fetch_array($res)) {
                    ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $data['entreprise']; ?></td>
                        <td><?php echo $data['titreposte']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        <td><?php echo $data['datedebut']; ?></td>
                        <td><?php echo $data['datefin']; ?></td>
                        <td>
                            <a href="?id=<?php echo $data['id']; ?>">Modifier</a> 
                        </td>
                        <td>
                        <a href="?sup=<?php echo $data['id']; ?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php
                    $n++;
                    }?>
                </tbody>
                <tr>
                    
                </tr>
            </table>
        </div>
    </div>
 </section>
 </div>   
</body>
</html>
