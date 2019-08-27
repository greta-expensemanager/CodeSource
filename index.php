<?php

require_once ('controller/functions.php');
require_once('model/Form.php');
require_once('model/Entity.php');
require_once('model/Manager.php');
require_once('model/User.php');
require_once('model/UserManager.php');



$error= '';

if(isset($_POST['btnLogin']))
{
    $userManager = new UserManager();
    $user = $userManager->read($_POST['userEmail']);

    if($user->getUserEmail() === NULL)
    {
        $error="L'utilisateur n'existe pas";
    }
    elseif($user->getUserPassword() != $_POST['userPassword'])
    {
        $error='Mot de pas incorrect';
    }
    else
    {
        $userEmail=$user->getUserEmail();
        header("location:view/listExpense.php?userEmail=$userEmail");
    }
}

$form = New Form('', 'POST');
$form->input('email','userEmail','Email', '');
$form->input('password','userPassword','Mot de passe', '');
$form->submit('btnLogin', 'Connexion');

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Expense Manager</title>
    <style>@import url('https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap&subset=latin-ext');</style>
</head>
<body class="home">
    <img src="public/images/logotypeEM.png">
    <?php
    echo $form->render();
    echo $error;
    ?>
</body>
</html>
