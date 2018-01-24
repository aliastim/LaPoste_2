<?php

if (isset($_GET['inlineRadioOptions'])  AND isset($_GET['orderdate']) AND isset($_GET['range']) AND isset($_GET['inlineRadioOptions2']) AND isset($_GET['demenageurs']) AND isset($_GET['origin']) AND isset($_GET['destination'])
    AND !empty($_GET['origin']) AND !empty($_GET['destination']))
{
    $particulierProOPTION = $_GET['inlineRadioOptions'];

    if ($particulierProOPTION == 'option2')
    {
        $particulierPro = 'Professionnel';

    } elseif ($particulierProOPTION == 'option1')
    {
        $particulierPro = 'Particulier';
    }

    $date           = $_GET['orderdate'];
    $budget         = $_GET['range'];
    $camionOPTION         = $_GET['inlineRadioOptions2'];

    if ($camionOPTION == 'option2')
    {
        $camion = 'camionnette';

    } elseif ($camionOPTION == 'option1')
    {
        $camion = 'camion';
    }
    $demenageursOPTION = $_GET['demenageurs'];
    if ($demenageursOPTION == 2)
    {
        $demenageurs = 1;
    } elseif ($demenageursOPTION == 3)
    {
        $demenageurs = 2;
    } elseif ($demenageursOPTION == 4)
    {
        $demenageurs = 3;
    } else
    {
        $demenageurs = 0;
    }
    $origin         = $_GET['origin'];
    $destination    = $_GET['destination'];


    ?>

    <div class="container">

        <br><br>

        <div class="col-12">
            <div class="ctn-recap-1 text-center">
                <p style="font-size: 25px; color: dimgray; padding-top: 15px;"><B>Votre déménagement est prévu pour le :</B></p>
                <p style="font-size: 40px; color: #fecb00;"><?php echo $date;?></p>
            </div>
            <div class="ctn-recap-2">
                <div class="row">
                    <div class="col-md-4"><img src="img/ico/truck2.png" class="img-fluid truck-recap"></div>
                    <div class="col-md-8 col-sm-12">
                    <p style="margin-top: 30px; font-size: 20px; margin-left: 30px;"><B>Location <?php if (isset($camion)) {echo $camion;} ?></B></p>
                    <p style="margin-left: 30px;">Poids : 1.5T<br>Coffre : 1000L<br>Disponible de 9h à 18h</p>
                    </div>
                </div>
            </div>
            <div class="ctn-recap-3 text-center">
                <div class="row" style="width: 100%;">
                    <p class="col-md-4 col-sm-12" style="font-size: 100px;"><B><?php echo $demenageurs; ?></B></p>
                    <p class="col-md-8 col-sm-12 demenageurs-recap-txt">Déménageurs</p>
                </div>
            </div>
            <div class="ctn-recap-4">
                <div class="row">
                    <div class="col-md-4 col-sm-12 destination-origin-txt"><p><B>De</B></p><p style="font-size: 40px;"><?php echo $origin; ?></p></div>
                    <div class="col-md-4 d-flex justify-content-center"><img src="img/ico/8680.png" class="img-fluid arrow-recap"></div>
                    <div class="col-md-4 col-sm-12 destination-arrivee-txt"><p><B>A</B></p><p style="font-size: 40px;"><?php echo $destination; ?></p></div>
                </div>
            </div>
            <div class="ctn-recap-1 text-center">
                <p style="font-size: 50px; margin-top: 50px;">Votre Budget : <B><?php echo $budget; ?></B>€</p>
            </div>
            <div class="ctn-recap-6 text-center">
                <form method="get" action="dle.index.php" style="height: 100%;">
                    <input type="hidden" name="evt" value="1">
                    <button class="btn-recap-event">Créer un événement La Poste</button>
                </form>
            </div>

            <div class="d-flex justify-content-center">
                <form method="get" action="ld.index.php">
                    <input type="hidden" name="dmg" value="1">
                    <input type="submit" class="btn-modif-recap" value="Modifier les informations">
                </form>
            </div>

        </div>

    </div>

    <?php

    }
    else
    {//header('Location:ld.index.php');?>

    <div class="container">

        <br><br>

        <div class="col-12">
                <h1 class="text-center">Tous les champs doivent être complétés</h1>
        </div>
    </div>
    <?php
    }
    ?>

