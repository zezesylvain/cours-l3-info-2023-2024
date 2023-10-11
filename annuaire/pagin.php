<?php
 include_once("session.php") ;
require_once("config.php") ;
$url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_STRING) ;
$rech = filter_input(INPUT_POST, "rech", FILTER_SANITIZE_STRING) ;
$tab = searchResult($rech) ;
echo makePagination() ;