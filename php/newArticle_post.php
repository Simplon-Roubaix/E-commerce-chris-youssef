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

<?php
$fichier = monfichier;
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'site/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";


                }
        }

?>
