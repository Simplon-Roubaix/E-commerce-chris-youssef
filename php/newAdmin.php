<?php
$pseudo= htmlspecialchars ($_POST['pseudo']);
$password= htmlspecialchars ($_POST['password']);

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=E-commerce;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO admin(pseudo, password) VALUES(?,?)');
$req->execute(array($pseudo, $password));
?>

    <div class="col s12 m4">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Nouvel Admin</span>
          <div class="row">
           <form class="col s12" action="php/newAdmin.php" method="post">

             <div class="row">
               <div class="input-field col s6">
                  <input  id="name" name="pseudo" type="text" class="validate">
                  <label for="name">Pseudo</label>
                </div>
              <div>

              <div class="row">
                 <div class="input-field col s12">
                   <input id="code" name="password" type="text" class="validate">
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
