<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Dancing+Script|Pacifico" rel="stylesheet">        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="https://use.fontawesome.com/40917ba2bf.js"></script>
    </head>
    <body>
      <header>
        <nav class="nav-extended card-panel #212121 grey darken-4">
          <div class="nav-wrapper">
            <img src="img/.png" class="brand-logo responsive-img git st" alt="">
            <ul class="right hide-on-med-and-down">
              <li><a><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
              <li><a><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="nav-content center-align" >
            <h1 class="nav-title">Le Grand Bazar<br>En Ligne</h1>
            <div class="fixed-action-btn click-to-toggle">
              <a class="btn-floating btn-large red">
                <i class="material-icons">menu</i>
              </a>
              <ul>
                <li>
                  <form action="index.php"  method="post">
                    <input type="hidden" name="Admin">
                    <button class="btn-floating red" type="submit"><i class="material-icons">person</i></button>
                  </form>
                </li>
              </ul>
          </div>

          </div>
        </nav>

      </header>

<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=E-commerce;charset=utf8', 'root', 'root');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Insertion du message à l'aide d'une requête préparée
//verif des donne
$pseudo = $_POST["pseudoAdmin"];
$password = sha1($_POST['passwordAdmin']);
//verification admin

$reponse = $bdd->prepare('SELECT * FROM `admin` WHERE pseudo = ? and password = ?');
$reponse ->execute(array($pseudo, $password));
$donnees = $reponse->fetch();
//var_dump($donnees['password']);
//var_dump(sha1($donnees['password']));
//var_dump($donnees['pseudo']);
?>

<?php
if (!isset($password) AND $password != $donnees['password']
OR !isset($pseudo) AND $pseudo ==  $donnees['pseudo']):?>

<?php elseif ($password == $donnees['password']
      AND  $pseudo ==  $donnees['pseudo']) :?>
      <section class="container row">
      <h2>Administrateur <?php echo $donnees['pseudo']; ?></h2>
      <?php include 'newProduit.php';
              include 'newAdmin.php';
              ?>
    </section>


<!-- //le pseudo et le password sont incorrects -->

<?php elseif ($password == $donnees['password']
      AND  $pseudo ==  $donnees['pseudo']) :?>
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Accés</span>
              <p>le mot de passe et le pseudo sont incorrects</p>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light btn" type="submit" href="index.php">retour</a>
            <div>
          </div>
        </div>
      </div>


<!-- le pseudo est incorrect -->
<?php elseif ($pseudo !=  $donnees['pseudo']) :?>
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Accés</span>
              <p>le pseudo est incorrect</p>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light btn" type="submit" href="index.php">retour</a>
            <div>
          </div>
        </div>
      </div>

  <!-- // le mot de passe est incorrect -->
<?php else:?>
 <div class="row">
   <div class="col s12 m6">
     <div class="card blue-grey darken-1">
       <div class="card-content white-text">
         <span class="card-title">Accés</span>
         <p>le mot de passe est incorrect</p>
       </div>
       <div class="card-action">
         <a class="waves-effect waves-light btn" type="submit" href="index.php">retour</a>
       <div>
     </div>
   </div>
 </div>
 <?php endif ?>

<?php
$reponse->closeCursor();
 ?>


 <footer class="container-fluid footer">
     <div class="container">
         <div class="footer1">
             <p id="fin"> © Copyright 2017 Générer mentions légales | Mentions légales | <a href="" id="me-contact"> Me contacter </a></p>
             <i id="twitter" class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
             <i id="linkedin" class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
             <i id="github" class="fa fa-github-square fa-3x" aria-hidden="true"></i>
         </div>
     </div>
 </footer>


 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
 <script src="../js/plugins.js"></script>
 <script src="../js/main.js"></script>

 <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
 <script>
     (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
     e.src='https://www.google-analytics.com/analytics.js';
     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
 </script>
 </body>
 </html>
