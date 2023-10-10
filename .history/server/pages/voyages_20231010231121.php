<?php
    require_once('./includes/Voyage.php');
    require_once('./modeleVoyage.php');
    function Ctr_Liste(){
        return Mdl_Liste();
    }
    $resultat = Ctr_Liste();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Examen1</title>
  
  <link rel="stylesheet" href="client/utilitaires/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="client/utilitaires/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="client/utilitaires/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="client/css/styles.css">

</head>

<body>
  <header>
    <nav class="container-nav">
        <ul class="d-flex flex-row align-items-center justify-content-center gap-4 menu">
          <li><a href="index.php" class="menu-item">Inserer</a></li>
            <li><a href="/server/pages/voyages.php" class="menu-item">Voyages</a></li>
            <li><a href="/server/pages/transporteurs.php" class="menu-item">Transporteurs</a></li>              
            <li><a href="/server/pages/supprimerVols.php" class="menu-item">Supprimer</a></li>
        </ul>
    </nav>
  </header>
  <main>
    <div class="table-responsive border rounded">
        <table class="table rounded my-2 bg-white o_portal_my_doc_table">
                <thead>
                    <tr class="active text-secondary">
                        <th>Code</th>
                        <th>Deaprt</th>
                        <th>Destination</th>
                        <th>Transporteur</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // Testez si $resultat est un tableau
                    if (is_array($resultat)) {
                        // Si c'est un tableau, itérez à travers les éléments et affichez-les
                        foreach ($resultat as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['code'] . "</td>";
                            echo "<td>" . $row['depart'] . "</td>";
                            echo "<td>" . $row['destination'] . "</td>";
                            echo "<td>" . $row['transporteur'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        // Sinon, affichez un message d'erreur
                        echo "<tr><td colspan='4'>Aucun voyage trouvé.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
    </div>

  </main>
  </main>
  <script src="client/utilitaires/Jquery/jquery-3.6.0.min.js"></script>
  <script src="client/utilitaires/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>