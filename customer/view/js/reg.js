function regValidation(){
 
  let name = document.getElementById("name").value;
  let username = document.getElementById("username").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let conpass = document.getElementById("conpass").value;
  let date = document.getElementById("dd").value;
  let month = document.getElementById("mm").value;
  let year = document.getElementById("yyy").value;
  

  let error1=document.getElementById('error1');
  let error2=document.getElementById('error2');
  let error3=document.getElementById('error3');
  let error4=document.getElementById('error4');
  let error5=document.getElementById('error5');
  let error6=document.getElementById('error6');

  if (name == "") 
  {
      clear();
      error1.innerHTML="Name is required";
      return false;
  }
  if (email == "") 
  {
      clear();
      error2.innerHTML="Email is required";
      return false;
  }
  if (username == "") 
  {
     clear();
     error3.innerHTML="UserName is required";
     return false;
  }
  if (password == "") 
  {
      clear();
      error4.innerHTML="Password is required";
      return false;
  }
  if (conpass == "") 
  {
      clear();
      error5.innerHTML="Confirm Password is required";
      return false;
  }
  if (date == "" || month=="" || year=="") 
  {
      clear();
      error6.innerHTML="Date ,Month and Year is required";
      return false;
  }
  else if(username.length<2)
  {
     clear();
     error3.innerHTML="UserName must be 2 charcters!";
     return false;
  }
  else if(password.length<5)
  {
     clear();
     error4.innerHTML="password must be 5 charcters !";
     return false;
  }
  else if (password!=conpass) 
  {
     clear();
     error5.innerHTML="Password and confirm Password missmatch!";
     return false;
  }
  else
  {
    alert("Submit Successfully!");
    return true;
  }
  function clear()
  {
    error1.innerHTML="";
    error2.innerHTML="";
    error3.innerHTML="";
    error4.innerHTML="";
    error5.innerHTML="";
    error6.innerHTML="";
    
  }


 /*if(name == "" || username == "" || email == "" || password == "" || conpass == "" || date=="" || month=="" || year=="")
  {
    //text = "Fill up the field!";
    //error_messege.innerHTML = text;
    alert("Fill up the field!");

    return false;
  }
  else if(username.length<2)
  {
    alert("username must be 2 charcters!");
    return false;
  }
  else if(password.length<5)
  {
    alert("password must be 5 charcters!");
    return false;
  }
  else if (password!=conpass) 
  {
    alert("password and confirm password missmatch!");
    return false;
  }
  else
  {
    alert("Submit Successfully!");
    return true;
  }*/


  
}