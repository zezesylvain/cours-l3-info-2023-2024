<?php

$json = file_get_contents('data.json');
$data = json_decode($json, true);
echo "<pre>" ;
print_r($data) ;
echo "</pre>" ;
