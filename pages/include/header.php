<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../assets/css/reset.css">
    <link rel="stylesheet" href="./../assets/css/include/header.css">
    <link rel="stylesheet" href="./../assets/css/include/footer.css">
    
    <!-- On charge le style CSS de la page concernée -->
    <link rel="stylesheet" href="./../assets/css/<?php echo $pageNameSplit[0]?>.css">
    <title><?php echo $pageNameSplit[0]?></title>
</head>
<body>
    <header>
        <nav class="containers">
            <a href="#"><img src="./../assets/img/slogan.png" alt="logo"/></a>
            <a href="#"><img src="./../assets/img/Home/homelogo.png" alt="home" class="menu"></a>
            <a href="#"><i class="menu"></i>Actualités</a>
            <a href="#"><i class="menu"></i>Hors-course</a>
            <a href="#"><i class="menu"></i>Calendrier</a>
            <a href="#"><i class="menu"></i>L'équipe 2016</a>
            <a href="#"><i class="menu"></i>Galerie</a>
            <a href="#"><i class="menu"></i>Social Live</a>
            <a href="#"><i class="menu"></i>Partenaires</a>
        </nav>
    </header>
