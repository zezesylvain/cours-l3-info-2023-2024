<?php 
    $chemin_jason=json_decode(file_get_contents('data.json'),true);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> about </title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
    <!-- <nav>
    	<div class="div_nav">
    	   <ul>
    	     <li class="accueil"><a href=""> accueil </a></li>
             <li class="apropos"><a href="#"> apropos  </a></li>
             <li class="contact"><a href=""> contact </a></li>
    	   </ul>
    	</div> 
    </nav> -->
    <!--corps de la page -->
    <section>
           <h1> CV DU CONCEPTEUR </h1>
           <div class ="div_principal">
    	      <div class="div_poto_text">
                 <div class="photo_div">
    	           <img src="image/cv.jpg" alt="Ma Photo" class="nathan">
                 </div>
                 <div class="text_div">
    	            <p> NOM:<?php echo $chemin_jason['cv'][0]['nom'];?>  </p>
    	            <p> PRENOM: <?php echo $chemin_jason['cv'][0]['prenom'];?>  </p>
    	            <p> TELEPHONE:<?php echo $chemin_jason['cv'][0]['phone'];?>  </p>
                    <p>METIER:<?php echo $chemin_jason['cv'][0]['job'];?> </p>
                    <p class="diplome"> DIPLOME </p>
                     <p>
                        <?php echo $chemin_jason['cv'][1]['dp1'];?>
                        <?php echo $chemin_jason['cv'][1]['dp2'];?>
                        <?php echo $chemin_jason['cv'][1]['dp3'];?>
                       <?php echo $chemin_jason['cv'][1]['dp4'];?>
                        <?php echo $chemin_jason['cv'][1]['dp5'];?>
                    </p>
                    <p>NB: AUCUNE EXPERIENCE PROFESSIONNEL MAIS IL A UN ESPRIT  COMBATIF ET EST TRES SOCIABLE </p>
                 </div> 
    	      </div>
           </div>
    </section>
    </footer>
</body>
</html>