<?php

if(!empty($_POST)) {
  // Post n'est pas vide, on vérifie que toutes les données sont présentes
  if(isset($_POST['valider']) && !empty($_POST['valider']))
  {
    // On neutralise toute balise du contenu
    $gender = htmlspecialchars($_POST['gender']);
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $departement = htmlspecialchars($_POST['departement']);
    $sportCategory = htmlspecialchars($_POST['sportCategory']);
    $newSport = htmlspecialchars($_POST['newSport']);
    $sportLevel = htmlspecialchars($_POST['sportLevel']);

    // On les enregistre avec une requête SQL
    // On se connecte à la base en appelant initialize
    require('initialize.php');

    // On écrit la requête
    $sql_personne = "INSERT INTO personne (prenom, nom, departement, email, sexe) VALUES (:prenom, :nom, :departement, :email, :sexe)";
    $sql_sport = "INSERT INTO sport (sportcategory, newsport, sportlevel) VALUES (:sportcategory, :newsport, :sportlevel)";

    // On prépare la requête
    $query = $connexion->prepare($sql_personne);
    $querySport = $connexion->prepare($sql_sport);

    // On injecte les valeurs
    $query->bindValue(':prenom', $firstName);
    $query->bindValue(':nom', $lastName);
    $query->bindValue(':departement', $departement);
    $query->bindValue(':email', $email);
    $query->bindValue(':sexe', $gender);
    $querySport->bindValue(':sportcategory', $sportCategory);
    $querySport->bindValue(':newsport', $newSport);
    $querySport->bindValue(':sportlevel', $sportLevel);

    // On exécute la requête
    $query->execute();
    $querySport->execute();

  } else {
    die("Error, le formulaire n'est pas complet");
  };
};

?>