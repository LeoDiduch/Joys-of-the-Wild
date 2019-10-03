const mediapopup = document.getElementById("mymedia");
const modalspopup = document.getElementById("modals-container");
document.getElementById("add-media").addEventListener('click', () => {
  modalspopup.classList.add("show");
  mediapopup.classList.add("show");
})
document.getElementById("media-cancel-icon").addEventListener('click', () => {
  modalspopup.classList.remove("show");
  mediapopup.classList.remove("show");
})
