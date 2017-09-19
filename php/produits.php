<!--
$Produits=[
      ["titre"=> "Electromenager",  "image"=> "img/image.jpg", "resume"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis nec leo vel malesuada. Quisque sed libero metus. Etiam ultrices."
      ,"Detail"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker."  ],

      ["titre"=> "Hi tech", "image" => "img/image2.jpg", "resume"=>"Proin metus ligula, egestas eu volutpat eget, porta at leo. Donec ut mi at nulla congue interdum. Aliquam rutrum cursus mauris nec sollicitudin."
      ,"Detail"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker."  ],

      ["titre"=> "Jardinage", "image" => "img/image3.jpg", "resume"=>"Proin metus ligula, egestas eu volutpat eget, porta at leo. Donec ut mi at nulla congue interdum. Aliquam rutrum cursus mauris nec sollicitudin."
      ,"Detail"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker." ],

      ["titre"=> "Decoration", "image" => "img/image4.jpg", "resume"=>"Curabitur lacinia leo eget arcu venenatis consectetur. Cras quis odio arcu. Donec hendrerit cursus massa, et feugiat libero pharetra."
      ,"Detail"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker."],

      ["titre"=> "Sports", "image" => "img/image5.jpg", "resume"=>"Curabitur lacinia leo eget arcu venenatis consectetur. Cras quis odio arcu. Donec hendrerit cursus massa, et feugiat libero pharetra."
      ,"Detail"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker."],

      ["titre"=> "Beauté", "image" => "img/image6.jpg", "resume"=>"Proin eu sapien elit. Aliquam iaculis ex a eros vestibulum aliquam. Pellentesque ac condimentum nibh, eget volutpat enim. Suspendisse potenti."
      ,"Detail"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker."]
    ];
?> -->

<section class="row">
  <h2>Top sujet</h2>


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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT * FROM produits INNER JOIN image ON produits.id = image.id_produit');?>
<!-- Affichage de chaque message (toutes les données sont protégées par htmlspecialchars) -->

<?php while ($valeur = $reponse->fetch()):?>

  <div class="col s12 m4">
    <div class="card">
      <div class="card-image">
        <img src= "img/<?php echo $valeur["image"]?>">
        <form action="index.php"  method="post">
          <input type="hidden" name="detail" value="<?php echo $valeur["id"]?>">
          <button class="btn-floating halfway-fab #b2dfdb teal lighten-4" type="submit"><i class="material-icons">add</i></button>
        </form>
      </div>

      <div class="card-content">
        <h3 class="card-title"><?php echo $valeur["titre"] ?></h3>
        <p><?php echo $valeur["resumer"] ?></p>
        <p><?php echo $valeur['prix'] ?></p>
      </div>
     </div>
    </div>

  <?php endwhile ?>

  <?php
    $reponse->closeCursor();
  ?>
  </section>
