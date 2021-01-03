<?php
class Page {
    static public function affichage($title='Document sans titre', $body='', $head='') {
        $affichage = '';
        $affichage .= '<!DOCTYPE html>';
        $affichage .= '<html lang="fr">';
        $affichage .= '<head>';
        $affichage .= '<meta charset="UTF-8" />';
        $affichage .= '<title>'.$title.'</title>';
        $affichage .= $head;
        $affichage .= '</head>';
        $affichage .= '';
        $affichage .= '<body>'.$body.'</body>';
        $affichage .= '</html>';
        return $affichage;
    }
}
