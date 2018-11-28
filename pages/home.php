<?php
    // On récupère le nom de la page au sein du DOM (e.g nomDeLaPage.php)
    $pageName=basename($_SERVER['PHP_SELF']);

    // A l'aide d'une RegEx, on split le nom de la page pour récupérer uniquement la partie avant le .php
    $pageNameSplit = preg_split('/[\/.]/', $pageName);
    
    // On inclut le Header
    include('./include/header.php');
    
?>

<main>

    <section class="actualite">
        <h2>Dernières actualité - <span>Carnet de route</span></h2>

        <div class="gallery">
        
        </div>

    </section>



</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>