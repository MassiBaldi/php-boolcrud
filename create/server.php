<?php

  include '../env.php';

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $birth = $_POST['date_of_birth'];
  $document = $_POST['document_type'];
  $docNumber = $_POST['document_number'];

  if (empty($name) || empty($lastname) || empty($birth) || empty($document) || empty($docNumber))
    {
        die('Errore');
    }

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'errore' . $conn->connect_error;
  }

  $sql = "INSERT INTO `ospiti` (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`, `created_at`, `updated_at` ) VALUES ('$name', '$lastname', '$birth', '$document', '$docNumber', NOW(), NOW());";

  $result = $conn->query($sql);

  if ($result == true){
    echo 'Salvato correttamente';
  }
  else {
    echo 'Errore di salvataggio';
  }

  $conn->close();
?>
