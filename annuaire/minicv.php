<?php
include_once("session.php") ;
$d = filter_input(INPUT_POST, "d", FILTER_SANITIZE_STRING) ;
$infoEtudiant = $_SESSION["app"]["donnees"][$d] ;
?>
<div class="minicv st cv row">
    <div class="minicv-photo photo-etudiant col-md-6">
        <img class="design-photo s-photo img-fluid" src="<?php echo "$d/cv/photo.jpg"?>">
    </div>
    <div class="col-md-6">
        <span class="minicv-telephone mobile"><?php echo $infoEtudiant["etatCivil"]["contacts"]["mobile"];?></span> 
        <span class="etudiant txt email">
            <a class="mon email" href="mailto:<?php echo $infoEtudiant["etatCivil"]["contacts"]["email"];?>">
                <?php echo $infoEtudiant["etatCivil"]["contacts"]["email"];?>
            </a>
        </span>
        <span class="minicv-nele nele"><?php echo $infoEtudiant["etatCivil"]["date2naissance"];?></span> 
        <span class="minicv-nea nea"><?php echo $infoEtudiant["etatCivil"]["lieu2naissance"];?></span> 
    </div>
    <h2 class="cursus minicv-item">Cursus Universitaire </h2>
    <?php
    $cursus = $infoEtudiant["cursusScolaire"] ;
    foreach($cursus AS $annee => $it):
        ?>
        <div class="col-12">
            <span class="annee"><?php echo $annee;?>: </span> 
            <span class="diplome"> <?php echo $it["diplome"];?></span>
            <span class="ecole"> <?php echo $it["ecole"];?></span>
            <span class="detail"> <?php echo $it["detail"];?></span>
        </div>
        <?php
    endforeach;
    ?>    
</div>
