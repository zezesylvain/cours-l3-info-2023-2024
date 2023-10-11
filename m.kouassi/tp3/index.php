<?php
  $data = json_decode(file_get_contents('data.json'), true); 
  foreach($data as $k=> $v):
	$$k = $v;

  endforeach;

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>curriculum vitae <?php echo $data["nom"];?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>   
<div id="page">

    <div class="photo-and-name" style="color: #77b5fe;" >
        <h3 style="color: white; background-color: #77b5fe; text-align: center;border: 1px solid #d3d3d3;text-transform: uppercase;padding: 5px; border-radius: 5px;margin: 0px 0 10px;">Informations personnel</h3> 
        <img src="photo.jpg" class="photo" alt="Profile Picture">
        <div class="contact-info-box">
            <h1 class="name"><?php echo $data["nom"];?></h1>
            <br>
            <h3 class="job-title"><?php echo $data["profession"];?></h3>
            <p class="contact-details">Tel: <?php echo $data["telephone"];?> &nbsp;  &nbsp; <br /> Email: <?php echo $data["email"];?></p>
        </div>
    </div> 
    <br><br>
    <div id="objectif">
        <h3>Objectif</h3>
        <p><?php echo $data["description"];?>
        </p>
    </div>
    <div id="etudes">
        <h3>Etudes</h3> 
        <table style="text-align: center;">
            <tr class="etudes">
                <td rowspan="2"><?php echo $data["etude"][0]["et1"][0]["e1"];?></td>
                <td><b><?php echo $data["etude"][0]["et1"][0]["e2"];?></b></td>
            </tr>
            <tr class="etudes">
                <td><?php echo $data["etude"][0]["et1"][0]["e3"];?></td>
            </tr>
            
            <tr class="etudes">
                <td rowspan="2"><?php echo $data["etude"][0]["et2"][0]["e1"];?></td>
                <td><b><?php echo $data["etude"][0]["et2"][0]["e2"];?></b></td>
            </tr>
            <tr class="etudes">
                <td><?php echo $data["etude"][0]["et2"][0]["e3"];?></td>
            </tr>
            
            <tr>
              <td rowspan="2"><?php echo $data["etude"][0]["et3"][0]["e1"];?></td>
                <td><b><?php echo $data["etude"][0]["et3"][0]["e2"];?></b> </td>
            </tr>
            <tr class="etudes">
                <td><?php echo $data["etude"][0]["et3"][0]["e3"];?></td>
            </tr>
        </table>
    </div>
    <div id="work">
        <h3>Experience</h3>
        <table>
            <tr class="work-1">
                <td><?php echo $data["exp"][0]["ex1"][0]["e1"];?></td>
                <td><b><?php echo $data["exp"][0]["ex1"][0]["e2"];?></b>:<?php echo $data["exp"][0]["ex1"][0]["e3"];?></td>
            </tr>
            <tr class="work-2">
                <td><?php echo $data["exp"][0]["ex2"][0]["e1"];?></td>
                <td><b><?php echo $data["exp"][0]["ex2"][0]["e2"];?></b>:<?php echo $data["exp"][0]["ex2"][0]["e3"];?></td>
            </tr>
 
        </table>
    </div>
    <div id="competences">
        <h3>Compétences</h3>
        <table>
            <tr>
                <td>Compétences</td>
                <td><b><?php echo $data["Professionnel"][0]["pro1"];?> </b></td>
            </tr>
            <tr>
                <td>Langues</td>
                <td><b><?php echo $data["Professionnel"][0]["pro2"];?> </b></td>
            </tr>
            <tr>
                <td>Centres d'intérêts</td>
                <td><b><?php echo $data["Professionnel"][0]["pro3"];?> </b></td>
            </tr>
            
        </table>
    </div>
</div>
</main>
</body>
</html>
