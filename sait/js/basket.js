var modalDesign = document.getElementById('myModalDesign');
var btnDesign = document.getElementById('myBtnDesign');
var spanDesign = document.getElementsByClassName("close")[0];

btnDesign.onclick = function () {
    modalDesign.style.display = "block";
}

spanDesign.onclick = function () {
    modalDesign.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalDesign) {
        modalDesign.style.display = "none";
    }
}

function viedInfoClient() {
    document.getElementById("myClient").style.display = "block";
}

