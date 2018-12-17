<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

   <link rel="stylesheet" type="text/css" href="facecool.css" />
   <title> ..:: Inscription FaceCool  ::.. </title>
 </head>
 <body>

     <h1>FaceCool Inscription</h1>
    <p>C’est gratuit (mais pour combien de temps ...)</p>
    <p> <a href="profil.php"> Profil </a> <a href="listcontact.html"> Liste</a> 
    <form method="POST" action="profil.php">
        
        <input type="text" name="nom" placeholder="votre nom s'il vous plait"required >
        
        <input type="text" name="prenom" placeholder="votre prenom s'il vous plait"required>
        <input type="password" name="pass" placeholder="votre mot de passe s'il vous plait"required>
        <input type="password" name="conpass" placeholder="confirmez s'il vous plait"required>
        <input type="date" name="date" required>
        <input type="text"  name="photo" placeholder="le lien de votre photo s'il vous plait"required>
        <div>
            <h3>Genre</h3>
            <input type="radio" id="homme" name="genre">
            <label for="homme">homme</label>
            <input type="radio" id="femme" name="genre">
            <label for="femme">femme</label>
            <input type="radio" id="autre" name="genre">
            <label for="autre">autre</label>

        </div>
        <div>
                <h3>Situation amoureuse</h3>
                <input type="radio" id="celibataire" name="etat">
                <label for="celibataire">celibataire</label>
                <input type="radio" id="marié" name="etat">
                <label for="marié">marié</label>
                <input type="radio" id="autre" name="etat">
                <label for="autre">autre</label>
    
        </div>
        <div>
                <h3>Musique</h3>
                <input type="checkbox" name="Rock"> Rock
                
                <input type="checkbox" name="pop"> Pop
                <br>
                <input type="checkbox" name="Jazz"> Jazz
                
                <input type="checkbox" name="Techno"> Techno
                
        </div>
        <div>
                <h3>Hobbies</h3>
                <input type="checkbox" name="Hobbies1"> Camping
                
                <input type="checkbox" name="Hobbies2"> cinema
                <br>
                <input type="checkbox" name="Hobbies3"> lecture
                
                <input type="checkbox" name="Hobbies4"> voyage
                <br>
        </div>
        <input type="submit" name="GO">
    </form>
 </body>
</html>