<?php

  include 'env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
  {
    echo 'Errore: ' . $conn->connect_error;
  }
  $sql = 'SELECT * FROM `ospiti`';
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
    $ospiti = [];
    while ($row = $result->fetch_assoc()) {
      $ospiti[] = $row;
    }
  }
  $conn->close();
?>
