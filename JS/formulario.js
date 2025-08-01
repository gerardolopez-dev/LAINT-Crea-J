const container = document.querySelector(".container");
const btnSignIn = document.getElementById("btn-sign-in");
const btnSignUp = document.getElementById("btn-sign-up");

btnSignIn.addEventListener("click",()=>{
    container.classList.remove("toggle-two");
})
btnSignUp.addEventListener("click",()=>{
    container.classList.add("toggle-two");
})