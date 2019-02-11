<?php include '../partials/_head.php' ?>
<?php include '../partials/_navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Crea nuovo Ospite</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form class="form-group" method="post" action="http://localhost/php-boolcrud/create/server.php">
        <div class="form-group">
          <label for="name">Nome Ospite</label>
          <input type="text" class="form-control" name="name" placeholder="Inserisci il Nome">
        </div>
        <div class="form-group">
          <label for="lastname">Cognome</label>
          <input type="text" class="form-control" name="lastname" placeholder="Inserisci il Cognome">
        </div>
        <div class="form-group">
          <label for="date_of_birth">Data di Nascita</label>
          <input type="text" class="form-control" name="date_of_birth" placeholder="Inserisci data di nascita">
        </div>
        <div class="form-group">
          <label for="document_type">Tipo di documento</label>
          <input type="text" class="form-control" name="document_type" placeholder="Inserisci il tipo di documento">
        </div>
        <div class="form-group">
          <label for="document_number">Numero di Documento</label>
          <input type="text" class="form-control" name="document_number" placeholder="Inserisci il numero del documento">
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Salva" class="form-control">
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../partials/_footer.php' ?>
