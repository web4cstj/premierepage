<?php
function affichagePage() {
    $affichage = '';
    $affichage .= '<!DOCTYPE html>';
    $affichage .= '<html lang="fr">';
    $affichage .= '<head>';
    $affichage .= '<meta charset="UTF-8" />';
    $affichage .= '<title>Document sans titre</title>';
    $affichage .= '</head>';
    $affichage .= '';
    $affichage .= '<body>';
    $affichage .= '</body>';
    $affichage .= '</html>';
    return $affichage;
}

echo affichagePage();