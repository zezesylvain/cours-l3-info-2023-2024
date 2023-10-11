<?php
require_once("config.php") ;
$getNCE = filter_input(INPUT_GET, "d", FILTER_SANITIZE_STRING) ;
$dinit = $getNCE ?? " " ;
$Proprio = getData($dinit) ;
 $urlgloabal = filter_input(INPUT_SERVER, "REQUEST_URI") ;
 $qstring = filter_input(INPUT_SERVER, "QUERY_STRING") ;
 $url = str_replace("?$qstring", "", $urlgloabal) ;
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../bootstrap/favicon.ico">

    <title><?php echo TITRE_LONG;?></title>
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <?php if($getNCE != NULL): ?>
            <link href="<?php echo $getNCE;?>/annuaire.css" rel="stylesheet">
    <?php endif; ?>
    <script src="senddata.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark menu-haut">
      <a class="navbar-brand" href="#" annuaire-titre><?php echo TITRE_COURT;?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link lien-vers-projet-cv" href="#" target="__blank">
					<?php //echo TITRE_COURT;?>
			  </a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0 recherche-rapide">
            <input class="form-control mr-sm-2" type="text" placeholder="Recherche rapide" aria-label="Recherche rapide" onkeyup="sendData('rech='+this.value, 'search.php', 'data-content'); sendData('url=<?php echo $url;?>&rech='+this.value, 'pagin.php', 'pagination-location');">
        </form>
      </div>
    </nav>

    <main role="main" class="container minicv-main">
      <div class="jumbotron minicv-jumbo">
          <?php if($getNCE != NULL): ?>
          <div class="proprietaire">Design by <span class="by designer"><?php echo $Proprio;?></span></div>
          <?php endif; ?>
          <span class="titre-annuaire">
				<?php echo TITRE_COURT;?>
		  </span>
        <div class="form-inline mt-2 mt-md-0 search-form">
            <input class="form-control mr-sm-2" type="text" placeholder="Recherche rapide" aria-label="Recherche rapide" onkeyup="sendData('rech='+this.value, 'search.php', 'data-content'); sendData('url=<?php echo $url;?>&rech='+this.value, 'pagin.php', 'pagination-location');">          
        </div>
        <div class="form-inline mt-2 mt-md-0 list-form">
            Choisir un design
            <select onchange="window.location.href='?d='+this.value">
                <option>Selectionnez un design</option>
                <?php   
                foreach ($listeDesEtudiants as $nc => $np):
                    $selected = $nc == $getNCE ? " selected=\"selected\"" : "" ;
                    echo "<option value=\"$nc\" $selected>$np</option>" ;
                endforeach;
                ?>
            </select>
            
        </div>
                <nav aria-label="Page navigation example">
                    <span  id="pagination-location">
                        <?php
                            echo makePagination() ;
                        ?>
                    </span>
                        
              </nav>
      </div>

            <div class="annuaire cadrePlus">
                <div class="row" id="data-content">
					<?php 
					  echo annuaireContents($filter) ;
					?>
				</div>                       
            </div>
            <?php  include_once 'modal.php'; ?>
    </main>
    <div class="separator1"></div>
	<div class="container-fluid">
		<footer>
			<div class="row">
				<div class="col-12 col-sm-4 foot">
					<span class="copy">&copy;<?php echo date("Y");?></psan>
				</div>
				<div class="col-12 col-sm-4 foot">
					<span class="l3info">L3 Info, UFR SFA, Universit&eacute; Nangui Abrogoua</span>
				</div>
				<div class="col-12 col-sm-4 foot">
					<span class="foot adresse"> Projet WEB </span>
				</div>
			</div>
		</footer>
	</div>
    
	

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>
