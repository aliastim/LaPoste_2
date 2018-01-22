<div class="container">

    <form action="#" method="get">

    <br><br>

    <h2>Service de déménagement</h2><br>

    <div class="service-demenagement-bloc">
        <div class="row">
            <div class="col-xl-6">
                <div class="text-center">
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="radioParticulierPro()">
                    <label class="form-check-label" for="inlineRadio1">Particulier</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="radioParticulierPro2()">
                    <label class="form-check-label" for="inlineRadio2">Professionnel</label>
                </div>
                </div>

                <br>

                <h5><B>Budget disponible eu euros</B></h5>

                <div class=" d-flex flex-row-reverse">
                    <B><output for="range-dmg" class="output-dmg"></output></B>
                    <p><B>&nbsp;€</B></p>
                </div>


                <input type="range" name="range" id="range-dmg" min="1000" max="20000" step="1" value="0"/>

                <br><br>
                <h5><B>Nombre de meubles et tailles</B></h5>

                <br>

                <table id="tableau-meubles" border="0">
                    <tbody>
                    <tr>
                        <th style="font-weight: inherit;">Meuble <input type="text" style="width: 50%;"></th>
                        <th style="font-weight: inherit;">Taille <input type="text" style="width: 20%;"> x <input type="text" style="width: 20%;"> cm</th>
                    </tr>
                    </tbody>
                </table>

                <br>

                <!--<button id="ajoutmeuble" onclick="ajouterLigne();">+ ajout de meuble</button>-->

                <!--<form method="post" action="">-->

                    <input type="button" id="ajoutmeuble" onclick="ajouterLigne();" value="+ ajout de meuble"</button/>

                <!--</form>-->

                <br>

                <h5><B>Besoins matériels</B></h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option1">
                            <label class="form-check-label" for="inlineRadio2"><img src="img/ico/camion.png" class="img-fluid ico-select"></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2"><img src="img/ico/truck.png" class="img-fluid ico-select"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select class="custom-select" name="demenageurs" style="width: 100%;" id="demenageurs">
                            <option selected>Déménageurs...</option>
                            <option value="1" class="select-perso-option-1">0</option>
                            <option value="2" class="select-perso-option-2">1</option>
                            <option value="3" class="select-perso-option-3">2</option>
                            <option value="4" class="select-perso-option-4">3</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="col-xl-6"></div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <h5><B>Date</B></h5>

                <p>A quelle date souhaitez-vous déménager ?</p>

                <!-- Le form pour le calendrier est lié au script sité dans le head-->
                <!--<form>-->

                    <script>DateInput('orderdate', true, 'DD-MON-YYYY')</script>

                <!--</form>-->



            </div>
            <div class="col-xl-6">
                <h5><B>Lieux</B></h5>
                <div class="col-md-1"></div>
                <div class="col-md-11">

                    <!--

                    <div class="row">
                        <div class="col-md-6">
                            <label for="demenagement-1">Logement à déménager</label>
                            <input type="text" name="demenagement-1" id="demenagement-1" placeholder="Départ">
                        </div>
                        <div class="col-md-6">
                            <label for="emmenagement-1">Logement à emménager</label>
                            <input type="text" name="emmenagement-1" id="emmenagement-1" placeholder="Arrivée">
                        </div>


                        <div class="text-center" style="width: 100%; margin-top: 10px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64359.363467120565!2d2.291306734471692!3d48.860949878608714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1514901694276" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>-->
                    <div id="container">
                        <div id="destinationForm">
                            <!--<form action="" method="get" name="direction" id="direction">-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Logement à déménager</label>
                                        <input type="text" name="origin" id="origin" placeholder="Départ" style="width: 100%;"></div>
                                    <div class="col-md-6">
                                        <label>Logement à emménager</label>
                                        <input type="text" name="destination" id="destination" placeholder="Arrivée" style="width: 100%;"></div>
                                    <div class="col-md-12">
                                         <input type="button" value="Calculer l'itinéraire" onclick="javascript:calculate()" class="btn-itineraire">
                                    </div>
                                </div>
                            <!--</form>-->
                        </div>
                        <div id="panel"></div>
                        <div id="map">
                            <p>Veuillez patienter pendant le chargement de la carte...</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-12">
                <br>
                <h5><B>S'organiser entre amis</B></h5>

                <div class="col-md-6">
                    <a href="#" class="d-flex justify-content-center" style="text-decoration: none;"><button class="btn-amis-lp">Créer un événement La Poste</button></a><br>
                    <a href="http://www.facebook.com" target="_blank" class="d-flex justify-content-center" style="text-decoration: none;"><button class="btn-amis-fb">Créer un événement sur Facebook</button></a>
                </div>
                <div class="col-md-6"></div>
            </div>

            <div class="col-xl-12">
                <div class="row" style="margin-top: 30px;">
                    <input type="checkbox" aria-label="Checkbox for following text input">
                    <label style="margin-top: 7px;">&nbsp; J'accepte les conditions générales d'utilisations</label>
                </div>

                <div class="d-flex flex-row-reverse">

                        <input type="hidden" name="dmg" value="2">

                        <input type="submit" class="p-2 btn-vld-logement" value="Valider"/>
                        <input class="p-2 btn-prec-gris" value="Précédent" onclick="window.location = 'ld.index.php'">
                    <!--<form action="ld.index.php">
                        <input type="submit" class="p-2 btn-prec-gris" value="Précédent"/>
                    </form>-->
                </div>
            </div>
        </div>
    </div>

    </form>

</div>