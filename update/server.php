<?php

  include '../env.php';

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo 'errore';
  }

  $id = $_POST['id'];
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $birth = $_POST['date_of_birth'];
  $document = $_POST['document_type'];
  $docNumber = $_POST['document_number'];

  if (empty($id) || empty($name) || empty($lastname) || empty($birth) || empty($document) || empty($docNumber)) {

    die('Errore');
  }

  $sql = "UPDATE `ospiti` SET `name` = '$name', `lastname` = '$lastname', `date_of_birth` = '$birth' , `document_type` = '$document', `document_number` = '$docNumber', `updated_at` = NOW()  WHERE `id` = $id;";

  $result = $conn->query($sql);

  if ($result == true){
    echo 'Salvato correttamente';
  }
  else {
    echo 'Errore di salvataggio';
  }

  $conn->close();

?>
