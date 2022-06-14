<?php 
  // On appelle la connexion à la BDD
  require_once('initialize.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include('./shared/head.php') ?>
<body>

<div class="container">

<!-- HEADER -->
<?php include('./shared/header.php'); ?>

<div class="wrapper wrapper-login">

  <!-- Formulaire d'identification -->
  <form class="login-form form" action="" method="POST">
     <!-- Page title -->
     <h2 class="page-title-active"><i class="fa-solid fa-house"></i> Accueil</h2>
    <div class="form-wrapper">
      <h3 class="form-title">-Identifiez-vous-</h3>
        <div class="form-fields">
          <label class="form-label" for="email">Votre email :</label>
          <input class="form-input" type="text" name="email" id="email" placeholder="Entrez votre email">

          <!-- Button Validate -->
          <button class="btn btn-blue" type="submit">Valider</button>
          <a class="form-inscription-link" href="inscription.php">Pas encore inscrit ?</a>
        </div>
    </div>
      
  </form>

</div>

<!-- FOOTER -->
<?php include('./shared/footer.php'); ?>

</div>
  <script src="script.js"></script>
</body>
</html>