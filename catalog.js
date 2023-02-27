window.onload = function () {
    var box = document.getElementsByClassName('box');
    var btn = document.getElementById('button');
    for (let i = 9;i<box.length;i++) {
        box[i].style.display = "none";
    }

    var countD = 6;
    btn.addEventListener("click", function() {
        var box = document.getElementsByClassName('box');
        countD += 6;
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