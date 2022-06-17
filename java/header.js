let dialog= document.getElementById('dialog');
let bulle = document.getElementById('bulle');
let bclose = document.getElementById('bclose');


bulle.addEventListener('click',function(){
    dialog.setAttribute('open',true);
})
bclose.addEventListener('click',function(){
    dialog.removeAttribute('open');
})
let menu= document.getElementById('menu');
function deplois(){
    document.querySelector('.competence').classList.toggle('competence_open')
    document.querySelector('.cp8').classList.toggle('cp8_open')
    document.querySelector('.cp7').classList.toggle('cp7_open')
    document.querySelector('.cp6').classList.toggle('cp6_open')
    document.querySelector('.cp5').classList.toggle('cp5_open')
    document.querySelector('.cp4').classList.toggle('cp4_open')
    document.querySelector('.cp3').classList.toggle('cp3_open')
    document.querySelector('.cp2').classList.toggle('cp2_open')
    document.querySelector('.cp1').classList.toggle('cp1_open')
};
function allume(){
    var prenom = document.getElementById("prenom");
	prenom.classList.toggle("allume");
    var nom = document.getElementById("nom");
    nom.classList.toggle("allume");
    var off = document.querySelector(".fa-power-off");
    off.classList.toggle("allume");
    var presentation = document.querySelector(".presentation");
    presentation.classList.toggle("allume");
    var presentation = document.querySelector(".block1");
    presentation.classList.toggle("allume");
    var presentation = document.querySelector(".block2");
    presentation.classList.toggle("allume");
    var presentation = document.querySelector(".block3");
    presentation.classList.toggle("allume");
    var presentation = document.querySelector(".block4");
    presentation.classList.toggle("allume");

} 

   