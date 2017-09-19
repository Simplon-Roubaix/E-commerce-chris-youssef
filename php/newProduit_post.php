<?php
$titre= $_POST['titre'];
$resumer= $_POST['resumer'];
$detail= $_POST['detail'];
$prix= $_POST['prix'];
var_dump($_FILES["monfichier"]);


// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=E-commerce;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 1000000)
{
  // Testons si l'extension est autorisée
  $infosfichier = pathinfo($_FILES['monfichier']['name']);
  var_dump($infosfichier);
  $extension_upload = $infosfichier['extension'];
  $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

  if (in_array($extension_upload, $extensions_autorisees))
  {
    // On peut valider le fichier et le stocker définitivement
    move_uploaded_file($_FILES['monfichier']['tmp_name'], '../img/' . $_FILES['monfichier']['name']);
    echo "L'envoi a bien été effectué !";


  }
}
$req = $bdd->prepare('INSERT INTO produits (titre, resumer, detail, prix)VALUES(?,?,?,?)');
$req->execute(array($titre, $resumer, $detail, $prix));

$id_produit= $bdd-> lastInsertId();
var_dump($id_produit);

$sql=$bdd->prepare ("INSERT INTO image (id_produit, image) VALUES (?,?)");
$sql->execute([$id_produit, $_FILES['monfichier']['name']]); // ici, on demande l'exécution de la requête d'ajout


?>
