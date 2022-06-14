<?php 

  try {
    $bdd = new PDO('mysql:host=localhost;dbname=dating;charset=utf8;', 'root', 'root');// Voir s'il n'y a pas de mot de passe à mettre en dernier paramètre
  } catch (Exception $e) {
    die ('Une erreur a été trouvée : ' .$e->getMessage());
  }
?>