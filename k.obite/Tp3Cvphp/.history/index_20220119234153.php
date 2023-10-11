<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv-Franck Obité</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- inclusion de l'entête du site -->

            <?php include_once('header.php'); ?>
            <h1>CV-Obité Franck</h1>
            
        <!-- inclusion des variables et fonctions du site -->
        
              <?php
                include_once('variable.php');
                include_once('variable.php');
                
              ?> 
              
        <!-- entete de mo cv -->
            
        <div class="row">
          <div class="col"> <br> <br>
            <div style= "eight: 160px; padding-top: 10px; color: white; background-color: rgb(44, 43, 42);">
              <img  style="float: left; width: 115px; height: 115px; padding-left: 20px;" class="image7" src="image7.png" alt="" >
              <div class="col">
                <h1 >OBITE Franck</h1><br>
              <h2>INFORMATICIEN</h2> 
              </div>
          </div>
        </div>
        <section style="background-color: #fff; float: left; width: 400px;" class="section-left">
        <hr style="order-top: 2px solid #13c3ba; width: 90%; margin-top: .8rem; margin-bottom: 1rem;" class="light">
        <h4 style="margin-left: 10%; color: #13c3ba; letter-spacing: .1rem; font-size: 18px;">ATOUTS</h4>
        <hr class="light">
        <div class="atouts">
          <div>travail d'équipe</div>
          <div>seul on va vite, mais ensemble on va plus loin!.</div>
          <div>Créativité</div>
          <div> la Créativité faire partie de moi, j'aime et je suis prèts à valoriser cela.</div>
        </div>

        <hr class="light">
        <h4 style="margin-left: 10%; color: #13c3ba; letter-spacing: .1rem; font-size: 18px;">DIPLOMES & FORMATION</h4>
        <hr class="light">
        <div class="div">
          <div><b>Licence informatique (en cours)</b>
            <strong> Université Nangui Abroguoua</strong> Abidjan, Abobo Adjamé
          </div><br> 2021-2022
          <div><b>Certification de spécialisation Microsoft Office</b>
          <strong>Eglise Méthodiste unie Galilée</strong> Abidjan, Plateau Dokui
          </div><br> 2018-2020
          <div><b>Baccalaureat serie D</b>
          <strong> Lycée Moderne 1 Daloa</strong> 
          </div><br> 2016-2017
         <div><b>Brevet d'étude du premier cycle</b>
          <strong> Lycée Moderne 5 Daloa</strong> Daloa
         </div><br> 2013-2014
        </div>
  </div>
  
  <hr class="light">
  <h4 style="margin-left: 10%;
    color: #13c3ba;
    letter-spacing: .1rem;
    font-size: 18px;">EXPERIENCES PROFESSIONELLES</h4>
  <hr class="light">
        <div class="div">
          <p><b>Stagiaire organiste</b>
          <strong> (Eglise Méthodiste unie Galilée) Abidjan, Plateau Dokui</strong><br>
          2021-2022<br> 
          Composition et Harmonisation d'un hymne <strong> classique</strong></p>

          <p><b>Communicateur</b>
            <strong> (Eglise Méthodiste unie Galilée) Abidjan, Plateau Dokui</strong><br>
            2018-2022<br>
            asurrer la projection de la lirtugie du culte dominical</p>

          <p><b>Formateur en anglais</b>
            <strong> (ECACERTIFED) Daloa</strong><br>
            2015-2016<br>
            Coacher les apprenants</p>
        </div>
      </section>






    </div>
    
    <!-- inclusion du bas de la page -->

    <?php include_once('footer.php') ?>
</body>
</html>