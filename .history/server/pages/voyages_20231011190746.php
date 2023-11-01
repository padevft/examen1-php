<?php
    require_once('../voyage/includes/Voyage.php');
    require_once('../voyage/modeleVoyage.php');
    function Ctr_Liste(){
        return Mdl_Liste();
        // return "";
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
  <main class="voyages">
    <h2 class="d-flex justify-content-center py-3"><b>Liste Des Voyages</b></h2>
    <div class="table-responsive">
        <table class="table table-bordered rounded my-2 bg-white">
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
    <div class="d-flex justify-content-center pt-3"><a href="./../../index.php" class="menu-item">Retourner à la page d'accueil</a></div>


  </main>
  <script src="../../client/utilitaires/Jquery/jquery-3.6.0.min.js"></script>
  <script src="../../client/utilitaires/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>