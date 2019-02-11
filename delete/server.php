<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'errore';
  }

  $id = $_POST['id'];

  $sql = "DELETE FROM `ospiti` WHERE `id` = $id;";

  $result = $conn->query($sql);

  if ($result == true){
    echo 'Salvato correttamente';
  }
  else {
    echo 'Errore di salvataggio';
  }

  $conn->close();

?>
