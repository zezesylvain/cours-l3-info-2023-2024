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
            <div class="text-center"><h2 style="color: rgb(27, 25, 11);"> <strong>Les technos à apprendre</strong></h2></div>
        </div>
        <hr class="mb-5" style="text-align: center; height:4px;  border-width:0;color:rgb(224, 148, 7);background-color:rgb(235, 151, 27) ; margin-left: 300px; margin-right: 300px;">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title">HTML && CSS</h5>
                      <p class="card-text">
                        Le HyperText Markup Language, généralement abrégé HTML ou, dans sa dernière version, HTML5, est le langage de balisage conçu pour représenter les pages web.
                        Les feuilles de style en cascade, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML.
                      </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <hr>
                    <img src="images/logohtmlcss.svg" height="200px" class="card-img-bottom" alt="...">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title">PHP</h5>
                      <p class="card-text">
                        Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel 
                        langage interprété de façon locale. PHP est un langage impératif orienté objet
                      </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <hr>
                    <img src="images/logophp.png" height="200px" class="card-img-bottom" alt="...">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title">BOOTSTRAP</h5>
                      <p class="card-text">
                        Bootstrap est une collection d'outils utiles à la création du design de sites et d'applications web. C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, 
                        outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option.
                        C'est l'un des projets les plus populaires sur la plateforme GitHub.
                      </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <hr>
                    <img src="images/Bootstrap_logo.png" height="200px" class="card-img-bottom" alt="...">
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