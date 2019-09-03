<?php

require_once('../controller/functions.php');
require_once('../model/Entity.php');
require_once('../model/Manager.php');
require_once('../model/Expense.php');
require_once('../model/ExpenseManager.php');

$expenseManager = new ExpenseManager();

// List of expenses
$expenses = $expenseManager->readAllExpensesCommercial($_GET['userEmail']);

if(count($expenses)>0){
    $expensesAdapt = adapt($expenses);
}

function adapt($expenses)
{
    $array=[];

    foreach ($expenses as $expense)
    {
        $id = $expense->getExpenseId();
        $customerLastName = strtoupper($expense->getCustomerLastName());
        $customerFirstName = $expense->getCustomerFirstName();
        $societyName = $expense->getSocietyName();

        $array[$id] = [
            'Date' => $expense->getExpenseDate(),
            'Mission' => $expense->getMissionName(),
            'Customer' => "$customerLastName $customerFirstName - $societyName",
            'Type' => $expense->getExpenseType(),
            'Total' => $expense->getExpenseTotal()
        ];
    }
    return $array;
}

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
        <div class="header">Notes de frais</div>
        <div class="content">
            <button class="newExpense" onClick="window.location.href='expense.php'" name="newExpense">+</button>
            <?php
            if(isset($expensesAdapt)){
                echo viewTable($expensesAdapt);
            }else{
                echo "Pas d'expenses";
            }
            ?>
        </div>
        <?php echo footerButtons($_GET['userEmail']); ?>
    </body>
</html>
