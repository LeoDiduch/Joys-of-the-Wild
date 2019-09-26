window.addEventListener('scroll', () => {
    let scrollpos = window.scrollY;
    const scrollfunc = document.getElementById("top-btn");
    
    if(scrollpos >= 100) {
        scrollfunc.style.display="inline-block";
    } else {
        scrollfunc.style.display="none";
    }
});



window.addEventListener('click', () => {
    const top = document.getElementById("topbar");
    var scrollOptions = {
        
        behavior: scrollInput.clicked ? 'smooth' : 'auto'
    }
    window.scrollTo(scrollOptions);
});


