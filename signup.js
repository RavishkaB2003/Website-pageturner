const fname = document.getElementById('fname'); //signup
const email = document.getElementById('email');
const pass = document.getElementById('pwd');
const cpass = document.getElementById('cpwd');

const pass2 = document.getElementById('pwd2');  //login

const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');

const Error1 = document.getElementById('serror1');  //signup
const Error2 = document.getElementById('serror2');
const Error3 = document.getElementById('serror3');
const ErrorE = document.getElementById('errorE');

const Error4 = document.getElementById('lerror'); //login

const hasNumbers = /\d/;

form1.addEventListener('submit', (e) => {
    let fnameError = "";
    let passError = "";
    let cpassError = "";
    let emailError = "";

    if (fname.value === "" ||  fname.value == null){
        fnameError = "Name is required";
    }
    else if (hasNumbers.test(fname.value)){
         fnameError = "Name cannot include numbers";
    }


    if (pass.value === "" || pass.value == null){
        passError = "Password is required";
    }
    else if(pass.value.length < 8){
        passError = "Password needs atleast 8 characters";
    }


    if (cpass.value === "" || cpass.value == null){
        cpassError = "Confirm password is required";
    }
    else if (pass.value !== cpass.value){
        cpassError = "Passwords do not match";
    }

    if (email.value === "" || email.value ==  null){
        emailError = "Email is required";
    }

    if (fnameError || passError || cpassError || emailError){
        e.preventDefault();
        Error1.innerText = fnameError;
        Error2.innerText = passError;
        Error3.innerText = cpassError;
        ErrorE.innerText = emailError;

    }
    
})

form2.addEventListener('submit', (e) => {
    let passError = "";

    if (pass2.value === "" || pass2.value == null){
        passError = "Password is required";
    }
    else if(pass2.value.length < 8){
        passError = "Password needs atleast 8 characters";
    }

    if (passError){
        e.preventDefault();
        Error4.innerText = passError;
    }
    
})