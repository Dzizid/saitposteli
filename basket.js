var modalDesign = document.getElementById('myModalDesign');
var btnDesign = document.getElementById('myBtnDesign');
var spanDesign = document.getElementsByClassName("close")[0];

btnDesign.onclick = function () {
    modalDesign.style.display = "block";
}

spanDesign.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalDesign) {
        modal.style.display = "none";
    }
}