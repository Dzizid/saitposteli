window.onload = function () {
    var box = document.getElementsByClassName('box');
    var btn = document.getElementById('button');
    for (let i = 6;i<box.length;i++) {
        box[i].style.display = "none";
    }

    var countD = 3;
    btn.addEventListener("click", function() {
        var box = document.getElementsByClassName('box');
        countD += 3;
        if (countD <= box.length){
            for(let i=0;i<countD;i++){
                box[i].style.display = "block";
            }
        }

    })
}

var modal = document.getElementById('myModal');
var btn = document.getElementById('myBtn');
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    modal.style.display = "block";
}

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modalOne = document.getElementById('myModalOne');
var btnOne = document.getElementById('myBtnOne');
var spanOne = document.getElementsByClassName("close")[0];

btnOne.onclick = function () {
    modalOne.style.display = "block";
}

spanOne.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalOne) {
        modal.style.display = "none";
    }
}

var modalTwo = document.getElementById('myModalTwo');
var btnTwo = document.getElementById('myBtnTwo');
var spanTwo = document.getElementsByClassName("close")[0];

btnTwo.onclick = function () {
    modalTwo.style.display = "block";
}

spanTwo.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalTwo) {
        modal.style.display = "none";
    }
}

var modalThree = document.getElementById('myModalThree');
var btnThree = document.getElementById('myBtnThree');
var spanThree = document.getElementsByClassName("close")[0];

btnThree.onclick = function () {
    modalThree.style.display = "block";
}

spanThree.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalThree) {
        modal.style.display = "none";
    }
}

var modalFoo = document.getElementById('myModalFoo');
var btnFoo = document.getElementById('myBtnFoo');
var spanFoo = document.getElementsByClassName("close")[0];

btnFoo.onclick = function () {
    modalFoo.style.display = "block";
}

spanFoo.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalFoo) {
        modal.style.display = "none";
    }
}






