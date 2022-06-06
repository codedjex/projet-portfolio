let boussole = document.getElementsByClassName("boussole");

document.onmousemove = function () {

    let x = event.clientX * 100 / window.innerWidth + "%";
    let y = event.clientY * 100 / window.innerHeight + "%";


    for (let i = 0; i < 2; i++) {
        boussole[i].style.left = -x;
        boussole[i].style.top = - y;
        boussole[i].style.transform = "translate(+" + x + ",+" + y + ")";
    }

    console.log("x =" - x);
    console.log("y = " - y);
};
function depli1(){
    var jadoo = document.getElementById("jadoo");
	jadoo.classList.toggle("visible");
    var JO = document.getElementById("JO");
    JO.classList.toggle("visible");

} 
function depli2() {
    var ailleurs = document.getElementById("ailleurs");
	ailleurs.classList.toggle("visible");
    var AS = document.getElementById("AS");
    AS.classList.toggle("visible");
}
function depli3() {
	var note = document.getElementById("note");
	note.classList.toggle("visible");
    var NE = document.getElementById("NE");
    NE.classList.toggle("visible");
  }
  function depli4() {
    var fromhere = document.getElementById("fromhere");
	fromhere.classList.toggle("visible");
    var FH = document.getElementById("FH");
    FH.classList.toggle("visible");
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
  }