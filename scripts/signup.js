// Get UI elements 
const username = document.getElementById("username")
const fullname = document.getElementById("fullname")
const email = document.getElementById("email")
const yeargroup = document.getElementById("yeargroup")
const major = document.getElementById("major")
const password = document.getElementById("password")
const confirmpassword = document.getElementById("confirmpassword")
const signup_btn = document.getElementById("signup-button")

let errors = 0;

// show input error messages
function showAllErrors(displayPlace, message) {
    displayPlace.innerHTML = message;
    errors += 1;
}

// Check for input lengths for register fields 
function checkFieldLength(input, minLength, maxLength) {
    if (input.value.length <= minLength) {
        showAllErrors(input.nextElementSibling, `Your ${input.name} cannot be less than characters long`)
    }
    if (input.value.length >= maxLength) {
        showAllErrors(input.nextElementSibling, `Your ${input.name} cannot be more than characters long`)
    }
}

function checkRequiredFields(inputs) {
    inputs.forEach(input => {
        if (input.value == '') {
        showAllErrors(input.nextElementSibling, "This is a required field")
    }
    })
    
}

function checkUserEmail(input) {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!input.value.match(emailRegex)) {
        showAllErrors(input.nextElementSibling, "This email is invalid")
    }
}

function checkYeargroup(input) {
    let y_group = parseInt(input.value)
    alert(y_group)
    if (y_group) {
        if ((y_group < 2022) && (y_group > 2025) ) {
            showAllErrors(input.nextElementSibling, "Your year group should be 2022, 2023, 2024 or 2025 only.")
        }
    }
}

function checkMajor(input) {
    const allMajors = ['CE', 'EE', 'ME', 'ÇS', 'MIS', 'BA']; 
    if (!(allMajors.includes(input.value))) {
        showAllErrors(input.nextElementSibling, "Major not found. Please check above")
    }
}

function confirmPassword(password1, password2) {
    if (password1.value != password2.value) {
        showAllErrors(input.nextElementSibling, "Your passwords must match to continue")
    }
}

function validateUserInputs(e) {
    console.log("event caught")
    e.preventDefault() 
    errors = 0 
    // document.getElementsByTagName('small').forEach(tag => {
    //     tag.innerHTML = ""
    // })
    $('small').html('');
    checkFieldLength(fullname, 5, 50)
    checkFieldLength(password, 5, 15)
    checkRequiredFields([fullname, email, yeargroup, major, password, confirmpassword])
    checkMajor(major)
    checkYeargroup(yeargroup)
    checkUserEmail(email)
    confirmPassword(password, confirmpassword)

    if (errors === 0) {
        return true
    }
    return false
}

document.getElementById("signup-button").addEventListener("click", () => {
    let isCorrect = validateUserInputs()
    if (isCorrect) location.href = "index.html"
})
