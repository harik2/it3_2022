<?php
include "config.php";
//connextion bd

function connecter_db()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=' . DB, USER, PWD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        return $dbh;
    } catch (PDOException  $e) {

        echo "Erreur de connexion a la base de donnees " . $e->getMessage();
    }
}


//ajouter un produit 
function ajouter_produit($libelle, $prix, $qtestock)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into produit (libelle,prix,qtestock) values(?,?,?)");
        $rp->execute([$libelle, $prix, $qtestock]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de produit  " . $e->getMessage();
    }
}


//supprimer un produit 

function supprimer_produit($id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("delete from produit where id =?");
        $rp->execute([$id]);
    } catch (PDOException  $e) {
        echo "Erreur de suppression de produit  " . $e->getMessage();
    }
}


// lister les produits 
function all()
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}

// modifier un produit 

function modifier_produit($libelle, $prix, $qtestock, $id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update produit set libelle=?, prix=?,qtestock=? where id =?");
        $rp->execute([$libelle, $prix, $qtestock, $id]);
    } catch (PDOException  $e) {
        echo "Erreur de modif de produit  " . $e->getMessage();
    }
}

// rechercher un produit par son id
function findById($id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit where id=? ");
        $rp->execute([$id]);

        return $rp->fetch();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}


//rechercher un produit par son libelle 
function rechercher($mc)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit where libelle like ? ");
        $rp->execute(["%$mc%"]);

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de recherche de produit  " . $e->getMessage();
    }
}
