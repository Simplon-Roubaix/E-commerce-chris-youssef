<?php
$titre= $_POST['titre'];
$resumer= $_POST['resumer'];
$detail= $_POST['detail'];
$prix= $_POST['prix'];

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=E-commerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO produits (titre, resumer, detail, prix)VALUES(?,?,?,?)');
$req->execute(array($titre, $resumer, $detail, $prix));
header('Location: index.php');
?>
