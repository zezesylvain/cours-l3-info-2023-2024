<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecv.css">
    <title>NAMI CV</title>
</head>
<body>

<?php 
            $json = json_decode(file_get_contents("../data.json"), true);
            //var_dump($json);
        ?>
    <div class="cv_cadre">
        <header> 

            <div class="photo"></div>
            <div class="name">
            <h2><?php echo $json["etatCivil"]["civilite"].' '.$json["etatCivil"]["nom"].' '.$json["etatCivil"]["prenoms"] ?></h2>
            <div class="titre"><?php echo $json["titre"] ?></div>
            </div>
            <div></div>
        </header>

        <div class="section1">
            <div class="bio">
                <h1>Profil</h1><?php echo $json["presentation"] ?>
            </div>
            <div class="etatcivil">
                <h1>Etat civil</h1>
                <table>
                    <tr>
                        <td><strong>Nom</strong></td>
                        <td><?php echo $json["etatCivil"]["civilite"].' '.$json["etatCivil"]["nom"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Prénoms:</strong> </td>
                        <td><?php echo $json["etatCivil"]["prenoms"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Née le:</strong></td>
                        <td><?php echo $json["etatCivil"]["date2naissance"] ?> A <?php echo $json["etatCivil"]["lieu2naissance"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Nationalité</strong></td>
                        <td><?php echo $json["etatCivil"]["nationalite"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Situation matrimoniale:</strong></td>
                        <td><?php echo $json["etatCivil"]["situationMatrimoniale"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>N° Carte Etudiante:</strong></td>
                        <td><?php echo $json["etatCivil"]["nce"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Contact:</strong></td>
                        <td><?php echo $json["etatCivil"]["contacts"]["mobile"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><?php echo $json["etatCivil"]["contacts"]["email"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Facebook:</strong></td>
                        <td><?php echo $json["etatCivil"]["contacts"]["facebook"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Google:</strong></td>
                        <td><?php echo $json["etatCivil"]["contacts"]["Google"] ?></td>
                    </tr>

                    <tr>
                        <td><strong>Fax:</strong></td>
                        <td><?php echo $json["etatCivil"]["contacts"]["Fax"] ?></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>

        </div>

            <div class="section2">
                    <h1>CURSUS SCOLAIRE ET ACADEMIQUE</h1>
                   <div> <strong><?php echo $json["cursusScolaire"]["2005-2009"]["diplome"] ?></strong>
                               <?php echo $json["cursusScolaire"]["2005-2009"]["ecole"] ?> 
                   </div>
                   <div> <strong><?php echo $json["cursusScolaire"]["2011"]["diplome"] ?></strong>
                               <?php echo $json["cursusScolaire"]["2011"]["ecole"] ?> 
                   </div>
                   <div> <strong><?php echo $json["cursusScolaire"]["2004-2005 a"]["diplome"] ?></strong>
                               <?php echo $json["cursusScolaire"]["2004-2005 a"]["ecole"] ?> 
                   </div>

            </div>

            <div class="section2">
                <h1>EXPERIENCES PROFESSIONNELLES</h1>
                <div> <strong><?php echo $json["experienceProfessionnelles"]["depuis 2012"]["Entreprise"] ?></strong>
                    <?php echo $json["experienceProfessionnelles"]["depuis 2012"]["Missons"]["1"] ?> -
                    <?php echo $json["experienceProfessionnelles"]["depuis 2012"]["Missons"]["2"] ?>

                   </div>
                   <div> <strong><?php echo $json["experienceProfessionnelles"]["2011-2012"]["Entreprise"] ?></strong>
                   <?php echo $json["experienceProfessionnelles"]["2011-2012"]["Missons"]["1"] ?>
                   </div>
                </div>

                <div class="section2">
                    <h1>COMPETENCES</h1>
                    <strong>
                        <ul>
                            <li><?php echo $json["Competences"]["Informatique"]["1"]?></li>
                            <li><?php echo $json["Competences"]["Informatique"]["2"]?></li>
                            <li><?php echo $json["Competences"]["Informatique"]["3"]?></li>
                            <li><?php echo $json["Competences"]["Informatique"]["4"]?></li>
                            <li><?php echo $json["Competences"]["Informatique"]["5"]?></li>
                            <li><?php echo $json["Competences"]["Informatique"]["6"]?></li>
                        </ul>
                    </strong>
                    </div>

                    <div class="section2">
                        <h1>LANGUE</h1>
                        <strong>
                            <ul>
                                <li><?php echo $json["Competences"]["Langue"]["1"]?></li>
                                <li><?php echo $json["Competences"]["Langue"]["2"]?></li>
                            </ul>
                        </strong>
                        </div>

                        <div class="section2">
                            <h1>LOISIRS</h1>
                            <strong>
                                <ul>
                                <li><?php echo $json["Loisirs"]["1"]?></li>
                                <li><?php echo $json["Loisirs"]["2"]?></li>
                                <li><?php echo $json["Loisirs"]["3"]?></li>
                                </ul>
                            </strong>
                            </div>

                        <footer>
                            EL NAMI NOUHO <br>CopyRight© Fevrier 2022
                        </footer>
    </div>

          
    
</body>
</html>