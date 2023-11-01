<?php
    require_once('../voyage/includes/Voyage.php');
    require_once('../voyage/modeleVoyage.php');
    function Ctr_Liste(){
        return Mdl_ListeCode();
    }
    $resultat = Ctr_Liste();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Examen1</title>
  
  <link rel="stylesheet" href="../../client/utilitaires/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../client/utilitaires/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../client/utilitaires/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../../client/css/styles.css">

</head>

<body>
  <!-- <header>
    <nav class="container-nav">
        <ul class="d-flex flex-row align-items-center justify-content-center gap-4 menu">
          <li><a href="./../../index.php" class="menu-item">Question a</a></li>
            <li><a href="./../../server/pages/voyages.php" class="menu-item">Question b</a></li>
            <li><a href="./../../server/pages/transporteurs.php" class="menu-item">Question c</a></li>              
            <li><a href="./../../server/pages/supprimerVols.php" class="menu-item">Question a</a></li>
        </ul>
    </nav>
  </header> -->
  <main class="voyages">
    <h2 class="d-flex justify-content-center py-3"><b>Supprimer les vols</b></h2>
    <form action="./../voyage/controleurSupprimerVols.php" method="POST" class="d-flex flex-column gap-2 align-items-center">
        <div class="d-flex col-12 col-md-4 flex-column gap-2">
            <label for="code" class="fw-semibold">Code</label>
            <?php
                if (is_array($resultat) && count($resultat) > 0) {
                    echo '<select name="code" id="code" required class="form-select fw-semibold" placeholder="Code">';
                    foreach ($resultat as $row) {
                        echo "<option value='{$row['code']}'>{$row['code']}</option>";
                    }
                    echo '</select>';
                } else {
                    // Si le tableau est vide, affichez un message d'erreur
                    echo "<p>Aucun transporteur trouvé.</p>";
                }
            ?>
            
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-dark px-4">Supprimer</button>
        </div>
    </form>
    <div class="d-flex justify-content-center pt-3"><a href="./../../index.php" class="menu-item">Retourner à la page d'accueil</a></div>

  </main>
  <script src="../../client/utilitaires/Jquery/jquery-3.6.0.min.js"></script>
  <script src="../../client/utilitaires/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>