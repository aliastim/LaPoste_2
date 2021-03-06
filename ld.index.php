<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 30/11/2017
 * Time: 09:39
 */

include 'template/header.php';

if (isset($_GET['dmg']))
{
    $dmg = $_GET['dmg'];
}else
{
    $dmg = 0;
}

if (isset($_GET['evt']))
{
    $evt = $_GET['evt'];
}else
{
    $evt = 0;
}

?>
<br><br>
<!-- https://getbootstrap.com/docs/4.0/components/navs/ -->

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item navbarIndex1-btn">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Trouver un logement</a>
        </li>
        <li class="nav-item navbarIndex1-btn">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Service de déménagement</a>
        </li>
        <li class="nav-item navbarIndex1-btn">
            <a class="nav-link" id="forum-tab" data-toggle="tab" href="#forum" role="tab" aria-controls="forum" aria-selected="true">Forum</a>
        </li>
        <li class="nav-item navbarIndex1-btn">
            <a class="nav-link" id="forum-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="true">Événements</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

            <?php include 'logement.index.php' ?>

        </div>
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <?php

            if($dmg == 1)
            {
                include 'demenagement.service.php';
            }
            else if($dmg == 2)
            {
                include 'demenagement.recap.php';
            }
            else
            {
                include 'demenagement.index.php';
            }
            ?>

        </div>
        <div class="tab-pane fade" id="forum" role="tabpanel" aria-labelledby="forum-tab">

            <?php include 'faq.php' ?>

        </div>
        <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="forum-tab">

            <?php

            if($evt == 1)
            {
                include 'events.form.php';
            }
            else
            {
                include 'events.php';
            }
            ?>

        </div>
    </div>
</div>



<?php

include 'template/footer.php';
?>
