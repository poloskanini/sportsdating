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

<footer>
  <p>Copyright ©</p>
  <?php echo date('Y')?>
</footer>
  
</body>
</html>