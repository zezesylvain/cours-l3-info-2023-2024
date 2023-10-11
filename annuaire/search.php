<?php
session_start() ;

require_once("config.php") ;
$rech = filter_input(INPUT_POST, "rech", FILTER_SANITIZE_STRING) ;
$tab = searchResult($rech) ;
echo annuaireContents() ; 