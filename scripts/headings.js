let typeVar = 0; 
let intro = 'Hello! Welcome to Ashesi Resource Hub...'
let intro_two = "Login or sign up to view resources!"

function typeIntro() {
    
    if (typeVar < intro.length) {
        document.getElementById("hello").innerHTML += intro.charAt(typeVar)
        document.getElementById("hello_two").innerHTML += intro_two.charAt(typeVar)
        typeVar++
        setTimeout(typeIntro, 100)
    }
}





