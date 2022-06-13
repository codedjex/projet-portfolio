<header>
    <img class="fondhead" src="../picture/TECHNOLOGY DESKTOP WALLPAPER.png"/>
    <div class="contener-titre">
        <div class="lien-titre">
            <button id="neon" onclick="allume()">
                <i class="fa-solid fa-power-off"></i>
            </button>
            <a href="#contener-projet" class="souligne">Projets</a>
            <a href="#contener-presentation"class="souligne">A Propos</a>
            <a class="souligne">Ce bouton va nul part</a>
            <?php
if(isset($_COOKIE['cookie_form'])){
         echo '<h1> votre message a bien était transmi</h1>';   }
        ?>
        </div>
        <div id="menu" onclick="deplois()">
            <img  class="bouton" src="/picture/parmetre.png"/>
        </div>
    </div>
    <?php
    @include 'PHP/competence.php';
    ?>
    <div class="message"></div>
    <div class="contener-central">
            <div class="contener-nom">
            <div id="prenom">Jérôme</div>
            <div id="nom">GIN<a href="PHP/back-office.php">O</a>UVEZ</div>
        </div>
        <div class="contener-cadre">
            <div class="cadre1"></div>
            <div class="cadre2"></div>
        </div>
    </div>
    <div class="texte">Développeur web/ Web mobile</div>
    <button id="bulle">
        <i class="fa-solid fa-message"></i>
    </button>
        <dialog id="dialog">
            <button id="bclose">X</button>
            <form id="grid" method="post" action="PHP/formulaire-demande.php">
                  <div class="champ part1">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" require >
                  </div>
                  <div class="champ part2">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom">
                  </div>
                  <div class="champ part3">
                    <label for="mail">Adresse mail :</label>
                    <input type="email" id="mail" name="mail">
                   </div>
                   <div class="champ part4">
                    <label for="mail">Votre demande:</label>
                    <input type="text" id="Message" name="Message" placeholder="votre demande ici" textarea="">
                   </div>
                  <input id="bouton" type="submit" value="Envoyer">
              </form>
        </dialog>
        
    </div>
</header>