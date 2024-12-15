
const booksbtn = document.getElementById("books");
const cdsbtn = document.getElementById("cds");
const gamesbtn = document.getElementById("games");
const bookscontent = document.getElementById("bookscard");
const cdscontent = document.getElementById("cdscard");
const gamescontent = document.getElementById("gamescard");


function showSection(selectedContent) {
  const allSections = [bookscontent, cdscontent, gamescontent];
  allSections.forEach((section) => {
    if (section === selectedContent) {
      section.classList.add("active");
    } else {
      section.classList.remove("active");
    }
  });
}

booksbtn?.addEventListener("click", () => {
  showSection(bookscontent);
});

cdsbtn?.addEventListener("click", () => {
  showSection(cdscontent);
});

gamesbtn?.addEventListener("click", () => {
  showSection(gamescontent);
});

window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
    navbar.classList.remove("transparent");
  } else {
    navbar.classList.add("transparent");
    navbar.classList.remove("scrolled");
  }
});


const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");
const closeModalBtn = document.getElementById("closeModalBtn");
const modal = document.getElementById("modal");

openModal.addEventListener("click", () => {
  modal.classList.remove("hidden");
});

closeModal.addEventListener("click", () => {
  modal.classList.add("hidden");
});

closeModalBtn.addEventListener("click", () => {
  modal.classList.add("hidden");
});
