<?php
$data = json_decode(file_get_contents('../data.json'), true);
foreach($data AS $k => $v):
	$$k = $v ;
endforeach;
foreach($etatCivil AS $k => $v):
	$$k = $v ;
endforeach;

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>CV de 
			<?php 
			echo "$nom $prenoms ";
			?>
		</title>    
		<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">CV de  <?php  echo "$nom $prenoms "; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#etatCivil">Etat Civil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Competences">Comp&eacute;tences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#experienceProfessionnelles">Exp&eacute;riences professionnelles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cursusScolaire">Cursus scolaires</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Loisirs">Loisirs</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container" id="etatCivil">
  <div class="jumbotron">
		<div class="row">
			<div class="col-12">
				<h2 class="texte-bleu">
					<?php echo $titre;?>
				</h2>
			</div>
			<div class="col-12 col-sm-4 col-md-3 identite">
				<?php  
				echo "<br>$nom $prenoms <br>
				N&eacute; le $date2naissance &agrave; $lieu2naissance<br>
				Nationalit&eacute;: $nationalite<br>
				$situationMatrimoniale
				"; 
				?>
			</div>
			<div class="col-12 col-sm-5 col-md-7 contact">
				<?php 
				foreach($contacts AS $key => $vv):
					echo "<br>$key: $vv" ;
				endforeach;
				?>
			</div>
			<div class="col-12 col-sm-3 col-md-2" id="etatCivil-photo">
				<img src="photo.jpg" alt="<?php  echo "$nom $prenoms "; ?>" class=" img img-responsive img-thumbnail rounded float-right" width="200px">
			</div>
		</div>
  </div>
</main>
	<div class="container-fluid cta">
		<hr>
	</div>
	<div class="container" id="Competences">
		<div class="row">
			<div class="col-12">
				<h2>
					Comp&eacute;tences
				</h2>
			</div>
			<?php foreach($Competences AS $k => $valeur) :?>
				<div class="col-12 col-md-6 col-lg-4">
					<h4>
						<?php echo $k;?>
					</h4>
					<ul>
					<?php 
					foreach($valeur AS $item):
						echo "<li>$item</li>" ;
					endforeach;
					?>
					</ul>
				</div>
			<?php endforeach;?>
			
		</div>
	</div>
	<div class="container-fluid cta">
		<hr>
	</div>
	<div class="container" id="experienceProfessionnelles">
		<div class="row">
			<div class="col-12">
				<h2>
					Expereiences professionnelles
				</h2>
			</div>
			<?php foreach($experienceProfessionnelles AS $k => $valeur) :?>
				<div class="col-12">
					<h4>
						<?php echo $k;?>
					</h4>
					<h4>
						<?php echo $valeur["Entreprise"];?>
					</h4>
					<ul>
					<?php 
					foreach($valeur["Missons"] AS $item):
						echo "<li>$item</li>" ;
					endforeach;
					?>
					</ul>
				</div>
			<?php endforeach;?>
		</div>
	</div>
	<div class="container-fluid cta">
		<hr>
	</div>
	<div class="container" id="cursusScolaire">
		<div class="row">
			<div class="col-12">
				<h2>
					Cursus scolaires
				</h2>
			</div>
			<?php foreach($cursusScolaire AS $k => $valeur) :?>
				<div class="col-12 col-md-6 col-lg-4">
					<h4>
						<?php echo $k;?>
					</h4>
					<p>
						<strong>
							<?php echo $valeur['diplome'];?>
						</strong>: 
						<span>
							<?php echo $valeur['ecole'];?>
						</span><br>
						<?php echo $valeur['detail'];?>
					</p>
				</div>
			<?php endforeach;?>
		</div>	
	</div>
	<div class="container-fluid cta">
		<hr>
	</div>
	<div class="container" id="Loisirs">
		<div class="row">
			<div class="col-12">
				<h2>
					Loisirs
				</h2>
			</div>
			<?php foreach($Loisirs AS  $valeur) :?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<?php echo $valeur;?>
				</div>
			<?php endforeach;?>
		</div>	
	</div>
	<div class="container-fluid cta">

	</div>
	

<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bottom navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#etatCivil">Etat Civil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Competences">Comp&eacute;tences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#experienceProfessionnelles">Exp&eacute;riences professionnelles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cursusScolaire">Cursus scolaires</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Loisirs">Loisirs</a>
      </li>
    </ul>
  </div>
</nav>	
	
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	</body>
</html>