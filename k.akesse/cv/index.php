
<?php

    $data_json = file_get_contents('../data.json');
    $data = json_decode($data_json, true);

?>


<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Curriculum Vitae</title>
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
    <nav class="navbar navbar-expand-lg navbar-white bg-white" id="header-nav" role="navigation">
    <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Curriculum Vitae</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
    </nav>
</header>
<header>
  <div class="cover bg-light">
    <div class="container px-3">
      <div class="row">
        <div class="col-lg-6 p-2"><img class="img-fluid" src="images/illustrations/hello3.svg" alt="hello"/></div>
        <div class="col-lg-6">
          <div class="mt-5">
            <p class="lead text-uppercase mb-1">Bonjour!</p>
            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">Je suis <?php echo $data["etatCivil"]["nom"] . ' ' . $data["etatCivil"]["prenoms"]?> </h1>
            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100"> <?php echo $data["titre"]?> </p>
            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
              <nav role="navigation">
                <ul class="nav justify-content-left">
                  <li class="nav-item"><a class="nav-link" href="https://www.facebook.com" title="<?php echo $data["etatCivil"]["contacts"]["facebook"]?>"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.instagram.com" title="<?php echo $data["etatCivil"]["contacts"]["instagram"]?>"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="<?php echo $data["etatCivil"]["contacts"]["linkedin"]?>"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
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
        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="photo.jpg" width="400" height="400" alt="Walter Patterson"/></div>
        <div class="col-md-6">
            <h2 class="h4 my-2">Bonjour! Je suis <?php echo $data["etatCivil"]["nom"] . ' ' . $data["etatCivil"]["prenoms"]?></h2>
            <p><?php echo $data["presentation"]?></p>
            <div class="row mt-3">
            <div class="col-sm-5">
                <div class="pb-1">Titre:</div>
            </div>
            <div class="col-sm-7">
                <div class="pb-1 fw-bolder"><?php echo $data["titre"]?></div>
            </div>
            <div class="col-sm-5">
                <div class="pb-1">Date et lieu de naissance:</div>
            </div>
            <div class="col-sm-7">
                <div class="pb-1 fw-bolder"><?php echo $data["etatCivil"]["date2naissance"] . ' '. $data["etatCivil"]["lieu2naissance"] ?></div>
            </div>
            <div class="col-sm-5">
                <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-7">
                <div class="pb-1 fw-bolder"><?php echo $data["etatCivil"]["contacts"]["email"]?></div>
            </div>
            <div class="col-sm-5">
                <div class="pb-1">téléphone:</div>
            </div>
            <div class="col-sm-7">
                <div class="pb-1 fw-bolder"><?php echo $data["etatCivil"]["contacts"]["mobile"]?></div>
            </div>
            <div class="col-sm-5">
                <div class="pb-1">No carte d'etudiant:</div>
            </div>
            <div class="col-sm-7">
                <div class="pb-1 fw-bolder"><?php echo $data["etatCivil"]["nce"]?></div>
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
        <div class="bg-light p-3">
        <div class="row">
            <div class="col-md-5">
            <div class="py-1">
                <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["Competences"]["Informatique"]["1"]?></span><span>90%</span></div>
                <div class="progress my-1">
                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="py-1">
                <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["Competences"]["Informatique"]["2"]?></span><span>70%</span></div>
                <div class="progress my-1">
                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="py-1">
                <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["Competences"]["Informatique"]["3"]?></span><span>60%</span></div>
                <div class="progress my-1">
                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
            <div class="col-md-5 offset-md-2">
            <div class="py-1">
                <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["Competences"]["Informatique"]["6"]?></span><span>70%</span></div>
                <div class="progress my-1">
                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="py-1">
                <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["Competences"]["Informatique"]["5"]?></span><span>70%</span></div>
                <div class="progress my-1">
                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="py-1">
                <div class="d-flex text-small fw-bolder"><span class="me-auto"><?php echo $data["Competences"]["Informatique"]["4"]?></span><span>80%</span></div>
                <div class="progress my-1">
                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <h3 class="h5 mb-1"><?php echo empty($data["experienceProfessionnelles"]["depuis 2012"]["Fonction"]) ? "Aucune information"  : $data["experienceProfessionnelles"]["depuis 2012"]["Fonction"] ?></h3>
                    <div class="text-muted text-small"><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Entreprise"]?><small>(<?php echo empty($data["experienceProfessionnelles"]["depuis 2012"]["temps"]) ? "Aucune information" : $data["experienceProfessionnelles"]["depuis 2012"]["temps"]?>)</small></div>
                </div><img src="images/app-development.svg" width="48" height="48" alt="ui-ux"/>
                </div>
            </div>
            <div class="card-body px-3 py-2">
                <p><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Missons"]["1"]?></p>
                <p><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Missons"]["2"]?></p>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between">
                <div>
                    <h3 class="h5 mb-1"><?php echo empty($data["experienceProfessionnelles"]["2011-2012"]["Fonction"]) ? "Aucune information"  : $data["experienceProfessionnelles"]["2011-2012"]["Fonction"] ?></h3>
                    <div class="text-muted text-small"><?php echo $data["experienceProfessionnelles"]["2011-2012"]["Entreprise"]?><small>(<?php echo empty($data["experienceProfessionnelles"]["2011-2012"]["temps"]) ? "Aucune information"  : $data["experienceProfessionnelles"]["2011-2012"]["temps"] ?>)</small></div>
                </div><img src="images/full-stack.svg" width="48" height="48" alt="full-stack development"/>
                </div>
            </div>
            <div class="card-body px-3 py-2">
                <p><?php echo $data["experienceProfessionnelles"]["2011-2012"]["Missons"]["1"]?></p>
                <p><?php echo $data["experienceProfessionnelles"]["2011-2012"]["Missons"]["2"]?></p>
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
                    <h3 class="h5 mb-1"><?php echo $data["cursusScolaire"]["2005-2009"]["diplome"]?></h3>
                    <div class="text-muted text-small"><?php echo $data["cursusScolaire"]["2005-2009"]["ecole"]?> <small>(<?php echo empty($data["cursusScolaire"]["2005-2009"]["durée"]) ? "Aucune information" : $data["cursusScolaire"]["2005-2009"]["durée"]?>)</small></div>
                </div><img src="images/university-svgrepo-com.svg" width="48" height="48" alt="ui-ux"/>
                </div>
            </div>
            <div class="card-body px-3 py-2">
                <p><?php echo $data["cursusScolaire"]["2005-2009"]["detail"]?></p>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between">
                <div>
                    <h3 class="h5 mb-1"><?php echo $data["cursusScolaire"]["2011"]["diplome"]?></h3>
                    <div class="text-muted text-small"><?php echo $data["cursusScolaire"]["2011"]["ecole"]?><small>(<?php echo empty($data["cursusScolaire"]["2011"]["durée"]) ? "Aucune information" : $data["cursusScolaire"]["2011"]["durée"]?>)</small></div>
                </div><img src="images/school-svgrepo-com.svg" width="48" height="48" alt="full-stack development"/>
                </div>
            </div>
            <div class="card-body px-3 py-2">
                <p><?php echo $data["cursusScolaire"]["2011"]["detail"]?><p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="experience">
    <div class="container-narrow">
        <div class="text-center mb-5">
        <h2 class="marker marker-center">Autres informations</h2>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between">
                <div>
                    <h3 class="h5 mb-1">Langues</h3>
                </div><img src="images/icons8-language-64.png" width="48" height="48" alt="ui-ux"/>
                </div>
            </div>
            <div class="card-body px-3 py-2">
                <p> - <?php echo $data["Competences"]["Langue"]["1"]?> : Bien</p>
                <p> - <?php echo $data["Competences"]["Langue"]["2"]?> : Moyen</p>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between">
                <div>
                    <h3 class="h5 mb-1">Centres d'intérêt</h3>
                </div><img src="images/icons8-relax-50.png" width="48" height="48" alt="full-stack development"/>
                </div>
            </div>
            <div class="card-body px-3 py-2">
            <p> - <?php echo $data["Loisirs"]["1"]?></p>
            <p> - <?php echo $data["Loisirs"]["2"]?></p>
            <p> - <?php echo $data["Loisirs"]["3"]?></p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<footer class="pt-4 pb-4 text-center bg-light">
<div class="container">
    <div class="my-3">
    <div class="h4"><?php echo $data["etatCivil"]["nom"] . ' ' . $data["etatCivil"]["prenoms"]?></div>
    <p><?php echo $data["titre"]?></p>
    <div class="social-nav">
        <nav role="navigation">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="<?php echo $data["etatCivil"]["contacts"]["facebook"]?>"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="<?php echo $data["etatCivil"]["contacts"]["instagram"]?>"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="<?php echo $data["etatCivil"]["contacts"]["linkedin"]?>"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
        </ul>
        </nav>
    </div>
    </div>
    <div class="text-small text-secondary">
    <div class="mb-1">&copy; Curriculum Vitae de <?php echo $data["etatCivil"]["nom"] . ' ' . $data["etatCivil"]["prenoms"]?>.</div>
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