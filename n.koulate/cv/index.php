<?php


  $data = file_get_contents("../data.json");
  $data_json = json_decode($data, true);


?>





<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $data_json["etatCivil"]["nom"] .' '. $data_json["etatCivil"]["prenoms"] ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="py-3 clearfix">
          <h1 class="site-title mb-0"> <?php echo $data_json["etatCivil"]["nom"] .' '. $data_json["etatCivil"]["prenoms"] ?> </h1>
          <div class="site-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="cover shadow-lg bg-white">
  <div class="cover-bg p-3 p-lg-4 text-white">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="photo.jpg" width="200" height="200"/></div>
      </div>
      <div class="col-lg-8 col-md-7 text-center text-md-start">
        <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0"> <?php echo $data_json["etatCivil"]["nom"] .' '. $data_json["etatCivil"]["prenoms"] ?> </h2>
        <p data-aos="fade-left" data-aos-delay="100"> <?php echo $data_json["titre"] ?> </p>
      </div>
    </div>
  </div>
  <div class="about-section pt-4 px-3 px-lg-4 mt-1">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h3 mb-3">A Propos</h2>
        <p> <?php echo $data_json["presentation"] ?> </p>
      </div>
      <div class="col-md-5 offset-md-1">
        <div class="row mt-2">
          <div class="col-sm-4">
            <div class="pb-1">Date et lieu de naissance</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"> <?php echo $data_json["etatCivil"]["date2naissance"]. ' '. ' à '. ' '. $data_json["etatCivil"]["lieu2naissance"]?> </div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Email</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"> <?php echo $data_json["etatCivil"]["contacts"]["email"] ?> </div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Téléphone</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php echo $data_json["etatCivil"]["contacts"]["mobile"] ?></div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Nationalité</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php echo $data_json["etatCivil"]["nationalite"] ?></div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">N* Carte d'etudiant</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php echo $data_json["etatCivil"]["nce"] ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="skills-section px-3 px-lg-4">
    <h2 class="h3 mb-3">Mes Compétences</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-2"><span><?php echo $data_json["Competences"]["Informatique"][1] ?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span><?php echo $data_json["Competences"]["Informatique"][2]?> </span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span><?php echo $data_json["Competences"]["Informatique"][3] ?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-2"><span><?php echo $data_json["Competences"]["Informatique"][4] ?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span><?php echo $data_json["Competences"]["Informatique"][5] ?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span><?php echo $data_json["Competences"]["Informatique"][6] ?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-2">
    <h2 class="h3 mb-3">Parcours</h2>
    <div class="timeline">
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php echo $data_json["cursusScolaire"]["2005-2009"]["diplome"] ?> <span class="text-muted h6"><?php echo $data_json["cursusScolaire"]["2005-2009"]["ecole"]  ?></span></div>
          <div class="text-muted text-small mb-2"><?php echo $data_json["cursusScolaire"]["2005-2009"]["detail"] ?></div>
        </div>
      </div>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php echo $data_json["cursusScolaire"]["2005-2009"]["diplome"]  ?> <span class="text-muted h6"><?php echo $data_json["cursusScolaire"]["2005-2009"]["ecole"]  ?></span></div>
          <div class="text-muted text-small mb-2"><?php echo $data_json["cursusScolaire"]["2005-2009"]["detail"]  ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="education-section px-3 px-lg-4 pb-2">
    <h2 class="h3 mb-3">Langues</h2>
    <div class="timeline">
      <div class="timeline-card timeline-card-warning card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php echo $data_json["Competences"]["Langue"][1] ?> 
        </div>
      </div>
      <div class="timeline-card timeline-card-warning card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php echo $data_json["Competences"]["Langue"][2] ?>
        </div>
      </div>
    </div>
  </div>
  <div class="education-section px-3 px-lg-4">
    <h2 class="h3">Loisirs</h2>
    <div class="timeline">
      <div class="timeline-card timeline-card-danger card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php echo $data_json["Loisirs"][1] ?> 
        </div>
      </div>
      <div class="timeline-card timeline-card-danger card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php echo $data_json["Loisirs"][2] ?>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4"> <?php echo $data_json["etatCivil"]["nom"] .' '. $data_json["etatCivil"]["prenoms"] ?></div>
          <div class="footer-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="scripts/aos.js?ver=1.2.0"></script>
    <script src="scripts/main.js?ver=1.2.0"></script>
  </body>
</html>