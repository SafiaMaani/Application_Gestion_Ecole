const body = document.querySelector("body")
sidebar = body.querySelector("nav")
humberguer = body.querySelector(".humberguer")
searchBtn = body.querySelector(".search-box")
modeSwitch = body.querySelector(".toggle-switch")
modeText = body.querySelector(".mode-text")
const card = body.querySelector(".card")
console.log(card)

humberguer.addEventListener("click", () => {
    sidebar.classList.toggle("close")
})

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close")
})