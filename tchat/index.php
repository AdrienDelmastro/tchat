<?php
$html = "";
require "utils/fonctions.php";

$html.=getEnteteHtmlDir("tchat");
echo "<script src='pseudo.js'></script>";

$html.= getDivOuvrante(array("class" => "content"));
$html.= getDivOuvrante(array("class" => "container rounded"));
$html.= getDivOuvrante(array("class" => "container inline rounded"));
$html.= intoBalise("label","Pseudo", array("for"=>"pseudo"));
$html.= getDebutForm("traitement.php","get");
$html.= getInput(array("type"=>"text", "class"=>"rounded","id"=>"pseudo", "name"=>"pseudo","size" =>"15"));
$html.= getDivFermante();
$html.= getInput(array("type"=>"submit", "class"=>"boutonChat clair mb-10","value"=>"Se connecter", "onclick" => "savePseudo()"));
$html.= getDivFermante();
$html.= getDivFermante();


echo $html;