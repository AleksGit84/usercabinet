function toggle(element, element2) {
	if (document.getElementById(element).style.display == "none") {
		document.getElementById(element).style.display = "block";
		document.getElementById(element2).style.display = "none";
	} else {
		document.getElementById(element).style.display = "none";
		document.getElementById(element2).style.display = "block";
	}
}