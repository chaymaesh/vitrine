 <?php
 
 require_once __DIR__ ."/../database/connection.php";

 function findAllPlantes(): array {
   
//Connection à la bdd
    $connexion = getConnexion();

//execution de la requete
    $requeteSQL = "SELECT code_produit, nom_produit, qté_produit, prix_TTC, image, description;
    FROM PRODUIT;
    WHERE PRODUIT";
    $requete = $connexion ->prepare($requeteSQL);
    $requete ->execute();

//récuperation des enrgistrements
    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $produits = $requete->fetchAll();
    return $produits;

}