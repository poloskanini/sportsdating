<?php 
  // On appelle la connexion à la BDD
  require_once('initialize.php');
  if($database = connexion('dating', 'params'));
?>

<!DOCTYPE html>
<html lang="en">
<?php include('./shared/head.php') ?>
<body>

  <!-- HEADER -->
  <?php
  include('./shared/header.php');
  include('./shared/navbar.php');
  ?>

  <div class="inscription-container">

    <div class="inscription-wrapper">
      <h2 class="page-title-active">Inscription</h2>

      <form class="inscription-form" action="inscription.php" method="POST">

        <div class="form-fields-inscription">

          <!-- Civilité -->
          <h3 class="form-title">-Civilité-</h3>
          <div class="form-fields-block form-fields-civility">
            <!-- Firstname -->
            <div class="block">
              <label class="form-label" for="firstname">Prénom :</label>
              <input class="form-input" type="text" name="firstname" id="firstname" placeholder="Prénom">
            </div>

            <!-- Lastname -->
            <div class="block">
              <label class="form-label" for="lastname">Nom :</label>
              <input class="form-input" type="text" name="lastname" id="lastname" placeholder="Nom">
            </div>

            <!-- Departement -->
            <div class="block">
              <label class="form-label" for="departement">Département :</label>
              <select class="form-input" name="departement" id="departement">
                <option value="">Entrez votre département...</option>
                <option value="974">974-La Réunion</option>
                <option value="91">91-Essonne</option>
                <option value="78">78-Yvelines</option>
                <option value="31">31-Toulouse</option>
                <option value="2A">2A-Corse du Sud</option>
                <option value="75">75-Paris</option>
              </select>
            </div>

            <!-- Email -->
            <div class="block">
              <label class="form-label" for="email">Email :</label>
              <input class="form-input" type="email" name="email" id="email" placeholder="Email">
            </div>
           
          </div>
        
        </div>

        <div class="form-fields-inscription">

          <!-- Sports -->
          <h3 class="form-title">-Sports-</h3>
          <div class="form-fields-block form-fields-civility">

            <!-- Choose sport -->
            <div class="block">
              <label class="form-label" for="sportCategory">Quel est votre sport ?</label>
              <select class="form-input" name="sportCategory" id="sportCategory">
                <option value="">Choisir...</option>
                <option value="hockey">Hockey</option>
                <option value="football">Football</option>
                <option value="baseball">Baseball</option>
                <option value="lancer de nains">Lancer de nains</option>
                <option value="footing">Footing</option>
              </select>
            </div>

            <!-- Add new sport -->
            <div class="block">
              <label class="form-label" for="newsport">Ajouter un sport :</label>
              <input class="form-input" type="text" name="newsport" id="newsport" placeholder="Nouveau sport">
              <button class="form-submit-btn btn-green" type="submit">Ajouter</button>
            </div>

            <!-- Sport level -->
            <div class="block">
              <label class="form-label" for="sportLevel">Niveau :</label>
              <select class="form-input" name="sportLevel" id="sportLevel">
                <option value="">Indiquez votre niveau...</option>
                <option value="debutant">Débutant</option>
                <option value="confirme">Confirmé</option>
                <option value="pro">Pro</option>
                <option value="supporter">Supporter</option>
              </select>
            </div>
           
          </div>
        
        </div>

        <!-- Reinitialiser / Valider -->
        <div class="form-fields-inscription">

          <button class="form-submit-btn btn-red" type="submit">Réinitialiser</button>
          <button class="form-submit-btn" type="submit">Valider</button>
        
        </div>


      </form>
    </div>

    <!-- FOOTER -->
    <?php include('./shared/footer.php'); ?>
  </div>

  
</body>
</html>