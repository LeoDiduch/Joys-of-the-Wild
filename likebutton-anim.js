

/*//selector of the button
const button = document.querySelectorAll("button");

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
        text.innerHTML = "WILDED !";
        text.style.color="white";
    } else {
        textSwitch.innerHTML = "Wild It !";
        textSwitch.style.color="black";
    }
}

button.addEventListener('click', () => {
    button.classList.toggle("flipped");
    icon.classList.toggle("white");

    // text switch else/if
    let textSwitch = document.getElementById("like-btn-text");
    if (textSwitch.innerHTML === "Wild It !") {
        text.innerHTML = "WILDED !";
        text.style.color="white";
    } else {
        textSwitch.innerHTML = "Wild It !";
        textSwitch.style.color="black";
    }
});*/

let ids = 1

for (let i = 0; i <= 4; i++) {
    const button = document.getElementById('btn-'+ids);

    const icon = document.createElement("i");
    icon.classList.add("fas");
    icon.classList.add("fa-thumbs-up");
    icon.classList.add("green");
    button.appendChild(icon);

    const text = document.createElement("p");
    text.classList.add("like-btn-text");
    text.innerHTML = "Wild It !";
    button.appendChild(text);

    button.addEventListener('click', () => {
        button.classList.toggle("flipped");
        icon.classList.toggle("white");
    
        // text switch else/if
        let textSwitch = document.getElementById('text-'+ids);
        if (text.innerHTML === "Wild It !") {
            text.innerHTML = "WILDED !";
            text.style.color="white";
        } else {
            text.innerHTML = "Wild It !";
            text.style.color="black";
        }
    });

    ids +=1;
};






