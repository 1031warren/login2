function validateForm(){
    //get the user name that was entered in the form
    var userName = document.userForm.userName.value;
    //get the password that was entered in the form
    var password = document.userForm.userPassword.value;

    //reset the html elements to their default looks
    document.getElementById("errorMessage").innerHTML = ""; 
    document.getElementById("iblUserName").style.backgroundColor = "white";
    document.getElementById("IblPassword").style.backgroundColor = "white";

    //if no user name entered, alert the user
    if(userName == null|| userName == ""){
        document.getElementById("errorMessage").innerHTML = "User name can't be blank"; 
        document.getElementById("iblUserName").style.backgroundColor = "blue";
        //alert("User name can't be blank");
        document.getElementById("userName").focus();
        return false;
    }
    //if no password entered, alert the user
    else if(password.length < 8){
        document.getElementById("errorMessage").innerHTML = "Password can't be blank"; 
        document.getElementById("IblPassword").style.backgroundColor = "blue";
        document.getElementById("userPassword").focus();
        return false;
    }
}
