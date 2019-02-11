<?php include '../partials/_head.php' ?>
<?php include '../partials/_navbar.php' ?>

<?php

  include '../functions.php';

  $id = $_GET['id'];

  $ospite = cercaOspiteId($_GET['id']);

  if (empty($ospite)) {

    echo 'Id non trovato';
  }

?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Aggiorna Ospite con id: <?php echo $ospite['id']; ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form class="form-group" method="post" action="http://localhost/php-boolcrud/update/server.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="form-group">
          <label for="name">Nome Ospite</label>
          <input type="text" class="form-control" name="name" placeholder="Inserisci il Nome" value="<?php echo $ospite['name']; ?>">
        </div>
        <div class="form-group">
          <label for="lastname">Cognome</label>
          <input type="text" class="form-control" name="lastname" placeholder="Inserisci il Cognome" value="<?php echo $ospite['lastname']; ?>">
        </div>
        <div class="form-group">
          <label for="date_of_birth">Data di Nascita</label>
          <input type="text" class="form-control" name="date_of_birth" placeholder="Inserisci data di nascita" value="<?php echo $ospite['date_of_birth']; ?>">
        </div>
        <div class="form-group">
          <label for="document_type">Tipo di documento</label>
          <input type="text" class="form-control" name="document_type" placeholder="Inserisci il tipo di documento" value="<?php echo $ospite['document_type']; ?>">
        </div>
        <div class="form-group">
          <label for="document_number">Numero di Documento</label>
          <input type="text" class="form-control" name="document_number" placeholder="Inserisci il numero del documento" value="<?php echo $ospite['document_number']; ?>">
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Salva" class="form-control">
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../partials/_footer.php' ?>
