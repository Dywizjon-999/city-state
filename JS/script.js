var thisLetter; // Random letter.

var button = document.querySelector("input"); // Button radnom letter; VARIABLES; IMPORTANT;
var start = document.querySelector("#start"); // Start time button;
var readyTime = document.querySelector("#ready"); // Ready time button;

function gameStart() {

}

function randLetter() {

    var letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "W", "Z"];

    var l = letters.length; // Length table letter;
    var r = parseInt(Math.random() * l); // Random number;

    thisLetter = letters[r];

    var letterContainer = document.querySelector("#letter"); // Letter container;

    letterContainer.innerHTML = thisLetter;
}

function timeStart() {
    var result = document.querySelector("#time"); // Time container;
    var time = 90;
    var timer = setInterval(t, 1000);

    readyTime.addEventListener('click', timeChange);

    function t() {
        time--;
        result.innerHTML = "<h1>Twój czas: " + time + "s</h1>";

        if (time == 0) {
            clearInterval(timer);
        }
    }

    function timeChange() {
        readyTime.disabled = true;
        time = 10;
        result.innerHTML = "<h1>Twój czas: " + time + "s</h1>";
    }
}

//start.addEventListener('click', timeStart); //Button time listener;
//button.addEventListener("click", randLetter); // Button letter listener; VARIABLES;
