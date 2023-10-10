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
            <li><a href="index.php" class="menu-item">Voyages</a></li>
            <li><a href="/server/pages/shop.php" class="menu-item">Transporteurs</a></li>              
            <li><a href="/server/pages/shop.php" class="menu-item">Supprimer</a></li>
        </ul>
    </nav>
  </header>
  <div class="container-app">
    <main class="bg-100 px-16">
        <form action="../membre/controleurMembre.php" method="post">
            <div class="container-form d-flex flex-column gap-3">
                <div class="d-flex flex-column align-items-center gap-2">
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="depart" class="fw-semibold">Depart</label>
                        <input type="text" name="depart" id="depart" class="form-control fw-semibold input-login" placeholder="Depart" />
                    </div>
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="destination" class="fw-semibold">Destination</label>
                        <input type="text" name="destination" id="destination" class="form-control fw-semibold input-login" placeholder="Destination" />
                    </div>
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="transporteur" class="fw-semibold">Transporteur</label>
                        <input type="text" name="transporteur" id="transporteur" class="form-control fw-semibold input-login" placeholder="Transporteur" />
                      
                    </div>
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="code" class="fw-semibold">Code</label>
                        <input type="number" name="code" id="code" class="form-control fw-semibold input-login" placeholder="Code" />
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-dark px-4">Enregistrer</button>
                </div>
            </div>
        </form>
    </main>
  </div>
  </main>
  <script src="client/utilitaires/Jquery/jquery-3.6.0.min.js"></script>
  <script src="client/utilitaires/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>