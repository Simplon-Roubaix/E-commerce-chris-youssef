<main>
<?php


if (isset($_POST['detail'])) {
  include 'detail.php';
}
else {
  include 'php/produits.php';
}
?>
</main>
