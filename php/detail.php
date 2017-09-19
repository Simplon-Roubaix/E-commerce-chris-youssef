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

$reponse = $bdd->query('SELECT * FROM produits WHERE id=\''.$_POST["detail"].'\'');?>
<!-- Affichage de chaque message (toutes les données sont protégées par htmlspecialchars) -->


  <?php $valeur= $reponse->fetch(); ?>

<section class=" container row">

  <h2><?php echo $valeur["titre"] ?></h2>

    <div class="col s12 m4 card-panel hoverable">
      <div class="card">

        <div class="card-image">
          <img src= "">
        </div>

        <div class="card-content ard-panel teal light-blue darken-1">
          <h3 class="card-title"><?php echo $valeur["titre"] ?></h3>
          <p><?php echo $valeur["detail"]?></p>
            <a class="waves-effect card-panel red btn" type="submit" href="../index.php">retour</a>
        </div>
      </div>
    </div>
  </section>

  <?php
  $reponse->closeCursor();
  ?>
