function addRoomValidation(){
  
  let id = document.getElementById("id").value;
  let price = document.getElementById("price").value;
  

  let error1=document.getElementById('error1');
  let error2=document.getElementById('error2');
  
  

  if (id == "") 
  {
      clear();
      error1.innerHTML="ID is required";
      return false;
  }
  if (price == "") 
  {
      clear();
      error2.innerHTML="Price is required";
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
   
    
    
  }


 


  
}