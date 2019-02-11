<?php include 'partials/_head.php' ?>
<?php include 'partials/_navbar.php' ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h2>Tutti gli ospiti</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="http://localhost/php-boolcrud/create/form.php" class="btn btn-primary">Crea Nuovo Ospite</a>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Cancella</th>
        <th>Aggiorna</th>
        <th>Visualizza</th>
      </tr>
    </thead>
    <tbody>
      <?php include 'database.php'; ?>
      <?php foreach ($ospiti as $ospite) { ?>
        <tr>
          <td><?php echo $ospite['id']; ?></td>
          <td><?php echo $ospite['name']; ?></td>
          <td><?php echo $ospite['lastname']; ?></td>
          <td>
            <form action="http://localhost/php-boolcrud/delete/server.php" method="post">
              <input type="hidden" name="id" value="<?php echo $ospite['id']; ?>">
              <input type="submit" class="btn btn-danger" value="Cancella">
            </form>
          </td>
          <td><a href="http://localhost/php-boolcrud/update/form.php?id=<?php echo $ospite['id']; ?>" class="btn btn-success">Aggiorna</a></td>
          <td><a href="http://localhost/php-boolcrud/show/show.php?id=<?php echo $ospite['id']; ?>" class="btn btn-primary">Visualizza</a></td>
        </tr>

      <?php } ?>
    </tbody>

  </table>

</div>
<?php include 'partials/_footer.php' ?>
