<?php

  $data_json = file_get_contents('../dossiers/data.json');
  $data = json_decode($data_json, true);
  //var_dump($data)

?>




<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $data["title"]?></title>
    <link rel="icon" type="image/x-icon" href="images/curriculum-resume-svgrepo-com.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
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
    <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#"> <?php echo $data["title"]?> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
      </nav>
    </header>
    <div class="page-content">
      <div id="content">
<header>
  <div class="cover bg-light">
    <div class="container px-3">
      <div class="row">
        <div class="col-lg-6 p-2"><img class="img-fluid" src="images/illustrations/hello3.svg" alt="hello"/></div>
        <div class="col-lg-6">
          <div class="mt-5">
            <p class="lead text-uppercase mb-1">Bonjour!</p>
            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">Je suis <?php echo $data["name_and_firstname"]?> </h1>
            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100"> <?php echo $data["fonction"]?> </p>
            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
              <nav role="navigation">
                <ul class="nav justify-content-left">
                  <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                </ul>
              </nav>
            </div>
            <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="../dossiers/new-cv-christian.pdf">Télécharger mon cv <i class="fa fa-download"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wave-bg"></div>
</header>
<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="../dossiers/photo.jpg" width="400" height="400" alt="Walter Patterson"/></div>
      <div class="col-md-6">
        <h2 class="h4 my-2">Bonjour! Je suis <?php echo $data["name_and_firstname"]?> </h2>
        <p><?php echo $data["informations_for_me"]["description_for_me"]?></p>
        <div class="row mt-3">
          <div class="col-sm-2">
            <div class="pb-1">Age:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $data["informations_for_me"]["age"]?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Email:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $data["informations_for_me"]["mail"]?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">téléphone:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $data["informations_for_me"]["phone"]?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Adresse:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $data["informations_for_me"]["address"]?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="skills">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Mes Compétences</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"><?php echo $data["informations_skills"]["description"]?></p>
    </div>
    <div class="bg-light p-3">
      <div class="row">
        <div class="col-md-5">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][0]["skills_1"] ?></span><span><?php echo $data["informations_skills"]["skills"][0]["percent_1"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"> <?php echo $data["informations_skills"]["skills"][1]["skills_2"] ?> </span><span><?php echo $data["informations_skills"]["skills"][1]["percent_2"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][2]["skills_3"] ?></span><span><?php echo $data["informations_skills"]["skills"][2]["percent_3"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 60%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][3]["skills_4"] ?></span><span><?php echo $data["informations_skills"]["skills"][3]["percent_4"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-md-5 offset-md-2">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][4]["skills_5"] ?></span><span><?php echo $data["informations_skills"]["skills"][4]["percent_5"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][5]["skills_6"] ?></span><span><?php echo $data["informations_skills"]["skills"][5]["percent_6"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][6]["skills_7"] ?></span><span><?php echo $data["informations_skills"]["skills"][6]["percent_7"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["informations_skills"]["skills"][7]["skills_8"] ?></span><span><?php echo $data["informations_skills"]["skills"][7]["percent_8"] ?>%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Mes Experience</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1"><?php echo $data["informations_experiences"]["experiences"][0]["Fonction"] ?> (<?php echo $data["informations_experiences"]["experiences"][0]["Type_contrat"] ?>)</h3>
                <div class="text-muted text-small"><?php echo $data["informations_experiences"]["experiences"][0]["Company"] ?><small>(<?php echo $data["informations_experiences"]["experiences"][0]["During"] ?>)</small></div>
              </div><img src="images/app-development.svg" width="48" height="48" alt="ui-ux"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p><?php echo $data["informations_experiences"]["experiences"][0]["Description_1"] ?></p>
            <p> <?php echo $data["informations_experiences"]["experiences"][0]["Description_2"] ?> </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1"><?php echo $data["informations_experiences"]["experiences"][1]["Fonction"] ?> (<?php echo $data["informations_experiences"]["experiences"][1]["Type_contrat"] ?>)</h3>
                <div class="text-muted text-small"> <?php echo $data["informations_experiences"]["experiences"][1]["Company"] ?> <small>(<?php echo $data["informations_experiences"]["experiences"][1]["During"] ?>)</small></div>
              </div><img src="images/full-stack.svg" width="48" height="48" alt="full-stack development"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p><?php echo $data["informations_experiences"]["experiences"][1]["Description_1"] ?></p>
            <p><?php echo $data["informations_experiences"]["experiences"][1]["Description_2"] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Parcours scolaire</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1"><?php echo $data["informations_school"]["School_course"][0]["niveau"] ?></h3>
                <div class="text-muted text-small"><?php echo $data["informations_school"]["School_course"][0]["school_name"] ?><small>(<?php echo $data["informations_school"]["School_course"][0]["year_school"] ?>)</small></div>
              </div><img src="images/university-svgrepo-com.svg" width="48" height="48" alt="ui-ux"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p><?php echo $data["informations_school"]["School_course"][0]["description_school"] ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1"><?php echo $data["informations_school"]["School_course"][1]["niveau"] ?></h3>
                <div class="text-muted text-small"> <?php echo $data["informations_school"]["School_course"][1]["school_name"] ?> <small>(<?php echo $data["informations_school"]["School_course"][1]["year_school"] ?>)</small></div>
              </div><img src="images/school-svgrepo-com.svg" width="48" height="48" alt="full-stack development"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p><?php echo $data["informations_school"]["School_course"][1]["description_school"] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4"><?php echo $data["name_and_firstname"]?></div>
      <p><?php echo $data["fonction"]?></p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; Curriculum Vitae de <?php echo $data["name_and_firstname"]?>. version <?php echo $data["version"]?></div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
  </body>
</html>