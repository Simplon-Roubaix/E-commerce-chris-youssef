<?php
$pseudo= htmlspecialchars ($_POST['pseudo']);
$password= sha1 ($_POST['password']);

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
header('Location: index_post.php')
?>
