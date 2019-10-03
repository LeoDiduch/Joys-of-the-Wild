/*const checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
    if(this.checked) {
        trans();
        document.documentElement.setAttribute('data-theme', 'dark')
    } else {
        trans();
        document.documentElement.setAttribute('data-theme', 'light')
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}*/

if(localStorage.getItem('theme') === 'dark'){
    document.body.classList.add('dark');
} else {
    document.body.classList.add('dark');    
}


document.getElementById('myButton').addEventListener('click', function(){
    if(document.body.classList.contains('dark')){
        document.body.classList.remove('dark');
        document.body.classList.add('light');
        localStorage.setItem('theme', 'light');
    } else{
        document.body.classList.add('dark');
        document.body.classList.remove('light');
        localStorage.setItem('theme', 'dark');
    }
});