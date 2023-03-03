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

function viewDiv(){
    document.getElementById("menu_wrap").style.display = "block";
    document.getElementById("mobile").style.display = "none"
}

function closeDiv(){
    document.getElementById("menu_wrap").style.display = "none"
    document.getElementById("mobile").style.display = "block";
}

