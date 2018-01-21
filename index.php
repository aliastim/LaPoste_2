<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 30/11/2017
 * Time: 09:39
 */

include 'template/header.php';
?>
<br><br>
<!-- https://getbootstrap.com/docs/4.0/components/navs/ -->

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item navbarIndex1-btn">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Trouver un logement</a>
        </li>
        <li class="nav-item navbarIndex1-btn">
            <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Service de déménagement</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <br>
            <div class="banniere-logement"></div>
            <div class="banniere-logement-contenu">
                <h2 class="banniere-logement-titre">La Poste vous aide<br>à trouver un<br>logement</h2>

                <p class="banniere-logement-texte">La Poste vous simplifie votre recherche<br> de logement et vous fournit tous les<br> détails sur le logement et ses alentours<br></p>

                <a href="dl.index.php"><button class="banniere-logement-bouton">Inscrivez-vous</button></a>
            </div>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <br>
            <div class="banniere-logement"></div>
            <div class="banniere-logement-contenu">
                <h2 class="banniere-logement-titre">La Poste vous aide<br>à déménager<br><br></h2>

                <p class="banniere-logement-texte">La Poste vous simplifie la vie et vous aide<br> à changer de logement rapidement<br> et dans les meilleures conditions<br></p>

                <a href="ld.index.php"><button class="banniere-logement-bouton">Déménager avec La Poste</button></a>
            </div>

        </div>
    </div>
</div>



<?php

include 'template/footer.php';
?>
