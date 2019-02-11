<?php

  function cercaOspiteId($id) {

    include 'env.php';

    $ospite = [];

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {

      return $ospite;
    }

    $sql = "SELECT * FROM `ospiti` WHERE `id` = $id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      $ospite = $result->fetch_assoc();

    }

    $conn->close();

    return $ospite;
  }

?>
