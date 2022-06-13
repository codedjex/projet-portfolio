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
$ID_projet = verification($_POST['ID_projet']);
$nom = verification($_POST['nom']);
$description = verification($_POST['type']);
$identifiant = verification($_POST['identifiant']);
function verification($donnees) {
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

$modification = $BDD->prepare("UPDATE block
                        SET nom = :nom, type = :description, ID_projet = :id_projet, identifiant = :identifiant
                        WHERE ID_projet = '$ID_projet'");
$modification->bindParam(':nom', $nom);
$modification->bindParam(':description', $description);
$modification->bindParam(':id_projet', $ID_projet);
$modification->bindParam(':identifiant', $identifiant);
$modification->execute();

header("Location:PHP/back-office.php");



?>