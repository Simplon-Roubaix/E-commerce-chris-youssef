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

?>

<?php if (!isset($_POST['Admin'])):?>


<?php else: ?>

    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Admin</span>
          <div class="row">
           <form class="col s12" action="admin.php" method="post">

             <div class="row">
               <div class="input-field col s6">
                  <input  id="name" name="pseudoAdmin" type="text" class="validate">
                  <label for="name">Pseudo</label>
                </div>
              <div>

              <div class="row">
                 <div class="input-field col s12">
                   <input id="code" name="passwordAdmin" type="text" class="validate">
                   <label for="code">Mot de passe</label>
                 </div>
               </div>
             </div>

           <div class="card-action">
             <input class="waves-effect waves-light btn" type="submit" value="valider">
           </div>
         </form>
         </div>
         </div>
        </div>
      </div>
    </div>

<?php endif ?>
