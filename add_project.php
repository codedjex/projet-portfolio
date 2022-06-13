<?php

session_start();

// Connexion à la base de données :
try {    
    $BDD = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die ('Erreur : ' . $e->getMessage());
}

$nom = valid_donnees($_POST['nom']);
$description = valid_donnees($_POST['type']);
$ID_projet = valid_donnees($_POST['ID_projet']);
$identifiant = valid_donnees($_POST['identifiant']);
    function valid_donnees($donnees) {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

// Insertion des données :
// move_uploaded_file($_FILES['Image']['tmp_name'], "../picture/" . $image);

$ajout = $BDD->prepare("INSERT INTO block(ID, nom, type, ID_projet, identifiant)
                        VALUES (NULL, :nom, :description, :id_projet, :identifiant)");
$ajout->bindParam(':nom', $nom);
$ajout->bindParam(':description', $description);
$ajout->bindParam(':id_projet', $ID_projet);
$ajout->bindParam(':identifiant', $identifiant);
$ajout->execute();

header("Location:PHP/back-office.php");

?>