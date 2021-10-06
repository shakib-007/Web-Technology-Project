function logValidation(){
  
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  


 if(username == "" ||password == "")
  {
    
    alert("Fill up the fields!");

    return false;
  }
  
  else
  {
    alert("Login Successfully!");
    return true;
  }


  
}