var thisLetter; // Random letter.

function randLetter() {

    var letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","R","S","T","U","W","Z"];

    var l = letters.length; // Length table letter;
    var r = parseInt(Math.random() * l); // Random number;
    
    thisLetter = letters[r];
    
    var letterContainer = document.querySelector("#letter"); // Letter container; VARIABLES;
    
    letterContainer.innerHTML = thisLetter;
}

var button = document.querySelector("input"); // Button radnom letter; VARIABLES;

button.addEventListener("click", randLetter); // Button listener; VARIABLES;
