<?php 
  // On appelle la connexion à la BDD
  require_once('initialize.php');
  if($database = connexion('dating', 'params'));
?>
<!DOCTYPE html>
<html lang="en">
<?php include('./shared/head.php') ?>
<body>

<div class="container">

  <!-- HEADER -->
  <?php
  include('./shared/header.php');
  include('./shared/navbar.php');
  ?>

<h2 class="page-title">Recherche</h2>

  <!-- FOOTER -->
  <?php include('./shared/footer.php'); ?>

</div>
  
</body>
</html>