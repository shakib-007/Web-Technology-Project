function updateCustomerValidation(){
  let id = document.getElementById("id").value;
  let name = document.getElementById("name").value;
 
  let email = document.getElementById("email").value;
  let number = document.getElementById("number").value;
  

  let error1=document.getElementById('error1');
  let error2=document.getElementById('error2');
  let error3=document.getElementById('error3');
  let error3=document.getElementById('error4');
  
  if (id == "") 
  {
      clear();
      error1.innerHTML="ID is required";
      return false;
  }
  if (name == "") 
  {
      clear();
      error2.innerHTML="Name is required";
      return false;
  }
  if (email == "") 
  {
      clear();
      error3.innerHTML="Email is required";
      return false;
  }
  if (number == "") 
  {
     clear();
     error4.innerHTML="Number is required";
     return false;
  }
  else if (number.length>11 || number.length<11) 
  {
    clear();
    error3.innerHTML="Number must be 11 digits!";
    return false;
  }
  else
  {
    alert("Update Successfully!");
    return true;
  }
  function clear()
  {
    error1.innerHTML="";
    error2.innerHTML="";
    error3.innerHTML="";
    error4.innerHTML="";
    
    
  }

  
}