<?php require 'config.php';

$events = getEvents($bdd);

?>

<div class="container">

    <br><br>

    <h2>Prochain événements</h2><br>

    <div class="row">
        <div class="col-md-12">
            <?php foreach ($events as $event)
            {?>


            <div class="evt-liste-bloc">
                <div class="d-flex">
                    <div class="mr-auto p-2"><B style="font-size: 20px; color: dimgray;"><?php echo $event['titre']; ?></B></div>
                    <div class="p-2">Le <?php echo $event['jour']; echo ' '; echo $event['mois']; echo ' ';echo $event['annee'];?></div>
                </div>
                <div style="margin-left: 10px;">
                    <p style="color: dimgray; margin-right: 10px;"><?php echo $event['description']; ?></p>
                </div>


            </div>
            <hr style="border: 0.7px solid dimgray; width: 70%;">

            <?php }
            ?>

            <form method="get" action="dle.index.php">
                <div class="d-flex">
                    <div class="ml-auto p-2">
                        <input type="hidden" value="1" name="evt">
                        <input type="submit" class="evt-form-btn2" value="Créer un événement">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>