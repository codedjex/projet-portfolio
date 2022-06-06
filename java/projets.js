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
}
function changeImage(){
	this.setAttribute("src","picture/Jadoo.png");
}
function RemetImage(){
    this.setAttribute("src","");

}