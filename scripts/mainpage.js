let selectedCourse; 
let sql; 

document.getElementById('selectcourse').addEventListener('change', () => {
    selectedCourse = document.getElementById('selectcourse').value
    console.log(selectedCourse)
    
})