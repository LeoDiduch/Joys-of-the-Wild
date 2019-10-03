const tagspopup = document.getElementById("mytags");
document.getElementById("add-tags").addEventListener('click', () => {
  tagspopup.classList.add("show");
})
document.getElementById("tags-cancel-icon").addEventListener('click', () => {
  tagspopup.classList.remove("show");
})
