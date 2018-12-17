<?php 
    $nom = $prenom  ="";

function securite($donnees){
    $donnees = trim($donnees);
    $donnees = stripcslashes($donnees);
    $donnees = strip_tags($donnees);
    return $donnees;
}
$nom = securite(S_POST['nom']);
$prenom = securite(S_POST['prenom']);


echo 'Nom:' .$nom;


$serveur ="localhost";
$login = "wizz";
$pass ="Wizz*133723";

try{
    $connexion = new PDO ("mysql:host=$serveur;dbname=facecool",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requette = $connexion->prepare("
        INSERT INTO personne(nom,prenom,url_photo,date_naissance,statut_couple)
        VALUES (:nom,:prenom,:url,:date,:statut)");

    $requette->bindParam(':nom',$nom);
    $requette->bindParam(':prenom',$prenom);
    $requette->bindParam(':url',$url);
    $requette->bindParam(':date',$date);
    $requette->bindParam(':statut',$statut);

    $url = S_POST['photo'];
    $date = S_POST['date'];
    $statut= S_POST ['etat'];

    $requette->execute();
}
catch(PDOException $e){
    echo'Echec:' -$e->getMessage();
}
?>