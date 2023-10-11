<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURRICULUM VITAE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php $data_json = file_get_contents('../data.json');
    $data = json_decode($data_json, true); ?>

    <!-- header section starts  -->

    <header>

        <div class="user">
            <img src="photo.jpg" alt="">
            <h3 class="name">Tongui Jocelin <div class="W"></div>
            </h3>
            <p class="post">etudiant en licence informatique</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#about">presentation</a></li>
                <li><a href="#education">Formation</a></li>
                <li><a href="#exppro">experience pro</a></li>
                <li><a href="#centre">centre d'interets</a></li>
                <li><a href="#exppro">langues</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <h3>BONJOUR !</h3>
        <h1>JE SUIS <span>TONGUI JOCELIN WILFRIED</span></h1>
        <p>Je suis un jeune entrepreneur et autodictate, j'ai passé 15 années à me consacrer reellement à ma vie professionnelle
            et je peux dire que je suis prêt à être parmi vous
            j'aime le sport et l'innovation, je rêve d'un monde sans corruption et sans violence,
            où tous le monde est egal à autrui je vous remercie!!!
        </p>
        <a href="#about"><button class="btn">presentation <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>PRESENTATION</span> </h1>

        <div class="row">

            <div class="info">
                <h3> NOM : <span> <?php echo $data["etatCivil"]["nom"] ?></span> </h3>
                <h3> PRENOM :<span> <?php echo $data["etatCivil"]["prenoms"] ?></span> </h3>
                <h3> DATE DE NAISSANCE :<span> <?php echo $data["etatCivil"]["date2naissance"] ?></span> </h3>
                <h3> LIEU DE NAISSANCE : <span> <?php echo $data["etatCivil"]["lieu2naissance"] ?></span> </h3>
                <h3> GENRE : <span><?php echo $data["etatCivil"]["genre"] ?> </span> </h3>
                <h3> NATIONNALITE : <span><?php echo $data["etatCivil"]["nationalite"] ?></span> </h3>
                <h3> SITUATION MATRIMONIALE : <span><?php echo $data["etatCivil"]["situationMatrimoniale"] ?></span> </h3>
                <h3> N°CARTE ETUDIANTS : <span><?php echo $data["etatCivil"]["nce"] ?></span> </h3>
                <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
            </div>
            <h1 class="heading"> MES <span>COMPETENCES</span> </h1> <br>
            <div class="counter">

                <div class="box">
                    <span>90%</span>
                    <h3><?php echo $data["Competences"]["Informatique"]["1"] ?></h3>
                </div>

                <div class="box">
                    <span>75%</span>
                    <h3><?php echo $data["Competences"]["Informatique"]["2"] ?> <br> <?php echo $data["Competences"]["Informatique"]["3"] ?></h3>
                </div>

                <div class="box">
                    <span>75%</span>
                    <h3><?php echo $data["Competences"]["Informatique"]["4"] ?>/ <?php echo $data["Competences"]["Informatique"]["6"] ?></h3>
                </div>


            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- education section starts  -->

    <section class="education" id="education">

        <h1 class="heading"> MA <span>FORMATION</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2015</span>
                <h3>
                    <p> <?php echo $data["cursusScolaire"]["2005-2009"]["diplome"] ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2005-2009"]["ecole"]  ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2005-2009"]["detail"] ?></p>
                </h3>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>
                    <p> <?php echo $data["cursusScolaire"]["2011"]["diplome"] ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2011"]["ecole"]  ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2011"]["detail"] ?></p>
                </h3>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2019</span>
                <h3>
                    <p> <?php echo $data["cursusScolaire"]["2004-2005 a"]["diplome"] ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2004-2005 a"]["ecole"]  ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2004-2005 a"]["detail"] ?></p>
                </h3>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020</span>
                <h3>
                    <p> <?php echo $data["cursusScolaire"]["2004-2005 b"]["ecole"]  ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2004-2005 b"]["diplome"] ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2004-2005 b"]["detail"] ?></p>
                </h3>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2022</span>
                <h3>
                    <p> <?php echo $data["cursusScolaire"]["2002-2003"]["ecole"]  ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2002-2003"]["diplome"] ?></p>
                    <p> <?php echo $data["cursusScolaire"]["2002-2003"]["detail"] ?></p>
                </h3>

            </div>

        </div>

    </section>

    <!-- education section ends -->

    <!-- portfolio section starts  -->

    <section class="about" id="exppro">

        <h1 class="heading"> <span>EXPERIENCE </span>PRO</h1>

        <div class="row">

            <div class="info">
                <h3> BENEVOLAT <span> <?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Entreprise"] ?></span> </h3>
                <h3><span><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Missons"]["1"] ?></span></h3>
                <h3><span><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Missons"]["2"] ?></span></h3>
            </div>
            <h1 class="heading"> <br> MES <span>LANGUES</span> </h1> <br>
            <div class="counter">
                <div class="box">
                    <span>90%</span>
                    <h3><?php echo $data["Competences"]["Langue"]["1"] ?></h3>
                </div>

                <div class="box">
                    <span>50%</span>
                    <h3><?php echo $data["Competences"]["Langue"]["2"] ?></h3>
                </div>
            </div>

        </div>





        <section class="education" id="centre">

            <h1 class="heading"> CENTRE <span>D'INTERET</span> </h1>

            <div class="box-container">

                <div class="box">
                    <i class="bi bi-controller"></i>
                    <span>JEUX</span>
                    <h3>
                        <p> <?php echo $data["Loisirs"]["1"]  ?></p>
                        <p> <?php echo $data["Loisirs"]["2"] ?></p>
                        <p> <?php echo $data["Loisirs"]["3"] ?></p>
                        <p> <?php echo $data["Loisirs"]["4"] ?></p>
                        <p> <?php echo $data["Loisirs"]["5"] ?></p>
                        <p> <?php echo $data["Loisirs"]["6"] ?></p>
                        <p> <?php echo $data["Loisirs"]["7"] ?></p>
                        <p> <?php echo $data["Loisirs"]["8"] ?></p>
                    </h3>
                </div>




            </div>

        </section>
        

        <!-- portfolio section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading"> MES <span>CONTACTS</span> </h1>

            <div class="row">

                <div class="content">

                    <h3 class="title">contact info</h3>

                    <div class="info">
                        <h3> <i class="fas fa-envelope"></i><?php echo $data["etatCivil"]["contacts"]["email"] ?> </h3>
                        <h3> <i class="fas fa-phone"></i> <?php echo $data["etatCivil"]["contacts"]["mobile"] ?> </h3>
                        <h3> <i class="fas fa-phone"></i> <?php echo $data["etatCivil"]["contacts"]["Fax"] ?> </h3>
                        <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $data["etatCivil"]["contacts"]["adresse"] ?> </h3>
                    </div>

                </div>


            </div>

        </section>

        <!-- contact section ends -->


        <!-- scroll top button  -->

        <a href="#home" class="top">
            <img src="images/scroll-top-img.png" alt="">
        </a>















        <!-- jquery cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"></script>


</body>

</html>