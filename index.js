let menu = document.getElementById("menu-icon")
let side_menu = document.getElementById("side")
let list = document.querySelectorAll(".links_name")
let logo_name = document.getElementById("logo")


menu.addEventListener("click", () =>
{
    side_menu.classList.toggle("active");
})


// // form validation

const nam = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const errorElement = document.getElementById('error')

document.getElementById("creatAccount").addEventListener( "submit", (e) => {
    e.preventDefault()
    let messages = []
    if (nam.value === " " && nam.value === null) {
     messages.push('Name is required') 
    
    }
  
    if (password.value.length <= 6 && password.value.length >= 10){
      messages.push('Password must be at list 16 characters')
    }
  
    if (password.value === 12345) {
      messages.push('Password cannot be password')
    }
  
    if (messages.length > 0) {
      
      errorElement.innerText = messages.join(', ')
    }
  })
