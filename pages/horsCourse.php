<?php
    // On récupère le nom de la page au sein du DOM (e.g nomDeLaPage.php)
    $pageName=basename($_SERVER['PHP_SELF']);

    // A l'aide d'une RegEx, on split le nom de la page pour récupérer uniquement la partie avant le .php
    $pageNameSplit = preg_split('/[\/.]/', $pageName);
    
    // On inclut le Header
    include('./include/header.php');
    
?>

<main>

    <div class="contentglobal">
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
                    <img src="./../assets/img/horsCourse/image1horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image2horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image3horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>
            
            </section>
        </div>

        <div class="content">
            <section class="secondline">
                <figure class="iconelinetwo">
                    <img src="./../assets/img/home/image8accueil.png" alt="velo">
                    <figcaption>
                        <p>Le vélo pours les nuls</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image4horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image5horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image6horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>
            
            </section>
        </div>

        <div class="content">
            <section class="thirdline">
                <figure class="iconelinethree">
                    <img src="./../assets/img/home/image9accueil.png" alt="roue">
                    <figcaption>
                        <p>Tactique & technique</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image7horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image8horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>

                <figure>
                    <img src="./../assets/img/horsCourse/image9horscourses.png" alt="cycliste">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
                </figure>
            </section>
        </div>
    </div>

</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>