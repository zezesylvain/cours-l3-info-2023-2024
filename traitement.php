<?php
    include_once("confi.php");
    
    $nom = filter_input(INPUT_POST, 'nom');
    $prenom = filter_input(INPUT_POST, 'prenom'); 
    $classe = filter_input(INPUT_POST, 'classe'); 


    $lesNiveaux = [
        "L1" => "Licence 1",
        "L2" => "Licence 2",
        "L3" => "Licence 3",
        "M1" => "Master 1"
        ];