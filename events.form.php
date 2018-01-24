<?php require 'config.php';

if (isset($_POST['submit']))
{
    createEvent($bdd, $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['jour'], $_POST['mois'], $_POST['annee'], $_POST['titre'], $_POST['description']);
}?>
<div class="container">

    <br><br>

    <h2>Poster son événement</h2><br>

    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <div class="evt-form-cadre">
                <div class="row">
                    <div class="col-sm-1 evt-form-label"><label for="nom">Nom*</label> </div>
                    <div class="col-sm-11"><input class="evt-form-input" type="text" name="nom" id="nom"></div>

                </div>
                <div class="row">
                    <div class="col-sm-1 evt-form-label"><label for="prenom">Prénom*</label></div>
                    <div class="col-sm-11"><input class="evt-form-input" type="text" name="prenom" id="prenom"></div>

                </div>
                <div class="row">
                    <div class="col-sm-1 evt-form-label"><label for="adresse">Adresse*</label></div>
                    <div class="col-sm-11"><input class="evt-form-input" type="text" name="adresse" id="adresse"></div>
                </div>
                <div class="row">
                    <div class="col-sm-1 evt-form-label"><label>Date</label></div>
                    <div class="col-sm-11">
                        <select id="monselect" class="evt-form-select" name="jour">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select id="monselect" class="evt-form-select" name="mois">
                            <option value="Janvier" selected>Janvier</option>
                            <option value="Février">Février</option>
                            <option value="Mars">Mars</option>
                            <option value="Avril">Avril</option>
                            <option value="Mai">Mai</option>
                            <option value="Juin">Juin</option>
                            <option value="Juillet">Juillet</option>
                            <option value="Août">Août</option>
                            <option value="Septembre">Septembre</option>
                            <option value="Octobre">Octobre</option>
                            <option value="Novembre">Novembre</option>
                            <option value="Décembre">Décembre</option>
                        </select>

                        <select id="monselect" class="evt-form-select" name="annee">
                            <option value="2018" selected>2018</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="titre">Titre de l'événement</label><br>
                        <input type="text" name="titre" id="titre" class="evt-form-input-2">
                    </div>

                    <div class="col-sm-12">
                        <label for="description">Descriptif de l'événement</label><br>
                        <textarea name="description" id="description" class="evt-form-textarea"></textarea>
                    </div>
                </div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">

                        <input type="submit" name="submit" class="evt-form-btn" value="Valider">
                    </div>
                </div>
            </form>
            <form action="dle.index.php">
                <div class="d-flex justify-content-center">
                    <input type="hidden" value="0" name="evt">
                    <input type="submit" class="evt-form-btn2" value="Liste des événements">
                </div>
            </form>
        </div>
    </div>
</div>
