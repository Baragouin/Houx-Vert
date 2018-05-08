var modal = document.getElementById("modal");
var span = document.getElementsByClassName("close")[0];

window.onload = function(){
    modal.style.display = "block";
}

span.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function (event) {
    if(evant.target == modal){
        modal.style.display = "none";
    }
}