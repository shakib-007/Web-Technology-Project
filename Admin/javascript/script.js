 
     //signup
 

        
		
		       function validatesignup() {
		 
		 
		 
  var x = document.forms["myForm"]["password"].value;
   if (x == "") {
    alert(" password must be filled out");
      return false;
	  
  }
 
  
  
  var x = document.forms["myForm"]["re_password"].value;
   if (x == "") {
    alert(" confirm password must be filled out");
      return false;
	  
  }
 
   var x = document.forms["myForm"]["uname"].value;
   if (x == "") {
    alert(" User name must be filled out");
    return false;
  }
       var x = document.forms["myForm"]["name"].value;
   if (x == "") {
    alert(" name must be filled out");
    return false;
  }
   
   
     var pw = document.getElementById("pswd").value;  
     var pw1 = document.getElementById("pswd1").value;  
     
   
  
  if(pw.length < 6) {  
     document.getElementById("message").innerHTML = " ";  
	  alert("Password length must be atleast 6 characters");
     return false;  
  }  
  
  
  if(pw.length > 10) {  
     document.getElementById("message").innerHTML = " "; 
 alert("Password length  must be in 10 characters");	 
     return false;  
  } 
  
  if(pw == pw1){
	     document.getElementById("message").innerHTML = " "; 
	   alert(" New User Added succesfully");	 
  }
  
           if(pw != pw1){
			   
	     document.getElementById("message").innerHTML = " "; 
	   alert("  password and confirmation password doesnot match");	 
  }
  
  
  
  
  
  
  
 
  else {  
  
    
  }  
   
   
        var pw1 = document.getElementById("pswd1").value;  
 
     
   
  
  if(pw1.length < 6) {  
     document.getElementById("message").innerHTML = " ";  
	  alert(" confirm Password length must be atleast 6 characters");
     return false;  
  }  
  
  
  if(pw1.length > 10) {  
     document.getElementById("message").innerHTML = " "; 
 alert(" confirm Password length  must be in 10 characters");	 
     return false;  
  }
   
   
 
   
}
















 
  
///ADD USER

function validateadduser() {
		 
		 
		 
  var x = document.forms["myForm"]["password"].value;
   if (x == "") {
    alert(" password must be filled out");
      return false;
	  
  }
 
  
  
  var x = document.forms["myForm"]["re_password"].value;
   if (x == "") {
    alert(" confirm password must be filled out");
      return false;
	  
  }
 
   var x = document.forms["myForm"]["uname"].value;
   if (x == "") {
    alert(" User name must be filled out");
    return false;
  }
       var x = document.forms["myForm"]["name"].value;
   if (x == "") {
    alert(" name must be filled out");
    return false;
  }
   
   
     var pw = document.getElementById("pswd").value;  
     var pw1 = document.getElementById("pswd1").value;  
     
   
  
  if(pw.length < 6) {  
     document.getElementById("message").innerHTML = " ";  
	  alert("Password length must be atleast 6 characters");
     return false;  
  }  
  
  
  if(pw.length > 10) {  
     document.getElementById("message").innerHTML = " "; 
 alert("Password length  must be in 10 characters");	 
     return false;  
  } 
  
  if(pw == pw1){
	     document.getElementById("message").innerHTML = " "; 
	   alert(" New User Added succesfully");	 
  }
  
           if(pw != pw1){
			   
	     document.getElementById("message").innerHTML = " "; 
	   alert("  password and confirmation password doesnot match");	 
  }
  
  
  
  
  
  
  
 
  else {  
  
    
  }  
   
   
        var pw1 = document.getElementById("pswd1").value;  
 
     
   
  
  if(pw1.length < 6) {  
     document.getElementById("message").innerHTML = " ";  
	  alert(" confirm Password length must be atleast 6 characters");
     return false;  
  }  
  
  
  if(pw1.length > 10) {  
     document.getElementById("message").innerHTML = " "; 
 alert(" confirm Password length  must be in 10 characters");	 
     return false;  
  }
   
   
 
   
}

 
 
 
 
 
 //login
 
  function validatelogin() {
		 
		 
		 
  var x = document.forms["myForm"]["uname"].value;
   if (x == "") {
    alert("  UserName must be filled out");
      return false;
	  
  }
 
  
  
  var x = document.forms["myForm"]["password"].value;
   if (x == "") {
    alert("  password must be filled out");
      return false;
	  
  }
 
 
     
   
    var pw = document.getElementById("pswd").value;  
       
     
   
  
  if(pw.length < 6) {  
     document.getElementById("message").innerHTML = " ";  
	  alert("Password length must be atleast 6 characters");
     return false;  
  }  
  
  
  if(pw.length > 10) {  
     document.getElementById("message").innerHTML = " "; 
 alert("Password length  must be in 10 characters");	 
     return false;  
  } 
  
	 }
 
 
 else{
	 
	  alert(" log in success fully");	 
     return false;  
 }
 
 
 
 
 
 
 
 
 
 
 //UPDATE CATEGORY
         function validateupdate()
{
     if(document.form.t1.selectedIndex=="")
{
alert ( "you must be  select atleast one");
return false;
}
  var x = document.forms["form"]["t2"].value;
   if (x == "") {
    alert("  You must  filled out this form");
      return false;
	  
  }
 
}
 
 ///DELETE USER
 function validatedeleteuser()
{
if(document.form.user_name.selectedIndex=="")
{
alert ( "you must be  select atleast one");
return false;
}
 
 
}
/// Add category
      function validateaddcategory() {
  var x = document.forms["myForm"]["t1"].value;
   if (x == "") {
    alert("  You must insert category ");
      return false;
	  
  }
 }
 
 /// delete category
   function validatedeletecategory()
{
        if(document.form.t1.selectedIndex=="")
{
alert ( "you must be  select atleast one");
return false;
}
 
 
}
 
     /// delete sub category
      function validatedeletesubcategory()
{
        if(document.form.t1.selectedIndex=="")
{
alert ( "you must be  select atleast one");
return false;
}
 
 
}
 
 //ADDSUBCATEGORY

 function validateaddsubcategory()
{
 
     var x = document.forms["form"]["t1"].value;
   if (x == "") {
    alert("  must be filled out this form");
    return false;
  }
       var x = document.forms["form"]["t4"].value;
      if (x == "") {
    alert("  details must be filled out");
    return false;
  }
} 
 
 
 ///delete package
    function validatedeletepackage()
{
        if(document.form.t1.selectedIndex=="")
{
alert ( "you must be  select atleast one");
return false;
}
 
 
}

//updatepackage


         function validateupdatepackage()
{
     if(document.form.s1.selectedIndex=="")
{
   alert ( "you must be  select atleast one");
return false;
}

     if(document.form.t3.selectedIndex=="")
{
   alert ( "you must be  select atleast one");
return false;
}


  var x = document.forms["form"]["t8"].value;
   if (x == "") {
    alert("  You must  filled out this form");
      return false;
	  
	  
	   var x = document.forms["form"]["t2"].value;
   if (x == "") {
    alert("  must be filled out this form");
    return false;
  }
  }
 
}

 
       

  
//AJAX


       function viewuser(){
	const name = document.getElementById('name').value;
	const xhttp	= new XMLHttpRequest();

 

	         xhttp.open('POST', 'viewuser.php', true);
	         http.setRequestHeader("Content-type");
	            xhttp.send('name='+name);
            
 

	            xhttp.onreadystatechange = function(){
		      if(this.readyState == 4 && this.status == 200){
			 
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}









             function viewpack(){
	              const name = document.getElementById('packname').value;
	             const xhttp = new XMLHttpRequest();

 

	                  xhttp.open('POST', 'viewpackage.php', true);
	                xhttp.setRequestHeader("Content-type");
	                xhttp.send('name='+name);
            

	           xhttp.onreadystatechange = function(){
		          if(this.readyState == 4 && this.status == 200){
			 
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}

 