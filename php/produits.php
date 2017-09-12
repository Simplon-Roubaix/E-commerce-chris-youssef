<?php
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
?>

<?php
if (!isset($_POST['nom'])): ?>
<section class="container row">

<h2>Nos produits</h2>
<?php

  foreach ($Produits as $cle => $valeur):?>

  <div class="col s12 m4">
    <div class="card">
      <div class="card-image">
        <img src= "<?php echo $valeur['image'] ?>">
        <form class=""  method="post">
          <input type="hidden" name="nom" value="<?php echo $cle ?>">
          <button class="btn-floating halfway-fab #b2dfdb teal lighten-4" type="submit"><i class="material-icons">add</i></button>
        </form>
      </div>

      <div class="card-content">
        <h3 class="card-title"><?php echo $valeur["titre"] ?></h3>
        <p><?php echo $valeur["resume"] ?></p>
      </div>
     </div>
    </div>
  <?php endforeach;?>
  </section>
  <?php
  else : ?>

<?php  $categorie= $_POST['nom'];
?>

<section class=" container row carte2"  >

<h2><?php echo $Produits[$categorie]["titre"]?></h2>
  <div class="offset-m2 col s12 m8" id="carte1">
    <div class="card row" id="carte">

      <div class="card-image m6">
        <img src= "<?php echo $Produits[$categorie]['image'] ?>">
        <form class="" action="produits.php" method="post">
          <input type="hidden" name="nom" value="">
          <a class="btn-floating halfway-fab #b2dfdb teal lighten-4" ><i class="material-icons">add</i></a>
        </form>
      </div>

      <div class="card-content">
        <h3 class="card-title"><?php echo $Produits[$categorie]["titre"] ?></h3>
        <p><?php echo $Produits[$categorie]["Detail"] ?></p>
      </div>

      <div class="card-action">
        <a class="waves-effect #b2dfdb teal lighten-4 btn" type="submit" href="index.php">retour</a>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>
