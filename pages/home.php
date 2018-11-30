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
                    <img src="./../assets/img/home/image6accueil.png" alt="cycliste">
                    <figcaption>
                            <p>Lorem ipsum dolor sit amet conse...</p>
                    </figcaption>
            </figure>

            <figure>
                    <img src="./../assets/img/home/image11accueil.png" alt="micro">
                    <figcaption>
                            <p>Indiscrétion</p>
                    </figcaption>
            </figure>

            <figure>
                    <img src="./../assets/img/home/image8accueil.png" alt="velo">
                    <figcaption>
                            <p>Le vélo pours les nuls</p>
                    </figcaption>
            </figure>

            <figure>
                    <img src="./../assets/img/home/image9accueil.png" alt="roue">
                    <figcaption>
                            <p>Tactique & technique</p>
                    </figcaption>
            </figure>

            </div>
        </div>
    </section>

    <section class="informations">
        <div class="content --modifier">
            <div class="nextRun">
                <h2>Prochaines courses</h2>
                
                <div class="run">

                    <div class="calendar">
                        <div class="calendar__top">
                            <p>jan</p>
                        </div>

                        <div class="calendar__bot">
                            <p>28</p>
                        </div>
                    </div>
                    
                    <div class="runDescription">
                        <div class="pays">
                            <img src="./../assets/img/home/canada.svg" alt="canada">
                            <p>canada</p>
                        </div>

                        <span><p>Titre de la course lorem ipsum ah oui oui..</p></span>
                        <img src="./../assets/img/home/next.svg" alt="next">

                    </div>
                </div>

                <div class="run">

                    <div class="calendar">
                        <div class="calendar__top">
                            <p>fev</p>
                        </div>

                        <div class="calendar__bot">
                            <p>13</p>
                        </div>
                    </div>

                    <div class="runDescription">
                        <div class="pays">
                            <img src="./../assets/img/home/belgium.svg" alt="belgique">
                            <p>Belgique</p>
                        </div>

                        <span><p>Titre de la course lorem ipsum ah oui oui..</p></span>
                        <img src="./../assets/img/home/next.svg" alt="next">

                    </div>
                </div>

                 <div class="run">

                    <div class="calendar">
                        <div class="calendar__top">
                            <p>avr</p>
                        </div>

                        <div class="calendar__bot">
                            <p>11</p>
                        </div>
                    </div>

                    <div class="runDescription">
                        <div class="pays">
                            <img src="./../assets/img/home/france.svg" alt="france">
                            <p>France</p>
                        </div>

                        <span><p>Titre de la course lorem ipsum ah oui oui..</p></span>
                        <img src="./../assets/img/home/next.svg" alt="next">

                    </div>
                </div>

                <div class="run">

                    <div class="calendar">
                        <div class="calendar__top">
                            <p>mar</p>
                        </div>

                        <div class="calendar__bot">
                            <p>31</p>
                        </div>
                    </div>

                    <div class="runDescription">
                        <div class="pays">
                            <img src="./../assets/img/home/spain.svg" alt="espagne">
                            <p>Espagne</p>
                        </div>

                        <span><p>Titre de la course</p></span>
                        <img src="./../assets/img/home/next.svg" alt="next">

                    </div>
                </div>

                <div class="run">

                    <div class="calendar">
                        <div class="calendar__top">
                            <p>aoû</p>
                        </div>

                        <div class="calendar__bot">
                            <p>18</p>
                        </div>
                    </div>

                    <div class="runDescription">
                        <div class="pays">
                            <img src="./../assets/img/home/france.svg" alt="france">
                            <p>France</p>
                        </div>

                        <span><p>Titre de la course</p></span>
                        <img src="./../assets/img/home/next.svg" alt="next">

                    </div>
                </div>
                <div class ="link">
                    <a href="">Toutes les courses</a>
                </div>
                
            </div>

            <div class="zoom">
                <h2>Zoom sur le tour d'espagne</h2>
                <article>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae consequuntur quidem nisi. Pariatur aliqu...</p>
                    <img src="./../assets/img/home/image10accueil.png" alt="photoCycliste">
                    <div class ="link">
                        <a href="">Découvrir la course</a>
                    </div>
                    
                </article>

            </div>
    </section>

    






</main>



<?php

    // On inclut le Footer
    include('./include/footer.php');
?>