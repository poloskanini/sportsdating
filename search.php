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

    <div class="wrapper search-wrapper">

      <form class="inscription-form form" action="inscription.php" method="POST">

        <!-- Page title -->
        <h2 class="page-title-active">
          <i class="search-icon fa fa-search text-lg text-white cursor-pointer p-4 rounded-md font-medium transition duration-300 ease-in-out"></i>
          Recherche 
        </h2>

        <!-- Form Fields Inscription -->
        <div class="form-fields">

          <div class="form-fields-block ">

            <!-- Choose sport -->
            <div class="block">
              <label class="form-label" for="sportCategory">Votre sport :</label>
              <select class="form-input" name="sportCategory" id="sportCategory">
                <option value="">Choisir un sport...</option>
                <option value="hockey">Hockey</option>
                <option value="football">Football</option>
                <option value="baseball">Baseball</option>
                <option value="lancer de nains">Lancer de nains</option>
                <option value="footing">Footing</option>
              </select>
            </div>

            <!-- Sport level -->
            <div class="block">
              <label class="form-label" for="sportLevel">Votre niveau :</label>
              <select class="form-input" name="sportLevel" id="sportLevel">
                <option value="">Indiquez votre niveau...</option>
                <option value="debutant">Débutant</option>
                <option value="confirme">Confirmé</option>
                <option value="pro">Pro</option>
                <option value="supporter">Supporter</option>
              </select>
            </div>

            <!-- Departement -->
            <div class="block">
              <label class="form-label" for="departement">Département :</label>
              <select class="form-input" name="departement" id="departement">
                <option value="">Entrez votre département...</option>
                <option value="31">31-Toulouse</option>
                <option value="75">75-Paris</option>
                <option value="78">78-Yvelines</option>
                <option value="91">91-Essonne</option>
                <option value="2A">2A-Corse du Sud</option>
                <option value="974">974-La Réunion</option>
              </select>
            </div>

          </div>

        </div>

        <!-- Rechercher partenaire -->
        <div class="form-fields">
            <button class="btn btn-blue" type="submit">Je recherche un(e) partenaire</button>
        </div>

        <!-- Resultats -->

        <!-- <div class="form-fields results">

          <h3 class="form-title">-Résultats-</h3>
          <div class="form-fields-block"></div>

          <div class="results-wrapper">
            <div class="result-player result-player1">?</div>
            <div class="result-player result-player2">?</div>
            <div class="result-player result-player3">?</div>
            <div class="result-player result-player4">?</div>
          </div>

        </div> -->

      </form>
    </div>

    <!-- FOOTER -->
    <?php include('./shared/footer.php'); ?>

  </div>

</body>
</html>