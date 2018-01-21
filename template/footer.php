<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-1"><br><img src="img/logo2.png" class="img-fluid logo2"></div>
            <div class="col-md-3"><br><a href="#">Plan du site</a><br><a href="#">Information sur les cookies</a><br><a href="#">Conditions générales d'utilisation</a><br><a href="#">Bureaux de Poste</a></div>
            <div class="col-md-3"><br><a href="#">Mentions légales</a><br><a href="#">Conditions spécifiques de la Boutique</a><br><a href="#">Conditions générales de vente Courrier Colis</a></div>
            <div class="col-md-3"><br><a href="#">Tarifs de la Boutique</a><br><a href="#">Modes de livraison</a><br><a href="#">Modes de paiement</a></div>
            <div class="col-md-2"><br><a href="#">Aide en ligne Boutique</a><br><a href="#">Aide en ligne</a><br><a href="#">Site mobile La Poste</a></div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<!--Range logement index-->
<script type="text/javascript">

    /* http://www.efficity.com/prix-immobilier-m2/v_paris_75003/ */

    var a1 = document.getElementById('arr1');
    var a2 = document.getElementById('arr2');
    var a3 = document.getElementById('arr3');
    var a4 = document.getElementById('arr4');
    var a5 = document.getElementById('arr5');
    var a6 = document.getElementById('arr6');
    var a7 = document.getElementById('arr7');
    var a8 = document.getElementById('arr8');
    var a9 = document.getElementById('arr9');
    var a10 = document.getElementById('arr10');
    var a11 = document.getElementById('arr11');
    var a12 = document.getElementById('arr12');
    var a13 = document.getElementById('arr13');
    var a14 = document.getElementById('arr14');
    var a15 = document.getElementById('arr15');
    var a16 = document.getElementById('arr16');
    var a17 = document.getElementById('arr17');
    var a18 = document.getElementById('arr18');
    var a19 = document.getElementById('arr19');
    var a20 = document.getElementById('arr20');

    var input = document.getElementById('range');
    input.focus();
    /*var range = document.input.createRange();*/


    $('#range').on("change", function() {
        console.log('Hamzeen');
        $('.output').val(this.value); /*$('.output').val("Entre 0 et " + this.value +"€");*/

        if($('.output').val() >= 349680)
        {
            a1.setAttribute('fill', '#fecb00')
        } else
        {
            a1.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 330460)
        {
            a2.setAttribute('fill', '#fecb00')
        } else
        {
            a2.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 352160)
        {
            a3.setAttribute('fill', '#fecb00')
        } else
        {
            a3.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 361460)
        {
            a4.setAttribute('fill', '#fecb00')
        } else
        {
            a4.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 358670)
        {
            a5.setAttribute('fill', '#fecb00')
        } else
        {
            a5.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 388430)
        {
            a6.setAttribute('fill', '#fecb00')
        } else
        {
            a6.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 403310)
        {
            a7.setAttribute('fill', '#fecb00')
        } else
        {
            a7.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 354020)
        {
            a8.setAttribute('fill', '#fecb00')
        } else
        {
            a8.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 297910)
        {
            a9.setAttribute('fill', '#fecb00')
        } else
        {
            a9.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 277450)
        {
            a10.setAttribute('fill', '#fecb00')
        } else
        {
            a10.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 288610)
        {
            a11.setAttribute('fill', '#fecb00')
        } else
        {
            a11.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 269080)
        {
            a12.setAttribute('fill', '#fecb00')
        } else
        {
            a12.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 272180)
        {
            a13.setAttribute('fill', '#fecb00')
        } else
        {
            a13.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 275280)
        {
            a14.setAttribute('fill', '#fecb00')
        } else
        {
            a14.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 283340)
        {
            a15.setAttribute('fill', '#fecb00')
        } else
        {
            a15.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 309380)
        {
            a16.setAttribute('fill', '#fecb00')
        } else
        {
            a16.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 291090)
        {
            a17.setAttribute('fill', '#fecb00')
        } else
        {
            a17.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 264740)
        {
            a18.setAttribute('fill', '#fecb00')
        } else
        {
            a18.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 218240)
        {
            a19.setAttribute('fill', '#fecb00')
        } else
        {
            a19.setAttribute('fill', 'lightgrey')
        }

        if($('.output').val() >= 248310)
        {
            a20.setAttribute('fill', '#fecb00')
        } else
        {
            a20.setAttribute('fill', 'lightgrey')
        }

        a1.onclick = function()
        {

            /*$('.output').val(349680);*/
            /*document.getElementById('range').setAttribute('value', '349680');
            /*input.selectionStart = 349680;*/

            /*range.move(349680);*/
            /*input.setSelectionRange(349680);*/
            /*$('#range').trigger("change");*/

            document.getElementById('arrprix').innerHTML= 'Prix moyen 1er arrondissement : 349 680€ (11 280/m²)';

        };

        a2.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 2ème arrondissement : 330 460€ (10 660/m²)';
        };

        a3.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 3ème arrondissement : 352 160€ (11 360/m²)';
        };

        a4.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 4ème arrondissement : 361 460€ (11 660/m²)';
        };

        a5.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 5ème arrondissement : 358 670€ (11 570/m²)';
        };

        a6.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 6ème arrondissement : 388 430€ (12 530/m²)';
        };

        a7.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 7ème arrondissement : 403 310€ (13 010/m²)';
        };

        a8.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 8ème arrondissement : 354 020€ (11 420/m²)';
        };

        a9.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 9ème arrondissement : 297 910€ (9 610/m²)';
        };

        a10.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 10ème arrondissement : 277 450€ (8 950/m²)';
        };

        a11.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 11ème arrondissement : 288 610€ (9 310/m²)';
        };

        a12.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 12ème arrondissement : 269 080€ (8 680/m²)';
        };

        a13.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 13ème arrondissement : 272 180€ (8 780/m²)';
        };

        a14.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 14ème arrondissement : 275 280€ (8 880/m²)';
        };

        a15.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 15ème arrondissement : 283 340€ (9 140/m²)';
        };

        a16.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 16ème arrondissement : 309 380€ (9 980/m²)';
        };

        a17.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 17ème arrondissement : 291 090€ (9 390/m²)';
        };

        a18.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 18ème arrondissement : 264 740€ (8 540/m²)';
        };

        a19.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 19ème arrondissement : 218 240€ (7 040/m²)';
        };

        a20.onclick = function()
        {
            document.getElementById('arrprix').innerHTML= 'Prix moyen 20ème arrondissement : 248 310€ (8 010/m²)';
        };

    }).trigger("change");

    //alert($('.output').val());


    //Range pour demenagement.service

    $('#range-dmg').on("change", function() {
        /*console.log('Hamzeen');*/
        $('.output-dmg').val(this.value);
    }).trigger("change");

    function ajouterLigne()

    {


        var tableau = document.getElementById("tableau-meubles");
        var ligne = tableau.insertRow(-1);//on a ajouté une ligne
        var colonne1 = ligne.insertCell(0);//on a une ajouté une cellule

        //colonne1.innerHTML += document.getElementById("titre").value;//on y met le contenu de titre
        colonne1.innerHTML += "Meuble <input type='text' style='width: 50%;'>";


        var colonne2 = ligne.insertCell(1);//on ajoute la seconde cellule

        //colonne2.innerHTML += document.getElementById("auteur").value;
        colonne2.innerHTML += "Taille <input type=\"text\" style=\"width: 20%;\"> x <input type=\"text\" style=\"width: 20%;\"> cm";



    }

    var ServiceParticulier;
    var ServicePro;

    function radioParticulierPro()
    {
        ServiceParticulier = 1;
        ServicePro = 0;
    }
    function radioParticulierPro2()
    {
        ServiceParticulier = 0;
        ServicePro = 1;
    }



</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyARoxg_vcxEGFx6r7nAR5uf8wf0aikx1lE&sensor=false&language=fr"></script>
<script type="text/javascript" src="map.js"></script>
<!--Fin range-->

<script type="text/javascript">
/*
        var a1 = document.getElementById('arr1');
        a1.setAttribute('fill', '#fecb00')
   */

</script>

</body>
</html>