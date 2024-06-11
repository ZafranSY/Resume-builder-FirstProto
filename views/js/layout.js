const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector("nav"),
  //   searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");
const resumakerImg = document.getElementById("resumaker-img");
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

// searchBtn.addEventListener("click" , () =>{
//     sidebar.classList.remove("close");
// })

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
    resumakerImg.src = "./img/ResuMaker_white.png";
  } else {
    modeText.innerText = "Dark mode";
    resumakerImg.src = "./img/ResuMaker.png";
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const logout = document.querySelector(".logout a");

  logout.addEventListener("click", (event) => {
    event.preventDefault();
    window.location.href = "/resumeNew/";
  });

  function redirectToPage() {
    window.location.href = "/resumeNew/";
  }
});
