function addCustomerValidation(){
  
  let name = document.getElementById("name").value;
 
  let email = document.getElementById("email").value;
  let number = document.getElementById("number").value;
  

  let error1=document.getElementById('error1');
  let error2=document.getElementById('error2');
  let error3=document.getElementById('error3');
  

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
  if (number == "") 
  {
     clear();
     error3.innerHTML="Number is required";
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
    alert("Added Successfully!");
    return true;
  }
  function clear()
  {
    error1.innerHTML="";
    error2.innerHTML="";
    error3.innerHTML="";
    
    
  }


 


  
}