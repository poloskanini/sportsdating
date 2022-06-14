<?php
 
    require_once('params.php');

    $connect = "mysql:host=".HOST.';dbname='.DB_HOST.'';
    try
    {
      $connexion = new PDO($connect, USER, PASS);
      return $connexion;
    }
    catch (PDOException $except)
    {
    };