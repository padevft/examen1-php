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
        <div class="content-signup">
            <div class="container-form d-flex flex-column gap-3">
                <div class="d-flex flex-column align-items-center gap-2">
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="name-login" class="fw-semibold">Depart</label>
                        <input type="text" name="nom" id="name-login" class="form-control fw-semibold input-login" placeholder="Nom" />
                    </div>
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="fristname-login" class="fw-semibold">Destination</label>
                        <input type="text" name="prenom" id="fristname-login" class="form-control fw-semibold input-login" placeholder="Prénom" />
                    </div>
                </div>

                <div class="d-flex flex-sm-column flex-md-row align-items-center justify-content-between gap-2">
                    <div class="d-flex col-12 col-md-6 flex-column gap-2">
                        <label for="sexe-login" class="fw-semibold">Transporteur</label>
                        <select class="form-select fw-semibold input-login" name="sexe" id="sexe-login" aria-label="Default select example">
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-dark px-4">Enregistrer</button>
                </div>
            </div>
        </div>
    </main>
  </div>
  </main>
  <script src="client/utilitaires/Jquery/jquery-3.6.0.min.js"></script>
  <script src="client/utilitaires/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>