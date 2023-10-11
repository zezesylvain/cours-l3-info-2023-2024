<?php 
    $chemin_jason=json_decode(file_get_contents('../data.json'),true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet"> 
	<title>CV</title>
</head>
<body> 
    <main>
    	<section class="left">
    		<div class="left-image">
    			<img src="photo.jpg" >
    			<h2><?php echo $chemin_jason['etatCivil']['nom'];echo $chemin_jason['etatCivil']['prenoms'];?></h2>
    		</div>
    		<div class="personal">
    			<ul>
    				<li><i class="fas fa-briefcase"></i> <?php echo $chemin_jason['Competences']['Business Inteligence']['1'];?></li>
    				<li><i class="fas fa-location-arrow"></i><?php echo $chemin_jason['etatCivil']['lieu2naissance'];?></li>
    				<li><i class="fas fa-envelope"></i><?php echo $chemin_jason['etatCivil']['contacts']['email'];?></li>
    				<li><i class="fas fa-phone"></i><?php echo $chemin_jason['etatCivil']['contacts']['mobile'];?></li>
    			</ul>
    			<hr>
    		</div>
    		<div class="skills">
    			<h3><i class="fas fa-cog"></i>languages</h3>
    			<ul>
    				<li> <p><?php echo $chemin_jason['Competences']['Informatique']['1'];?></p> <progress value="80" max="100"> </li>
    				<li><p><?php echo $chemin_jason['Competences']['Informatique']['2'];?></p> <progress value="80" max="100"></li>
    				<li><p><?php echo $chemin_jason['Competences']['Informatique']['3'];?></p> <progress value="60" max="100"></li>
    				<li><p><?php echo $chemin_jason['Competences']['Informatique']['4'];?></p> <progress value="20" max="100"></li>
    					
    			</ul>
    		</div>
    		<div class="languages">
    			<h3><i class="fas fa-language"></i>languages</h3>
    			<ul>
    				<li> <p><?php echo $chemin_jason['Competences']['Langue']['1'];?></p> <progress value="100" max="100"> </li>
    				<li><p><?php echo $chemin_jason['Competences']['Langue']['2'];?></p> <progress value="45" max="100"></li>
    				<li><p><?php echo $chemin_jason['Competences']['Pedagogie']['1'];?></p> <progress value="10" max="100"></li>
    			</ul>
    		</div>

    	</section>
    	<section class="right">
    		<div class="experience">
    			<h1><i class="fas fa-briefcase"></i>Experince De Travail</h1>
    			<ul>
    			   <li class="1"><i class="fas fa-briefcase"></i> <?php echo $chemin_jason['experienceProfessionnelles']['depuis 2012']['Missons']['2'];?></li>
    			   <li class="date"><i class="fas fa-calendar"></i> 2019 - 2020 </li>
    			   <li><p><?php echo $chemin_jason['experienceProfessionnelles']['depuis 2012']['Missons']['1'];?></p> </li>
    			</ul>
    		</div>
    		
    		<div class="education">
    			<h1><i class="fas fa-university"></i>Diplome</h1>
    			<ul>
    			   <li class="date"><i class="fas fa-calendar"></i> 2011 -2012 </li>
    			   <li><p><?php echo $chemin_jason['experienceProfessionnelles']['2011-2012']['Missons']['2'];?></p> </li>
    			   <li class="date"><i class="fas fa-calendar"></i> 2015 -2016 </li>
    			   <li><p><?php echo $chemin_jason['cursusScolaire']['2011']['detail'];echo            $chemin_jason['cursusScolaire']['2011']['ecole'];?></p> </li>
    			   <li class="date"><i class="fas fa-calendar"></i> 2018 -2019 </li>
    			   <li><p><?php echo $chemin_jason['cursusScolaire']['2011']['diplome'];echo            $chemin_jason['cursusScolaire']['2011']['ecole'];?> </p> </li>
    			   <li class="date"><i class="fas fa-calendar"></i> 2019 -2020 </li>
    			   <li><p><?php echo $chemin_jason['experienceProfessionnelles']['2011-2012']['Missons']['1'];echo            $chemin_jason['cursusScolaire']['2005-2009']['ecole'];?></p> </li>
    			   <li class="date"><i class="fas fa-calendar"></i> 2020 -2021 </li>
    			   <li><p><?php echo $chemin_jason['cursusScolaire']['2005-2009']['detail'];echo $chemin_jason['cursusScolaire']['2005-2009']['ecole'];?></p> </li>
    			   <li class="date"><i class="fas fa-calendar"></i> 2021 -2022 </li>
    			   <li><p><?php echo $chemin_jason['cursusScolaire']['2005-2009']['diplome'];echo            $chemin_jason['cursusScolaire']['2005-2009']['ecole'];?></p> </li>
    			</ul>
    			<h1><i class="fas fa-hand-paper "></i>LOISIR</h1>
    			<ul>
    			   <li><i class="fas fa-gamepad "></i><?php echo $chemin_jason['Loisirs']['1'];?></li>
    			   <li class=""><i class="fas fa-futbol"></i><?php echo $chemin_jason['Loisirs']['3'];?></li>
    			   <li> <i class="fas fa-cookie"></i><?php echo $chemin_jason['Loisirs']['2'];?></li>

    			
    		</div>

    		
    	</section>
    </main>
    <footer>
    	<p>Suivez Moi Sur Les Reseau Sociaux</p>
    	<i class="fab fa-facebook-square fa-2x"></i>
    	<i class="fab fa-linkedin fa-2x"></i>
    	<i class="fab fa-twitter-square fa-2x"></i>
    	<p>Copyright &copy; 2022 </p>
    </footer>
</body>
</html>