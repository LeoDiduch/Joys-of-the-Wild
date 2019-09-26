window.addEventListener('scroll', () => {
    let scrollpos = window.scrollY;
    const scrollfunc = document.getElementById("top-btn");
    
    if(scrollpos >= 100) {
        scrollfunc.style.display="inline-block";
    } else {
        scrollfunc.style.display="none";
    }
});

document.addEventListener('click', () => {
    const clickfunc = document.getElementById("top-btn");


});


