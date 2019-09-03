<?php

require_once('../controller/functions.php');
require_once('../model/Form.php');
require_once('../model/Entity.php');
require_once('../model/Manager.php');
require_once('../model/Expense.php');
require_once('../model/ExpenseManager.php');
require_once('../model/Mission.php');
require_once('../model/MissionManager.php');

$txtBtn = "Ajouter";

$expenseManager = new ExpenseManager();
$missionManager = new MissionManager();
$expenseType=['Repas','Trajet','Hôtel','Péage', 'Essence'];

$missionsAdapt = adaptSelect($missionManager->readAll());

// Si $_GET['expenseId'] on est en modification
if(isset($_GET['expenseId'])){
    $txtBtn = "Modifier";
    $expense = $expenseManager->readExpenseDetails($_GET['expenseId']);
    $customerLastName = strtoupper($expense->getCustomerLastName());
    $customerFirstName = $expense->getCustomerFirstName();
}else{
    $expense = new Expense();
}

/*
// Si le formulaire est posté
if(isset($_POST['btnSave'])){
    $expense->setMissionId($_POST['missionId']);
    $expense->setExpenseType($_POST['expenseType']);
    $expense->setExpenseDate($_POST['expenseDate']);
    $expense->setExpenseTotal($_POST['expenseTotal']);
    $expenseManager->save($expense);
}
*/
// Création du formulaire avec la class Formulaire
$form = new Form('','POST');
$form->label('missionList', 'Mission');
$form->select('missionList',$missionsAdapt,$expense->getMissionName());
$form->input('text','societyName','Society',$expense->getSocietyName(),'disabled');
$form->input('text', 'customer','Customer',"$customerLastName $customerFirstName", 'disabled');
$form->select('typeList',$expenseType,$expense->getExpenseType());
$form->input('text','expenseTotal','Total',$expense->getExpenseTotal());
$form->submit('btnSave', $txtBtn);

?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../public/css/style.css">
        <style>@import url('https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap&subset=latin-ext');</style>
    </head>
    <body>
        <div class="header"><?php echo $txtBtn;?></div>
        <div class="content">
            <?php echo $form->render();?>
        </div>

    </body>
</html>
