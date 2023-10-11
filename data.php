<?php
/*
 * On met le contenu du fichier data.json dans la variable php $letudiant qui est un tableau
 */
$letudiant = json_decode(file_get_contents("data.json"), true) ;
/*
 * on transforme les clefs du tableau $letudiant en variable
 * A pres, on aura par exemple la variable $etatCivi
 */
foreach ($letudiant as $key => $value) :
    $$key = $value ;
endforeach;
/*
 * On transforme toutes les clefs de $etatCivil en variable.
 * On aura par exemple les variables
 * $nom, $prenoms, $contacts
 */
foreach ($etatCivil as $key => $value) :
    $$key = $value ;
endforeach;
?>