<?php

$url_en_cours=$_SERVER['REQUEST_URL'];
$url_en_cours=substr($url_en_cours, strripos($url_en_cours,"/")+1);
$url_en_cours = str_replace(".php", " ", str_replace("-", " ", $url_en_cours));
$url_en_cours = strtoupper(substr($url_en_cours, 0, 1)).substr($url_en_cours, 1);

$liaison = mysqli_connect('127.0.0.1', 'gStock', 'swathiSAMALLOO12');
mysqli_select_db($liaison, 'stocks');

?>