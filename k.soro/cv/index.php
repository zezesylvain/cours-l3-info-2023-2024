<?php


$data = json_decode(file_get_contents('../data.json'), true);



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp exo</title>
    <link href="./style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container">
        <div class="present">
            <div class="image">
                <img src="./photo.jpg" alt="ma photo" width="150px">
            </div>
            <div class="propos">
                <ul class="aq">
                    <li>
                        <p class="as"> NOM ET PRENOM</p>
                    </li>
                    <h4><?php echo $data["etatCivil"]["nom"], $data["etatCivil"]["prenoms"] ?></h4>
                </ul>
                <ul class="aq">
                    <li>
                        <p class="as">DATE ET LIEU DE NAISSANCE</p>
                    </li>
                    <h4><?php echo $data["etatCivil"]["date2naissance"] ?> à <?php echo $data["etatCivil"]["lieu2naissance"]?></h4>
                </ul>
                <ul class="aq">
                    <li>
                        <p class="as">CONTACT</p>
                    </li>
                    <h4><?php echo $data["etatCivil"]["contacts"]["mobile"] ?></h4>
                    <h4><?php echo $data["etatCivil"]["contacts"]["email"]  ?></h4>
                </ul>
            </div>
        </div>
        <div class="info">
            <div>
                <div class="teteBlock">
                    <h3>FORMATION</h3>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2005-2009"]["detail"] ?> </strong>: <?php echo $data["cursusScolaire"]["2005-2009"]["diplome"] ?> à <?php echo $data["cursusScolaire"]["2005-2009"]["ecole"] ?></p>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2011"]["detail"] ?></strong> : <?php echo $data["cursusScolaire"]["2011"]["diplome"] ?> à <?php echo $data["cursusScolaire"]["2011"]["ecole"]  ?></p>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2004-2005 a"]["detail"] ?></strong> : <?php echo $data["cursusScolaire"]["2004-2005 a"]["diplome"] ?> à <?php echo $data["cursusScolaire"]["2004-2005 a"]["ecole"]  ?></p>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2004-2005 b"]["detail"] ?></strong> : <?php echo $data["cursusScolaire"]["2004-2005 b"]["diplome"] ?> à <?php echo $data["cursusScolaire"]["2004-2005 b"]["ecole"]  ?></p>
                </div>

                <div class="teteBlock">
                    <h3>DIPLOME</h3>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2004-2005 b"]["detail"]?></strong> : <?php echo $data["cursusScolaire"]["2004-2005 b"]["diplome"]?></p>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2003-2004"]["detail"] ?></strong> : <?php echo $data["cursusScolaire"]["2003-2004"]["diplome"]  ?></p>
                </div>
                <div>
                    <p><strong><?php echo $data["cursusScolaire"]["2002-2003"]["detail"] ?></strong> : <?php echo $data["cursusScolaire"]["2002-2003"]["diplome"]  ?></p>
                </div>

                <div class="teteBlock">
                    <h3>COMPETENCE ACADEMIQUE</h3>
                </div>

                <div>
                    <p class="as"><?php echo $data["Loisirs"]["1"] ?> </p>
                </div>
                <div>
                    <p class="as"><?php echo $data["Loisirs"]["2"]?></p>
                </div>
                <div>
                    <p class="as"><?php echo $data["Loisirs"]["3"] ?></p>
                </div>

                <div class="teteBlock">
                    <h3>AUTRE COMPETENCE</h3>
                </div>

                <div>
                    <p class="as"><?php echo $data["Competences"]["Informatique"]["1"] ?></p>
                </div>
                <div>
                    <p class="as"><?php echo $data["Competences"]["Informatique"]["2"]  ?></p>
                </div>
                <div>
                    <p class="as"><?php echo $data["Competences"]["Informatique"]["3"]  ?></p>
                </div>

                <div class="teteBlock">
                    <h3>DIVERS</h3>
                </div>
                <div>
                    <p class="as"><strong>Langue</strong> : <?php echo $data["Competences"]["Langue"]["1"] ?>; <?php echo $data["Competences"]["Langue"]["2"] ?></p>
                </div>
                <div>
                    <p class="as"><strong>Loisirs</strong> : <?php echo $data["Competences"]["Business Inteligence"]["1"] ?> - <?php echo $data["Competences"]["Business Inteligence"]["2"]  ?></p>
                </div>

            </div>
        </div>
    </div>


</body>

</html>