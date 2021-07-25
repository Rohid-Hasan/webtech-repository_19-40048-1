function validateForm(){
    const username = document.forms["myForm"]["username"].value;
    const password = document.forms["myForm"]["pass"].value;
    if(username == ""){
        document.getElementById("errorUsername").innerHTML = "Name can not be empty!";
    }
    
    if(password == ""){
        document.getElementById("errorPassword").innerHTML = "Password can not be empty!";
    }
}