
//selector of the button
const button = document.getElementById("like-btn");

//creator for the icon
const icon = document.createElement("i");
icon.classList.add("fas");
icon.classList.add("fa-thumbs-up");
icon.classList.add("green");
button.appendChild(icon);

//creator for the text
const text = document.createElement("p");
text.id="like-btn-text";
text.innerHTML = "Wild It !";
button.appendChild(text);

//onclick function
function anim() {
    button.classList.toggle("flipped");
    icon.classList.toggle("white");

    // text switch else/if
    let textSwitch = document.getElementById("like-btn-text");
    if (textSwitch.innerHTML === "Wild It !") {
        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }
        let counter = getRandomInt(100);
        text.innerHTML = "WILDED !";
        text.style.color="white";
    } else {
        textSwitch.innerHTML = "Wild It !";
        textSwitch.style.color="black";
    }
}

