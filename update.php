<?php

  require 'db_config.php';

  $id  = $_POST["id"];
  $post = $_POST;

  $sql = "UPDATE ceais SET denumire_produs = '".$post['denumire_produs']."'
    
  

    ,descriere = '".$post['descriere']."' 
       
    ,pret = '".$post['pret']."'

    WHERE id = '".$id."'";

  $result = $mysqli->query($sql);

  $sql = "SELECT * FROM ceais WHERE id = '".$id."'"; 

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

  echo json_encode($data);

?>