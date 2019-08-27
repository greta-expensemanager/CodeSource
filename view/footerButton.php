<?php

$userEmail = $_GET['userEmail'];

$form = New Form('', '');
$form->button("window.location.href='view/listExpense.php?userEmail=$userEmail",'Liste');
$form->button("window.location.href='view/parameters.php?userEmail=$userEmail",'Paramètres');

echo $form->render();