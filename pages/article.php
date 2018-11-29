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
            <div class="title">
               <!--  <img src="./../assets/img/home/next.svg" alt="next"> -->
                <h1>hors-course > Indiscrétion</h1>
            </div>

            <article>

                <div class="chapeau">

                    <p class ="chapeau__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. corrupti dolorem explicabo in...</p>

                    <figure>
                        <img src="./../assets/img/home/image11accueil.png" alt="micro">
                        <figcaption>
                            <p>Indiscrétion</p>
                        </figcaption>
                    </figure>

                </div>

                <img src="./../assets\img\article/indiscretion1.png" alt="photo1">

                <div class="article__text">
                    <p>Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur. 
                    Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam aliquantum de spatio curriculoque consuetudo maiorum.</p>

                    <p>Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.
                    Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis.</p>

                    <p>In tuto iam locata mariti salute muneratam vehiculoque inpositam per regiae ianuas emisit in publicum, ut his inlecebris alios quoque ad indicanda proliceret paria vel maiora.</p>
                

                     <img src="./../assets\img\article/image2article.png" alt="photo2">


                    <p>Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur. 
                    Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam aliquantum de spatio curriculoque consuetudo maiorum.Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit.</p>

                    <p> post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>

                    <p>In tuto iam locata mariti salute muneratam vehiculoque inpositam per regiae ianuas emisit in publicum, ut his inlecebris alios quoque ad indicanda proliceret paria vel maiora. Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis...</p>
                </div>

                <div class="share">
                    <h2>Partager cet article</h2>
                    <div class="share__rsn">
                       <a href="https://www.facebook.com/TeamDirectEnergie/"><img src="./../assets\img\article/HC_facebookbutton.png" alt="bouton facebook"></a>
                       <a href="https://twitter.com/TeamDEN_fr"><img src="./../assets\img\article/HC_twitterbutton.png" alt="bouton twitter"></a>
                       <a href="https://plus.google.com/+TeamDirectEnergie"><img src="./../assets\img\article/HC_googleplusbutton.png" alt="bouton googleplus"></a>
                    </div>
                </div>

                

                <div class="comment">
                    <h2>Laisser un commentaire</h2>
                    <img src="./../assets\img\article/HC_facebookcomments.png" alt="facebookTchat">
                </div>

                

           </article>

            



    </section>

</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>