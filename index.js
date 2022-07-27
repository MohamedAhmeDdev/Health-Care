let menu = document.getElementById("menu-icon")
let side_menu = document.getElementById("side")

menu.addEventListener("click", (e) =>
{
    e.preventDefault()
    side_menu.classList.toggle("active");
})



//   changing the  theme  color
function colorTheme(){
let check = document.getElementById("checkbox")

check.addEventListener("change" ,() => {
    document.body.classList.toggle("dark")
})
}
colorTheme()

