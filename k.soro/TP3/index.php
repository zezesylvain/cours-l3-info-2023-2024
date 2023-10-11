
<?php

 
$data = json_decode(file_get_contents('./data.json'), true);



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
                    <li><p class="as"> NOM ET PRENOM</p></li>
                    <h4><?php echo $data["infoperso"]["nom"],$data["infoperso"]["prenoms"] ?></h4>
                </ul>
                <ul class="aq">
                    <li><p class="as">DATE ET LIEU DE NAISSANCE</p></li>
                    <h4><?php echo $data["infoperso"]["date_naissance"] ?> à <?php echo $data["infoperso"]["lieu_naissance"] ?></h4>
                </ul>
                <ul class="aq">
                    <li><p class="as">CONTACT</p></li>
                    <h4><?php echo $data["infoperso"]["contact"]?></h4>
                    <h4><?php echo $data["infoperso"]["email"]?></h4>
                </ul>
            </div>
        </div>
        <div class="info">
            <div>
                <div class="teteBlock"><h3>FORMATION</h3></div>
                <div ><p><strong><?php echo $data["cursus"]["2021-2022"]["annee"]?> </strong>: <?php echo $data["cursus"]["2021-2022"]["diplome"]?>  à <?php echo $data["cursus"]["2021-2022"]["ecole"]?></p></div>
                <div ><p><strong><?php echo $data["cursus"]["2020-2021"]["annee"]?></strong> : <?php echo $data["cursus"]["2020-2021"]["diplome"]?>  à <?php echo $data["cursus"]["2020-2021"]["ecole"]?></p></div>
                <div><p><strong><?php echo $data["cursus"]["2018-2019"]["annee"]?></strong> : <?php echo $data["cursus"]["2018-2019"]["diplome"]?>  à <?php echo $data["cursus"]["2018-2019"]["ecole"]?></p></div>
                <div><p><strong><?php echo $data["cursus"]["2017-2018"]["annee"]?></strong> : <?php echo $data["cursus"]["2017-2018"]["diplome"]?>  à <?php echo $data["cursus"]["2017-2018"]["ecole"]?></p></div>
            
                <div class="teteBlock"><h3>DIPLOME</h3></div>
                <div><p><strong><?php echo $data["diplome"]["annee1"]?></strong> : <?php echo $data["diplome"]["1"]?></p></div>
                <div><p><strong><?php echo $data["diplome"]["annee2"]?></strong> : <?php echo $data["diplome"]["2"]?></p></div>
                <div ><p><strong><?php echo $data["diplome"]["annee3"]?></strong> : <?php echo $data["diplome"]["3"]?></p></div>

                <div class="teteBlock"><h3>COMPETENCE ACADEMIQUE</h3></div>
                
                    <div ><p class="as"><?php echo $data["Competences"]["PROG"]["1"]?> </p></div>
                    <div ><p class="as"><?php echo $data["Competences"]["PROG"]["2"]?></p></div>
                    <div ><p class="as"><?php echo $data["Competences"]["PROG"]["3"]?></p></div>

                    <div class="teteBlock"><h3>AUTRE COMPETENCE</h3></div>
                
                    <div ><p class="as"><?php echo $data["Competences"]["other"]["1"]?></p></div>
                    <div><p class="as"><?php echo $data["Competences"]["other"]["2"]?></p></div>
                    <div ><p class="as"><?php echo $data["Competences"]["other"]["3"]?></p></div>

                    <div class="teteBlock"><h3>DIVERS</h3></div>
                    <div><p class="as"><strong>Langue</strong> : <?php echo $data["Competences"]["langue"]["1"]?>; <?php echo $data["Competences"]["langue"]["2"]?></p></div>
                    <div ><p class="as"><strong>Loisirs</strong> : <?php echo $data["loisirs"]["1"]?> - <?php echo $data["loisirs"]["2"]?></p></div>
                
            </div>
        </div>
    </div>


</body></html>