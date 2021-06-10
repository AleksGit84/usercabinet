function tabs(element) {
	if (element == "pin") {
		document.getElementById("pin").style.display = "block";
		document.getElementById("ccd").style.display = "none";
		document.getElementById("direct").style.display = "none";
	} else if (element == "ccd") {
		document.getElementById("ccd").style.display = "block";
		document.getElementById("pin").style.display = "none";
		document.getElementById("direct").style.display = "none";
	} else if (element == "direct") {
		document.getElementById("direct").style.display = "block";
		document.getElementById("ccd").style.display = "none";
		document.getElementById("pin").style.display = "none";
	}
}


function toggle(element, element2) {
	if (document.getElementById(element).style.display == "none") {
		document.getElementById(element).style.display = "block";
		document.getElementById(element2).style.display = "none";
	} else {
		document.getElementById(element).style.display = "none";
		document.getElementById(element2).style.display = "block";
	}
}