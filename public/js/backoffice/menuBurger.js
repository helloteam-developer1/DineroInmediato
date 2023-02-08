/** menu hamburgesa */
const nav = document.querySelector(".burger button");
nav.addEventListener("click", e => {

  nav.classList.toggle("open");
  const menu = document.querySelector(".Menu");
  menu.classList.toggle('close');
});
