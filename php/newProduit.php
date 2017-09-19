
  <div class="col s12 m8 card-panel">
    <div class="card">
      <form class="col s12" action="newProduit_post.php" method="post" enctype="multipart/form-data">
        <h2>New produit</h2>
          <div class="row">
            <div class="input-field col s6">
              <input id="input_text" name="titre" type="text">
              <label for="input_text">titre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="resumer" class="materialize-textarea"></textarea>
              <label for="textarea1">resumer</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="detail" class="materialize-textarea"></textarea>
              <label for="textarea1">detail du produit</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="prix" class="materialize-textarea"></textarea>
              <label for="textarea1">prix</label>
            </div>

            <div class="">
              <input type="file" name="monfichier"/>
            </div>

          </div>
          <div class="card-action">
            <input class="waves-effect waves-light btn" type="submit" value="valider">
          </div>
      </form>
    </div>
</div>
