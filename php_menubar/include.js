window.onload = function() {
	
	if(typeof(Storage) !== "undefined") {
		
		alert("localStorage and sesionStorage is supported");
	}
	else {
		alert("Sorry! No web storage support");
		
	}
	
	
	
}

