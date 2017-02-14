/**
 * Created by marty on 6/5/2016.
 * Validation From
 */

function validateForm(){
    // Set error catcher
    var error = 0;
    // Validate name
    if(!validateName('name')){
        document.getElementById('nameError').style.display = "block";
        error++;
    }
    // Validate address
    if(!validateAddress('address')){
        document.getElementById('addressError').style.display = "block";
        error++;
    }
    // Validate city
    if(!validateCity('city')){
        document.getElementById('cityError').style.display = "block";
        error++;
    }
    // Validate state dropdown box
    if(!validateSelect('state')){
        document.getElementById('stateError').style.display = "block";
        error++;
    }
    // Validate zipcode
    if(!validateZcode('zcode')){
        document.getElementById('zcodeError').style.display = "block";
        error++;
    }
    // Validate email
    if(!validateEmail(document.getElementById('email').value)){
        document.getElementById('emailError').style.display = "block";
        error++;
    }
}

function validateName(x){
    // Validation rule
    var re = /[A-Za-z -']$/;
    // Check input
    if(re.test(document.getElementById(x).value)){
        // Style none
        document.getElementById(x).style.background ='none';
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    }else{
        // error - Style yellow
        document.getElementById(x).style.background ='yellow';
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        return false;
    }
}

// Validate address
function validateAddress(x){
    // Validation rule
    var re = /[A-Za-z\-0-9 -']$/;
    // Check input
    if(re.test(document.getElementById(x).value)){
        // Style none
        document.getElementById(x).style.background ='none';
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    }else{
        // error - Style yellow
        document.getElementById(x).style.background ='yellow';
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        return false;
    }
}

//Validate city
function validateCity(x){
    // Validation rule
    var re = /[A-Za-z -']$/;
    // Check input
    if(re.test(document.getElementById(x).value)){
        // Style none
        document.getElementById(x).style.background ='none';
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    }else{
        // error - Style yellow
        document.getElementById(x).style.background ='yellow';
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        return false;
    }
}

// Validate State - Select boxes
function validateSelect(x){

    if(document.getElementById(x).selectedIndex !== 0){
        // Style none
        document.getElementById(x).style.background ='none';
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    }else{
        // error - Style yellow
        document.getElementById(x).style.background ='yellow';
        return false;
    }
}

//Validate zipcode
function validateZcode(x){
    // Validation rule
    var re = /[0-9]$/;
    // Check input
    if(re.test(document.getElementById(x).value)){
        // Style none
        document.getElementById(x).style.background ='none';
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    }else{
        // error - Style yellow
        document.getElementById(x).style.background ='yellow';
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        return false;
    }
}

// Validate email
function validateEmail(email){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email)){
        // Style none
        document.getElementById('email').style.background ='none';
        document.getElementById('emailError').style.display = "none";
        return true;
    }else{
        // error - Style yellow
        document.getElementById('email').style.background ='yellow';
        return false;
    }
}


