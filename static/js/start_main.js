"use strict";
console.clear();
var boms = document.getElementsByClassName("bom");
var booms = document.getElementsByClassName("booms");
setTimeout(function () {
    for (var i = 0; i < boms.length; i++) {
        boms[i].className += " hide";
    }
}, 2000);
setTimeout(function () {
    booms[0].className += " visible";
}, 2500);