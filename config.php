<?php
 include_once("session.php") ;
/*

session_destroy() ;
exit();
//*/
if(!array_key_exists("app", $_SESSION)):
    $_SESSION["app"] = [] ;
endif;
    $directory = str_replace(dirname(__DIR__),"", dirname(__FILE__)) ;
    $_SESSION["app"]["dir"] = $directory ;

ini_set('display_errors', 1);
$filtre = filter_input(INPUT_GET, "l") ;
$filter = $filtre == NULL ? "" : $filtre ;
$rech = filter_input(INPUT_POST, "rech") ;
makeData() ;
foreach ($_SESSION["app"] as $k => $v) :
    $$k = $v ;
endforeach;
$annee = "2021-2022" ;
define("LARGEUR_PHOTO", 600) ;
define("HAUTEUR_PHOTO", 600) ;
define("URL_APP", "http://l3info-2022.zds") ;//http://l3info-2020.zds
define("TITRE_COURT", "Projet WEB L3 Info UNA-SFA $annee") ;
define("TITRE_LONG", "Annuaire des &eacute;tudiants de L3 Info, Universit&eacute; Nangui Abrogoua, Ann&eacute;e $annee") ;

function makeURL(string $url, array $param) :string {
   
    $t = explode("?", $url) ;
    $lien = $t[0] ;
    $get = filter_input_array(INPUT_GET) ;
    $tab1 = is_array($get) ? $get : [] ;
    $tab2 = is_array($param) ? $param : [] ;
    $lesdonneesGet = array_merge($tab1, $tab2) ;
    $lelien = "$lien?" ;
    $and = "" ;
    foreach ($lesdonneesGet as $k => $v) :
        $lelien .= "$and$k=$v";
        $and = "&" ;
    endforeach;
    return $lelien ;
}
function recherche(string $texte, string $pattern): bool{
        if(preg_match("/$pattern/i", $texte)):
            return true ;
        else:
            return false ;
        endif;
        
}
function searchResult(string $val) : array{
    $tab = [];
    $d = $_SESSION["app"]["listeDeRecherche"] ;
    $t = [] ;
    $lettres = [] ;
    $lesDonnees = [] ;
    $toutesLesDonnees = [] ;
    $search = filter_var($val, FILTER_SANITIZE_ADD_SLASHES ) ;
    foreach($d AS $k => $v):
        if(preg_match("/".$search."/i", $v)):
            $tab[] = $k ;
            $t = explode(".", $k) ;
			$t0 = $t[0][0] ;
            if(!in_array($t0, $lettres)) :
                $lettres[] = $t0 ;
            endif;
            $lesDonnees[$t[0]][] = $k ;
            $toutesLesDonnees[] = $k ;
        endif;
    endforeach;
    $_SESSION["app"]["lettres"] = $lettres ;
    $_SESSION["app"]["lesDonnees"] = $lesDonnees ;
    $_SESSION["app"]["toutesLesDonnees"] = $toutesLesDonnees ;
    return $tab ;
}
function makeImage(array $etudiant, $d){
    $etatCivil = $etudiant["etatCivil"] ?? ["nom" => "Pas de nom", "prenoms" => "Pas de prenoms"];
    $photo = $etudiant["photo"] ?? ["largeur" => false, "hauteur" => "", "typemime" => false];
    $largeur = $photo["largeur"] ;
    $hauteur = $photo["hauteur"] ;
    $typemime = $photo["typemime"] ;
    if($largeur AND $hauteur):
        if($largeur == LARGEUR_PHOTO AND $hauteur == HAUTEUR_PHOTO AND $typemime == "image/jpeg"):
            $img = "<img class=\"img-thumbnail \" src=\"$d/cv/photo.jpg\" alt=\"$etatCivil[nom] $etatCivil[prenoms]\">" ;
        else:
            $img = "<img class=\"img-thumbnail \" src=\"assets/non-conforme.png\" alt=\"$etatCivil[nom] $etatCivil[prenoms]\">" ;
        endif;

    else:
        $img = "<img class=\"img-thumbnail \" src=\"assets/image-inexistante.png\" alt=\"$etatCivil[nom] $etatCivil[prenoms]\">" ; ;
    endif;
    return $img ;
}
function getData(string $d):string{
	global $donnees ;
	if(!array_key_exists($d, $donnees) OR $d == ""):
		return $d ;
	else:
		$nom = filter_var($donnees[$d]["etatCivil"]["nom"])  ;
		$prenoms = filter_var($donnees[$d]["etatCivil"]["prenoms"]) ;
		return "$nom $prenoms" ;
	endif;
}
function annuaireContents(string $filtre = ""): string{
    $text = "" ;
    $data = $_SESSION["app"]["donnees"] ;
    $keys = $filtre == "" ? $_SESSION["app"]["toutesLesDonnees"] : $_SESSION["app"]["listeDesEtudiantsFiltree"][$filtre] ; 
    $lesCles = array_unique($keys);
    //dd($lesCles);
			$url = URL_APP ;
    foreach ($lesCles as $d ) :
        $etudiant = $data[$d] ?? false ;
        if($etudiant):
            
            $etatCivil = $etudiant["etatCivil"] ;
            $projets = $etudiant["projets"] ?? [] ;
            $img = makeImage($etudiant, $d) ;
            foreach ($etatCivil as $key => $value):
                $$key = $value;
            endforeach;
            //$grp = $groupe ?? "00" ;
            $mobile = $contacts["mobile"] ?? "pas mobile";
            $email  = $contacts["email"] ?? " pas d'email";
            $lienCV = (file_exists("$d/cv/index.php") || file_exists("$d/cv/index.html")) ? "<a class=\"lien-cv vers-monprojetcv liencv\" href=\"$d/cv/\" target=\"__blank\">CV complet</a>" : "<span class=\"pas2CV\">Pas de CV </span>" ;
            $TPText = "";
            $persoText = "";
            $gpText = "";
            $lesTP = $projets["TP"] ?? [] ;
            $groupe = $projets["groupe"] ?? [] ;
            $perso = $projets["perso"] ?? [] ;
            foreach($lesTP AS $tp => $dossierTP):
                $TPText .= "<li> <a href=\"$d/$dossierTP\"> " . strtoupper($tp) . " </a></li>"; 
            endforeach;
            foreach($perso AS $projet):
                $dossierP = $projet['dossier'] ?? "#";
                $titreP = $projet['titre'] ?? "Projet sans titre";
                $persoText .= "<li> <a href=\"$dossierP\"> $titreP </a></li>"; 
            endforeach;
            if($groupe):
                $gpText = "<a href=\"$groupe[chef]/$groupe[dossier]\"> Projet de groupe </a>";
            else:
                $gpText = "Pas de groupe";
            endif;
            if(!$TPText):
                $TPText = "<li><h6>Pas de TP</h6></li>";
            endif;
            if(!$persoText):
                $persoText = "<li><h6>Pas de Projet perso</h6></li>";
            endif;
            $text .= <<<CONTENU
            <div class="col-sm-4 col-md-3 annuaire-item">
			  <div class="img photo img-thumbnail annuaire-img">
						{$img}
			  </div>
			  <div class="etat-civil etudiant">
				<span class="txt nce">{$nce}</span>
				<span class="txt nom ">{$nom}</span>
				<span class="txt prenoms">{$prenoms}</span> 
				<span class="txt telephone mobile">{$mobile}</span> 
				<span class="txt email">
					<a class="mon email" href="mailto:{$email}">{$email}</a>
				</span>
				<button type="button" class="btn  bouton bouton-minicv" data-toggle="modal" data-target="#annuaireModal"
					onclick="sendData('d={$d}', 'minicv.php', 'miniCV'); sendData('nom={$nom} {$prenoms} ({$nce})', 'nomprenom.php', 'nomPrenoms');"
				>
					Mini CV ...
				</button> <br>
				{$lienCV} 
			  </div>
			  <div class="mes-projets">
			    <div class="projet les-tps">
			        <h4 class="projet-per">Mes TP</h4>
			        <ul>
			            {$TPText}
			        </ul>
			    </div>
			    <div class="projet projet-perso">
			        <h4 class="projet-per"> <a href="{$d}">Mon espace perso</a> </h4>
			        <h4 class="projet-per">Mes projets perso</h4>
			        <ul>
			            {$persoText}
			        </ul>
			    </div>
			    <div class="projet projet-groupe">
			        <h4 class="projet-per">Mon projet de groupe</h4>
			        <h5>
			            {$gpText}
			        </h5>
			    </div>
			  </div>
            </div>
CONTENU;
        endif;
endforeach;
return $text ;
}
function dd($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    die();
}

function makeData(){
            $dir = glob("*.*", GLOB_ONLYDIR) ;
            $donnees = [] ;
            $lettres = [] ;
            $lesDonnees = [] ;
            $listeDesEtudiants = [] ;
            $listeDesEtudiantsFiltree = [] ;
            //dd($dir);
            foreach ($dir AS $d) :
                if(file_exists("$d/data.json")) :
                    $de = str_replace("../", "", $d) ;
                    $t = explode(".", $de) ;
					$t0 = $t[0][0] ;
                    if(!in_array($t0, $lettres)) :
                        $lettres[] = $t0 ;
						$listeDesEtudiantsFiltree[$t0] = [] ;
                    endif;
                    if(!in_array($t[0], $listeDesEtudiantsFiltree[$t0])) :
                        $listeDesEtudiantsFiltree[$t0][] = $d ;
                    endif;
                    $lesDonnees[$t[0]][] = $d ;
                    $letudiant = [] ;
                    $dataExists = file_exists("$d/data.json") ;
                    $img = "$d/cv/photo.jpg" ;
                    if(file_exists($img)):
                        $pdata = getimagesize($img);
                        $largeurImg = $pdata[0] ;
                        $hauteurImg = $pdata[1] ;
                        $typemime = $pdata["mime"] ;
                    else:
                         $img = "$d/cv/photo.jpg" ;
                         if(file_exists($img)):
                            $pdata = getimagesize($img);
                            $largeurImg = $pdata[0] ;
                            $hauteurImg = $pdata[1] ;
                            $typemime = $pdata["mime"] ;
                        else:
                            $largeurImg = false ;
                            $hauteurImg = false ;
                            $typemime = false ;
                        endif;
                    endif;
                    if($dataExists):
                        $letudiant = json_decode(file_get_contents("$d/data.json"), true) ;
                    endif; 
                    if(!is_array($letudiant)):
                        $letudiant = defaultStudent($d) ;
                    endif;
                    if(!array_key_exists("etatCivil", $letudiant)):
                        $letudiant = defaultStudent($d) ;
                    endif;    
                    $letudiant["photo"]  = [
                                "largeur" => $largeurImg,
                                "hauteur" => $hauteurImg,
                                "typemime" => $typemime
                        ] ;
                    $donnees[$de] = $letudiant ;
			        $_SESSION["app"]["toutesLesDonnees"][] = $de ;
                    $listeDeRecherche[$de] = makeSearchItem($letudiant["etatCivil"]) ;
                    $listeDesEtudiants[$de] = $letudiant["etatCivil"]["nom"] . " " .$letudiant["etatCivil"]["prenoms"] ;
                endif;
            endforeach;        
			$_SESSION["app"]["donnees"] = $donnees ;
			$_SESSION["app"]["listeDesEtudiants"] = $listeDesEtudiants ;
			$_SESSION["app"]["lesDonnees"] = $lesDonnees ;
			$_SESSION["app"]["lettres"] = $lettres ;
			$_SESSION["app"]["listeDeRecherche"] = $listeDeRecherche ;
			$_SESSION["app"]["listeDesEtudiantsFiltree"] = $listeDesEtudiantsFiltree ;
			
}

function makeSearchItem($data){   
    if(is_string($data) || is_int($data) || is_float($data)):
        return $data ;
    else:
        if(is_array($data)):
            $text = "" ;
            foreach ($data AS $k => $v):
                $text .= " " . makeSearchItem($v) ;
            endforeach;
            return $text ;
        else:
            return serialize($data) ;
        endif;
    endif;
}

function defaultStudent(string $d):array{
    return [
		"etatCivil" => [
			"nom" => $d, 
			"prenoms" => $d, 
			"date2naissance" => "", 
			"lieu2naissance" => "", 
			"nce" => $d,
			"contacts" => [
				"email" => "", 
				"mobile" => ""
				]
			],
		"cursusScolaire" => [],
		"experienceProfessionnelles" => [],
		"Competences" => [],
		"langues" =>[],
		"loisirs" => []
    ] ;
}
function makePagination(){
    $url = "" ;
    $li = "" ;    
    $lettres = $_SESSION["app"]["lettres"] ;
    foreach ($lettres as $letter) :
        $lienpage = makeURL($url, ["l" =>$letter]);
        $li .= "
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"$lienpage\">
                        $letter
                    </a>
               </li>" ;
    endforeach;
    
    return <<<PAGIN
        <ul class="pagination paginationcv">
                            <li class="page-item"><a class="page-link" href="{$url}">Filtre</a></li>
                              {$li}                             
                            <li class="page-item"><a class="page-link" href="#">Filtre</a></li>
                          </ul>
PAGIN;
    
}