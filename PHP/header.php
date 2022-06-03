<header>
    <img class="fondhead" src="../picture/TECHNOLOGY DESKTOP WALLPAPER.png"/>
    <div class="contener-titre">
        <ul class="lien-titre">
            <li class="souligne">Projets</li>
            <li class="souligne">A Propos</li>
            <li class="souligne">Ce bouton ne sert à rien</li>
        </ul>
        <div id="menu" onclick="toggle()">
        <img  class="bouton" src="/picture/parmetre.png"/>
    </div>
    </div>
    <?php
    @include 'PHP/competence.php';
    ?>
    <div class="message"></div>
    <div class="contener-central">
            <div class="contener-nom">
            <div class="prenom">Jérôme</div>
            <div class="nom">GINOUVEZ</div>
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
            <form id="grid" method="post" action="">
                  <div class="champ part1">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom">
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
                    <input type="text" id="text" name="mail" placeholder="" textarea="">
                   </div>
                  <input id="bouton" type="submit" value="Envoyer">
              </form>
        </dialog>
        
    </div>
</header>