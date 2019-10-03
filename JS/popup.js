const email = document.querySelector('.email');
const emailcont = document.querySelector('.modal-container');

const email2 = document.querySelector('.email-2');
const emailcont2 = document.querySelector('.modal-container-2');

email.addEventListener('click', () =>{
  email.classList.add('expand');
  emailcont.style.width="100%";
  email2.style.visibility="hidden";
});

const closer = document.querySelector('.x-touch');
closer.addEventListener('click', () => {
  email.classList.remove('expand');event.stopPropagation();
  emailcont.style.width="0%";
  email2.style.visibility="visible";
});


email2.addEventListener('click', () =>{
  email2.classList.add('expand-2');
  emailcont2.style.width="100%";
  email.style.visibility="hidden";
});

const closer2 = document.querySelector('.x-touch-2');
closer2.addEventListener('click', () => {
  email2.classList.remove('expand-2');event.stopPropagation();
  emailcont2.style.width="0%";
  email.style.visibility="visible";
});

/* onclick="this.classList.add('expand')" */

/* onclick="document.querySelector('.email').classList.remove('expand');event.stopPropagation();" */