<?php 
  // On appelle la connexion à la BDD
  require_once('initialize.php');
  if($database = connexion('dating', 'params'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP DATING</title>
</head>
<body>

<!-- HEADER -->
<?php include('./shared/header.php') ?>

<form action="" method="POST">
  <label for="email">Votre email :</label>
  <input type="text" name="email" id="email">

  <button type="submit">Valider</button>

  <a href="inscription.php">Pas encore inscrit ?</a>
</form>

<!-- FOOTER -->
<?php include('./shared/footer.php') ?>
  
</body>
</html>