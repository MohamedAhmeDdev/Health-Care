let menu = document.getElementById("menu-icon")
let side_menu = document.getElementById("side")
let list = document.querySelectorAll(".links_name")
let logo_name = document.getElementById("logo")



menu.addEventListener("click", () =>
{
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


//  form validation

const nam = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
let form = document.getElementById("creatAccount")



form.addEventListener( "submit", (e) => {
    e.preventDefault()
    if(nam.value == "" || nam.value.length <10) {
        nameValidation = "Name Is Required"  
    // alert("name")
    }
    else if(email.value == "" ){
        // alert("email")
        emailValidation = "Enter Email Address"
    }
    else if(password.value.length <= 6 ){
        // alert("password)
        passwordValidation = "Password must be at list 16 characters"
    }
    else{
        alert("welcome")
    }
    document.querySelector(".errorName").innerHTML = nameValidation;
    document.querySelector(".errorEmail").innerHTML =  emailValidation;
    document.querySelector(".errorPassword").innerHTML =  passwordValidation;
  })

