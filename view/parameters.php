<?php

require_once('../controller/functions.php');
require_once('../model/Entity.php');
require_once('../model/Manager.php');
require_once('../model/Expense.php');
require_once('../model/ExpenseManager.php');


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
        <div class="header">Paramètres</div>
        <div class="content">
            <div id="parameters">
                <a href="parameters.php?userEmail="><img src="../public/images/profile.svg"></a>
                <a><img src="../public/images/clients.svg"></a>
            </div>
            <div id="parameters">
                <a><img src="../public/images/stats.svg"></a>
                <a><img src="../public/images/logout.svg"></a>
            </div>
        </div>
    </body>
</html>
