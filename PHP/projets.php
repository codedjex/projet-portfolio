
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
    </div>
    <div id="conteneradeplier">
        <aside id="dedans">
</aside>
    </div>
    <div class="projet">
    <?php
    foreach($block as $blocks){
      ?>
    <div class="block block<?php echo $blocks['ID_projet']?>" onclick="depli<?php echo $blocks['ID_projet']?>()"> 
          <div class="<?php echo $blocks['nom']?> part">
            <h1><?php echo $blocks['nom']?></h1>
            <div class="depli depli<?php echo $blocks['ID_projet']?>">
              <p><?php echo utf8_encode($blocks['type'])?></p>
              <a href="../PHP/pindiv.php?ID=<?php echo $blocks['ID_projet']?>" id="block">
                <button onclick="depli5()" > cliquez ici
                </button> 
                </a>

            </div>
          </div>
    </div>
    <?php
    }
    ?>
    </div>
</article>
