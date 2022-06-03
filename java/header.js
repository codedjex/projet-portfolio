let dialog= document.getElementById('dialog');
let bulle = document.getElementById('bulle');
let bclose = document.getElementById('bclose');


bulle.addEventListener('click',function(){
    dialog.setAttribute('open',true);
})
bclose.addEventListener('click',function(){
    dialog.removeAttribute('open');
})

function toggle(){
    document.querySelector('.competence').classList.toggle('competence_open')
    document.querySelector('.cp8').classList.toggle('cp8_open')
    document.querySelector('.cp7').classList.toggle('cp7_open')
    document.querySelector('.cp6').classList.toggle('cp6_open')
    document.querySelector('.cp5').classList.toggle('cp5_open')
    document.querySelector('.cp4').classList.toggle('cp4_open')
    document.querySelector('.cp3').classList.toggle('cp3_open')
    document.querySelector('.cp2').classList.toggle('cp2_open')
    document.querySelector('.cp1').classList.toggle('cp1_open')


}

   