<?php
$Produits=[
      ["titre"=> "Electromenager",  "image"=> "img/image.jpg", "resume"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis nec leo vel malesuada. Quisque sed libero metus. Etiam ultrices."
      , "Detail"=> "hzrezhfiu a uoizivjiuezkdkoi jop i"  ],
      ["titre"=> "Hi tech", "image" => "img/image2.jpg", "resume"=>"Proin metus ligula, egestas eu volutpat eget, porta at leo. Donec ut mi at nulla congue interdum. Aliquam rutrum cursus mauris nec sollicitudin."],
      ["titre"=> "Jardinage", "image" => "img/image3.jpg", "resume"=>"Duis malesuada lectus ipsum, vel euismod ligula viverra non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed volutpat,"],
      ["titre"=> "Décoration", "image" => "img/image4.jpg", "resume"=>"Nunc eget venenatis nunc. Nulla vel orci ac mauris condimentum fermentum at sit amet lorem. Suspendisse elementum ultricies dapibus. Morbi pulvinar erat et mattis tincidunt. "],
      ["titre"=> "Sports", "image" => "img/image5.jpg", "resume"=>"Curabitur lacinia leo eget arcu venenatis consectetur. Cras quis odio arcu. Donec hendrerit cursus massa, et feugiat libero pharetra at. Fusce non pretium lacus."],
      ["titre"=> "Beauté", "image" => "img/image6.jpg", "resume"=>"Proin eu sapien elit. Aliquam iaculis ex a eros vestibulum aliquam. Pellentesque ac condimentum nibh, eget volutpat enim. Suspendisse potenti."]
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
          <button class="btn-floating halfway-fab waves-effect waves-light red" type="submit"><i class="material-icons">add</i></button>
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

<section class=" container row" >

<h2><?php echo $Produits[$categorie]["titre"]?></h2>

  <div class="col s12 m5">
    <div class="card">

      <div class="card-image">
        <img src= "<?php echo $Produits[$categorie]['image'] ?>">
        <form class="" action="produits.php" method="post">
          <input type="hidden" name="nom" value="">
          <a class="btn-floating halfway-fab waves-effect waves-light red" ><i class="material-icons">add</i></a>
        </form>
      </div>

      <div class="card-content">
        <h3 class="card-title"><?php echo $Produits[$categorie]["titre"] ?></h3>
        <p><?php echo $Produits[$categorie]["Detail"] ?></p>
      </div>

      <div class="card-action">
        <a class="waves-effect waves-light btn" type="submit" href="index.php">retour</a>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>
