var intervalo = 5000;

function slide1(){
    document.getElementById("banner").src = "./img/xbox.jpg";
    setTimeout("slide2()",intervalo);
}

function slide2(){
    document.getElementById("banner").src = "./img/xbox2.jpg";
    setTimeout("slide1()",intervalo);
}