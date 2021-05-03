<?php $this->setLayout('base.php'); ?>

<form method="POST" class="form-signin" name="frm" onsubmit="return check()">
      <img class="mb-4 image" src="assets/images/logo.png" alt="Gawa">
      <label for="inputNumber" class="sr-only">Saisir un nombre</label>
      <input type="text" id="inputNumber" class="form-control" placeholder="Saisir un nombre entier inférieur ou égal à <?= $name ?>" name="limit">
      <span id="msg"></span>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-primary" type="submit">Afficher</button>
      <p class="mt-5 mb-3 text-muted">&copy; Gawa Côte d'Ivoire {{year}}</p>
</form>


