
function depli1(){
    var depli = document.querySelector(".depli1");
	depli.classList.toggle("visible");
    var block = document.querySelector(".block1");
    block.classList.toggle("visible");

} 
function depli2(){
    var depli = document.querySelector(".depli2");
	depli.classList.toggle("visible");
    var block = document.querySelector(".block2");
    block.classList.toggle("visible");

} 
function depli3(){
    var depli = document.querySelector(".depli3");
	depli.classList.toggle("visible");
    var block = document.querySelector(".block3");
    block.classList.toggle("visible");

} 
function depli4(){
    var depli = document.querySelector(".depli4");
	depli.classList.toggle("visible");
    var block = document.querySelector(".block4");
    block.classList.toggle("visible");

} 



  function depli5() {
	var deplier = document.getElementById("conteneradeplier");
	deplier.classList.toggle("visible");
    deplier.addEventListener('click',fermeture, false);
	var dedans = document.getElementById("dedans");
	dedans.classList.toggle("visible");
    dedans.addEventListener('click',fermeture1, false);
  }
  function fermeture(){
    var deplier = document.getElementById("conteneradeplier");
    deplier.classList.toggle("visible");
    
  }
  function fermeture1(){
    var dedans = document.getElementById("dedans");
    dedans.classList.toggle("visible");
  };



  var links = document.querySelectorAll('.block')
  var result = document.getElementById('dedans')
  //on lance une boucle pour dire que tant que l'on ne click pas, rien ne s'affichei
  for (var i = 0; i< links.length;i++){
      var link = links[i]
      link.addEventListener('click', function (e){
          // sercurise contre l'injection de code
          e.preventDefault()
          // text affiché durant le chargement
          result.innerHTML = 'Chargement...'
          var httpRequest = new XMLHttpRequest()
          // systement d'evenement qui permet de suivre l'evolution de la requete
          httpRequest.onreadystatechange = function(){
              //la requete passe par 5 états pour s'envoyer (de 0 a 4)
              if(httpRequest.readyState ===4){
                  //j'affiche dans la div result la reponse a la requete
                  result.innerHTML = httpRequest.responseText
              }
          }
          //open(appelle une page) get(method de transfert de d'information), href (la destination), true (ce fait en async)
          httpRequest.open('GET', this.getAttribute('href'), true)
          // les infos sont directement envoyé par get, donc inutile d'ajouter des arguments a send
          httpRequest.send()
      })
  }
  

 