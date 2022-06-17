<?php
            $servname = "localhost"; $dbname = "portfolio"; $user = "root"; $pass = "";$ident = $_GET["ID"];
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sth = $dbco->prepare("
                SELECT *
                FROM projets
                WHERE ID_projet = $ident
              
                ");
                $sth-> execute();
                $projets = $sth->fetchAll(PDO::FETCH_ASSOC);
                // echo '<pre>';
                // print_r($projets);
                // echo '</pre>';
              }

            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
        <?php
            $servname = "localhost"; $dbname = "portfolio"; $user = "root"; $pass = "";$ident = $_GET["ID"];
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sth = $dbco->prepare("
                SELECT *
                FROM block
                WHERE ID_projet = $ident
              
                ");
                $sth-> execute();
                $block = $sth->fetchAll(PDO::FETCH_ASSOC);
                // echo '<pre>';
                // print_r($projets);
                // echo '</pre>';
              }

            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/pindiv.css">
    <script src="../java/AJAX.js" async></script>
    <t></t>
    <title>Document</title>
</head>
<body>
    
<?php
            foreach($block as $blocks){
            ?>
                <div class="texte-projet"><?php echo $blocks['nom']?></div>
                <?php
            }
            ?>
                <div class="contener-photo"> 
                    
                  
                    <div class="photos-secondaire">
                    <?php
            foreach($projets as $projet){
            ?>
                      <img class="photo" src="../picture/<?php echo $projet['Nom']?>/<?php echo $projet['Photo']?>"/>                
                      <?php
            }
            ?>  
                    </div>
                    
                    <div class="lien-projet">
                      <div class="lp1">
                        <a href="">lien github</a>
                      </div>
                      <div class="lp2"> HTML/CSS/PHP</div>
                    </div>
                </div>  
             
    </body>
</html>