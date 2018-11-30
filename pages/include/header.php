<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../assets/css/reset.css">
    <link rel="stylesheet" href="./../assets/css/include/header.css">
    <link rel="stylesheet" href="./../assets/css/include/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <!-- On charge le style CSS de la page concernée -->
    <link rel="stylesheet" href="./../assets/css/<?php echo $pageNameSplit[0]?>.css">
    <title><?php echo $pageNameSplit[0]?></title>
</head>
<body>
    <header>
        <nav class="containers">
            <a href="./home.php" class="logoheader"><img src="./../assets/img/slogan.png" alt="logo"/></a>
            <a href="./home.php"><img src="./../assets/img/home/logoaccueil.png" alt="home"></a>
            <a href="./article.php">Actualités</a>
            <a href="./horscourse.php">Hors-course</a>
            <a href="http://www.teamdirectenergie.com/calendrier-des-courses/">Calendrier</a>
            <a href="./team.php">L'équipe 2016</a>
            <a href="http://www.teamdirectenergie.com/galerie/">Galerie</a>
            <a href="http://www.teamdirectenergie.com/social-live/">Social Live</a>
            <a href="http://www.teamdirectenergie.com/nos-partenaires/">Partenaires</a>
        </nav>
    </header>
