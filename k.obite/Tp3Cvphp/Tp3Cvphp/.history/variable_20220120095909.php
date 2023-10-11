<!-- declaration de mes variables -->
<?php 

//declaration variable servant à afficher completement la date
    $jour=date('d');
    $mois=date('m');
    $annee=date('Y');

    $heure=date('H');
    $minute=date('i');


//déclaration de la variable donnant info sur ma paersonne

    $data_json=file_get_contents("data.json");
    $data=json_decode($data_json, true);
    $nom=$data['personne']['nom'];

//déclaration de variable indiquand mes atouts

    $atouts=$data['atouts']['td'];

//déclaration des variables donnant information relative à mes diplomes

    $diplomesFormations=$data['linfo','bac',][]
    
     
    



?>