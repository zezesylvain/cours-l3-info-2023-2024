<?php
include_once("session.php") ;
$nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING) ;
echo $nom ;
