<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmation Web</title>
    <link rel="icon" type="image/x-icon" href="images/work-item-svgrepo-com.svg">
    <link rel="stylesheet" href="styles/style.css">  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <?php
          include('pages/content.php');
      ?> 
        <div class="row mb-2">
            <div class="text-center"><h2 style="color: rgb(27, 25, 11);"> <strong>A propos</strong></h2></div>
        </div>
        <hr class="mb-5" style="text-align: center; height:4px;  border-width:0;color:rgb(224, 148, 7);background-color:rgb(235, 151, 27) ; margin-left: 300px; margin-right: 300px;"> 
        <div class="row justify-content-center mb-5">
            <div class="col">
            <div class="card mb-3 shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../dossiers/photo.jpg" class="img-fluid rounded-start" width="600px" height="600px" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-center">
                            <div class="h4 mt-0 title">Informations personnelles</div>
                                <div class="row">
                                    <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                                    <div class="col-sm-8">24</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                    <div class="col-sm-8">christianakesse54@gmail.com</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Téléphone:</strong></div>
                                    <div class="col-sm-8">+22589546567</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Domicile:</strong></div>
                                    <div class="col-sm-8">Anyama</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Langues:</strong></div>
                                    <div class="col-sm-8">Français, Anglais(moyen), Allemand(moyen)</div>
                                </div>
                            </div>
                            <p class="text-center">Bonjour! Je suis Christian Akesse. Développeur d'applications.</p>
                            <p class="text-center">Je suis passionné par le métier du digital ,j'aime bien tout ce qui concerne l'analyse des données.    
                            <a class="btn btn-primary" href="../dossiers/new-cv-christian.pdf" target="_blank">Voir mon CV</a>
                            </p>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container mb-5">
            <div class="h4 text-center mb-4 title">Mes Compétences</div>
            <div class="card shadow" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress-container progress-primary"><span class="progress-badge">HTML</span><br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">JavaScript</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">PHP</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">Bootstrap</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">Python</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cc-experience mb-5">
            <div class="h4 text-center mb-4 title">Mes Expériences</div>
                <div class="card shadow mb-3">
                    <div class="row">
                        <div class="col-md-3 bg-success" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body cc-experience-header">
                            <p>Février 2021 - Aout 2021</p>
                            <div class="h5">Emeryte SARL Côte d'Ivoire</div>
                        </div>
                        </div>
                        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body">
                            <div class="h5">Développeur fullstack web</div>
                            <p>J'etais chargé de réaliser des interfaces en angular pour une application de gestion des services financières. De plus je réalisais des reports pour notre application de gestion des services financières. 
                                Enfin je concevait des api (interface de programmation d'application) de paiments pour intégrer dans notre application de gestion des services financières.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="row">
                        <div class="col-md-3 bg-warning" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body cc-experience-header">
                            <p>mars 2020 - octobre 2020</p>
                            <div class="h5">Orange Côte d'Ivoire</div>
                        </div>
                        </div>
                        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body">
                            <div class="h5">Développeur fullstack /Développeur Backend</div>
                            <p>A Orange Côte d'Ivoire, j'étais au département de la transformation digitale , à Orange Digital Academy. Ou j'étais dans une équipe de 5 personnes
                                , on a eu des formations sur plusieurs technologies notament la technologie de la Blockchain. On a réaliser un projet intitulé "Entrées/sorties", pour gérer les "Entrées/sorties"
                            des employés et visiteurs à Orange Digital Academy. On a eu à réaliser un projet sur la Blockchain "Certification de document". J'ai eu personnellement à faire la maintenance du site d'Orange Digital Academy,
                            à réaliser des api (interface de programmation d'application). On a eu des formations sur la methode Agile (Une methode qui permet de travailler de façon flexible et livrer à temps ses applications) et l'appliquer sur nos différents projets.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cc-education mb-5">
            <div class="h4 text-center mb-4 title">Education</div>
                <div class="card shadow mb-3">
                    <div class="row">
                        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body cc-education-header">
                            <p>2021 - à présent</p>
                            <div class="h5">Licence</div>
                        </div>
                        </div>
                        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body">
                            <div class="h5">Licence informatique</div>
                            <p class="category">Université Nangui Abrogoua </p>
                            <p>Euismod massa scelerisque suspendisse fermentum .</p>
                        </div>
                        </div>
                    </div>
                </div>
            <div class="card shadow">
                <div class="row">
                    <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body cc-education-header">
                            <p>2015 - 2016</p>
                            <div class="h5">Baccalauréat</div>
                        </div>
                    </div>
                    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                        <div class="card-body">
                            <div class="h5">Baccalauréat Scientifique (BAC C)</div>
                            <p class="category">Lycée Moderne de Bonoua</p>
                            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
          include('pages/footer.php');
        ?>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>