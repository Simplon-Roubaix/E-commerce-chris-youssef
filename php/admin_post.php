

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
if ($donnees):?>
      <section class="container row">
      <h2>Administrateur <?php echo $donnees['pseudo']; ?></h2>
      <?php include 'newProduit.php';
              include 'newAdmin.php';
              ?>
    </section>


<!-- //le pseudo et le password sont incorrects -->

<?php else :?>
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

 <?php endif ?>

<?php
$reponse->closeCursor();

 ?>
