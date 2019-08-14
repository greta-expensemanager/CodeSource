<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

function __autoload($className){
    $classDir = 'class/'.$className.'.php';
    if(file_exists($classDir)){
        require_once ($classDir);
    }else{
        echo "le fichier $classDir n'existe pas";
    }
}

function tableauAdapte($data)
{
    // Adapte les données pour l'affichage
    $tableauAdapte = [];
    foreach ($data as $ligne) {
        $tableauAdapte[] = [
            'Supprimer' => '<input type="checkbox" name="idClient" value="' . $ligne['idClient'] . '"/>',
            'Nom Prenom' => '<a href="update.php?id=' . $ligne['idClient'] . '">' . $ligne['nom'] . ' ' . $ligne['prenom'] . '</a>'
        ];
    }
    return $tableauAdapte;
}


function afficheTableau($data){
    // Ouverture du tableau html et entete
    $html = '<table>';
    $html .= '<thead><tr>';

    // Boucle sur les indices du premier tableau
    foreach ($data[0] as $key => $value){
        $html .= "<th>$key</th>";
    }

    // Fermeture entete html
    $html .= '</tr></thead>';

    // Ouverture du tbody
    $html .= '<tbody>';

    // boucle sur toutes le ligne du tableau
    foreach($data as $ligne){
        $html .= '<tr>';
        foreach($ligne as $celulle){
            $html .= "<td>$celulle</td>";
        }
        $html .= '</tr>';
    }

    // Ferme le tbody et table
    $html .= '</tbody></table>';

    return $html;
}