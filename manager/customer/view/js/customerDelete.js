function customerDeleteValidation(){
	let id=document.getElementById("id").value;

	if (id=="") {
		alert("Please write ID!");
		return false;
	}
	else{
		alert("Delete Successfully!");
		return true;
	}
}