<?php
require_once "utils/fonctions.php";

$html = intoBalise("script", "", array("src" => "script.js"));
$html.= getEnteteHtmlDir("chat");
$html.= getDivOuvrante(array("class" => "content"));
$html.= getDivOuvrante(array("class"=>"container height90"));
$html.= getDivOuvrante(array("class"=>"chat", "id"=>"zoneTxt"));
$html.= getDivFermante();
$html.= getDivOuvrante(array("class"=>"barre rounded"));
$html.= getInput(array("type"=>"text", "id"=>"chat", "placeholder" =>"Envoyer un message","class"=>"inputChat"));
$html.= getInput(array("type"=>"submit", "id"=>"envoyer","class"=>"boutonChat","value"=>"Envoyer","onClick"=>"envoyer()"));
$html.= getDivFermante();
$html.= getDivFermante();
$html.= getDivFermante();


echo $html;