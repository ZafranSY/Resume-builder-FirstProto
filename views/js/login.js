const register = document.getElementById("register");
const toggleContainer = document.querySelector(".toggle-container");
const container = document.querySelector(".container");
const login = document.getElementById("login");

const toggleInPanel = document.querySelector(".toggle-in");
const toggleUpPanel = document.querySelector(".toggle-up");
register.addEventListener("click", () => {
  container.classList.add("active");
});

login.addEventListener("click", () => {
  container.classList.remove("active");
});
