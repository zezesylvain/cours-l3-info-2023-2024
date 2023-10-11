<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocelin Tongui - CV </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
    
    </header>
    <main>

        <section class="py-5">
            <div class="container">
                <div class="row gy-4">
                    <h1>CURRICULUM VITAE</h1>
                    <div class="col-12 col-md-6">
                        <img src="photo.jpg" alt="TONGUI JOCELIN" width="75%" style="border-radius: 5px;
                box-shadow: 0px 4px 4px;">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text2">
                            <?php $data_json = file_get_contents('data.json');
                            $data = json_decode($data_json, true);

                            ?>
                            <ul>
                                <li><strong> NOM : </strong> <?php echo $data["nom"] ?></li>
                            </ul>
                            <ul>
                                <li><strong>PRENOM : </strong> <?php echo $data["prenom"] ?></li>
                            </ul>
                            <ul>
                                <li><strong>DATE DE NAISSANCE : </strong> <?php echo $data["date_naissance"] ?> </li>
                            </ul>
                            <ul>
                                <li><strong>LIEU DE NAISSANCE : </strong> <?php echo $data["lieu_naissance"] ?></li>
                            </ul>
                            <ul>
                                <li><strong>GENRE : </strong> <?php echo $data["genre"] ?></li>
                            </ul>
                            <ul>
                                <li><strong>NATIONNALITE : </strong> <?php echo $data["nationnalite"] ?></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-5 bg-light">
            <div class="container">
                <h2>FORMATION</h2>
                <!-- Developpement -->
                <div class="row gy-4 mt-5">
                    <div class="col-12 col-md-7">
                        <div class="bg-secondary h-100 w-100 py-5" style="border-radius: 5px;
    box-shadow: 0px 4px 4px;">
                            <ul class="experience">
                                <li><strong> <?php echo $data["formation"]["annee1"] ?>: </strong> <?php echo $data["formation"]["info1"] ?></li>
                                <li><strong> <?php echo $data["formation"]["annee2"] ?>: </strong> <?php echo $data["formation"]["info2"] ?></li>
                                <li><strong> <?php echo $data["formation"]["annee3"] ?>: </strong> <?php echo $data["formation"]["info3"] ?></li>
                                <li><strong> <?php echo $data["formation"]["annee4"] ?>: </strong> <?php echo $data["formation"]["info4"] ?></li>
                            </ul>
                        </div>
                    </div>
     
                </div>

                <div class="container" style="margin-top: 2%">
                    <h2>EXPERIENCE PROFESIONNELLLE</h2>
                    <!-- Developpement -->
                    <div class="row gy-4 mt-5">
                        <div class="col-12 col-md-7">
                            <div class="bg-secondary h-100 w-100 py-5" style="border-radius: 5px;
            box-shadow: 0px 4px 4px;">
                                <ul class="experience">
                                    <strong><?php echo $data["exp_pro"]["exp_an"] ?> :</strong> <?php echo $data["exp_pro"]["exp_1"] ?> <br>
                                    <?php echo $data["exp_pro"]["exp_2"] ?><br>
                                    <?php echo $data["exp_pro"]["exp_3"] ?> <br>


                                </ul>
                            </div>
                        </div>
                        
                    </div>

                    <div class="container" style="margin-top: 2%;">
                        <h2>COMPETENCES</h2>
                        <!-- Developpement -->
                        <div class="row gy-4 mt-5">
                            <div class="col-12 col-md-7">
                                <div class="bg-secondary h-100 w-100 py-5" style="border-radius: 5px;
    box-shadow: 0px 4px 4px;">
                                    <ul class="experience">

                                        <li><?php echo $data["competance"]["comp1"] ?></li>
                                        <li><?php echo $data["competance"]["comp2"] ?></li>
                                        <li><?php echo $data["competance"]["comp3"] ?></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="container" style="margin-top: 2%">
                            <h2>LANGUE</h2>
                            <!-- Developpement -->
                            <div class="row gy-4 mt-5">
                                <div class="col-12 col-md-7">
                                    <div class="bg-secondary h-100 w-100 py-5" style="border-radius: 5px;
                box-shadow: 0px 4px 4px;">
                                        <ul class="experience">
                                            <li><?php echo $data["langue"]["langue1"] ?></li>
                                            <li><?php echo $data["langue"]["langue2"] ?></li>

                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="container" style="margin-top: 2%">
                                <h2>CENTRE D'INTERET</h2>
                                <!-- Developpement -->
                                <div class="row gy-4 mt-5">
                                    <div class="col-12 col-md-7">
                                        <div class="bg-secondary h-100 w-100 py-5" style="border-radius: 5px;
                              box-shadow: 0px 4px 4px;">
                                            <ul class="experience">
                                                <li><?php echo $data["centre_int"]["centre_int1"] ?></li>
                                                <li><?php echo $data["centre_int"]["centre_int2"] ?></li>
                                                <li><?php echo $data["centre_int"]["centre_int3"] ?></li>
                                                <li><?php echo $data["centre_int"]["centre_int4"] ?></li>
                                                <li><?php echo $data["centre_int"]["centre_int5"] ?></li>

                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>



                                <?php include('contact.php'); ?>
        </section>

</body>

</html>