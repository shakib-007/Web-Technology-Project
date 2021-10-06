"use strict"


function search(){
	const name = document.getElementById('name').value;
	const xhttp	= new XMLHttpRequest();

  
    xhttp.open('GET', 'searchManager.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}