function validateLogin(){

    var errorMessage = "";

    var studentNum = document.getElementById("studentNum");

    if(studentNum.value == ""){
        errorMessage = "Field cannot be left empty";
        document.getElementById("errorMessage").innerHTML = errorMessage;
        return false;
    }
    else{
        return true;
    }

}