//Task 1
function displayWidthHeightLocation() {
    var width = window.innerWidth;
    var height = window.innerHeight;
    var location = window.location.href;

    document.getElementById("width").innerHTML = width;
    document.getElementById("height").innerHTML = height;
    document.getElementById("currentLocation").innerHTML = location;
}

function reloadPage() {
    window.location.reload();
}

window.onload = displayWidthHeightLocation;
window.onresize = displayWidthHeightLocation;

//Task 2
function changeBackGroundColor() {
    document.getElementById("p1").style.background = "pink";
    document.getElementById("p2").style.background = "lightgreen";
    document.getElementById("p3").style.background = "yellow";
}

function appendHelloWorld() {

    var br = document.createElement("br");
    var helloITE220 = document.createTextNode("Hello ITE220!");

    document.getElementById("p3").appendChild(br);
    document.getElementById("p3").appendChild(helloITE220);
}

function showHidePs() {

    var ps = ['p1', 'p2', 'p3'];
    var x;

    for (x of ps) {
        var px = document.getElementById(x);
        if (px.style.display === "none") {
            px.style.display = "block";
        } else {
            px.style.display = "none";
        }
    }

}

//Task 3
var eventLink = document.getElementById("showEvent");

eventLink.onmouseover = function() {
    eventLink.innerHTML = 'On Mouse Over';
}

eventLink.onmouseout = function() {
    eventLink.innerHTML = 'On Mouse Out';
}

eventLink.onmousedown = function() {
    eventLink.innerHTML = 'On Mouse Down';
}

eventLink.onmouseup = function() {
    eventLink.innerHTML = 'On Mouse Up';
}

eventLink.ondblclick = function() {
    eventLink.innerHTML = 'On Double Click';
}