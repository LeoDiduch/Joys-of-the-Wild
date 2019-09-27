window.addEventListener('scroll', () => {
    let scrollpos = window.scrollY;
    const scrollfunc = document.getElementById("top-btn");
    
    if(scrollpos >= 100) {
        scrollfunc.style.opacity="1";
        scrollfunc.style.scrollBehavior="smooth";
        scrollfunc.style.pointerEvents="all";
    } else {
        scrollfunc.style.opacity="0";
        scrollfunc.style.scrollBehavior="smooth";
        scrollfunc.style.pointerEvents="none";
    }
});