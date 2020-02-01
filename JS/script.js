var thisLetter; // Random letter.


var start = document.querySelector("#start"); // Start time button;
var readyTime = document.querySelector("#ready"); // Ready time button;

function gameStart() {
    var hiddenDivs = document.querySelectorAll(".none");

    hiddenDivs[0].style.position = "relative";
    hiddenDivs[1].style.position = "relative";

    hiddenDivs[0].style.top = "auto";
    hiddenDivs[1].style.top = "auto";

    start.style.display = "none";
}

function randLetter() {

    var letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "W", "Z"];

    var l = letters.length; // Length table letter;
    var r = parseInt(Math.random() * l); // Random number;

    thisLetter = letters[r];

    var letterContainer = document.querySelector("#letter"); // Letter container;

    letterContainer.innerHTML = "Litera: " + thisLetter;
    buttonLetter.style.display = "none";

    timeStart();
}

function timeStart() {
    var result = document.querySelector("#time"); // Time container;
    var time = 90;
    var timer = setInterval(t, 1000);

    result.innerHTML = "Twój czas: " + time + "s";
    
    //readyTime.addEventListener('click', timeChange);

    function t() {
        time--;
        result.innerHTML = "Twój czas: " + time + "s";

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

//start.addEventListener("click", timeStart); //Button time listener;
start.addEventListener("click", gameStart); //Button start game listener;
buttonLetter.addEventListener("click", randLetter); // Button letter listener; VARIABLES;
