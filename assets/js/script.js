let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirmPassword');
let message = document.getElementById('matchingmessage');

confirmPassword.addEventListener('input',()=>{
    currentPass = password.value;
    confirmPass = confirmPassword.value;
    if (confirmPass !== currentPass) {
        message.textContent = "Password are not matching!"
    }
    else{
        message.textContent = ""
    }
});
