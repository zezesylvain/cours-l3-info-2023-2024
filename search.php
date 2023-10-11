<?php
session_start() ;

require_once("config.php") ;
$rech = filter_input(INPUT_POST, "rech") ;
$tab = searchResult($rech) ;
echo annuaireContents() ; 