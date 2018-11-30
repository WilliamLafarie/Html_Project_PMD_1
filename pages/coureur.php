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
                        <a href=""><img src="./../assets/img/detailCoureur/confessional.png" alt="video"></a>
                    </figure>

                </div>
        </section>

        <section class="fiche">

            <div class="fiche__perso">
                <h2>Fiche d'identité</h2>
                <div class="identite">
                    <table class="identite__data">
                        <tr>
                            <td>Age</td>
                            <td>39 ans</td>
                        </tr>
                        <tr>
                            <td>Date d'anniversaire</td>
                            <td>22 juin 1979</td>
                        </tr>
                        <tr>
                            <td>Lieu de naissance</td>
                            <td>Schiltigheim (France)</td>
                        </tr>
                        <tr>
                            <td>Taille</td>
                            <td>1m77</td>
                        </tr>
                        <tr>
                            <td>Poids</td>
                            <td>66kg</td>
                        </tr>
                    </table>
                </div>
                <div class="palmares">
                    <h2>Palmarès</h2>
                    <div class="palmares__content">

                        <div class="palmares__date">
                            <a>2015</a>
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

                        <div class="trophee">
                            <img src="./../assets/img/detailCoureur/trophee.png" alt="trophée">
                        </div>

                    </div>




                </div>
            </div>

            <div class="playlist">
                <h2>Découvrez sa playlist</h2>
                <img src="./../assets/img/detailCoureur/spotify.png" alt="spotify">
            </div>

        </section>


        <section class="who">
            <h2>Qui est Thomas ?</h2>
            <article>
                <p>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem
                    diligas atque adiuves, sustinere. Non enim neque tu possis, quamvis excellas, omnes tuos ad honores
                    amplissimos perducere, ut Scipio P. Rupilium potuit consulem efficere, fratrem eius L. non potuit.
                    Quod si etiam possis quidvis deferre ad alterum, videndum est tamen, quid ille possit sustinere.</p>

                <p>Coactique aliquotiens nostri pedites ad eos persequendos scandere clivos sublimes etiam si
                    lapsantibus plantis fruticeta prensando vel dumos ad vertices venerint summos, inter arta tamen et
                    invia nullas acies explicare permissi nec firmare nisu valido gressus: hoste discursatore rupium
                    abscisa volvente, ruinis ponderum inmanium consternuntur, aut ex necessitate ultima fortiter
                    dimicante, superati periculose per prona discedunt.</p>

                <p>Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet; illud potius
                    praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, ut ne quando amare
                    inciperemus eum, quem aliquando odisse possemus. Quin etiam si minus felices in diligendo
                    fuissemus, ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat.</p>

                <p>Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiores
                    extollere. Sunt enim quidam qui molestas amicitias faciunt, cum ipsi se contemni putant; quod non
                    fere contingit nisi iis qui etiam contemnendos se arbitrantur; qui hac opinione non modo verbis sed
                    etiam opere levandi sunt.</p>
            </article>
        </section>
    </section>

    <section class="actuCoureur">
        <div class="content">

            <h2>Actualité de Thomas</h2>
            <section class="actuCoureur__news">

                <figure class="news__item">
                    <img src="./../assets/img/home/image1accueil.png" alt="image1">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                </figure>

                <figure class="news__item">
                    <img src="./../assets/img/home/image2accueil.png" alt="image2">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>

                </figure>

                <figure class="news__item">
                    <img src="./../assets/img/home/image3accueil.png" alt="image3">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                </figure>

                <figure class="news__item">
                    <img src="./../assets/img/home/image4accueil.png" alt="image4">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                </figure>

            </section>

        </div>

    </section>


</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>