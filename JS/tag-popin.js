const popinbtn = document.getElementById("add-tag");
const popin = document.getElementById("tag-popin");
const closebtn = document.getElementById("close-tag");

popinbtn.addEventListener('click', () => {
    if (window.innerWidth < 961 ){
        popin.style.display="block";  
    } else {
        popin.style.display="flex";  
    }
      
});

closebtn.addEventListener('click', () => {
    popin.style.display="none";    
});