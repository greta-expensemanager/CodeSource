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
        echo "The file $classDir doesn't exist";
    }
}

function viewTable($data){
    // Opening of table and tbody
    $html = '<table><tbody>';

    // Loop on all rows of the table
    foreach($data as $expenseId => $line){
        $html .= "<tr><a href='expense.php?expenseId=$expenseId'>";

        foreach($line as $key => $cell){
            $html .= "$key : $cell<br/>";
        }
        $html .= '</a></tr><hr/>';
    }

    // Closing of tbody and table
    $html .= '</tbody></table>';

    return $html;
}

function adaptSelect($missions){
    $array=[];
    foreach ($missions as $mission)
    {
        $array[$mission->getMissionId()] = $mission->getMissionName();
    }
    return $array;
}

function footerButtons($userEmail){

    $html = '<div class="footer"><button id="footerButton" onClick="window.location.href=\'listExpense.php?userEmail='.$userEmail.'\'">Liste</button>';
    $html .= '<button id="footerButton" onClick="window.location.href=\'parameters.php?userEmail='.$userEmail.'\'">Paramètres</button></div>';

    return $html;
}
