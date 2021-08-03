var your_password = document.getElementById("your_password");
var repeatyour_password = document.getElementById("repeatyour_password");
console.log(your_password);
console.log(repeatyour_password);

function validatePassword() {
    if (your_password.value != repeatyour_password.value) {
        repeatyour_password.setCustomValidity("Passwords Don't Match");
    } else {
        repeatyour_password.setCustomValidity('');
    }
}

your_password.onchange = validatePassword;
repeatyour_password.onkeyup = validatePassword;