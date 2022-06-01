const dialog= document.getElementById('dialog');
const bulle = document.getElementById('bulle');
const bclose = document.getElementById('bclose');


bulle.addEventListener('click',function(){
    dialog.setAttribute('open',true);
})
bclose.addEventListener('click',function(){
    dialog.removeAttribute('open');
})