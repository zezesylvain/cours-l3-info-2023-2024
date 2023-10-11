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
    $d=json_decode($persnne);
     
    



?>