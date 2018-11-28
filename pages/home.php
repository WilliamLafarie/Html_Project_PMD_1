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
        <div class="content">
            <h2>Dernières actualités - <span>Carnet de route</span></h2>

            <div class="gallery">
                <div class="gallery__left">
                    <figure class="actualite__item">
                        <img src="./../assets/img/home/image1accueil.png" alt="image1">
                        <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                    </figure>

                    <figure class="actualite__item">
                        <img src="./../assets/img/home/image2accueil.png" alt="image2">
                        <figcaption class="camera"><img src="./../assets/img/home/camera.svg" alt="camera"></figcaption>
                        <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                        
                    </figure>

                    <figure class="actualite__item">
                        <img src="./../assets/img/home/image3accueil.png" alt="image3">
                        <figcaption class="camera"><img src="./../assets/img/home/camera.svg" alt="camera"></figcaption>
                        <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                    </figure>

                    <figure class="actualite__item">
                        <img src="./../assets/img/home/image4accueil.png" alt="image4">
                        <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                    </figure>
                </div>

                <div class="gallery__right">
                    <figure class="actualite__item">
                            <img src="./../assets/img/home/image5accueil.png" alt="image5">
                            <figcaption><img class="journal" src="./../assets/img/home/newspaper.svg" alt="journal">Saison 2016: le portrait de Thomas Voeckler</figcaption>
                        </figure>
                </div>

            </div>
        </div>

    </section>

    <section class="discover">
        <div class="content">
            <h2>Découvrez l'équipe 2016</h2>
            <div class="discover__item">

                <figure>
                    <img src="./../assets/img/home/rond1accueil.png" alt="Natanael Berhane">
                    <figcaption>Natanael Berhane</figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/home/rond2accueil.png" alt="Bryan Coquard">
                    <figcaption>Bryan Coquard</figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/home/rond3accueil.png" alt="Jérôme Cousin">
                    <figcaption>Jérôme Cousin</figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/home/rond4accueil.png" alt="Antoine Duschenne">
                    <figcaption>Antoine Duschenne</figcaption>
                </figure>

                <img src="./../assets/img/home/next.svg" alt="next">

            </div>
        </div>
    </section>

    <section class="horsCourse">
        <div class="content">
            <h2>Hors-Course</h2>
            <div class="horsCourse__item">

            <figure>
                    <!-- <img src="./../assets/img/home/image6accueil.png" alt="cycliste"> -->
                    <figcaption>Lorem ipsum dolor sit amet consectetur...</figcaption>
            </figure>

            <figure>
                    <img src="./../assets/img/home/image11accueil.png" alt="micro">
                    <figcaption>Indiscrétion</figcaption>
            </figure>

            <figure>
                    <img src="./../assets/img/home/image8accueil.png" alt="velo">
                    <figcaption>Le vélo pour les nuls</figcaption>
            </figure>

            <figure>
                    <img src="./../assets/img/home/image9accueil.png" alt="roue">
                    <figcaption>Tactique & Technique</figcaption>
            </figure>

            </div>
        </div>
    </section>

    <section class="Informations">
        <div class="content">
            <div class="nextRun">
                <h2>Prochaines courses</h2>
                <div class="run">

                    <div class="calendar">

                    </div>
                    
                    <div class="runDescription">


                    </div>
                    <a href=""></a>

                </div>
            </div>

            <div class="zoom">
                <h2>Zoom sur le tour d'espagne</h2>
                <article>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae consequuntur quidem nisi. Pariatur aliqu...</p>
                    <img src="" alt="">
                    <a href=""></a>
                </article>

            </div>
    </section>

    <section class="contact">
        <img src="./../assets/img/directenergielogo" alt="">
        <div class="slogan">
            <p>1.5 millions de clients ont déjà choisi Direct Energie pour l'électricité et le gaz</p>
            <p>Et vous, où en êtes-vous ? </p>
        </div>
        <div class="phone">
            <p>Contactez-nous au <span>3099</span> <span>Service et appel gratuit</span></p>
        </div>

    </section>

    






</main>



<?php

    // On inclut le Footer
    include('./include/footer.php');
?>