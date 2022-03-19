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
function ajouter_produit($libelle, $prix, $qtestock,$categorie_id=1)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into produit (libelle,prix,qtestock,categorie_id) values(?,?,?,?)");
        $rp->execute([$libelle, $prix, $qtestock,$categorie_id]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de produit  " . $e->getMessage();
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


//supprimer un produit 
//supprimer(1,"produit")
function supprimer($id,$table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("delete from $table where id =?");
        $rp->execute([$id]);
    } catch (PDOException  $e) {
        echo "Erreur de suppression de produit  " . $e->getMessage();
    }
}



// lister les produits 
function all($table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from $table ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}

// lister les produits 
function yatilProduitDansCategorie($categorie_id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit where categorie_id=? ");
        $rp->execute([$categorie_id]);

        $resultat= $rp->fetchAll();
        return !empty($resultat);
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}


// rechercher un produit par son id
//findById(1,"produit","matricule")
function findById($id,$table,$nom_id="id")
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from $table where $nom_id=? ");
        $rp->execute([$id]);

        return $rp->fetch();
    } catch (PDOException  $e) {
        echo "Erreur de selection de $table  " . $e->getMessage();
    }
}


//rechercher un produit par son libelle 
function rechercher($mc)
{    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit where libelle like ? ");
        $rp->execute(["%$mc%"]);

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de recherche de produit  " . $e->getMessage();
    }
}

//categorie
//ajouter_categorie("PE")
function ajouter_categorie($nomcategorie)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into categorie(nomcategorie) values(?)");
        $rp->execute([$nomcategorie]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de la categorie  " . $e->getMessage();
    }
}
function modifier_categorie($nomcategorie,$id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update categorie set nomcategorie=? where id=?");
        $rp->execute([$nomcategorie,$id]);
    } catch (PDOException  $e) {
        echo "Erreur de MAJ de la categorie  " . $e->getMessage();
    }
}



//fin categorie
