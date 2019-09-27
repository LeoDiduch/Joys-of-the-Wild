const mediabtn = document.getElementById("add-media");
const mediapopin = document.getElementById("media-popin");
const mediaclosebtn = document.getElementById("close-media");

mediabtn.addEventListener('click', () => {
    if (window.innerWidth < 961 ) {
        mediapopin.style.display="block";   
    } else {
        mediapopin.style.display="flex";      
    }
});

mediaclosebtn.addEventListener('click', () => {
    mediapopin.style.display="none";    
});