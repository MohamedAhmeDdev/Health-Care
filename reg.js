//  form validation
const form = document.getElementById("registration")
const nam = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
let nameValidation = ""
let emailValidation = ""
let passwordValidation = ""

form.addEventListener("submit" , (e) => {
    e.preventDefault()
    if(nam.value == "" || nam.value.length <10) {
        nameValidation = "Name Is Required";
    // alert("name")
    }
     if(email.value == "" ){
        // alert("email")
        emailValidation = "Enter Email Address";
    }
     if(password.value.length <= 6 ){
        // alert("password")
        passwordValidation = "Password must be at list 16 characters";
        
    }
    
    document.querySelector(".errorName").innerHTML = nameValidation;
    document.querySelector(".errorEmail").innerHTML =  emailValidation;
    document.querySelector(".errorPassword").innerHTML =  passwordValidation;
 
})   
    