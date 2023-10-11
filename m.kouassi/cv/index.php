<?php
  $data = json_decode(file_get_contents('../data.json'), true); 
  foreach($data as $k=> $v):
	$$k = $v;

  endforeach;

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>curriculum vitae <?php echo $data['etatCivil']["civilite"];?><?php echo $data['etatCivil']["nom"];?><?php echo $data['etatCivil']["prenoms"];?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>   
<div id="page">

    <div class="photo-and-name" id="objectif1" style="color: #77b5fe;" >
        <h3><?php echo $data['titre']?></h3> 
        <img src="photo.jpg" class="photo" alt="Profile Picture">
        <div class="contact-info-box">
            <h1 class="name"><?php echo $data['etatCivil']["civilite"];?> <?php echo $data['etatCivil']["nom"];?><?php echo $data['etatCivil']["prenoms"];?></h1>
            <br>
            <h3 class="job-title"><?php echo $data["presentation"];?></h3>
            
        </div>
    </div> 
    <br><br>
    <div id="etudes1" class="objectifd">
        <h3>Informations personnelles</h3>
        <p><strong>Mon année de naissance</strong>  :<?php echo $data['etatCivil']["date2naissance"];?></p>
        <p><strong>Né à</strong>  :<?php echo $data['etatCivil']["lieu2naissance"];?></p>
        <p><strong>Nationalité</strong> :<?php echo $data['etatCivil']["nationalite"];?></p>
        <p><strong>Situation Matrimoniale</strong> :<?php echo $data['etatCivil']["situationMatrimoniale"];?></p>
        <p><strong>Numero de carte Etudiant</strong> :<?php echo $data['etatCivil']["nce"];?></p>
        <p><strong>Contact</strong> :<?php echo $data['etatCivil']["contacts"]["mobile"];?></p>
        <p><strong>Email</strong>  :<?php echo $data['etatCivil']["contacts"]["email"];?></p>
        <p><strong>Facebook</strong>  :<?php echo $data['etatCivil']["contacts"]["mobile"];?></p>
        <p><strong>Google</strong>  :<?php echo $data['etatCivil']["contacts"]["mobile"];?></p>
        <p><strong>Fax</strong>:<?php echo $data['etatCivil']["contacts"]["Fax"];?></p>
    </div>

    <div id="etudes" class="objectifd">
        <h3>Etudes</h3> 
        <div class="etudes ">
            <p><?php echo $data["cursusScolaire"]["2005-2009"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2005-2009"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2005-2009"]["detail"];?></p>
        </div><br>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["2011"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2011"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2011"]["detail"];?></p>
        </div><br>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["2004-2005 a"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2004-2005 a"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2004-2005 a"]["detail"];?></p>
        </div><br>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["2004-2005 b"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2004-2005 b"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2004-2005 b"]["detail"];?></p>
        </div><br>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["2003-2004"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2003-2004"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2003-2004"]["detail"];?></p>
        </div>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["2002-2003"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2002-2003"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2002-2003"]["detail"];?></p>
        </div>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["2001-2002"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["2001-2002"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["2001-2002"]["detail"];?></p>
        </div>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["1997-2000"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["1997-2000"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["1997-2000"]["detail"];?></p>
        </div>
        <div class="etudes">
            <p><?php echo $data["cursusScolaire"]["1994-1997"]["ecole"];?></p>
            <p><?php echo $data["cursusScolaire"]["1994-1997"]["diplome"];?></p>
            <p><?php echo $data["cursusScolaire"]["1994-1997"]["detail"];?></p>
        </div>

    </div>

    <div id="competences1" class="objectifd p">
        <h3>Experience Professionnelles</h3>
        <div class="etudes">
            <p><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Entreprise"];?> <?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Missons"]["1"];?>  <?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Missons"]["2"];?></p><br> 
            <p><?php echo $data["experienceProfessionnelles"]["depuis 2012"]["Entreprise"];?> <?php echo $data["experienceProfessionnelles"]["2011-2012"]["Missons"]["1"];?>  <?php echo $data["experienceProfessionnelles"]["2011-2012"]["Missons"]["2"];?></p> 
        </div>
    </div>
    <div class="objectifd" id="competences">
        <h3>Compétences</h3>
        <h2 id="info">Informatique</h2>
        <div class="etudes">
            <p><?php echo $data["Competences"]["Business Inteligence"]["1"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <?php echo $data["Competences"]["Business Inteligence"]["2"];?>
            </p> <br>

            <p><?php echo $data["Competences"]["Informatique"]["1"];?> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data["Competences"]["Informatique"]["2"];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <?php echo $data["Competences"]["Informatique"]["3"];?>
            </p> <br>
            <p>
               <?php echo $data["Competences"]["Informatique"]["4"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <?php echo $data["Competences"]["Informatique"]["5"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <?php echo $data["Competences"]["Informatique"]["6"];?>
            </p> <br>

            <p><?php echo $data["Competences"]["Pedagogie"]["1"];?></p> <br>
            <h2 id="lng">Langue</h2>
            <div id="cnt">
               <p><?php echo $data["Competences"]["Langue"]["1"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <?php echo $data["Competences"]["Langue"]["2"];?>
               </p> <br>
               <p><?php echo $data["Competences"]["Langue"]["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
               </p><br>
            </div><br>

            <div class="objectifd">
                <h2 id="lsr">Mes Loisirs</h2>
                <div class="cntl">
                    <p><?php echo $data["Loisirs"]["1"];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $data["Loisirs"]["2"];?> <br>
                    <p></p> <br>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
</html>
