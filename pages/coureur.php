<?php
    // On récupère le nom de la page au sein du DOM (e.g nomDeLaPage.php)
    $pageName=basename($_SERVER['PHP_SELF']);

    // A l'aide d'une RegEx, on split le nom de la page pour récupérer uniquement la partie avant le .php
    $pageNameSplit = preg_split('/[\/.]/', $pageName);
    
    // On inclut le Header
    include('./include/header.php');
    
?>

<main>

    <section class="content">

        <section class="coureur">
            <img src="./../assets/img/detailCoureur/image1detailcoureur.png" alt="coureur">
            <div class="coureur__title">
                <div class="share">
                    <a href="">Partager</a>
                </div>
                <h2>Thomas Voeckler</h2>
                <p>alias <span>Ti Blanc ou Francis</span></p>
                <div class="coureur__rsn">
                    <figure>
                        <img src="./../assets/img/detailCoureur/TV_facebook.png" alt="facebook">
                        <figcaption>facebook</figcaption>
                    </figure>
                    <figure>
                        <img src="./../assets/img/detailCoureur/TV_twitter.png" alt="twitter">
                        <figcaption>twitter</figcaption>
                    </figure>
                    <figure>
                        <img src="./../assets/img/detailCoureur/TV_instagram.png" alt="instagram">
                        <figcaption>instagram</figcaption>
                    </figure>
                </div>
                <div class="coureur__perso">

                    <figure class="perso__portrait">
                        <img src="./../assets/img/detailCoureur/TV_ico_portrait.png" alt="parchemin">
                        <figcaption>
                            <p>Lire le portrait écrit de Thomas Voeckler</p>
                        </figcaption>
                        <a href=""><img src="./../assets/img/home/next.svg" alt="arrow"></a>
                    </figure>

                    <figure>
                        <figcaption></figcaption>
                        <a href=""><img src="" alt="arrow"></a>
                    </figure>
                     
                </div>
        </section>

        <section class="fiche">
            
            <div class="fiche__perso">
                <h2>Fiche d'identité</h2>
                <div class="identite">
                    <div class="identite__item">
                        <p>Age</p>
                        <p>Date d'anniversaire</p>
                        <p>Lieu de naissance</p>
                        <p>Taille</p>
                        <p>Poids</p>
                    </div>
                    <div class="identite__valeur">
                        <p>39 ans</p>
                        <p>22 juin 1979</p>
                        <p>Schiltigheim (France)</p>
                        <p>1m77</p>
                        <p>66kg</p>
                    </div>
                </div>
                <div class="palmares">
                    <h2>Palmarès</h2>
                     <div class="palmares__content">
                     <div class="more">
                            <p>2015</p>
                        </div>

                        <div class="palmares__text">
                            <img src="./../assets/img/home/next.svg" alt="arrow">
                            <p>2ème du Tour du Gévaudan</p>
                        </div>

                         <div class="palmares__text">
                            <img src="./../assets/img/home/next.svg" alt="arrow">
                            <p>2ème de l'étape une du Tour du Gévaudan</p>
                        </div>

                         <div class="palmares__text">
                            <img src="./../assets/img/home/next.svg" alt="arrow">
                            <p>3ème du Tour du Yorkshire</p>
                        </div>

                         <div class="palmares__text">
                            <img src="./../assets/img/home/next.svg" alt="arrow">
                            <p>2ème de l'étape une du Tour du Gévaudan</p>
                        </div>

                         <div class="palmares__text">
                            <img src="./../assets/img/home/next.svg" alt="arrow">
                            <p>3ème de l'étape quatre du Tour de la Sarthe - Pays de la Loire</p>
                        </div>

                        <div class="more">
                            <a href="">Lire la suite</a>
                        </div>

                     </div>

                    

                    
                </div>
            </div>
            
            <div class="playlist">
                <h2>Découvrez sa playlist</h2>
                <img src="./../assets/img/detailCoureur/spotify.png" alt="spotify">
            </div>

        </section>

        </div>

        

    </section>

</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>