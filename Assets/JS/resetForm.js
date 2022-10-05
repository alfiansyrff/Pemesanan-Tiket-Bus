const cancelBtn = document.querySelector("#cancel-btn");
cancelBtn.addEventListener('click', () => {
  document.querySelector(".form-horizontal").reset();
});