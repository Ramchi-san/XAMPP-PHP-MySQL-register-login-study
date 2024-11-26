const signUpButton = document.getElementById("signUpButton");
const signInButton = document.getElementById("signInButton");

const signUpForm = document.getElementById("signup");
const signInForm = document.getElementById("signin");


signUpButton.addEventListener('click', function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})

signInButton.addEventListener('click', function(){
    signUpForm.style.display="none";
    signInForm.style.display="block";
})

