<?php
 
 function connexion($bdd, $params)
 {
    include_once($params.'.php');
    $connexion = "mysql:host=".HOST.";dbname=".$bdd;
    try
    {
      $dataBase = new PDO($connexion, USER, PASS);
      // echo 'Success !!';
      return $dataBase;
    }
    catch (PDOException $except)
    {
      echo "Echec de la connexion", $except->getMessage();
    }
  }