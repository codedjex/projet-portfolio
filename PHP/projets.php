<?php
            $servname = "localhost"; $dbname = "portfolio"; $user = "root"; $pass = "";
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sth = $dbco->prepare("
                SELECT ID,Nom,Photo
                FROM projets
                WHERE ID = 1
                LIMIT 1
                ");
                $sth-> execute();
                $projets1 = $sth->fetchAll(PDO::FETCH_ASSOC);
                // echo '<pre>';
                // print_r($projets);
                // echo '</pre>';
              }

            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
        <?php
            $servname = "localhost"; $dbname = "portfolio"; $user = "root"; $pass = "";
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sth = $dbco->prepare("
                SELECT *
                FROM projets
                WHERE ID>1 AND ID<6
                LIMIT 3
                ");
                $sth-> execute();
                $projets2 = $sth->fetchAll(PDO::FETCH_ASSOC);
                // echo '<pre>';
                // print_r($projets);
                // echo '</pre>';
              }

            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
          <?php
            $servname = "localhost"; $dbname = "portfolio"; $user = "root"; $pass = "";
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sth = $dbco->prepare("
                SELECT *
                FROM block
                LIMIT 4
                
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




<article id="contener-projet">

    <div class="cercle">
                <img class="boussole" src="picture/boussole.png">
    </div>

    <div id="conteneradeplier">
        <nav id="dedans">
            <div class="presentation-projet">
            <?php
            foreach($projets1 as $projet){
            ?>
                <div class="texte-projet"><?php echo $projet['Nom']?></div>
                  <div class="contener-photo">
                    <div class="contener-photo-principal">
                      <img class="photo-principal" src="picture/<?php echo $projet['Nom']?>/<?php echo $projet['Photo']?>"/>
                    </div>  
                    <div class="photos-secondaire">
            <?php
              foreach($projets2 as $projet3){
              ?>  
                      <img class="photo" src="picture/<?php echo $projet3['Nom']?>/<?php echo $projet3['Photo']?>"/>               
            <?php
              }
              ?>   
                    </div>
                    <div class="lien-projet">
                      <div class="lp1">
                        <a href="">lien github</a>
                      </div>
                      <div class="lp2"> HTML/CSS/PHP</div>
                      <div class="lp3">durée: 3 semaines</div>
                    </div>
                </div>   
            <?php
            }
            ?>   
          </div>
        </nav>
    </div>

    <div class="projet">
    <?php
    foreach($block as $blocks){
      ?>
    <div class="block <?php echo $blocks['identifiant']?>" id="<?php echo $blocks['identifiant']?>" onclick="depli<?php echo $blocks['ID']?>()">
    
            <div class="<?php echo $blocks['nom']?> part">
            <h1><?php echo $blocks['nom']?></h1>
            <div id="<?php echo $blocks['nom']?>">
              <p><?php echo utf8_encode($blocks['type'])?></p>
              <a href="#dedans?ID=<?php echo $blocks['ID_projet']?>">
                <button onclick="depli5()" >cliquez ici</button> 
              </a>
            </div>
            </div>
   
    </div>
    <?php
    }
    ?>

    </div>


</article>