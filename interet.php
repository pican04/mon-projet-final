<?php
   include('connexion.php');
    $msg="";
    if(isset($_GET['id'])){
        $update="SELECT * FROM interet WHERE id=".$_GET['id'];
        $reponse=mysqli_query($link, $update);
        $data= mysqli_fetch_array($reponse);        
    }
    if(isset($_GET['sup'])){
        $delete="DELETE FROM interet WHERE id=".$_GET['sup'];
        $rep= mysqli_query($link, $delete);
    }
    if (isset($_POST['btnValider'])){
    if (isset($_GET['id'])){
            $sql="UPDATE interet SET";
             }
             else {


        //pour isserer mes données de mon formulaire a ma base de donnée
        $sql= "INSERT INTO interet (titreinteret,description) VALUES 
        ('".$_POST['titreinteret']."',
        '".$_POST['description']."')";
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
    <title>Vos interets</title>
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
                    <p><a href="experience.php">Ajouter experience</a></p>
                    <p><a href="profil.php">Ajouter diplome</a></p>
                    <p><a href="#">Ajouter centre d'interet</a></p>
                    </div>
                </div>
            <div class="col-md-8">
                <form action="#" method="post" role="form">
                    <hr>
                    <br>
                    <br>
                    <legend>Formulaire de centre d'interet</legend>
                    <span><?php echo $msg; ?></span>
                    <div>
                            <label for="">Centre d'interet</label>
                            <select name="titreinteret" class="form-control">
                           
                            <option>Sport</option>
                            <option>Shoping</option>
                            <option>Cuisine</option>
                            <option>lecture</option>
                       
                        </select>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text"  value="<?php if(isset($_GET['id'])) echo $data['description']; ?>" class="form-control" id="" name="description" placeholder="description">
                    
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnValider" value="valider">Valider</button>

                </form>
            </div>
            
        </div>

        <div class="row">
            <hr>
            <br><br>
            <table class="table">
                <thead>
                <tr>
                    <td>Numero</td>
                    <td>Centre d'interet</td>
                    <td>Description</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $n=1;
                    $list="SELECT * FROM interet";
                    $res=mysqli_query($link, $list);
                    while ($data = mysqli_fetch_array($res)) {
                    ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $data['titreinteret']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        
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
