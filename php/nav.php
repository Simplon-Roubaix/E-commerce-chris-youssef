<nav>
  <div class="nav-wrapper blue-grey darken-1 row">
    <div class="row ">
      <img  class="col s9 m2 l1 responsive-img" src="logo.png" alt="logo"></a>
      <h1 class="col s12 m6 l11 center-align red-text darken-4-text" >Projet Php</h1>
      <div class="fixed-action-btn top">
        <a class="btn-floating btn-large red">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating blue-grey darken-1"><i class="material-icons">person</i></a></li>
          <li><a class="btn-floating red"><i class="material-icons">person-add</i></a></li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li><form class=""  method="post">
              <input type="hidden" name="admin" value="<?php echo $cle ?>">
              <button class="btn-floating halfway-fab #b2dfdb teal lighten-4" type="submit"><i class="material-icons">person</i></button>
              </form>
          </li>
          <li><form class=""  method="post">
              <input type="hidden" name="newAdmin" value="<?php echo $cle ?>">
              <button class="btn-floating halfway-fab #b2dfdb teal lighten-4" type="submit"><i class="material-icons">person-add</i></button>
              </form>
          </li>
        </ul>
      </div>
</nav>
