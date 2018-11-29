<?php
    // On récupère le nom de la page au sein du DOM (e.g nomDeLaPage.php)
    $pageName=basename($_SERVER['PHP_SELF']);

    // A l'aide d'une RegEx, on split le nom de la page pour récupérer uniquement la partie avant le .php
    $pageNameSplit = preg_split('/[\/.]/', $pageName);
    
    // On inclut le Header
    include('./include/header.php');
    
?>

<main>
    <div class="content">
        <figure>
            <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
            <figcaption></figcaption>
        </figure>
        <figure>
            <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
            <figcaption></figcaption>
        </figure>
    </div>
</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>