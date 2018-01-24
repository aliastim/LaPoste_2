<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 24/01/2018
 * Time: 16:15
 */


/* CRUD
 *
 * CREATE -> INSERT
 * READ   -> SELECT
 * UPDATE -> UPDATE
 * DELETE -> DELETE
 */
//--------------------------------------------------------------------------------------


//CREATE
function createEvent(PDO $bdd, $nom, $prenom, $adresse, $jour, $mois, $annee, $titre, $description)
{
    $sql = 'INSERT INTO event (nom, prenom, adresse, jour, mois, annee, titre, description) VALUES (:nom, :prenom, :adresse, :jour, :mois, :annee, :titre, :description)';
    $stmt = $bdd->prepare($sql); //$stmt = préparation locale pour statement c'est un statement non exécuté
    return $stmt->execute([          //retourne un boolean ctrl + hover sur execute pour vérifier que l'utilisateur a bien été ajouté
        'nom' => $nom,
        'prenom' => $prenom,
        'adresse' => $adresse,
        'jour' => $jour,
        'mois' => $mois,
        'annee' => $annee,
        'titre' => $titre,
        'description' => $description,
    ]);
}

//READ
function getEvents(PDO $bdd)
{
    $sql = 'SELECT * FROM event';
    return $bdd->query($sql)->fetchAll(PDO::FETCH_ASSOC); //Le query permet de remplacer les 2 lignes du dessous //Query envoie un statement déjà exécuté
    /* $stmt = $bdd->prepare($sql);
     $stmt->execute();*/

    return $stmt->fetchAll(PDO::FETCH_ASSOC ); //fetch récupère que le 1er utilisateur et fetchAll récupère tous les utilisateurs
}

function getEvent(PDO $bdd, $id)
{
    $sql = 'SELECT * FROM event WHERE id = :id'; // :quelque chose correspond aux valeurs qu'on veut remplacer
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        'id' => $id,
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
