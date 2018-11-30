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
        <h2>HORS-COURSE</h2>
        <section class="firstline">

            <figure class="iconelineone">
                <img src="./../assets/img/home/image11accueil.png" alt="micro">
                <figcaption>
                    <p>Indiscrétion</p>
                </figcaption>
            </figure>

            <figure>
                <img src="./../assets/img/home/image6accueil.png" alt="cycliste">
                <figcaption>
                    <p>Lorem ipsum dolor sit amet conse...</p>
                </figcaption>
            </figure>

            <figure>
                <img src="./../assets/img/home/image6accueil.png" alt="cycliste">
                <figcaption>
                    <p>Lorem ipsum dolor sit amet conse...</p>
                </figcaption>
            </figure>

            <figure>
                <img src="./../assets/img/home/image6accueil.png" alt="cycliste">
                <figcaption>
                    <p>Lorem ipsum dolor sit amet conse...</p>
                </figcaption>
            </figure>
        
        </section>

        <section class="secondline">
            <figure>
                <img src="./../assets/img/home/image8accueil.png" alt="velo">
                <figcaption>
                    <p>Le vélo pours les nuls</p>
                </figcaption>
            </figure>
        
        </section>

        <section class="thirdline">
            <figure>
                <img src="./../assets/img/home/image9accueil.png" alt="roue">
                <figcaption>
                    <p>Tactique & technique</p>
                </figcaption>
            </figure>
        </section>
    </div>

</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>