<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Simplon</title>
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="styles/style.css">
  <style>
    section {
      height: 100%;
      margin: 0;
    }

    .bg {
      background-image: url("images/bg-image2.jpg");
      height: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center ;

    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg">
      <img src="images/Capture3.JPG" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> <i class="fa fa-bars fa-2x "></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <h2 class="text-center">simplon au<br>Burkina</h2>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="recherch.php" method="POST">
          <input class="form-control mr-sm-2" name="R" type="search" placeholder="rechercher" autocomplete="off">
          <button class="btn btn-outline-success my-2 my-sm-0 bouton" type="submit">cliquez</button>
        </form>
      </div>
    </nav>
  </header>

  <section class="bg">
    <h1 class="text-center pt-5">Application Simplon</h1>
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xd-12 px-5 mb-5">
          <div class="sectright"> 
            <img class="container-fluid p-0" src="images/appsim.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xd-12">
          <h3 class="text-center">S'enregistrer</h3>
          <form class="col-lg-12 col-md-12 col-sm-12 col-xd-12  mb-5 pt-3" action="traitement.php" method="post">
            <div class="form-group row pl-2">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Email:</label>
              <div class="col-sm-8">
                <input type="email" name="EMAIL" class="form-control form-control-lg" id="colFormLabelLg" required>
              </div>
            </div>
            <div class="form-group row pl-2">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg  bg-white b">Nom:</label>
              <div class="col-sm-8">
                <input type="text" name="NOM" class="form-control form-control-lg" id="colFormLabelLg" required>
              </div>
            </div>
            <div class="form-group row pl-2">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Prenom(s):</label>
              <div class="col-sm-8">
                <input type="text" name="PRENOM" class="form-control form-control-lg border" id="colFormLabelLg"
                  required>
              </div>
            </div>
          <div class="form-group row pl-2">
            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Date de naissance</label>
            <div class="col-sm-8">
              <input type="date" name="DATE" class="form-control form-control-lg border" id="colFormLabelLg" required>
            </div>
          </div>
            <div class="form-group row pl-2">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Formation:</label>
              <div class="col-sm-8">
                <input list="Formations" name="FORMATION" class="form-control form-control-lg" id="colFormLabelLg"
                  required>
                <datalist id="Formations">
                  <option value="Droit">
                  <option value="Economie">
                  <option value="Finance">
                  <option value="communication">
                  <option value="Genie civil">
                  <option value="Anglais">
                  <option value="SEA">
                  <option value="nouveau bahelier">
                  <option value="SIG">
                </datalist>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-2 mb-3">S'enregistrer</button>
              <div class="container-fluid">
               
              </div>
                
            </div>
          </form>
          <a href="liste_app.php"><button type="button"
              class="btn btn-primary btn-lg btn-block mb-5">Consultez la liste des apprenants</button></a>
             
        </div>
      </div>
    </div>
  </section>
  <script src="styles/autres/jquery-3.5.1.min.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
  <footer class="pb-5 my-0  d flex fex-columns">
    <p class="text-center   mb-0 paragraph">SIMPLON</p>
    <p class="text-center paragraph1  pb-2 pt-1 mt-0 mb-0">DEVELOPPEMENT PAR LE NUMERIQUE</p>
  </footer>
</body>

</html>