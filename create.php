<?php

require 'db_config.php';

  $post = $_POST;

  $sql = "INSERT INTO ceais ( denumire_produs, descriere,pret) 

	VALUES ('".$post['denumire_produs']."','".$post['descriere']."','".$post['pret']."')";

  $result = $mysqli->query($sql);

  $sql = "SELECT * FROM  ceais Order by id desc LIMIT 1"; 

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

//echo json_encode($data);
  header('Location:index.php');

?>