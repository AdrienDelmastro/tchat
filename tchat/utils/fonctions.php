<?php

function getEnteteHtml(string $titre = 'Portefolio'): string
{
    return "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>$titre</title><script src='js/background.js'></script><link rel='stylesheet' href='css/style.css'></head><body>";
}

function getEnteteHtmlDir(string $titre = 'Portefolio'): string
{
    return "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>$titre</title><link rel='stylesheet' href='css/styleDir.css'> <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head><body>";
}

function intoBalise(string $balise, string $contenu, array $attribut = null): string
{
    $str = '<' . $balise;
    if ($attribut !== null) {
        foreach ($attribut as $item => $value) {
            $str .= ' ' . $item . '="' . $value . '"';
        }
    }
    $str .= '>';
    $str .= $contenu . '</' . $balise . '>';
    return $str;
}

function getDivOuvrante(array $attribut = null): string
{ //retourne une div avec ou sans class/id
    $str = '<div';
    foreach ($attribut as $item => $value) {
        $str .= ' ' . $item . '="' . $value . '"';
    }
    $str .= '>';
    return $str;
}

function getDivFermante(): string
{
    return '</div>';
}

function getDebutForm(string $action, string $methode): string
{
    return "<form action='$action' method='$methode'>";
}

function getInput(array $info): string
{
    $str = '<input';
    foreach ($info as $item => $nom) {
        $str .= ' ' . $item . '="' . $nom . '"';
    }
    $str .= '/>';
    return $str;
}

function getRequiredInput(array $info): string
{
    $str = '<input';
    foreach ($info as $item => $nom) {
        $str .= ' ' . $item . '="' . $nom . '"';
    }
    $str .= 'required/>';
    return $str;
}

function getListe(string $type, $nb, array $donnees): string
{
    $html = '';
    if (count($donnees) !== $nb) {
        $html .= 'error !';

    } else {
        if ($type === 'ul') {
            $html .= '<ul>';
            foreach ($donnees as $d) {
                $html .= '<li>' . $d . '</li>';
            }
            $html .= '</ul>';
        } else {
            //ol
        }
    }
    return $html;
}

function getFinForm(): string
{
    return "</form>";
}

function getImage(string $image, array $attribut = null): string
{
    $html = "<img src='$image'";
    if ($attribut !== null) {
        foreach ($attribut as $item => $value) {
            $html .= ' ' . $item . '="' . $value . '"';
        }
    }
    return $html .= '/>';
}

function getBarre(String $id = null): string
{
    $html = "<div class='barre'><p>$id</p><div class='progress' id='progressBar'>
              <div class='progress-bar progress-bar-animated' id='innerBar$id'></div>
             </div><p class='droite' id='$id'>0%</p></div>";

    return $html;
}
