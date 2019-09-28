let ids = 1;

for (let i = 0; i <= 4; i++) {
    const button = document.getElementById('btn-'+ids);
    let count = Math.floor(Math.random() * Math.floor(500));
    
    let counter = document.createElement("span");
    counter.classList.add("counter-span");
    counter.classList.add("green");
    counter.id='counter-'+ids;
    counter.innerHTML = count;
    button.appendChild(counter);

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
        counter.classList.toggle("white");
    
        if (text.innerHTML === "Wild It !") {
            text.innerHTML = "WILDED !";
            text.style.color="white";
            counter.innerHTML=count+=1;
            
        } else {
            text.innerHTML = "Wild It !";
            text.style.color="black";
            counter.innerHTML=count-=1;
        }
    });
    ids +=1;
};






