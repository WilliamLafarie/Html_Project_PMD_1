<?php
    // On récupère le nom de la page au sein du DOM (e.g nomDeLaPage.php)
    $pageName=basename($_SERVER['PHP_SELF']);

    // A l'aide d'une RegEx, on split le nom de la page pour récupérer uniquement la partie avant le .php
    $pageNameSplit = preg_split('/[\/.]/', $pageName);
    
    // On inclut le Header
    include('./include/header.php');
    
?>

<main>

    <div class="contentteam">
        <h2>L'ÉQUIPE > LES COUREURS</h2>
        <div class="contenttop">
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Natanael Berhane</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Bryan Coquard</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Jérôme Cousin</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Antoine Duchesne</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Natanael Berhane</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Bryan Coquard</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Jérôme Cousin</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Antoine Duchesne</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Natanael Berhane</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Bryan Coquard</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Jérôme Cousin</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Antoine Duchesne</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Natanael Berhane</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Bryan Coquard</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Jérôme Cousin</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Antoine Duchesne</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Natanael Berhane</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Bryan Coquard</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Jérôme Cousin</figcaption>
            </figure>
            <figure>
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Antoine Duchesne</figcaption>
            </figure>
        </div>
        <div class="contentbot">
            <figure class="last">
                <a href="#"><img src="./../assets/img/team/teamun.png" alt="Photo coureur"/></a>
                <figcaption>Natanael Berhane</figcaption>
            </figure>
            <figure class="last">
                <a href="#"><img src="./../assets/img/team/teamdeux.png" alt="Photo coureur"/></a>
                <figcaption>Bryan Coquard</figcaption>
            </figure>
        </div>
    </div>
</main>

<?php
   
    // On inclut le Footer
    include('./include/footer.php');
    
?>