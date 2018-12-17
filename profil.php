<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

   <link rel="stylesheet" type="text/css" href="facecool.css" />
   <link rel="stylesheet" type="text/css" href="lightbox.min.css">
   <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
   <meta descript=""    content="180 caracteres">
   <title> ..:: Profil FaceCool  ::.. </title>
 </head>
 <body>
 <?php 
    $nom = $prenom  ="";

function securite($donnees){
    $donnees = trim($donnees);
    $donnees = stripcslashes($donnees);
    $donnees = strip_tags($donnees);
    return $donnees;
}
$nom = securite($_POST['nom']);
$prenom = securite($_POST['prenom']);





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

    $url = $_POST['photo'];
    $date = $_POST['date'];
    $statut= $_POST ['etat'];
    $requette->execute();
   
}
catch(PDOException $e){
    echo'Echec:' -$e->getMessage();
}
?>
<h1>FaceCool</h1>
<h3>bio</h3>
<div>
    - Nom: <?php echo $_POST['nom']; ?> <br>
    - Prenom: <?php echo $_POST['prenom']; ?>  <br>
    - Date de naissance: <?php echo $_POST['date']; ?> <br>
    - Genre : <?php echo $_POST['genre']; ?><br>
    - situation amoureuse: <?php echo $_POST['statut']; ?><br>

</div>
    <h3>Photos</h3>
        <div class="photo">
                <a href="photo1.jpg" data-lightbox="mesphotos"><img src="photo1.jpg"></a>
                <a href="photo2.jpg" data-lightbox="mesphotos"><img src="photo2.jpg"></a>
                <a href="photo3.jpg" data-lightbox="mesphotos"><img src="photo3.jpg"></a>
                <a href="photo4.jpg" data-lightbox="mesphotos"><img src="photo4.jpg"></a>
                <a href="photo5.jpg" data-lightbox="mesphotos"><img src="photo5.jpg"></a>
        </div>
        <h3>Centres d'interet</h3>
            <div>
                    Musique: <br>
                    Hobbies:
            </div>
       
 </body>
</html>