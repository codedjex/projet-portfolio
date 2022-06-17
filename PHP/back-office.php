<?php

session_start();

// Connexion à la base de données :
try {
    $BDD = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die ('Erreur : ' . $e->getMessage());
}

    $donnees_block0 = $BDD->prepare("SELECT *
                                          FROM block
                                          ");


$donnees_block0->execute();
$block = $donnees_block0->fetchAll();

// Exécution de la requête chargeant la liste des blocks :
$donnees_block = $BDD->prepare("SELECT block.ID_projet, projets.Photo
                                     FROM block
                                     INNER JOIN projets ON block.ID_projet = projets.ID_projet
                                     LIMIT 4
                                     ");
                                      
$donnees_block->execute();
$block1 = $donnees_block->fetchAll();


?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Ajouter | Modifier | Supprimer</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    </head>
    <body class="bg-light">
       
        <main>
            <section id="form-ajouter" class="container-fluid py-5">
                <article class="mx-auto col-6 py-2 mx-2 border border-dark rounded">
                    <form  action="../add_project.php" method="post" enctype="multipart/form-data">
                        <h1 class="display-5 fw-bold mx-4">Ajout d'un nouveau projet : </h1>
                        <div class="form-floating mx-3">
                            <label for="nom_projet_<?= $block['ID'] ?>">Nom : </label>
                            <input class="form-control rounded-4 mb-3" id="nom_projet_<?= $projet['nom'] ?>"
                                type="text"
                                name="nom">
                        </div>
                        <div class=" mx-3" >
                            <label for="description_projet_<?= $block['ID'] ?>">Description : </label>
                            <textarea class="form-control rounded-4" id="description_projet_<?= $block['ID'] ?>"
                                    name="type"></textarea>
                        </div>
                        <div class=" mx-3" >
                            <label for="identifiant_projet_<?= $block['ID'] ?>">ID du projet : </label>
                            <input class="form-control rounded-4 mb-3" id="identifiant_projet_<?= $block['ID'] ?>"
                                    name="ID_projet"
                                    type="text">
                        </div>
                        <div class=" mx-3" >
                            <label for="identifiant_projet_<?= $block['ID'] ?>">Identifiant : </label>
                            <input class="form-control rounded-4 mb-3" id="identifiant_projet_<?= $block['ID'] ?>"
                                    name="identifiant"
                                    type="text">
                        </div>
                        <div  class="mx-3">
                            <label for="image_instrument_<?= $block['ID'] ?>">Image : </label>
                            <input class="form-control rounded-4 mb-3" id="image_instrument_<?= $block['ID'] ?>"
                                type="file"
                                name="Image"
                                accept=".jpg, .jpeg, .png">
                        </div>
                            </select>
                        </div>
                        <div >
                            <button class="btn btn-primary col-10 mx-5" type="submit">Ajouter</button>
                        </div>
                    </form>
                </article>
                            </section>

            
            <section id="bloc-grille" class="container-fluid row">
                
                <?php

// Affichage de la liste des blockss avec boutons "modifer" et "supprimer" :
foreach ($block as $blocks) {
?>
                    <article class="col-4 py-4 ">
                    <form  action="../edit-project.php" method="post" enctype="multipart/form-data">
                        <h1 class="display-5 fw-bold mx-4"><?= $blocks['nom'] ?> </h1>
                        <input class="form-control rounded-4" type="hidden"
                               name="ID_projet"
                               value="<?= $blocks['ID_projet'] ?>">
                        <div class="form-floating mb-3 ">
                            <label  for="nom_blocks_<?= $blocks['nom'] ?>">Nom: </label>
                            <input class="form-control rounded-4 " id="nom_blocks_<?= $blocks['nom'] ?>"
                                   type="text"
                                   name="nom"
                                   value="<?= $blocks['nom'] ?>">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="description_blocks_<?= $blocks['ID'] ?>">Description: </label>
                            <textarea class="form-control rounded-4"id="description_blocks_<?= $blocks['type'] ?>"
                                      name="type"><?= $blocks['type'] ?></textarea>
                        </div>
                        <div class="form-floating mb-3 ">
                            <label  for="nom_blocks_<?= $blocks['ID_projet'] ?>">ID_projet: </label>
                            <input class="form-control rounded-4 " id="nom_blocks_<?= $blocks['ID_projet'] ?>"
                                   type="text"
                                   name="ID_projet"
                                   value="<?= $blocks['ID_projet'] ?>">
                                   <div class="form-floating mb-3 ">
                            <label  for="nom_blocks_<?= $blocks['identifiant'] ?>">identifiant: </label>
                            <input class="form-control rounded-4 " id="nom_blocks_<?= $blocks['identifiant'] ?>"
                                   type="text"
                                   name="identifiant"
                                   value="<?= $blocks['identifiant'] ?>">
                        

                        <input type="hidden"
                               name="Ancienne_Image"
                               value="<?= $blocks1['Photo'] ?>">
                               <?php
                            foreach($block1 as $blocks1){
                                ?>
                        <div class="form-floating mb-3">
                            <label for="image_blocks_<?= $blocks1['ID_projet'] ?>">Image : </label>
                            <input class="form-control rounded-4" id="image_blocks_<?= $blocks1['ID_projet'] ?>"
                                   type="file"
                                   name="Image"
                                   accept=".jpg, .jpeg, .png"
                                   value="picture/<?= $blocks1['Photo'] ?>">
                        </div>
                        <?php
                            }
                            ?>
                        </div>
                        <div class="form-floating">
                            <button class="btn btn-success col-5 mx-auto" type="submit">Modifier</button>
                            <button class="btn btn-danger col-5 mx-auto" type="submit" formaction="../delete_project.php">Supprimer</button>
                        </div>
                    </form>
                </article>
            <?php
            }
            ?>

            </section>
        </main>
    </body>
</html>