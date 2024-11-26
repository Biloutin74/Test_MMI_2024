<?php
// index.php

// Activer les rapports d'erreurs pour le développement
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclusion des fichiers nécessaires (par ex. pour l'autoload ou les configurations)
// require_once 'config.php';
// require_once 'autoload.php';

// Définir la page d'accueil ou le point d'entrée
$pageTitle = "Accueil";

// Fonctionnalité simple pour tester PHP
function sayHello($name) {
    return "Bonjour, " . htmlspecialchars($name) . " !";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $pageTitle; ?></h1>
    </header>
    <main>
        <p><?php echo sayHello("utilisateur"); ?></p>
        <p>Bienvenue dans votre première page PHP de base.</p>
    </main>
</body>
</html>
